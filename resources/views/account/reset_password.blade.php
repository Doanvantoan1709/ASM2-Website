<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets1/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
    
    <title>Reset Password</title>
    <style>
        .error {
            color: red;
        }
        
    </style>

</head>
<body>
 <div class="wrapper">

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        <form action="" method="POST">
        @csrf
            <div class="login-container" id="login">
                <header>Reset Password</header>
                <form action="" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Enter password" name= "password" required="true"/>
                    <i class="bx bx-user"></i>
                    @error('email')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Enter Confirm password" name="confirm_password" required="true"/>
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In">
                </div>
                </form>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>

</body>
</html>