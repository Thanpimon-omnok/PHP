<?php
// ตัวอย่างโค้ด PHP ตรวจสอบการล็อกอิน (สามารถแก้ตามระบบจริงได้)
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!";
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 25px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
            animation: fadeIn 0.8s ease;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #6a1b9a;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #4a148c;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }
        .input-group input:focus {
            border-color: #9c27b0;
            box-shadow: 0 0 8px rgba(156,39,176,0.4);
        }
        .btn-login {
            background: linear-gradient(135deg, #9c27b0, #e040fb);
            border: none;
            color: #fff;
            padding: 12px;
            width: 100%;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-login:hover {
            opacity: 0.95;
            transform: scale(1.03);
            box-shadow: 0 4px 12px rgba(156,39,176,0.4);
        }
        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>เข้าสู่ระบบ</h2>
        <?php if (!empty($error)) { echo "<div class='error'>$error</div>"; } ?>
        <form method="POST">
            <div class="input-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">ล็อกอิน</button>
        </form>
    </div>
</body>
</html>