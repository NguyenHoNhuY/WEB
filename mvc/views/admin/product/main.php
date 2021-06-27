<div class="content-wrapper">
<?php
//print_r($data['user']);
?>
    <div class="card">
    
        <div class="card-header">
       
        <a href="<?php echo URL."product/store"?>"> <input  type="submit" value="Add Product" class="btn btn-success float-left px-5 py-3"></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">TEN SAN PHAM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">IMAGES1</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">IMAGES2</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">GIA</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SOLUONG</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">XUATXU</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">CATE ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">MIEU TA SAN PHAM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">THONG TIN SAN PHAM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">CAN NANG</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">EDIT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($data['product'] as $key=>$value){
                                
                            ?>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><?php echo $value['id']?></td>
                                    <td><?php echo $value['tensanpham']?></td>
                                    <td><img width="50px" src="<?php echo URL.'public/layout/img/product/'.$value['image1'] ?>" alt="<?php echo $value['tensanpham'] ?>"></td>
                                    <td><img width="50px" src="<?php echo URL.'public/layout/img/product/'.$value['image2'] ?>" alt="<?php echo $value['tensanpham'] ?>"></td>                                                                      
                                    <td><?php echo $value['gia']?></td>
                                    <td><?php echo $value['soluong']?></td>
                                    <td><?php echo $value['xuatxu']?></td>
                                    <td><?php echo $value['cate_ID']?></td>
                                    <td><?php echo $value['mieutasanpham']?></td>
                                    <td><?php echo $value['thongtinsanpham']?></td>
                                    <td><?php echo $value['cannang']?></td>
                                    <td><a href="<?php echo URL."product/edit/${value['id']}";?>" style="color: orange;"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                    <td><a href="<?php echo URL."product/delete/${value['id']}";?>" style="color: orange;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>