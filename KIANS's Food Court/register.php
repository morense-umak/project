<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label class="show-password">
                    <input type="checkbox" id="togglePassword">
                    <span>Show Password</span>
                </label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <a href="login.html"></a>
                <p>Already have an account?
                    <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('change', function () {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
</body>

</html>