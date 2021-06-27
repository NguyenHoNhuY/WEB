<?php
class BaseModel extends Database
{
	protected $connect;
	function __construct()
	{
		$this->connect = $this->connect();
	}
	public function excute($sql)
	{
		return mysqli_query($this->connect, $sql);
	}
	public function all($table, $select = ['*'], $orderBy = [])
	{
		$this->connect = $this->connect();
		$selectList = implode(',', $select);
		// print_r($selectList);
		// die();
		$orderByList = implode(',', $orderBy);
		if ($orderByList) {
			$sql = "SELECT ${selectList} from ${table} order by ${orderByList}";
		} else {
			$sql = "SELECT ${selectList} from ${table}";
		}
		$sql = "SELECT * FROM ${table}";
		$query = $this->excute($sql);

		$data = [];

		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function allproduct($table,$trang){
		$sptungtrang=4;
		if(!isset($trang)){
			$trang=1;
		}
		else{
			$trang=$trang;
		}
		$tungtrang=($trang-1)*4;
		$sql="SELECT * FROM ${table} order by id desc LIMIT $tungtrang,$sptungtrang";
		$query = $this->excute($sql);
		// echo $sql;
		// die();
		$data = [];

		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function allbill($table,$trang){
		$sptungtrang=9;
		if(!isset($trang)){
			$trang=1;
		}
		else{
			$trang=$trang;
		}
		$tungtrang=($trang-1)*9;
		$sql="SELECT * FROM ${table} order by sohoadon desc LIMIT $tungtrang,$sptungtrang";
		$query = $this->excute($sql);
		// echo $sql;
		// die();
		$data = [];

		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function alluser($table,$trang){
		$sptungtrang=4;
		if(!isset($trang)){
			$trang=1;
		}
		else{
			$trang=$trang;
		}
		$tungtrang=($trang-1)*4;
		$sql="SELECT * FROM ${table} order by id desc LIMIT $tungtrang,$sptungtrang";
		$query = $this->excute($sql);
		// echo $sql;
		// die();
		$data = [];

		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function allMen($table, $min = [], $max = [])
	{
		$this->connect = $this->connect();
		$minprice = $min;
		$maxprice = $max;
		if (!empty($minprice) && !empty($maxprice)) {
			$sql = "SELECT * FROM ${table} where cate_ID=1 and gia between ${minprice} and ${maxprice} ";
		} else {
			$sql = "SELECT * FROM ${table} where cate_ID=1";
		}
		$query = $this->excute($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function allWomen($table, $min = [], $max = [])
	{
		$this->connect = $this->connect();
		$minprice = $min;
		$maxprice = $max;
		if (!empty($minprice) && !empty($maxprice)) {
			$sql = "SELECT * FROM ${table} where cate_ID=2 and gia between ${minprice} and ${maxprice} ";
		} else {
			$sql = "SELECT * FROM ${table} where cate_ID=2";
		}
		$query = $this->excute($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function top3($table, $select = ['*'], $orderBy = [], $where = [])
	{
		$this->connect = $this->connect();
		$selectList = implode(',', $select);
		$orderByList = implode(',', $orderBy);
		$where = implode(',', $where);
		$sql = "SELECT ${selectList} from ${table} where $where order by 'sanpham.id' ASC LIMIT 1, 3";
		// echo "$sql";
		// die();

	}

	public function _query($sql)
	{
		return mysqli_query($this->connect, $sql);
	}
	public function find($table, $id)
	{
		$sql = "SELECT * FROM ${table} WHERE id=${id}";
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}

	public function findIdHoadon($table, $id)
	{
		$sql = "SELECT * FROM ${table} WHERE id_khachhang=${id}";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function findIdCus($table, $id_khachhang)
	{
		$sql = "SELECT * FROM ${table} WHERE id_khachhang=${$id_khachhang}";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function findIdCusDate($table, $id_khachhang)
	{date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date = date("Y-m-d");
		$sql="SELECT * FROM ${table} WHERE ngayhoadon like'${date}%' ORDER BY sohoadon DESC";
		$query = $this->_query($sql);
		$data = [];
		
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function findHD($table, $shd)
	{
		$sql = "SELECT * FROM ${table} WHERE sohoadon=${shd}";

		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function findshd($table, $date, $idkh, $trigia, $diachi)
	{
		$sql = "SELECT sohoadon FROM ${table} WHERE ngayhoadon='${date}' and id_khachhang=${idkh} and trigia=${trigia} and diachi='${diachi}' ";
		$query = $this->_query($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		// echo "<pre>";
		// print_r ($data);
		// echo "<pre>";
		// die();
		return $data;
	}
	public function checkDup($table, $id_kh, $id_sp)
	{
		//$qr = "Select * from cart c where c.user_id = '$user_id' and c.product_id = '$product_id'";
		$sql = "SELECT * FROM ${table} WHERE id_kh=${id_kh} and id_sp=${id_sp}";
		$query = $this->_query($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function findEmail($table, $email)
	{
		$sql = "SELECT * FROM ${table} WHERE username='${email}'";
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}
	public function findName($table, $name)
	{
		$sql = "SELECT * FROM ${table} WHERE ten='${name}'";

		$query = $this->_query($sql);

		return mysqli_fetch_assoc($query);
	}
	public function getBill($table, $date)
	{
		$sql = "SELECT * FROM hoadon WHERE ngayhoadon='${date}'";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function getslsp($table, $tensp)
	{
		$sql = "SELECT * FROM `${table}` WHERE tensanpham='${tensp}'
		";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	
public function findtsp($table,$id){
	$sql = "SELECT * FROM `${table}` WHERE id_sp=${id}
	";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
}
	public function deleteAll($table, $id_kh)
	{
	
		$sql="DELETE FROM `${table}` WHERE id_kh=${id_kh}
		";
		
		$query = $this->excute($sql);
	}
	public function loginUser($table, $username, $password)
	{
		$sql = "SELECT * FROM ${table} WHERE username='${username}' and password ='${password}' ";
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}
	public function loginCustomer($table, $email, $password)
	{
		$sql = "SELECT * FROM ${table} WHERE email='${email}' and password ='${password}' ";
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}
	public function create($table, $data = [])
	{
		$keyList = implode(',', array_keys($data));
		$valueList = array_map(function ($v) {
			return "'" . $v . "'";
		}, array_values($data));
		$values = implode(',', $valueList);

		$sql = "INSERT INTO ${table}(${keyList}) values (${values})";
		// print_r($sql);
		// die();
		$query = $this->excute($sql);
	}
	public function delete($table, $id)
	{
		$sql = "DELETE FROM ${table} where id=${id}";
		$this->excute($sql);
	}
	public function updateNew($table, $id, $data)
	{
		$list = [];
		foreach ($data as $key => $val) {
			array_push($list, "${key}='" . $val . "'");
		}
		$valueList = implode(",", $list);
		$sql = "UPDATE ${table} set ${valueList} where id=${id}";
		$this->excute($sql);
	}

	public function updateQuantity($table, $is_kh, $is_sp, $soluongmoi, $tonggiamoi)
	{
		$sql = "UPDATE ${table} SET soluong=${soluongmoi}, tonggia=${tonggiamoi} where id_kh=${is_kh} and id_sp=${is_sp}";
		$this->excute($sql);
	}
	public function updateSl($table,$id,$sl){
		$sql="UPDATE ${table} SET soluong=${sl} WHERE id=${id}";
		$this->excute($sql);
	}
	public function editCartIdProduct($table, $id_kh, $id_sp, $soluongmoi)
	{
		$sql = "UPDATE ${table} SET soluong=${soluongmoi} WHERE id_kh=${id_kh} and id_sp=${id_sp}";
		$this->excute($sql);
	}
	public function deleteItem($table, $id_kh, $id_sp)
	{

		$sql = "DELETE FROM cart WHERE id_kh=${id_kh} and id_sp=${id_sp}";
		$this->excute($sql);
	}
	public function getCartById($table, $id_kh)
	{
		$sql = "SELECT * FROM cart WHERE id_kh=${id_kh}";
		$query = $this->_query($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function count($table)
	{
		$sql = "Select count(*) from ${table}";
		$query = $this->excute($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
public function countsanpham($table){
	$sql="SELECT COUNT(*) FROM ${table}";
	$query = $this->excute($sql);

	$data = [];
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($data, $row);
	}
	
	return $data;
}
	public function countb($table)
	{
		$sql = "Select count(*) from ${table}";

		$query = $this->excute($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
	}
	public function sumb($table)
	{
		$sql = "SELECT SUM(trigia) from ${table}";
		$query = $this->excute($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
}
