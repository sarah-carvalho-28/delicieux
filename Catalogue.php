<?php
  session_start();
   $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "delicieux";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>D&eacute;licieux</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/final_logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    function show() {
      var x = document.getElementById("password");
      var y=document.getElementById("eye");
      if (x.type === "password") {
        y.innerHTML="visibility_off";
        x.type = "text";
      } else {
        y.innerHTML="visibility";
        x.type = "password";
      }
    }
    function show1() {
      var x = document.getElementById("password1");
      var y=document.getElementById("eye1");
      if (x.type === "password") {
        y.innerHTML="visibility_off";
        x.type = "text";
      } else {
        y.innerHTML="visibility";
        x.type = "password";
      }
    } 
  </script>
</head>
<body>
  <?php include("modal.php");?>
<nav class="nav navbar-expand navbar-fixed-top my-navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand navbar-nav navbar-left" style="font-size:60px;" href="index.php">D&eacute;licieux</a>                                          
      <button class="navbar-default navbar-toggle my-toggle" id="tgl" data-toggle="collapse" data-target=".navHeaderCollapse" style="color:#f23c48;border-color:#f23c48;border-width:0.5px;padding:2px;margin:10px;">
        <span class="glyphicon glyphicon-menu-hamburger" style="width:20px;height:100%"></span>
        
      </button>
    </div>
    
    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav" id="mynav">
        <!--<li class="active"><a href="#">Home</a></li>-->
        <li class="active"><a href="Catalogue.php?ct=1">Cakes</a></li>
        <li><a href="Catalogue.php?ct=2">Cupcakes</a></li>
        <li><a href="Catalogue.php?ct=3">Macarons</a></li>
        <li><a href="Catalogue.php?ct=4">Tarts</a></li>
        <li><a href="Catalogue.php?ct=5">Choux</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li class="navbar-btn"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="navbar-btn"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
      <form class="navbar-form navbar-right" action="Catalogue.php" >
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search" value=<?php if(isset($_GET['search']))echo $_GET['search']; ?> >
          <input type="hidden" class="form-control" name="ct" value="<?php if(isset($_GET['ct']))echo $_GET['ct']; ?>" >
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
      <?php
        if(isset($_SESSION['name']))
        {
      ?>
      <ul class="nav navbar-nav navbar-right text-center">
        <li><a href="cart.php" id="mybtn" style="height:50px;border:0px;" title="Cart"><i class="medium material-icons">shopping_cart</i><span class="badge"><?php
      
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
        {
          die("Connection failed: " . $conn->connect_error);
        }
              
          if(isset($_SESSION['name'])) 
          {
              $sql1="SELECT * FROM cart WHERE user_id=".$_SESSION['id']." AND checkout=0";
          }
          else
          {   
              goto end2;
          }
          $result=$conn->query($sql1);
          if($result->num_rows >0)
          {
            echo $result->num_rows;

          } 
          else
          {
            echo '0';
          }

          end2:
          $conn->close();
     ?></span></a></li>
        <li class="dropdown">
        <a class="dropdown-toggle mybtn1 fontq" data-toggle="dropdown" href="#">Hi  <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <!--<li><a href="#"><i class="small material-icons">assignment</i>My Orders</a></li>-->
          <li><a href="#" class="fontq" data-toggle="modal" data-target="#modalAccountForm"><i class="small material-icons">account_circle</i> My Account</a></li>
          <li><a href="logout.php" class="fontq"><i class="small material-icons">power_settings_new</i> Log Out</a></li>
        </ul>
      </li>
      </ul>
      <?php
        }
        else
        {
      ?>
      <style type="text/css">
    input::-webkit-outer-spin-button.num,
    input::-webkit-inner-spin-button.num {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] .num{
      -moz-appearance: textfield;
    }
  </style>
      <ul class="nav navbar-nav navbar-right text-center">
        <li id="pad"><a href="#" id="mybtn" data-toggle="modal" data-target="#modalSignUpForm">SIGN UP</a></li>
        <li id="pad"><a href="#" id="mybtn" data-toggle="modal" data-target="#modalLoginForm">LOGIN</a></li>
      </ul>
      <?php
        }
      ?>
    </div>
  </div>
