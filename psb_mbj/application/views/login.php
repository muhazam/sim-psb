<div class="login-box">
  <div class="login-logo">
    <a href='#'><b class="text-yellow">PSB </b><b>| ICMBJ</b></a>
    <a href="http://muadzbinjabal.com/" target="_blank"><h4 ><b> Muadz bin</b><b class="text-yellow"> Jabal.com</b></h4></a>

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login</p>
    
    <?php echo form_open('auth/cek_login', 'class="form-login"', 'method="post"'); ?>
    
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4" >
          <button type="submit" name="submit" class="btn btn-warning btn-flat btn-social pull-right text-black" title="Login" >
            Login <i class="fa fa-sign-in"></i>
          </button>
        </div><!-- /.col -->
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    
  </div>
<br>
<div class="login-box-msg">
  <p> - Login Sebagai siswa jika sudah diterima, atau login sebagai guru/TU. </p>
</div>
  <!-- /.login-box-body -->
</div>