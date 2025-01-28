<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    require('db.php');
    session_start();
    if (isset($_POST['name'])){
        // $name=stripcslashes($_REQUEST['name']);
        // $name=mysqli_real_escape_string($con, $name);
        $emp_code=stripcslashes($_REQUEST['name']);
        $emp_code=mysqli_real_escape_string($con, $emp_code);

        $password=stripcslashes($_REQUEST['password']);
        $password=mysqli_real_escape_string($con, $password);
        

        $query="SELECT * FROM users WHERE emp_code='$emp_code' AND password='$password'";
        $result=mysqli_query($con, $query) or die (mysqli_error($con));
        $rows =mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['name']=$emp;
            header("Location: home.php");
        } 
        else{
            echo "<div class='form'>
            <h3>Incorrect Username/password.</h3><br/>
            <p class='link'>click here to <a href='login.php'>Login</a>again.</p>
            </div>";
        }
    }
    else {
        ?>
            <br><br>
            <div class="headbox" style="height:40px; width:350px; font-size:20px; color:white;
            border:2px solid lightgray;
            border-radius:10px;
            box-shadow: 0px 0px 10px 2px gray;
            margin-left:496px;
            text-align:center;
            display:flex;
            align-items:center;
            justify-content:center;
            background-color:DarkSlateGray;
            font-family:arial;";>
            Shiva Asset Management</label></div>
            
            <form class="login-form" 
            style="margin:50px auto;
            height:250px;
            width:350px;
            padding:30px 25px;
            background:white;
            border:2px solid white;
            border-radius: 10px;
            margin-top:50px;
            box-shadow: 0px 0px 10px 2px gray;" method ="POST" name="login">
            <h1 class="login-title">Login your account</h1>
            
            <i class="fa-solid fa-envelope" style="font-size: 25px;"></i>
            <input type="text" class="login-input" 
            style="border:2px solid lightgray;
            border-radius:10px;
            width:300px;
            margin-left:10px;
            height:35px;"name="name" placeholder="username" autofocus="true"/>
            
            
            <i class="fa-solid fa-lock"style="font-size: 25px;"></i>
            <input type="password" class="login-input" 
            style="border:2px solid lightgray;
            border-radius:10px;
            width:300px;
            margin-left:12px;
            height:35px;" name="password" placeholder="password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <p class="link"> Don't have an account?<a href="register.php"> Registration Now</a></p>  
        </form>
        <h4 class="login-title" style="text-align: center; color:black";>Copyright © 2024 Rudra ecovation, All rights reserved.</h4>
        <?php
    }
    ?>
</body>
</html>