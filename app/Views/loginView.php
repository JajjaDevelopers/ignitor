<?=$this->extend("layout/entry.php");?>
<?=$this->section("login");?>
<div class="container mt-5 mb-5 border  rounded-3 " id="divlogin" style="background-color: green; width:500px">
  <div class="card my-4 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-header text-center">
    <img src="ASSETS/images/logo2.jpg" width="100" height="100" >
      <h4>User Account</h4>
      <p class="text-success"><?=sessionMessage()?></p>
    </div>
    <div class="card-body">
  <?=form_open();?>
  <div class="row"> 
    <div class="col-md-12 justify-content-center">
      <div class="form-floating ">
        <input type="text" name="username" class="form-control name" value="<?=set_value("username")?>">
        <label for="username">Username or Email</label>
      </div>
      <div class="form-floating mt-3">
        <input type="password" name="password" class="form-control pass">
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
  <h4><a href="<?=base_url("login/resetpassword")?>">Forgotten Password?</a></h4>
</div>
  
  </div>
</div>
<?=$this->endSection();?>

<?=$this->section("script")?>
<script>
   $(document).ready(function(){
    //toastr
      function toastrOptions(){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "8000",
            "timeOut": "9000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
      }
      toastrOptions()

      $(document).on("click","#loginbtn",function (e) {
        e.preventDefault();
        var data={
          "username": $(".name").val(),
          "password": $(".pass").val(),
        };
        
        $.ajax({
          method: "POST",
          url: "<?=base_url("login")?>",
          data: data,
          success: function (response) {
            if(response.status =="success"){
              window.location.assign("<?=base_url("dashboard")?>");
            };
          },
          error: function(jqXHR){
            console.log(jqXHR.status);
            const errorResponse = JSON.parse(jqXHR.responseText);
            toastr.error(errorResponse.message);
            console.log(errorResponse.message);
          
          }
        });
        
      });
    })
</script>
<?=$this->endSection()?>