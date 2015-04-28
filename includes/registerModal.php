<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon">Username</span>
                                <input type="text" name="username" id="username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon default">E-Mail</span>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">&nbsp</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon warning">Password</span>
                                <input type="password" name="confirmpwd" id="confirmpwd">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon warning">Password</span>
                                <input type="password" name="confirmpwd" id="confirmpwd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="button" value="register" class="btn btn-primary" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);">Save changes</input>
                </div>
            </form>
        </div>
    </div>
</div>