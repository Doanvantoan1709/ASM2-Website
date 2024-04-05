<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets1/css/forgot-pwd.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Forgot Password</title>
    <style>
        #abc{
            margin-top: -40px;
            color: red;
        }

        .input-box{
            margin:auto
        }

        .lk{
            margin-top: 10px
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box">
            <div class="forgot-pwd-container" id="forgot">    
                <header>Forgot Password</header>
                <form action="" method="POST">
                @csrf
                    <div class="input-box">
                        <input type="text" name="email" class="input-field" placeholder="Your Email" required="true">
                        <i class="bx bx-envelope"></i>
                        @error('email')
                            <small id="abc" class="help-block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Send Email">
                    </div>
                    <div class="lk-col">
                        <div class="lk">
                            <label><a href="{{route("account.login")}}">Back to Login</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(Session::has('ok'))
        <script>
            alert("Please check your email");
        </script>
    @endif
    @if(Session::has('no'))
        <script>
            alert("Invalid email!");
        </script>
    @endif
</body>
</html>