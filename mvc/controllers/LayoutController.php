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
    function delete(){
        
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
        $data['khachhang']=$this->customerModel->findByName($_SESSION['name']);
        $data['binhluankh']=$this->commentModel->getAll();
        $data['thongbao']="<h3>Hãy là người bình luận đầu tiên </h3>";
        $this->call_views('layout/detail',$data);
    }
   
}
?>