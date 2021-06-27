<?php
//print_r($data['user']);
?>
<div class="content-wrapper">
    <div class="card-header">
        <h3 style="color: orange;font-weight:700" class="card-title">USER INFORMATION</h3>
    </div>
    <div class="card-header">
        <a href="<?php echo URL.'/user/store'?>"> <input type="submit" value="Add User" class="btn btn-success float-left px-5 py-3"></a>
    </div>
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
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IMAGE</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">PASSWORD</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">USERNAME</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">LEVEL</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">EDIT</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['user'] as $key => $value) {
                            ?>
                                <tr role="row" class="odd">
                                <td><img width="50px" src="<?php echo URL.'public/layout/img/user/'.$value['image'] ?>" alt="<?php echo $value['username'] ?>"></td>
                                    <td tabindex="0" class="sorting_1"><?php echo $value['username'] ?></td>
                                    <td><?php echo $value['password'] ?></td>
                                    <td><?php echo $value['level'] ?></td>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><a href="<?php echo URL."user/edit/${value['id']}";?>" style="color: orange;"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                    <td><a href="<?php echo URL."user/delete/${value['id']}";?>" style="color: orange;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

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

</div>