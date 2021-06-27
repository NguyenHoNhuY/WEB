<?php 
class AdminController extends Connect{
	private $userModel;
	private $productModel;
	function __construct(){
		$this->call_models('UserModel');
		$this->userModel=new UserModel();
		$this->call_models('ProductModel');
		$this->ProductModel=new ProductModel();
	}
	function index(){
		if(!isset($_SESSION['username'])){
			Header("Location:".URL."login");
		}
		else{
			//$data['totalUser']=$this->userModel->countAllUser();
			//$data['totalProduct']=$this->productModel->countAllProduct();
			 $data['main']='home/sidebar';
			 $this->call_views('admin/index',$data);
		}
       // echo __METHOD__;
	}
	function store(){
	    $data['main']='user/add';
		$this->call_views('admin/index',$data);
	}
	function edit(){
			$data['main']='user/edit';
		$this->call_views('admin/index',$data);
	}

}
