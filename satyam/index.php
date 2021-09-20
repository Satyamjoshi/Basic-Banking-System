<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
  </head>
  <body>
 <!-- navbar --> 
      <nav class="navbar navbar-expand-md navbar-light navi">
      <a class="navbar-brand" href="index.php"><img src="logo.png" style="height: 90px "></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul  class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a style="color:white;" class="nav-link " href="index.php"></i>Home</a>
              </li>
              <li class="nav-item">
                <a style="color:white;" class="nav-link " href="viewuser.php">View Customers</a>
              </li>
              <li class="nav-item">
                <a style="color:white;" class="nav-link " href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a style="color:white ;" class="nav-link " href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>
    <!--section first-->
    <div class="section_first">
    <div class="col-sm-12 col-md">
                <div class="heading">
                  <h3>Welcome to..</h3>
                  <h1> <b> Together We Grow Bank</b></h1>
                </div>
              </div>
    </div>
     <!-- Activity section -->
            <div class="chicha">
             <div class="myclass row activity text-center "  >
                  <div class=" col-md kk act">
                    <img src="view.png" class="img-fluid imgsizee">
                    <br>
                    <a href="viewuser.php"><button>View Customers</button></a>
                  </div>
                  <div class=" col-md act">
                    <img src="transaction.png" class="imgsize img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class=" col-md act">
                    <img src="history.png" class="imgsize img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
              </div>
              <footer class="text-center mt-5 py-2">
        <p>&copy gripseptember2021. Made by <b>Satyam Joshi</b> <br> The Sparks Foundation</p>
      </footer>
          </div>
          
  </body>
</html>
