<?php 
class ChartController extends Connect{
	private $userModel;
	private $productModel;
	private $billModel;
	function __construct(){
		$this->call_models('UserModel');
		$this->userModel=new UserModel();
		$this->call_models('ProductModel');
		$this->productModel=new ProductModel();
        $this->call_models('BillModel');
		$this->billModel=new BillModel();
	}
	function index(){
		if(!isset($_SESSION['username'])){
			Header("Location:".URL."login");
		}else if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
                $data['main']='chart/main';
                $data['countuser']=$this->userModel->countAllUser();
                $data['countbill']=$this->billModel->countBill();
               $data['sumbill']=$this->billModel->sumbill();
			   $data['countProduct']=$this->productModel->countAllProduct();
			   $data['getalluser']=$this->userModel->getAll();
                $this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}
	}

	
	

}