</nav>
<?php
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }
        if(isset($_GET['ct']))
        {
          if(isset($_GET['search'])) 
          {
            $sql="SELECT * FROM `catalogue` WHERE `pname` LIKE '%".$_GET['search']."%' AND pcategory=".$_GET['ct']." ORDER BY pname ASC";
          }
          else
          {
            $sql="SELECT * from catalogue where pcategory=".$_GET['ct']." ORDER BY pname ASC";
          }
        }
        
          $result=$conn->query($sql);
          $temp=0;
          echo "<div class='container-fluid'>";
          if ($result->num_rows > 0)
          {
              while($row=$result->fetch_assoc())
              {
                 switch($row['pcategory'])
                  {
                    case 1:
                      $qty= "<div class='form-group'><select id='quantity' class='form-control' name='quantity'><option value='1'selected>500 gms</option><option value='2'>1 kg</option><option value='3'>1.5 kgs</option><option value='4'>2 kgs</option><option value='5'>2.5  kgs</option><option value='6'>3 kgs</option><option value='7'>3.5  kgs</option><option value='8'>4 kgs</option><option value='9'>4.5 kgs</option><option value='10'>5 kgs</option><option value='11'>5.5 kgs</option><option value='12'>6 kgs</option><option value='13'>6.5 kgs</option><option value='14'>7 kgs</option></select></div>";
                      break;
                    default:
                      $qty='<div class="form-group"><input type="number" min="1" max="60" value="1" onKeyDown="return false" class="form-control" name="quantity"></div>';
                  }
                if($temp==0)
                {
                echo "<div class='row display-flex'>";
                }
                else if($temp==$result->num_rows)
                {
                  echo "</div>";
                }
                else if($temp%3==0)
                {
                echo "</div>";
                echo "<div class='row display-flex'>";
                }
                echo "<div class='col-sm-4'><div class='card text-center c1' title='".$row['pname']."'><div class='card-body'><img class='card-img-top' src='".$row['pimage']."' height='100%' width='100%'><div class='card-body text-center'><h5 class='card-title'>".$row['pname']."</h5><p class='card-text'>".$row['pdescription']."<br><b>&#8377;".$row['pcost']."</b></p><form method='get' action='addCart.php'><input type='hidden' class='form-control' name='ct' value='".$_GET['ct']." '><input type='hidden' class='form-control' name='item' value='".$row['pid']." ' >".$qty."<button type='submit' class='btn btn-outline-dark' id='mybtn' style='border:0px;color:#f23c48' title='Add to Cart'><i class='medium material-icons'>add_shopping_cart</i></button></form></div></div></div></div>";
                $temp+=1;
                }
                
          }
          echo "</div></div>";
      end1:
    $conn->close();
    ?>

<footer class="container-fluid text-center ">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <a id="logo" style="" href="index.php">D&eacute;licieux</a>
          <span id="cr"> © 2020 D&eacute;licieux. All rights reserved.</span>
        </div>
      
      
        <div class="col-sm-5 col-md-5">
          <a href="index.php?p=about">ABOUT US</a>
          <a href="index.php?p=contact">CONTACT US</a>
        </div>
        
        <div class="col-sm-3 col-md-3">
              <a href="" class="fa fa-facebook-f"></a>
              <a href="" class="fa fa-instagram"></a>
              <a href="" class="fa fa-twitter"></a>  
        </div>

      </div> 
</footer>
<div class="modal fade" id="modalAddressForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h4 class="modal-title">Shipping Address</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="InsertAdd.php?url=Catalogue&ct=<?php echo $_GET['ct'];?>">
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="addr1" name="addr1" placeholder="Address Line 1" maxlength="40" title="Invalid Address" required>
                <label for="addr1" class="floating-label">Address Line 1</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="addr2" name="addr2" placeholder="Address Line 2" maxlength="40" title="Invalid Address" required>
                <label for="addr2" class="floating-label">Address Line 2</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="addr3" name="addr3" placeholder="Address Line 3" maxlength="20">
                <label for="addr3" class="floating-label">Address Line 3</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="city" name="city" placeholder="City" pattern="[A-Za-z]{1,30}" title="Please enter the City name correctly" required>
                <label for="city" class="floating-label">City</label>
              </div>
              <div class="floating-label-wrap">
                <select class="floating-label-field floating-label-field--s3" name="state" id="state" class="form-control" style="padding-bottom:19px;text-transform: uppercase;" placeholder="State" required>
                  <option>Select...</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
          </select>
                <label for="state" class="floating-label">State</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="pincode" name="pincode" placeholder="Contact" title="Invalid Pin Code" maxlength="6" required>
                <label for="pincode" class="floating-label">Pin Code</label>
              </div>
              
              <div class="modal-footer" style="text-align:center">
                <button class="btn btn-default mybtn-inv">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>