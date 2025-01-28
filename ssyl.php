<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inv</title>
    <link rel="stylesheet" href="style.css"/>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .main-box{
    width: 1200px;
    height: 450px;
    border:2px solid gray;
    margin-left:85px;
    margin-top:-35px;
    box-shadow: 0px 0px 10px 2px gray;
  }
  .name-head{
    margin-left: 26px;
    font-size:15px;
    color:blue;
    font-weight: bold;

  }
  .name-input{
    width: 250px;
    height: 34px;
   margin-left: 24px;
     margin-top: -2px;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray;

  }
  .department-head{
    font-size: 15px;
    margin-left: -290px;
    margin-bottom:-5px;
    color:blue;
    font-weight: bold;

  }
  .department-dropdown{
    width: 250px;
    height: 34px;
    margin-left: -290px;
    margin-top: 5px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray  
  }
  .laptop-desktop-head{
    margin-left:-5px;
    font-size:15px;
    margin-top: 95px;
    margin-bottom: -100px;
    color:blue;
    font-weight: bold;
  }
  .laptop{
    margin-top: -155px;;
  }
  .laptop-dropdown{
    width: 250px;
    height: 34px;
    margin-left: -5px;
    margin-top: 2px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray;
  }
  .brand{
    margin-top: -60px;;
  }
  .brand-head{
    font-size: 15px;
    margin-left: 285px;
    margin-top: -300px;
    color:blue;
    font-weight: bold;
  }
  .brand-dropdown{
    width: 279px;
    height: 34px;
    margin-left: 285px;
    margin-top: -7px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray;
    
    }
    .windows-head{
    font-size: 15px;
    margin-left: -580px;
    margin-top: 3px;
    color:blue;
    font-weight: bold;
  }
  .windows-dropdown{
    width: 250px;
    height: 34px;
    margin-left: -580px;
    margin-top: -6px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray
    }
    .ram-head{
    font-size: 15px;
    margin-left: -289px;
    margin-top: 19px;
    color:blue;
    font-weight: bold;
  }
  .ram{
    margin-top: -100px;
  }
  .ram-input{
    width: 129px;
    height: 34px;
    margin-left: -290px;
    margin-top: -8px;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray
  }
  .ram-dropdown{
    width: 115px;
    height: 34px;
    margin-left: -155px;
    margin-top: -34px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray
    }
    .processor-head{
    font-size: 15px;
    margin-left: -3px;
    margin-top: 19px;
    color:blue;
    font-weight: bold;
  }
  .processor{
    margin-top: -100px;
  }
  
  .processor-dropdown{
    width: 251px;
    height: 34px;
    margin-left: -6px;
    margin-top: -7px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray
    }


    .hdd-head{
      font-size: 15px;
    margin-left: 288px;
    margin-top: 20px;
    color:blue;
    font-weight: bold;
  }
  .hard-disk{
    margin-top: -100px;
  }
  .hdd-input{
    width: 85px;
    height: 34px;
    margin-left: 286px;
    margin-top: -9px;
    border-radius: 5px;
    font-size: 15px;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray;
  }
  .hdd-dropdown{
    width: 89px;
    height: 34px;
    margin-left: 378px;
    margin-top: -35px;
    border-radius: 5px;
    font-size: 14px;
    border: 2px solid gray;
    }
    .hddtype-dropdown{
      width: 89px;
    height: 34px;
    margin-left: 475px;
    margin-top: -34px;
    border-radius: 5px;
    font-size: 14px;
    border: 2px solid gray;
    }

    .printer-head{
    font-size: 15px;
    margin-left: -580px;
    color:blue;
    font-weight: bold;
  }
  .printer-input{
    width: 250px;
    color:blue;
    height: 34px;
    margin-left: -580px;
    margin-top: -3px;;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray
  }

  .ip-head{
    font-size: 15px;
    margin-left: -580px;
    color:blue;
    font-weight: bold;
  }
  .ip-input{
    width: 250px;
    color:blue;
    height: 34px;
    margin-left: -580px;
    margin-top: -3px;;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray
  }


  .office-head{
      font-size: 15px;
    margin-left: -580px;
    margin-top: 0px;
    color:blue;
    font-weight: bold;
  }
  
  .office-dropdown{
    width: 251px;
    height: 34px;
    margin-left: -580px;
    margin-top: -7px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray
    }

    .others{
    margin-top: -99px;
  }
  
    .others-head{
    font-size: 15px;
    margin-left: -286px;
    margin-top: 17px;
    color:blue;
    font-weight: bold;
  }
  .others-input{
    width: 538px;
    color:blue;
    height: 34px;
    margin-left: -292px;
    margin-top: -8px;
    border-radius:5px;
    font-size: 15px;
    align-items:center;
    justify-content:center;
    border:2px solid gray;
  }
  h3{
    color:blue;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
  }
  .cpu-head{
    font-size: 15px;
    margin-left: 285px;
    margin-top: 19px;
    margin-bottom: -100px;
    color:blue;
    font-weight: bold;
  }
  .cpu-type{
    margin-top: -100px;
  }
  .cpu-dropdown{
    width: 279px;
    height: 34px;
    margin-left: 281px;
    border-radius:5px;
    font-size: 14px;
    border:2px solid gray
    }
    .update-btn{
    margin-left: -605px;
    margin-top: 47px;
  }
  .back-btn{
    margin-left:10px;
    width:82px;
    
  }
