<?php 

class UserController extends Connect{
	private $userModel;
	
	function __construct(){
		$this->call_models('UserModel');
		$this->userModel=new UserModel();
	}
	function index($trang){
		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
				$data['user']=$this->userModel->getAll();
				$data['alluser']=$this->userModel->getAll_user($trang);
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}
	
	}
	function store(){
		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
					
				if(isset($_POST['addUser'])){
					$img = $_FILES['img']['name']; //tên hình ảnh
					if($img!=null){
						$user=[
							'username'=>$_POST['username'],
							'password'=>$_POST['password'],
							'level'=>$_POST['level'],
							'image'=>$img
						];
						$this->userModel->store($user);
						$data['user']=$this->userModel->getAll();
						$data['main']='user/main';
						$this->call_views('admin/index',$data);
					}
				}
				$data['main']='user/add';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}

	}
	function edit($id){
		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
				if(isset($_POST['editUser'])){
					$img = $_FILES['img']['name']; //tên hình ảnh
					if($img!=null){
						$user=[
							'image'=>$img,
						];
						$this->userModel->update($id,$user);
					$data['user']=$this->userModel->getAll();
					$data['main']='user/main';
					$this->call_views('admin/index',$data);	
					}
					$user=[
						'username'=>$_POST['username'],
						'password'=>$_POST['password'],
						'level'=>$_POST['level']
					];
					$this->userModel->update($id,$user);
					$data['user']=$this->userModel->getAll();
					$data['main']='user/main';
					$this->call_views('admin/index',$data);	
				}
				$data['user']=$this->userModel->findByid($id);
				$data['main']='user/edit';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}

		
	}
	function delete($id){


		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
				$this->userModel->destroy($id);
				$data['user']=$this->userModel->getAll();
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		} 

	
	}
}
?>
