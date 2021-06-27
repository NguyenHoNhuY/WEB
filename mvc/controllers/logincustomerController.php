<?php
class logincustomerController extends connect{
    private $customerModel;
    function __construct()
    {
        $this->call_models('CustomerModel');
        $this->customerModel=new CustomerModel;
    }
    function index(){
        if(isset($_POST['login'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $data['customer']=$this->customerModel->login($email,$password);
            if(empty($data['customer'])){
               $_SESSION['thongbao']='vui lòng nhập lại email and password ';
            }
            else{
                header("Location:".URL);
                //$_SESSION['email']=$_POST['email'];
                $_SESSION['name']=$data['customer']['ten'];
              
            }
           
        }
        if(!isset($_SESSION['name'])){
            $data=[];
            $this->call_views('layout/login/customerlogin',$data);
        }
        else if(isset($_SESSION['name'])){
           
            header("Location:".URL.'bill/index');
        }
        else{
            Header("Location:".URL);
        }
    }
    function register(){
		if(isset($_POST['register'])){
			$newcustomer=[
                'email'=>$_POST['mail'],
				'password'=>$_POST['pass'],
				'sodienthoai'=>$_POST['phone'],
				'diachi'=>$_POST['adress'],
                'ten'=>$_POST['name'],
				'ho'=>$_POST['surname'],
				'ngay_themvao'=>$_POST['dateadd'],

			];
			$this->customerModel->store($newcustomer);
            header("Location:".URL.'logincustomer');

		}
        $data=[];
		$this->call_views('layout/login/customerregister',$data);

        
	}
    function logout(){
        unset($_SESSION['name']);
        
    }
   
}
?>
