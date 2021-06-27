<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">EDIT PRODUCT</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
        <form  method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputName">Ten San pham</label>
                    <input type="text" id="inputName" class="form-control" name="tensanpham"
                    value="<?php echo $data['product']['tensanpham'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">images</label>
                    <div class="input-group">
                      <div class="custom-file" style="display: flex;">
                       <div style=" display: flex">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img1" value="<?php echo $data['product']['image1'];?>" >
                            <img style=" display: right" width="50px" src="<?php echo URL.'public/layout/img/product/'.$data['product']['image1'] ?>" alt="<?php echo $data['product']['image1'] ?>">
                            <label style="width: 20%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                     
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">images</label>
                    <div class="input-group">
                      <div class="custom-file" style="display: flex;">
                       <div style=" display: flex">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img2" value="<?php echo $data['product']['image2'];?>" >
                            <img style=" display: right" width="50px" src="<?php echo URL.'public/layout/img/product/'.$data['product']['image2'] ?>" alt="<?php echo $data['product']['image2'] ?>">
                            <label style="width: 20%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                     
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">gia</label>
                    <input type="text" id="inputName" class="form-control" name="gia"
                    value="<?php echo $data['product']['gia'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">so luong</label>
                    <input type="text" id="inputName" class="form-control" name="soluong"
                    value="<?php echo $data['product']['soluong'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">xuat xu</label>
                    <input type="text" id="inputName" class="form-control" name="xuatxu"
                    value="<?php echo $data['product']['xuatxu'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">gia</label>
                    <input type="text" id="inputName" class="form-control" name="cate_ID"
                    value="<?php echo $data['product']['cate_ID'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">so luong</label>
                    <input type="text" id="inputName" class="form-control" name="mieutasanpham"
                    value="<?php echo $data['product']['mieutasanpham'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">xuat xu</label>
                    <input type="text" id="inputName" class="form-control" name="thongtinsanpham"
                    value="<?php echo $data['product']['thongtinsanpham'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">xuat xu</label>
                    <input type="text" id="inputName" class="form-control" name="cannang"
                    value="<?php echo $data['product']['cannang'];?>">
                </div>
               
                <input   type="submit" value="Submit Product" name="editProduct" class="btn btn-success float-left px-5 py-3">
            </form>
        </div>

        <!-- /.card-body -->
    </div>
</div>