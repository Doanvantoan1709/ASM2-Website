<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets1/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Registration</title>
    <style>
        .error {
            color: red;
        }
        #toast-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);}
    </style>
</head>
<body>
 <div class="wrapper">

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">

        <!------------------- registration form -------------------------->
        <form action="" method="POST">
        @csrf
            <div class="register-container" id="register">
                <header>Sign Up</header>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Fullname" name="name" required="true">
                    <i class="bx bx-user"></i>
                    @error('name')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="email" required="true">
                    <i class="bx bx-envelope"></i>
                    @error('email')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Phone" name="phone" required="true">
                    <i class="bx bx-phone"></i>
                    @error('phone')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Address" name="address" required="true">
                    <i class="bx bxs-location-plus"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="password" required="true">
                    <i class="bx bx-lock-alt"></i>
                    @error('password')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Register">
                </div>
                <div class="top">
                    <span>Have an account? <a href="{{route('account.login')}}">Login</a></span>
                </div>
            </div>
        </form>
    </div>

</div>   

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>
@if(Session::has('ok'))
        <script>
            alert("Register successful!");
        </script>
        @endif

</body>
</html>