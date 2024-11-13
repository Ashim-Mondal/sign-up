<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #1A3636;
            color: #FFFFFF;
        }

        header {
            width: 100%;
            padding: 20px;
            background-color: #181717;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            display: block;
            margin: 0 auto;
        }

        .logo h3 {
            margin-top: 10px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: auto;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            color: #ff4b4b;
            background: var(--mainclr);
            transform: scale(1.1);
            border-radius: 20px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            color: #000;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-menu li {
            width: 100%;
        }

        .dropdown-menu li a {
            display: block;
            padding: 10px 20px;
            color: black;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .dropdown-menu li a:hover {
            background-color: #ff4b4b;
            background: var(--mainclr);
            transform: scale(1.1);
            border-radius: 20px;
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            background-color: #A02334;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff4d4d;
            background: var(--mainclr);
            transform: scale(1.1);
            border-radius: 20px;
        }

        .user-icon {
            font-size: 24px;
            color: #f5f5f5;
            margin-right: 10px;
            cursor: pointer;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            color: #FFFFFF;
        }

        .login-container {
            background-color: #1A3636;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            width: 350px;
        }

        .login-container h2 {
            margin: 0;
            font-size: 24px;
            color: #f5f5f5;
        }

        .application {
            font-size: 20px;
            margin: 0;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #f5f5f5;
            text-align: left;
            padding-left: 5px;
        }

        .login-container p {
            margin-bottom: 20px;
            text-align: left;
            margin-left: 5px;
        }

        .login-container p a {
            color: #78C6C6;
            text-decoration: none;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-form label {
            text-align: left;
            color: #f5f5f5;
        }

        .login-form input {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #D3D3D3;
            background-color: #D3D3D3;
            font-size: 16px;
            outline: none;
            color: #333;
        }

        .password-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .password-container input {
            flex: 1;
            padding-right: 35px;
        }

        .password-container i {
            position: absolute;
            right: 10px;
            color: #333;
            cursor: pointer;
        }

        .login-btn {
            background-color: #A02334;
            color: #FFF;
            padding: 10px 0;
            border-radius: 5px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: rgb(69, 139, 214);
            /* background: var(--mainclr); */
            transform: scale(1.1);
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../images/caregiver logo.png">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="dropdown">
                    <a href="#">Service ▼</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Doctor</a></li>
                        <li><a href="#">Nurse</a></li>
                        <li><a href="#">Physiotherapist</a></li>
                        <li><a href="#">Lab Test</a></li>
                        <li><a href="#">Care Taker</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="auth-buttons">
                <img src="../images/user.png">
                <!--<i class="fas fa-user-circle user-icon"></i>-->
                <button class="sign-up">Sign Up</button>
                <button class="login"><u>Login</u></button>
            </div>
        </nav>
    </header>
    <main>
        <div class="login-container">
            <h2>Welcome To CareGiver</h2>
            <h2 class="application">Application</h2>
            <p>Need an account? <a href="sign-up.php"><u>Sign Up</u></a></p>
            <form action="#" class="login-form" method="post">
                <label for="mobile">Login your mobile no</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile no " required>
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <button type="submit" name="login" class="login-btn">Login</button>
            </form>
        </div>
    </main>

    <?php
    // $pdo1 = new pdo("mysql:host=localhost;dbname=Caregiver","ashim_04","ashim123");
    // $pdo1 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // if($pdo1 == TRUE){
    //     echo "Connected";
    // }
    $servername = "localhost";
$username = "ashim_04";
$password = "ashim123";
$dbname = "Caregiver";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    

    
    if (isset($_POST["login"])) {

        $m_no = $_POST['mobile'];
        $pass = $_POST['password'];

        $sql = "SELECT mobile_no,password FROM customers where mobile_no = '$m_no'";
        $check = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($check); 
        $encpassword = $result['password'];
        $url = "../index.php";
        if(mysqli_num_rows($check) > 0){
            if(md5($pass) == $encpassword){
                echo "correct";
                
                echo "<script> location.href='../index.php'; </script>";
                exit;
            }
            else{
                echo "not";
                echo "<script> location.href='login.php'; </script>";
                exit;
            }
        }
    }

    $conn->close();
        
    ?>

    <script>
        
    </script>
</body>
</html>