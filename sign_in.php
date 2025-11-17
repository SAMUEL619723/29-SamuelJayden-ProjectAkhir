<?php
session_start();
include "koneksi.php";  // Connect to database

// Redirect function
function redirect($url) {
    header("Location: $url");
    exit();
}

$error = "";

// Process login BEFORE any HTML output
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {

    $USERNAME = trim($_POST["USERNAME"]);
    $PASSWORD = trim($_POST["PASSWORD"]);

    if ($USERNAME === "" || $PASSWORD === "") {
        $error = "Please fill username and password.";
    } else {

        $sql = "SELECT USERNAME, PASSWORD, FULL_NAME FROM user_login WHERE USERNAME = ? LIMIT 1";

        if ($stmt = mysqli_prepare($koneksi, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $USERNAME);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $db_username, $db_password_hash, $db_full_name);
            
            $found = mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);

            if ($found && password_verify($PASSWORD, $db_password_hash)) {

                // Save user session
                $_SESSION['USERNAME'] = $db_username;
                $_SESSION['FULL_NAME'] = $db_full_name;

                // SUCCESS → REDIRECT TO HOME PAGE
                redirect("home.php");

            } else {
                $error = "Incorrect username or password.";
            }

        } else {
            $error = "Database error.";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Login - PhotoZone</title>

<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: 'Inter', sans-serif;
    }

    body {
        background: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1600&q=80')
            no-repeat center center/cover !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(255,255,255,0.6);
        backdrop-filter: blur(4px);
        z-index: 1;
    }

    .login-box {
        position: relative;
        z-index: 2;
        background: white;
        border-radius: 12px;
        width: 370px;
        padding: 35px 40px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        text-align: center;
    }

    input, select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 0.95rem;
        box-sizing: border-box;
    }

    button {
        padding: 10px;
        width: 100%;
        border-radius: 6px;
        cursor: pointer;
        border: none;
        font-weight: 600;
    }
</style>

</head>
<body>

<div class="overlay"></div>

<div class="login-box">

    <h2 style="color:#333; font-weight:600; margin-bottom:6px;">
        Welcome Back to <span style="color:#4c8bf5;">PhotoZone</span>
    </h2>

    <p style="color:#666; font-size:0.9rem; margin-bottom:18px;">
        Log in to continue to your creative space.
    </p>

    <?php if (!empty($error)): ?>
        <div style="
            background:#ffe6e6;
            color:#8b0000;
            padding:10px;
            border-radius:6px;
            margin-bottom:12px;
            font-size:0.9rem;">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form method="post" style="text-align:left;">

        <div style="margin-bottom:15px;">
            <label>Username</label>
            <input type="text" name="USERNAME" required placeholder="Enter your username">
        </div>

        <div style="margin-bottom:20px;">
            <label>Password</label>
            <input type="password" name="PASSWORD" required placeholder="Enter your password">
        </div>

        <button type="submit" name="login" style="background:#4c8bf5; color:white;">
            Log In
        </button>

    </form>

    <p style="margin-top:15px; color:#555; font-size:0.9rem;">
        Don’t have an account?
    </p>

    <button onclick="window.location.href='register.php'"
        style="background:none; color:#4c8bf5;">
        Register Here
    </button>

</div>

</body>
</html>
