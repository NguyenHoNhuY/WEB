<?php
class CartController extends Connect
{
    private $productModel;
    private $customerModel;
    private $userModel;
    private $cartModel;
    function __construct()
    {
        $this->call_models('ProductModel');
        $this->productModel = new ProductModel;
        $this->call_models('CustomerModel');
        $this->customerModel = new CustomerModel;
        $this->call_models('UserModel');
        $this->userModel = new UserModel;
        $this->call_models('CartModel');
        $this->cartModel = new CartModel;
    }
    function unsetall()
    {
        unset($_SESSION['cart']);
        header("location:" . URL . 'layout/index');
    }
    function index()
    {

        if (isset($_SESSION['cart'])) {
            $data['cart'] = $_SESSION['cart'];
        } else {
            $data['cart'] = [];
        }
        $this->call_views('layout/cart/cart', $data);
    }
    function store($id)
    {
        $product = $this->productModel->findByid($id);
        if (isset($_SESSION['name'])) {
            $customer = $this->customerModel->findByName($_SESSION['name']);
            $data = $this->cartModel->checkIfDuplicate($customer["id"], $product["id"]);
            $sltrongkho = $product["soluong"];

            if (empty($data) && $sltrongkho > 0) {
                $data = [
                    "id_kh" => $customer["id"],
                    "tenkh" => $customer["ten"],
                    "tensp" => $product["tensanpham"],
                    "id_sp" => $product["id"],
                    "anhsp" => $product["image1"],
                    "giasp" => $product["gia"],
                    "soluong" => 1,
                    "tonggia" => $product["gia"],
                ];
                $slmoi = intval($sltrongkho - 1);
                $this->cartModel->storecart($data);
                $this->productModel->updateSoluong($id, $slmoi);
            } else if (!empty($data) && $sltrongkho > 0) {
                $soluongmoi = $data[0]["soluong"] + 1;
                $total = intval($soluongmoi) * $data[0]["tonggia"];
                $this->cartModel->updatnewquantity($customer["id"], $product["id"], $soluongmoi, $total);
                $slmoi = intval($sltrongkho - 1);
                $this->productModel->updateSoluong($id, $slmoi);
            } else {
                echo false;
            }

            //header("location:".URL.'cart/index');

            if ((empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])) && ($sltrongkho > 0)) {
                $product = $this->productModel->findByid($id);
                $product['count'] = 1;
                $_SESSION['cart'][$id] = $product;
            } else if ((!empty($_SESSION['cart']) || array_key_exists($id, $_SESSION['cart'])) && ($sltrongkho > 0)) {
                $_SESSION['cart'][$id]['count'] = $_SESSION['cart'][$id]['count'] + 1;
            }
            header("location:" . URL . 'cart/index');
        } else {
            Header("Location:" . URL . 'logincustomer');
        }
    }
    function delete($id) {
        if (!isset($_SESSION['name'])) {
            if (count($_SESSION['cart']) == 1) {
                unset($_SESSION['cart']);
            } else {
                $soluongmoi=intval($_SESSION['cart'][$id]['soluong']+$_SESSION['cart'][$id]['count']);
                $this->productModel->updateSoluong($id,$soluongmoi);
                unset($_SESSION['cart'][$id]);
            }
        } else {
            $soluongmoi=intval($_SESSION['cart'][$id]['soluong']+$_SESSION['cart'][$id]['count']);
            $this->productModel->updateSoluong($id,$soluongmoi);
            unset($_SESSION['cart'][$id]);
            $customer = $this->customerModel->findByName($_SESSION['name']);
            $this->cartModel->deleteCartItem($customer["id"], $id);
        }
        header("location:" . URL . 'cart/index');
    }
    function update($id){
        // if (isset($_POST['value'])) {
        //     $value = $_POST['value'];
        //     $_SESSION['cart'][$id]['count'] = $value;
        //     $findtensp = $this->cartModel->findtensanpham($id);
        //     $productsl = $this->productModel->getslsanpham($findtensp[0]['tensp']);
        //     $soluongtrongkho = $productsl[0]['soluong'];
        //     $idsp = $productsl[0]['id'];
        //     $soluongmoi = intval($soluongtrongkho);
        //     if (isset($_SESSION["name"])) {
        //         if($soluongtrongkho>$value){
        //         $customer = $this->customerModel->findByName($_SESSION['name']);
        //         $this->cartModel->editCartByProductId($customer["id"], $id, $value);
        //         $this->productModel->updateSoluong($idsp,$soluongmoi);
                
        //         }
        //     }
           
        // } else 
        if (isset($_POST['tru'])) {
            $value = $_POST['tru'];
            if($value >=1){
                    $_SESSION['cart'][$id]['count'] = $value;
                $findtensp = $this->cartModel->findtensanpham($id);
                $productsl = $this->productModel->getslsanpham($findtensp[0]['tensp']);
                $soluongtrongkho = $productsl[0]['soluong'];
                $idsp = $productsl[0]['id'];
                $soluongmoi = intval($soluongtrongkho + 1);
                //print_r($soluongmoi);
                if (isset($_SESSION["name"])) {
                    if($soluongtrongkho>$value){
                        $customer = $this->customerModel->findByName($_SESSION['name']);
                        $this->cartModel->editCartByProductId($customer["id"], $id,$value);
                        $this->productModel->updateSoluong($idsp,$soluongmoi);
                        $_SESSION['cart'][$id]['soluong']=$soluongmoi;
                    }
            }
        }
            
        
   } 
   else if (isset($_POST['cong'])) {
            $value = $_POST['cong'];
            $_SESSION['cart'][$id]['count'] = $value;
            $findtensp = $this->cartModel->findtensanpham($id);
            $productsl = $this->productModel->getslsanpham($findtensp[0]['tensp']);
            $soluongtrongkho = $productsl[0]['soluong'];
            $idsp = $productsl[0]['id'];
            $soluongmoi = intval($soluongtrongkho - 1);
            if (isset($_SESSION["name"])) {
                if($soluongtrongkho>$value){
                    $customer = $this->customerModel->findByName($_SESSION['name']);
                    $this->cartModel->editCartByProductId($customer["id"], $id,$value);
                    $this->productModel->updateSoluong($idsp,$soluongmoi);
                    $_SESSION['cart'][$id]['soluong']=$soluongmoi;

                }
            }
        }
    }
    function checkout()
    {
        if (!isset($_SESSION['name'])) {
            Header("Location:" . URL . 'logincustomer');
        }
        if (isset($_SESSION['cart'])) {
            $data['cart'] = $_SESSION['cart'];
            $data['customer'] = $this->customerModel->findByName($_SESSION['name']);
            //$data['user']=$this->userModel->findByUsername($_SESSION['username']);
            $this->call_views('layout/cart/checkout', $data);;
        } else {
            header("location:" . URL . 'layout/index');
        }
        // $this->call_views('layout/cart/checkout',$data);
    }
}
