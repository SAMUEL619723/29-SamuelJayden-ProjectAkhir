<?php
include "koneksi.php";

if (isset($_POST['register'])) {
    $FULL_NAME = $_POST['FULL_NAME'];
    $USERNAME  = $_POST['USERNAME'];
    $AGE       = $_POST['AGE'];
    $GENDER    = $_POST['GENDER'];
    $EMAIL     = $_POST['EMAIL'];
    $PASSWORD  = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT);

    if ($GENDER === "Select") {
        echo "<script>alert('Please select your gender.');</script>";
    } else {
        $query = "INSERT INTO user_login (FULL_NAME, USERNAME, AGE, GENDER, EMAIL, PASSWORD)
                  VALUES ('$FULL_NAME', '$USERNAME', '$AGE', '$GENDER', '$EMAIL', '$PASSWORD')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Registration successful! You can now log in.');</script>";
        } else {
            echo "Registration failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register - PhotoZone</title>
</head>
<body style="
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    background: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1600&q=80')
        no-repeat center center/cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
">

    <!-- Soft transparent overlay -->
    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(4px);
        z-index: 1;
    "></div>

    <!-- Registration box -->
    <div style="
        position: relative;
        z-index: 2;
        background: white;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        width: 370px;
        padding: 35px 40px;
        text-align: center;
    ">

        <h2 style="color: #333; font-weight: 600; margin-bottom: 6px;">
            Create Your <span style="color: #4c8bf5;">PhotoZone</span> Account
        </h2>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 25px;">
            Join our photography community and share your vision with the world.
        </p>

        <form method="post" style="text-align: left;">

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Full Name</label>
                <input type="text" name="FULL_NAME" required placeholder="Enter your full name"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:0.9rem;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Username</label>
                <input type="text" name="USERNAME" required placeholder="Choose a username"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:0.9rem;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Age</label>
                <input type="number" name="AGE" required placeholder="Your age"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:0.9rem;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Gender</label>
                <select name="GENDER" required
                    style="display:block; width:100%; padding:10px; border:1px solid #ccc;
                    border-radius:6px; font-size:0.9rem; background-color:white; color:#333;">
                    <option value="Select" disabled selected hidden>-- Select Gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Rather not say">Rather not say</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Email</label>
                <input type="email" name="EMAIL" required placeholder="Enter your email"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:0.9rem;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display:block; margin-bottom:5px; color:#333; font-size:0.9rem;">Password</label>
                <input type="password" name="PASSWORD" required placeholder="Create a password"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:0.9rem;">
            </div>

            <button type="submit" name="register"
                style="width:100%; background-color:#4c8bf5; color:white; border:none; border-radius:6px;
                padding:10px; font-weight:600; cursor:pointer; transition:0.3s;">
                Register
            </button>

        </form>

        <p style="margin-top: 15px; color:#555; font-size:0.9rem;">
            Already have an account?
        </p>
        <button onclick="window.location.href='sign_in.php'"
            style="background:none; color:#4c8bf5; border:none; font-weight:600; cursor:pointer;">
            Sign In
        </button>
    </div>
</body>
</html>
