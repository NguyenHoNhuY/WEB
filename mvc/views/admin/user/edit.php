<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">EDIT USER</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form  method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="inputName">images</label>
                    <div class="input-group">
                      <div class="custom-file" style="display: flex;">
                       <div style=" display: flex">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img" value="<?php echo $data['user']['image'];?>" >
                            <img style=" display: right" width="50px" src="<?php echo URL.'public/layout/img/user/'.$data['user']['image'] ?>" alt="<?php echo $data['user']['image'] ?>">
                            <label style="width: 20%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                     
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input type="text"  id="inputName" class="form-control" name="username"
                    value="<?php echo $data['user']['username'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">Password</label>
                    <input type="text" id="inputName" class="form-control" name="password"
                    value="<?php echo $data['user']['password'];?>">
                </div>
                <div class="form-group">
                    <label for="inputName">Level</label>
                    <input type="text" id="inputName" class="form-control" name="level"
                    value="<?php echo $data['user']['level'];?>">
                </div>
                <input   type="submit" value="edit User" name="editUser" class="btn btn-success float-left px-5 py-3">
            </form>
        </div>

        <!-- /.card-body -->
    </div>
</div>