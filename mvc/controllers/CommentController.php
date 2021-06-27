<?php
class CommentController extends Connect{
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
      
    }
    function store(){
        if(isset($_SESSION['name'])){
            if(isset($_POST['dangbinhluan'])){
                    if(!empty($_POST['anhkhach'])){
                        $newcomment=[
                            'id_khachhang'=>$_POST['id_khachhang'],
                            'tenkhachhang'=>$_POST['tenkhachhang'],
                            'image'=>$_POST['anhkhach'],
                            'id_sanpham'=>$_POST['id_sanpham'],
                            'binhluan'=>$_POST['binhluan'],
                            'time'=>$_POST['time']
                            ];
                    }
                    else{
                        $newcomment=[
                            'id_khachhang'=>$_POST['id_khachhang'],
                            'tenkhachhang'=>$_POST['tenkhachhang'],
                            'image'=>'avatar.jpg',
                            'id_sanpham'=>$_POST['id_sanpham'],
                            'binhluan'=>$_POST['binhluan'],
                            'time'=>$_POST['time']
                            ];
                    }
             
                $id=$_POST['id_sanpham']; 
                if(isset($_POST['id_khachhang']) && isset($_POST['tenkhachhang']) && isset($_POST['id_sanpham'])){
                    $this->commentModel->addProductComment($newcomment);
                    header("Location:".URL.'layout/detail/'.$id);
                }
            }
            else{
                header("Location:".URL.'layout/index');
            }
        }
        else{
            header("Location:".URL.'logincustomer/index');
        }
      
    }
   
  
    
}