</style>
<body>
<br><div class="headbox" style="height:40px; width:420px; font-size:25px; color:white;
            border:2px solid lightgray;
            border-radius:10px;
            box-shadow: 0px 0px 10px 2px gray;
            margin-left:480px;
            text-align:center;
            display:flex;
            align-items:center;
            justify-content:center;
            background-color:darkslategray;
            font-family:times roman new;";>
            Shiva Special Yarn Limited - Inventory</label></div>
  <br><br><div class="main-box">
  <!-- Name of Person -->
    <form class="row g-3">
    <div class="col-md-6">
     <br> <label for="inputname" class="form-label name-head">Name:</label>
      <input type="text" class="form-control name-input" placeholder="Name">
    </div>

  <!-- Department -->
    <div class="col-md-6">
      <br><label for="inputdepartment" class="form-label department-head">Department:</label>
      <select id="inputdepartment" class="form-select department-dropdown">
        <option selected>Select Department</option>
        <option>EDP</option>
        <option>HR/Time Office</option>
        <option>Fibre POY</option>
        <option>Dispatch</option>
        <option>Stores</option>
        <option>Security/Gate</option>
        <option>Administrator</option>
        <option>MIS</option>
        <option>Purchase</option>
        <option>Internal Audit</option>
        <option>Commercial</option>
        <option>Accounts</option>
        <option>Engineering</option>
        <option>Electrical</option>
        <option>Civil</option>
        </select>

        <!-- desktop/laptop selection -->
        <div class="laptop"><label for="inputdesktoplaptop" class="form-label laptop-desktop-head">Desktop/Laptop:</label>    
          <select id="inputdesktoplaptop" class="form-select laptop-dropdown">
            <option selected>Select</option>
            <option>Desktop</option>
            <option>Laptop</option></select></div>
                </select>
  

        <!-- BRAND SELECTION -->
        <div class="brand"><label for="inputbrand" class="form-label brand-head">Brand:</label>    
        <select id="inputdepartment" class="form-select brand-dropdown">
        <option selected>Select</option>
        <option>Assembled</option>
        <option>Dell</option>
        <option>HP</option>
        <option>Lenovo</option>
      </select></div>
        </select>
     
        <!-- Windows selection -->
        <br><div class="windows"><label for="inputwindows" class="form-label windows-head">Windows:</label>    
          <select id="inputwindows" class="form-select windows-dropdown">
          <option selected>Select</option>
          <option>Windows XP</option>
          <option>Windows 7</option>
          <option>Windows 8/8.1</option>
          <option>Windows 10</option>
          <option>Windows 11</option>
        </select></div>
          </select>

<!-- RAM Selection -->
<br><div class="ram"><label for="inputram" class="form-label ram-head">RAM: &nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbspSize:</label>    
  <input type="text" class="form-control ram-input" placeholder="Enter RAM size">
  <select id="inputram" class="form-select ram-dropdown">
  <option selected>Select</option>
  <option>GB</option>
  <option>TB</option></select></div>
  </select>
<!-- Peocessor selection -->
<br><div class="processor"><label for="inputprocessor" class="form-label processor-head">Processor:</label>    
  <select id="inputprocessor" class="form-select processor-dropdown">
  <option selected>Select</option>
  <option>Dual Core</option>
  <option>Core 2 Duo</option>
  <option>Intel i3</option>
  <option>Intel i5</option>
  <option>Intel i7</option>
  <option>Intel Xeon</option></select></div>
  </select>
<!-- hard disk selection -->
  <br><div class="hard-disk"><label for="inputharddisk" class="form-label hdd-head">Hard Disk:&nbsp&nbsp&nbsp
Capacity: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspType:</label>    
    <input type="text" class="form-control hdd-input" placeholder="Size">
    <select id="inputharddisk" class="form-select hdd-dropdown">
    <option selected>Select</option>
    <option>GB</option>
    <option>TB</option></select></div>
    </select>
    <select id="inputharddisktype" class="form-select hddtype-dropdown">
    <option selected>Select</option>
    <option>SATA</option>
    <option>SSD</option>
    <option>NvMe</option>
    </div>
    </select>

<!-- Printer & Scanner -->
<div class="col-md-6">
  <br> <label for="inputprinterscanner" class="form-label printer-head">Printer & Scanner:</label>
   <input type="text" class="form-control printer-input" placeholder="Enter Printer or Scanner name">
 </div>

<!-- IP Address -->
<div class="col-md-6">
  <br> <label for="inputip" class="form-label ip-head">IP Address:</label>
   <input type="text" class="form-control ip-input" placeholder="Enter IP Address">
 </div>

 <!-- MS Office -->
 <br><div class="office"><label for="inputoffice" class="form-label office-head">Microsoft Office:</label>    
  <select id="inputoffice" class="form-select office-dropdown">
  <option selected>Select</option>
  <option>WPS</option>
  <option>MS Office 2007</option>
  <option>MS Office 2010</option>
  <option>MS Office 2013</option>
  <option>MS Office 2016</option>
  <option>Any Other</option></select></div>
  </select>

  <!-- Others -->
<div class="col-md-6 others">
  <br> <label for="inputothers" class="form-label others-head">Others/Remarks:</label>
   <input type="text" class="form-control others-input" placeholder="Entter any remarks">
 </div>
<!-- cpu type -->
 <br><div class="cpu-type"><label for="inputcpu" class="form-label cpu-head">Type of PC:</label>    
  <select id="inputcpu" class="form-select cpu-dropdown">
  <option selected>Select</option>
  <option>Brand New</option>
  <option>Re-furbished</option>
  <option>Assembled</option>
  </select>

<!-- update & back button -->
 <div class="update-btn">
  <input class="btn btn-primary" type="submit" value="Update">
  <a href="home.php" class="btn btn-primary back-btn">Back</a>
</div>
 
</body>
</html>