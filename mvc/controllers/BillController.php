<?php 

class BillController extends Connect{
	private $billModel;
	private $customerModel;
	private $cartModel;
	private $userModel;
	function __construct(){
		$this->call_models('BillModel');
		$this->billModel=new BillModel;
		$this->call_models('CustomerModel');
		$this->customerModel=new CustomerModel;
		$this->call_models('CartModel');
		$this->cartModel=new CartModel;
		$this->call_models('UserModel');
		$this->userModel=new UserModel;
	}
	function index(){
			$idCus=$_SESSION['id'];
			$customer = $this->customerModel->findByName($_SESSION['name']);
			if($customer['id']==$idCus){
				$data['kh']=$this->customerModel->findByid($idCus);
				$data['hoadon']=$this->billModel->findByIdDate($idCus);
				if(!empty(	$data['kh']) && !empty(	$data['hoadon'])){
					foreach($data['hoadon'] as $value){
	
						if($value['id_khachhang'] ==$idCus ){
							$data['customerfromhoadon']=$data['kh'];
							$data['banghoadon']=$data['hoadon'];
							$this->call_views('layout/bill/bill',$data);
						}
						else{
							$data['thongbao']=" ban chua thanh toan ";
							$this->call_views('layout/bill/bill',$data);
						}
					}
				}
				else{
					header("location:".URL.'layout/index');
				}
			}
			else{
				header("location:".URL.'layout/index');
			}
		
	}
	
	function store(){
		if(!isset($_SESSION['name'])){
			unset($_SESSION['cart']);
			header("location:".URL.'layout/index');
		}
		else{
			$customer = $this->customerModel->findByName($_SESSION['name']);
			
			$cartData = $this->cartModel->getCartByCustomerId($customer['id']);
			$total = 30000;
			$id_kh=$customer['id'];
			
			foreach ($cartData as  $value) {
				$total += $value["giasp"] * $value["soluong"];
			}
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$newdate = date("Y-m-d H:i:s");
			if(isset($_POST['placeoder'])){
				$newhoadon=[
					'ngayhoadon'=>$newdate,
					'id_khachhang'=>$customer['id'],
					'sodienthoai'=>$_POST['customer_phone'],
					'trigia'=>$total,
					'diachi'=>$_POST['diachi'],
					'note'=>$_POST['note']
				];
				$this->billModel->store($newhoadon);
				$sohoadon=$this->billModel->getBillByDate($newdate);
				
				foreach($cartData as $key=> $value){
					$newhoadondetail=[
						'sohoadon'=>$sohoadon['0']['sohoadon'],
						'id_sanpham'=>$value['id_sp'],
						'tensanpham'=>$value['tensp'],
						'anhsanpham'=>$value['anhsp'],
						'giasanpham'=>$value['giasp'],
						'soluongdat'=>$value['soluong']
					];
					$test=$this->billModel->storedetail('chitiethoadon',$newhoadondetail);
				}
				$this->cartModel->deleteAllfromIdCus($id_kh);
				unset($_SESSION['cart']);
				$_SESSION['id']=$customer['id'];
				header("location:".URL.'layout/index');
		}
		
		}
	}
	// function detail($sohoadon){
	// 	$shd=$sohoadon;
	
	// 	if(!isset($_SESSION['name'])){
	// 		unset($_SESSION['cart']);
	// 		header("location:".URL.'layout/index');
	// 	}
	// 	else if(isset($sohoadon)){
	// 		$data['chitiethoadon']=$this->billModel->findBySHD('chitiethoadon',$shd);
	// 		$this->call_views('layout/bill/detailbill',$data);
	// 	}
	// 	else{
	// 		$data['thongbao']="Bạn chưa có đơn hàng";
	// 		$this->call_views('layout/bill/detailbill',$data);
	// 	}
	// }
	function allbill($trang){
		

		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
				$idCus=$_SESSION['id'];
				$data['hoadon']=$this->billModel->findByIdCus($idCus);
				$data['allhoadon'] = $this->billModel->getAll_bill($trang);
				$data['main'] = 'orders/bill';
				$this->call_views('admin/index', $data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}
	}
	
	
	function billdetail($sohoadon){
		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
					$shd=$sohoadon;
					if(isset($sohoadon)){
						$data['chitiethoadon']=$this->billModel->findBySHD('chitiethoadon',$shd);
						$data['main'] = 'orders/bill_detail';
						$this->call_views('admin/index', $data);
					}
					else{
						$data['thongbao']="Bạn chưa có đơn hàng";
						$this->call_views('admin/index', $data);
					}
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}

		
		
	}

}
?>
