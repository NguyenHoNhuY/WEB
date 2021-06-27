<?php
class CartController extends Connect{
    private $productModel;
    private $customerModel;
    private $userModel;
    private $cartModel;
    function __construct(){
        $this->call_models('ProductModel');
        $this->productModel=new ProductModel;
       $this->call_models('CustomerModel');
        $this->customerModel=new CustomerModel;
        $this->call_models('UserModel');
        $this->userModel=new UserModel;
        $this->call_models('CartModel');
        $this->cartModel=new CartModel;
    }
    function unsetall(){
    unset($_SESSION['cart']);
    header("location:".URL.'layout/index');
    }
    function index(){
       if(isset($_SESSION['cart'])){
           $data['cart']=$_SESSION['cart'];
       }
       else{
           $data['cart']=[];
       }
       $this->call_views('layout/cart/cart',$data);
    }
    function store($id){
        $product=$this->productModel->findByid($id);
        if(isset($_SESSION['name'])){
            $customer = $this->customerModel->findByName($_SESSION['name']);
            $data = $this->cartModel->checkIfDuplicate($customer["id"], $product["id"]);
           
                if (empty($data)) {
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
                $this->cartModel->storecart($data);
                }
                else {
                    $soluongmoi = $data[0]["soluong"] + 1;
                    $total = intval($soluongmoi) * $data[0]["tonggia"];
                    $this->cartModel->updatnewquantity($customer["id"], $product["id"], $soluongmoi, $total);
                }
                 //header("location:".URL.'cart/index');
                 
                if(empty($_SESSION['cart']) || !array_key_exists($id,$_SESSION['cart'])){
                    $product=$this->productModel->findByid($id);
                    $product['count']=1;
                    $_SESSION['cart'][$id]=$product;
                }
                else{
                    $_SESSION['cart'][$id]['count']=$_SESSION['cart'][$id]['count']+1;
                }
                header("location:".URL.'cart/index');
        }
        else{
            Header("Location:".URL.'logincustomer');
        }
    
    }
    function delete($id){
        if (!isset($_SESSION['name'])) {
            if (count($_SESSION['cart']) == 1) {
                unset($_SESSION['cart']);
            } else {
                unset($_SESSION['cart'][$id]);
            }
           
        } else {
            unset($_SESSION['cart'][$id]);
            $customer = $this->customerModel->findByName($_SESSION['name']);
            $this->cartModel->deleteCartItem($customer["id"], $id);
        }
        header("location:".URL.'cart/index');
    }
    function update($id){
        $value=$_POST['value'];
        $_SESSION['cart'][$id]['count']=$value;
        if (isset($_SESSION["name"])) {
            $customer = $this->customerModel->findByName($_SESSION['name']);
            $this->cartModel->editCartByProductId($customer["id"], $id,$value);
        } 
    }
    function checkout(){
        if(!isset($_SESSION['name'])){
            Header("Location:".URL.'logincustomer');
        }
        if(isset($_SESSION['cart'])){
            $data['cart']=$_SESSION['cart'];
            $data['customer']=$this->customerModel->findByName($_SESSION['name']);
            //$data['user']=$this->userModel->findByUsername($_SESSION['username']);
            $this->call_views('layout/cart/checkout',$data);;
        }
        else {
            header("location:".URL.'layout/index');
        }
        // $this->call_views('layout/cart/checkout',$data);
    }
    
}
