<?php 
class BillModel extends BaseModel{
	const TABLE="hoadon";
	public function findByIdCus($id){
		return $this->findIdHoadon(self::TABLE,$id);
	}
	public function store($data=[]){
	$this->create(self::TABLE,$data);
	}
	public function storedetail($table,$data=[]){
		$this->create($table,$data);
		}
	public function findsohoadon($date,$idkh,$trigia,$diachi){
		return $this->findshd(self::TABLE,$date,$idkh,$trigia,$diachi);
	}
	public function findHDByIdCus($id_khachhang){
		return $this->findIdCus(self::TABLE,$id_khachhang);
	}
	public function findByIdDate($id_khachhang){
		return $this->findIdCusDate(self::TABLE,$id_khachhang);
	}
	public function findBySHD($table,$shd){
		return $this->findHD($table,$shd);
	}
	public function getBillByDate($date){
		return $this->getBill(self::TABLE,$date);
	}
	public function update($id,$data){
		$this->updateNew(self::TABLE,$id,$data);
	}
	public function destroy($id){
	$this->delete(self::TABLE,$id);
	}
	public function countBill(){
	$row= $this->countb(self::TABLE);
	
	return $row;
	}
	public function sumbill(){
		$row=$this->sumb(self::TABLE);
		return $row;
	}
	public function getAll_bill($trang){
		$products=$this->allbill(self::TABLE,$trang);
		return $products;
	}

}
