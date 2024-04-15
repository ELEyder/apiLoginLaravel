<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset("../resources/css/style.css")}}">
    <title>Login</title>
</head>
<body>
    <button class="toggle-login">Login</button>
    <div class="wrapper">
        <div class="from-wrapper sign-in">
            <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
            <form action="">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
				<div class="google">
					<button class="btn-google" id="btn-google">
						<img class="google" src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png" alt="" srcset="">
						Google
					</button>
				</div>
            </form>
        </div>

        <div class="from-wrapper sign-up">
            <form action="">
                <h2>Sing Up</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="bg"></div>
        <span style="--i:10"></span>
        <span style="--i:9"></span>
        <span style="--i:8"></span>
        <span style="--i:7"></span>
        <span style="--i:6"></span>
        <span style="--i:5"></span>
        <span style="--i:4"></span>
        <span style="--i:3"></span>
        <span style="--i:2"></span>
        <span style="--i:1"></span>
    </div>
    <script type="module" src="{{asset("../resources/js/app/main.js")}}"></script>
    <script src="{{asset("../resources/js/script.js")}}"></script>
</body>
</html>