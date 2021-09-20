<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    

    <style type="text/css">
      button{
        background: rgb(12, 35, 49);
        color : white;
        
      }
      button:hover{
        background-color: black;
        color: white;
      }
    </style>
</head>

<body style="background-color: rgb(26, 58, 77); color: white;">
<!-- navbar --> 
<nav class="navbar navbar-expand-md  navi">
        <div class="collapse navbar-collapse navi" id="collapsibleNavbar">
            <ul  class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a style="color:white;" class="nav-link " href="index.php"></i>Home</a>
              </li>
              <li class="nav-item">
                <a style="color:white;" class="nav-link" href="viewuser.php">View Customers</a>
              </li>
              <li class="nav-item">
                <a style="color:white;" class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a style="color:white;" class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>  
       </nav>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>



<div class="container ">
        <h2 class="text-center font  pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>