<div class="content-wrapper">
<?php
//print_r($data['user']);
?>
    <div class="card">
    
      
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SỐ HÓA ĐƠN</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">THỜI GIAN LẬP HÓA ĐƠN</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID KHÁCH HÀNG</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TRỊ GIÁ </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">ĐỊA CHỈ </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">NOTE </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">CHI TIẾT </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($data['hoadon'] as $key=>$value){
                                
                            ?>
                                <tr role="row" class="odd">        
                                    <td><?php echo $value['sohoadon']?></td>
                                    <td><?php echo $value['ngayhoadon']?></td>
                                    <td><?php echo $value['id_khachhang']?></td>
                                    <td><?php echo $value['trigia']?></td>
                                    <td><?php echo $value['diachi']?></td>
                                    <td><?php echo $value['note']?></td>
                                   
                                    <td><a  href="<?php echo URL . 'bill/billdetail/'.$value['sohoadon'] ?>" style="color: orange; text-alight:center"><i class="fas fa-calendar-week"></i></a></td>
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