<div class="content-wrapper">

    <div class="card">
    
        <div class="card-header">
       
        <a href="<?php echo URL."bill/allbill"?>"> <input  type="submit" value="All Bill" class="btn btn-success float-left px-5 py-3"></a>
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
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SỐ HÓA ĐƠN</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID SẢN PHẨM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TÊN SẢN PHẨM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">ẢNH SẢN PHẨM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">GIÁ SẢN PHẨM</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">SỐ LƯỢNG </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($data['chitiethoadon'] as $key=>$value){
                                
                            ?>
                                <tr role="row" class="odd">
                                    <td><?php echo $value['id']?></td>                           
                                    <td><?php echo $value['sohoadon']?></td>
                                    <td><?php echo $value['id_sanpham']?></td>
                                    <td><?php echo $value['tensanpham']?></td>
                                    <td><img width="50px" src="<?php echo URL.'public/layout/img/product/'.$value['anhsanpham'] ?>" alt="<?php echo $value['tensanpham'] ?>"></td>

                                    <td><?php echo $value['giasanpham']?></td>
                                    <td><?php echo $value['soluongdat']?></td>
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