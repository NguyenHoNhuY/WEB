
<?php

	class ProductController extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel = new ProductModel();
		}
		function index($trang)
		{
			//echo $trang;
			// die();
			$data['productmen'] = $this->productModel->getAll();
			$data['productwomen'] = $this->productModel->getAll();
			$data['product'] = $this->productModel->getAll();
			$data['producttrang'] = $this->productModel->getAll_product($trang);

			
			$data['main'] = 'product/main';
			$this->call_views('admin/index', $data);
		}
		function top3Mentren(){
			$data['top3productmen']=$this->productModel->top3Men();
			$data['main'] = 'product/main';
			$this->call_views('layout/index', $data);
		}
		function store()
		{
			if (isset($_POST['addProduct'])) {
				$img1 = $_FILES['img1']['name']; //tên hình ảnh
				$img2 = $_FILES['img2']['name']; //tên hình ảnh
				
				if ($img1 != null) {
					$product = [
						'tensanpham' => $_POST['tensanpham'],
						'image1' => $img1,
						'image2' => $img2,
						'gia' => $_POST['gia'],
						'soluong' => $_POST['soluong'],
						'xuatxu' => $_POST['xuatxu'],
						'cate_ID' => $_POST['cate_ID'],
						'mieutasanpham' => $_POST['mieutasanpham'],
						'thongtinsanpham' => $_POST['thongtinsanpham'],
						'cannang' => $_POST['cannang']

					];
					
					$this->productModel->store($product);
					$data['product'] = $this->productModel->getAll();
					$data['main'] = 'product/main';
					$this->call_views('admin/index', $data);
				}
			}
			$data['main'] = 'product/add';
			$this->call_views('admin/index', $data);
		}
		function edit($id)
		{
			if (isset($_POST['editProduct'])) {
				$img1 = $_FILES['img1']['name']; //tên hình ảnh
				$img2 = $_FILES['img2']['name']; //tên hình ảnh
				if ($img1 != null) {
					$product = [
						'image1' =>$img1,
						'image2' =>$img2
					];
					
					$this->productModel->update($id, $product);
					$data['product'] = $this->productModel->getAll();
					$data['main'] = 'product/main';
					$this->call_views('admin/index', $data);
					
				}
			
				$product = [
					'tensanpham' => $_POST['tensanpham'],
					'gia' => $_POST['gia'],
					'soluong' => $_POST['soluong'],
					'xuatxu' => $_POST['xuatxu'],
					'cate_ID' => $_POST['cate_ID'],
					'mieutasanpham' => $_POST['mieutasanpham'],
					'thongtinsanpham' => $_POST['thongtinsanpham'],
					'cannang' => $_POST['cannang']
				];
				// echo"<pre>";
				// print_r($product);
				// echo"<pre>";
				// die();
				$this->productModel->update($id, $product);
				$data['product'] = $this->productModel->getAll();
				$data['main'] = 'product/main';
				$this->call_views('admin/index', $data);
			}
			$data['product'] = $this->productModel->findByid($id);
			$data['main'] = 'product/edit';
			$this->call_views('admin/index', $data);
		}
		function delete($id)
		{
			$this->productModel->destroy($id);
			$data['product'] = $this->productModel->getAll();
			$data['main'] = 'product/main';
			$this->call_views('admin/index', $data);
		}
	}
	?>

