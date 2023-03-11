<?=$this->extend("layout/entry.php");?>
<?=$this->section("login");?>
<div class="container mt-5 mb-5 border  rounded-3 " id="divlogin" style="background-color: green;">
  <div class="card my-4 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-header text-center">
    <img src="ASSETS/images/logo2.jpg" width="100" height="100" >
      <h4>User Account</h4>
      
    </div>
    <div class="card-body">
  <?=form_open();?>
  <div class="row">
    <div class="col-md-12 justify-content-center">
      <div class="form-floating ">
        <input type="text" name="username" class="form-control" value="">
        <label for="username">Username or Email</label>
      </div>
      <div class="form-floating mt-3">
        <input type="password" name="password" class="form-control">
        <label for="username">Password</label>
      </div>
      <div class="form-group text-center">
        <!-- <input type="submit" name="submit" class="btn btn-primary my-3 " id="loginbtn" value="Sign In"> -->
        <button type="submit" name="submit" class="btn btn-primary my-3 btn-block " id="loginbtn">Access ERP</button>
      </div>
    </div>
  </div>
  <?=form_close();?>
</div>

<div class="card-footer">
  <h4><a href="reset-password.php">Forgotten Password?</a></h4>
</div>
  
  </div>
</div>
<?=$this->endSection();?>