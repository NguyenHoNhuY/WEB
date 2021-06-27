<?php
class LayoutController extends Connect{
    private $productModel;
    private $customerModel;
    private $userModel;
    private $cartModel;
    private $commentModel;

    function __construct(){
        $this->call_models('ProductModel');
        $this->productModel=new ProductModel;
       $this->call_models('CustomerModel');
        $this->customerModel=new CustomerModel;
        $this->call_models('UserModel');
        $this->userModel=new UserModel;
        $this->call_models('CartModel');
        $this->cartModel=new CartModel;
        $this->call_models('CommentModel');
        $this->commentModel=new CommentModel;
    }
    function index(){
        $data['main']='home/producttrending';
        $data['product']=$this->productModel->getAll();
     
        $this->call_views('layout/index',$data);
       
    }
    function productmen(){
        if(isset($_POST['action'])){
            $output='';
            if(!empty($_POST['min_price']) && !empty($_POST['max_price'])){
                $data['productMen']=$this->productModel->getAllMen($_POST['min_price'],$_POST['max_price']);
            }
            else{
                $data['productMen']=$this->productModel->getAllMen();
            }
            if(isset($data['productMen'])){
                foreach($data['productMen'] as $key =>$value){
                    $output .='
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/'. $value["image1"].' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/'. $value["image1"].' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/layout/detail/'.$value["id"].'">
                                <span class="flex view">detail</span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <a class="bt-add flex bt addCart" href="http://localhost/PHP/DOAN-CARONO/cart/store/'.$value["id"].'">
                                <span class="flex">Quick Shop</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">'.$value["tensanpham"].'</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">350.000 đ </p>
                            <p class="pr-sale">'.$value["gia"].' đ</p>
                        </div>
                    </div>
                </div>         ';
               }
            }
            else{
                $output="<h3>khong co san pham nao</h3>";
            }
           echo $output;
          
          
        }
        else{
            header("location:".URL.'layout/men');
        }
        
    }
    function productwomen(){
        if(isset($_POST['action'])){
            $output='';
            if(!empty($_POST['min_price']) && !empty($_POST['max_price'])){
                $data['productWomen']=$this->productModel->getAllWomen($_POST['min_price'],$_POST['max_price']);
            }
            else{
                $data['productWomen']=$this->productModel->getAllWomen();
            }
            if(isset($data['productWomen'])){
                foreach($data['productWomen'] as $key =>$value){
                    $output .='
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/'. $value["image1"].' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/'. $value["image1"].' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/public/layout/detail/'.$value["id"].'">
                                <span class="flex view">detail</span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <a class="bt-add flex bt addCart" href="http://localhost/PHP/DOAN-CARONO/cart/store/'.$value["id"].' ?>">
                                <span class="flex">Quick Shop</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">'.$value["tensanpham"].'</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">$35.00 </p>
                            <p class="pr-sale">'.$value["gia"].'</p>
                        </div>
                    </div>
                </div>         ';
               }
            }
            else{
                $output="<h3>khong co san pham nao</h3>";
            }
           echo $output;
          
          
        }
        else{
            header("location:".URL.'layout/women');
        }
    }
    function men(){
        $data['productMen']=$this->productModel->getAllMen();
        $this->call_views('layout/showproduct/productMen',$data);
    }
    function women(){
        $data['productWomen']=$this->productModel->getAll();
        $this->call_views('layout/showproduct/productWomen',$data);
    }
    function test(){
		if(isset($_POST['test'])){
			echo "thanh cong";
		
		}
		echo"khong thanh cong";
		
	}
    function search(){
        if(isset($_POST['search'])){
           $data['sanpham']= $this->productModel->searchByName($_POST['name_search']);
           $this->call_views('layout/search/search',  $data);
        }
        else{
            $data=[];
            $this->call_views('layout',  $data);
        }
    }
    function detail($id){
        $data['productDetail']=$this->productModel->findByid($id);
        $data['sanphamlienquan']=$this->productModel->getAll();
      
       if(isset($_SESSION['name'])){
        $data['khachhang']=$this->customerModel->findByName($_SESSION['name']);
       }
        $data['binhluankh']=$this->commentModel->getAll();
        $data['thongbao']="<h3>Hãy là người bình luận đầu tiên </h3>";
        $this->call_views('layout/detail',$data);
    }
   
   
}
?>