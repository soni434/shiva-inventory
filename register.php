<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .account-create-heads{
        color:black;
        /* margin-left:320px; */
    }
    .input-detail{
    border: 2px solid lightgrey;
    border-radius: 10px;
    width: 450px;
    height: 32px;
    margin-top: 8px;
    margin-left: -5px;
    }
    .create-cancel-btn{
        margin-left:70px;
        width: 150px;
        height: 39px;
        border-radius:20px;
        background-color: blue;
    }
    .create-cancel-btn:hover{
        color:blue;
        background-color: white;
    }
    .input-detail-empcode{
        width:190px;
        border: 2px solid lightgray;
        border-radius: 10px;
        height: 32px;
        margin-top: 8px;
        margin-left: -5px;
    }
    .main-box{
        height:270px;
        width:54%;
        padding-left: 4%;
        border:2px solid lightgray;
        /* margin-left:100px; */
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding-top: 2%;   
        box-shadow: 0px 0px 10px 2px gray; 
    }
    .label{
        width: 182px;
    }
    .containers{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .image{
      width:1550px;
      height:550px;
    }
    </style>

<body>
<?php
    require('db.php');
    if (isset($_REQUEST['name'])) {
        $name = stripcslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        
        $email = stripcslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $password = stripcslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $emp_code = stripcslashes($_REQUEST['emp_code']);
        $emp_code = mysqli_real_escape_string($con, $emp_code);
        if($emp_code == "" || $name == "" || $email == "" || $password == "") {
          echo "<div class='form'>
          <h3> Fields are missing</h3><br/>
          <p class='link'>click here to <a href='register.php'>Register</a></p>
          </div>";
        }else{
          $query = "INSERT INTO users (name, email, password, emp_code) VALUES 
          ('$name', '$email', '$password','$emp_code')";
  
          $result=mysqli_query($con, $query);
          
          if ($result){
              echo "<div class='form'>
                    <h3> You are registered successfully</h3><br/>
                    <p class='link'>click here to <a href='login.php'>Login</a></p>
                    </div>";
          } 
              
      
      }
        }
       
else {
    ?>

<form class="form" method="POST" name="login">
<br><br><div class="headbox" style="height:40px; width:350px; font-size:20px; color:white;
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
            Create Account</div><br>
        <!-- Name Detail -->
         <div class="d-flex containers">
            <div class="main-box">
                
                <div class="row mb-3 account-create-heads">
                    <label for="inputname" class="col-sm-2 col-form-label label">Enter Your Name</label>
                    <div class="col-sm-10 label">
                      <input type="text" class="form-control input-detail " name="name" id="inputname" placeholder="enter your name">
                    </div>
                  </div>
        
                  <!--Email Address  -->
                <div class="row mb-3 account-create-heads">
                  <label for="inputEmail3" class="col-sm-2 col-form-label label" require>Enter Your Email</label>
                  <div class="col-sm-10 label">
                    <input type="email" class="form-control input-detail" name="email" id="inputEmail3" n  placeholder="enter your email">
                  </div>
                </div>
                <!-- Password -->
                <div class="row mb-3 account-create-heads">
                  <label for="inputPassword3" class="col-sm-2 col-form-label label">Password</label>
                  <div class="col-sm-10 label">
                    <input type="password" class="form-control input-detail" name="password" id="inputPassword3"  placeholder="Choose your password">
                  </div>
                </div>
                <!-- Employee Code -->
                <div class="row mb-3 account-create-heads">
                    <label for="inputPassword3" class="col-sm-2 col-form-label label">Enter Employee Code</label>
                    <div class="col-sm-10 label">
                      <input type="text" class="form-control input-detail-empcode" name="emp_code" id="inputPassword4"  placeholder="enter employee code">
                    </div>
                  </div>
                </div>
         </div>
         </div>
        <!-- Create Account -->
        <br><br><br><button type="submit" class="btn btn-primary create-cancel-btn" name="submit" style="margin-left:494px;">Create</button>
        <button type="submit" class="btn btn-primary create-cancel-btn">Cancel</button>
<!-- <img src="01.jpg" class="img-fluid image" alt="logo"><br> -->
        <br>
        <?php
}
?>
</form>
      </body>
</html>