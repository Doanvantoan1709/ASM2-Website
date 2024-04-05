
<!doctype html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 08:59:48 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Bootstrap demo</title>
  <!--favicon-->
	<link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png">

  <!--plugins-->
  <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="/assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="/sass/main.css" rel="stylesheet">
  <link href="/sass/dark-theme.css" rel="stylesheet">
  <link href="/sass/responsive.css" rel="stylesheet">
  <style>

    button{
      margin-top: 20px;
    }

    .col-12{
      margin-top: 20px;
    }

    .col-md-6{
      margin-top: 20px;
    }
  </style>
  </head>

  <body class="bg-login">


    <!--authentication-->
<form action="" method="post">
  @csrf

  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
        <div class="card rounded-4">
          <div class="card-body p-5">
                  <img src="/assets/images/logo1.png" class="mb-4" width="145" alt="">
                  <h4 class="fw-bold">Get Started Now</h4>
                  <p class="mb-0">Enter your credentials to login your account</p>
                  
                  <div class="form-body my-4">
                    <form class="row g-3">
                      <div class="col-12">
                        <label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="user@example.com" name="email">
                        @error('email')
                        <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
											</div>
											<div class="col-12">
                        <label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
                          <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password" name="password"> 
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                          @error('password')
                          <small class="help-block text-danger">{{ $message }}</small>
                          @enderror
												</div>
											</div>
											<div class="col-md-6">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </div>
                    
                  </form>
                </div>

                
                
                
              </div>
            </div>
          </div>
        </div><!--end row-->
      </div>
      
</form>
    <!--authentication-->


    <!--plugins-->
    <script src="/assets/js/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  
  </body>

<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 08:59:48 GMT -->
</html>