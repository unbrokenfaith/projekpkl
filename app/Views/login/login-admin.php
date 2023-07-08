<?=$this->extend('layout/template');?>

<?=$this->section('content');?>

<div class="container-fluid">
  <div class="card login-form">
    <div class="card-body">
      <div class="login-logo text-center mt-5">
        <img src="/img/umylogo-ver2.png">
      </div>
      <div class="card-text mb-10 mt-3 text-center">
        <h3>Selamat Datang, Admin!</h3>
        <h6>Silakan masukkan usename dan password Anda!</h6>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3 mt-5 w-75 mx-auto">
            <label for="username" class="form-label"></label>
            <input type="text" class="form-control rounded-start" id="username" placeholder="Username">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          </div>
          <div class="input-group mb-3 w-75 mx-auto">
            <label for="password" class="form-label"></label>
            <input type="text" class="form-control rounded-start" id="password" placeholder="Password">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          </div>
          <button type="submit" class="btn btn-primary mt-4 btn-login px-4 py-2 fw-bold">Login</button>
        </form>
      </div>
      <!-- <div class="login-icon position-relative">
        <i class="fa-solid fa-circle-arrow-right position-absolute end-0"></i>
      </div> -->
    </div>
    </div>
  </div>
</div>



<?=$this->endSection();?>