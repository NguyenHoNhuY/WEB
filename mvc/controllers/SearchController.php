
<?php

class SearchController extends Connect
{
    private $productModel;
    function __construct()
    {
        $this->call_models('ProductModel');
        $this->productModel = new ProductModel();
    }
    function index()
    {
        // die();
        //todo ý thêm để chạy trang search
        $data['product'] = $this->productModel->getAll();
        $this->call_views('layout/search/search', $data);

        // if (isset($_POST['searchNow'])) {

        //     $data['result'] = $this->productModel->searchByName($_POST['name_search']);
        //     $this->call_views("layout/index", $data);

        // if(isset($_POST['searchNow'])){
        //     echo('tim t đau quá man ');
        //     die();
        //     $data['resultSearch']=$this->productModel->searchByName($_POST['name_search']);

        //    $data['result']=$_POST['searchNow'];

        //     $this->call_views("layout/index",$data);
        // }
        // else{
        //     echo "kho qua ma";
        // }
    }
}
?>

