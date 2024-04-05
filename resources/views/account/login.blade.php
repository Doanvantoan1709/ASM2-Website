<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets1/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
    
    <title>Login</title>
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
                <header>Login</header>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Username or Email" name= "email" required="true"/>
                    <i class="bx bx-user"></i>
                    @error('email')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="password" required="true"/>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="{{route("account.forgot-pwd")}}">Forgot password?</a></label>
                    </div>
                </div>
                <div class="top">
                    <span>Don't have an account? <a href="{{route('account.register')}}" >Sign Up</a></span>
                </div>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>


        @if(Session::has('no'))
        <script>
            alert("Incorrect account or password!");
        </script>
        @endif
</body>
</html>