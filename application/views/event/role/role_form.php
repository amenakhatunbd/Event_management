

<div class="row">
        <label class="col-sm-2 form-control-label">role form</label>
        <div class="col-11 col-lg-6  col-md-6  col-sm-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Role Form</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/event/role/Role_controller/role_save_contr" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="role-name" type="text" name="role_name" required class="input-material">
                                <label for="role-name" class="label-material">Name</label>
                            </div>
                            <div class="form-group-material">
                                <input id="roll-user" type="password" name="user_password" required class="input-material">
                                <label for="roll-user" class="label-material">User Password</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" style="" id="check1" value="1" name="select" >
                                <label class="custom-control-label" for="check1">View</label>
                            </div>

                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check2" value="1" name="create">
                                <label class="custom-control-label" for="check2">Create</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check3" value="1" name="update">
                                <label class="custom-control-label" for="check3">Update</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check4" value="1" name="delete">
                                <label class="custom-control-label" for="check4">Delete</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check5" value="1" name="alter">
                                <label class="custom-control-label" for="check5">Alter</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary  btn-lg" name="role_submit">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>