<?php
class ProductModel extends BaseModel
{
	const TABLE = "sanpham";
	public function getAll($select = ['*'], $orderBy = [])
	{
		$products = $this->all(self::TABLE, $select, $orderBy);
		return $products;
	}
	public function getAllMen($select = [])
	{
	}
	public function top3Men($select = ['sanpham.tensanpham'], $orderBy = ['sanpham.id'], $where = ['sanpham.cate_ID=1'])
	{

		$products = $this->top3(self::TABLE, $select, $orderBy, $where);

		return $products;
	}
	public function findByid($id)
	{
		return $this->find(self::TABLE, $id);
	}
	public function store($data = [])
	{
		$this->create(self::TABLE, $data);
	}
	public function update($id, $data)
	{
		$this->updateNew(self::TABLE, $id, $data);
	}
	public function destroy($id)
	{
		$this->delete(self::TABLE, $id);
	}
	public function countAllProduct()
	{
		// $row= $this->count(self::TABLE);
		// return $row;
		$sql = "select * from sanpham";

		
	}
	public function searchByName($name_search)
	{
		$sql = "select * from sanpham where tensanpham like '%$name_search%'";
		$query = $this->excute($sql);
		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
		
	}
}
