  <?php
    if(isset($_GET['u']))
    {
      $u=$_GET['u'];
      if($u=='new')
      {
  ?>
  
  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">Successfully Signed Up!</h4>
        </div>
        <div class="modal-body text-center">
          Login to start Shopping...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button data-toggle="modal" data-target="#modalLoginForm" class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">Login</button>
        </div>
       
      </div>
    </div>
  </div>
    <?php
      }
      else if($u=='not')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">An error occured while Signing Up!</h4>
        </div>
        <div class="modal-body text-center">
          Please try again...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button data-toggle="modal" data-target="#modalSignUpForm" class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">Sign Up</button>
        </div>
       
      </div>
    </div>
  </div>
  <?php
      }
      else if($u=='log')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">Welcome <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?></h4>
        </div>
        <div class="modal-body text-center">
          You are all set...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
        </div>
      </div>
    </div>
  </div>
  <?php
      }
      else if($u=='nolog')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">Login Unsuccessful!</h4>
        </div>
        <div class="modal-body text-center">
          Please try again...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button data-toggle="modal" data-target="#modalLoginForm" class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">Login</button>
        </div>
       
      </div>
    </div>
  </div>
  <?php
      }
      else if($u=='noadd')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">An error ocurred!</h4>
        </div>
        <div class="modal-body text-center">
          Could'nt Add to Cart. Please try again...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
        </div>
       
      </div>
    </div>
  </div>
  <?php
      }
      else if($u=='crt')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
          <h4 class="modal-title">Cannot Add to Cart!</h4>
        </div>
        <div class="modal-body text-center">
          Please login to start shopping...
        </div>

        <div class="modal-footer" style="text-align:center">
          <button data-toggle="modal" data-target="#modalLoginForm" class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">Login</button>
        </div>
       
      </div>
    </div>
  </div>
  <?php
      }
      else if($u=='add')
      {
  ?>

<div class="modal show" id="MyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:green;"><i class="medium material-icons">check</i>Added to Cart!</h4>
      </div>

      <div class="modal-footer" style="text-align:center">
        <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
      </div>
     
    </div>
  </div>
</div>
  <?php
      }
      else if($u=='already')
      {
  ?>

<div class="modal show" id="MyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:#99cc33;"><i class="medium material-icons">warning</i>Item already in Cart!</h4>
      </div>

      <div class="modal-footer" style="text-align:center">
        <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
      </div>
     
    </div>
  </div>
</div>
<?php
      }
      else if($u=='dl')
      {
  ?>

<div class="modal show" id="MyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:green;"><i class="medium material-icons">check</i>Item Deleted!</h4>
      </div>

      <div class="modal-footer" style="text-align:center">
        <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
      </div>
     
    </div>
  </div>
</div>
 <?php
      }
      else if($u=='subs')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:green;"><i class="medium material-icons">check</i>Successfully Subscribed!</h4>
        </div>

        <div class="modal-footer" style="text-align:center">
          <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
        </div>
       
      </div>
    </div>
  </div>
 <?php
      }
      else if($u=='presub')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:green;"><i class="medium material-icons">check</i>Already Subscribed!</h4>
        </div>

        <div class="modal-footer" style="text-align:center">
          <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
        </div>
       
      </div>
    </div>
  </div>
 <?php
      }
      else if($u=='nosub')
      {
    ?>

  <div class="modal show" id="MyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" onclick ="$('.modal').removeClass('show').addClass('fade');">&times;</button> 
        <h4 class="modal-title" style="color:#99cc33;"><i class="medium material-icons">warning</i>Unable to Subscribe!</h4>
        </div>

        <div class="modal-footer" style="text-align:center">
          <button class="btn btn-default mybtn-inv" onclick ="$('.modal').removeClass('show').addClass('fade');">OK</button>
        </div>
       
      </div>
    </div>
  </div>

    <?php
      }
    }
    ?>

  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="login.php">
              <div class="floating-label-wrap">
                <input type="email" class="floating-label-field floating-label-field--s3" id="email" name="email" placeholder="Email" required>
                <label for="email" class="floating-label">Email</label>
              </div>
              <div class="floating-label-wrap">
                <input type="password" class="floating-label-field floating-label-field--s3" id="password" name="password" style="width:90%;" placeholder="Password" required>
                <label for="password" class="floating-label">Password</label>
                <span onclick="show()" style="width:10%;"><i class="large material-icons field-icon" id="eye">visibility</i></span>

              </div>
              <div class="modal-footer" style="text-align:center">
                <button class="btn btn-default mybtn-inv">Login</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalSignUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="signup.php">
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="fname" name="firstn" placeholder=" First Name" pattern="[A-Za-z]{1,30}" title="First Name should only contain letters. e.g. John" required>
                <label for="fname" class="floating-label"> First Name</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="lname" name="lastn" placeholder="Last Name" pattern="[A-Za-z]{1,30}" title="Last Name should only contain letters. e.g. Doe" required>
                <label for="lname" class="floating-label"> Last Name</label>
              </div>
              <div class="floating-label-wrap">
                <input type="email1" class="floating-label-field floating-label-field--s3" id="email1" name="emailid" placeholder="Email" required>
                <label for="email1" class="floating-label">Email</label>
              </div>
              <div class="floating-label-wrap">
                <input type="text" class="floating-label-field floating-label-field--s3" id="contact" name="phone" placeholder="Contact" maxlength="10" title="Phone Number should contain 10 digits only" required>
                <label for="contact" class="floating-label">Phone Number</label>
              </div>
              <div class="floating-label-wrap">
                <input type="password" class="floating-label-field floating-label-field--s3" id="password1" name="pass" placeholder="Password" style="width:90%" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should Be UpperCase, LowerCase, Number/SpecialChar and min 8 Chars"required>
                <label for="password1" class="floating-label">Password</label>
                <span onclick="show1()" style="width:10%;"><i class="large material-icons field-icon" id="eye1">visibility</i></span>
              </div>
              <div class="modal-footer" style="text-align:center">
                <button class="btn btn-default mybtn-inv">Sign Up</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>  
  <div class="modal fade" id="modalAccountForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h4 class="modal-title">My Account</h4>
        </div>
        <div class="modal-body">
          <div class="container" style="font-size: 18px;">
            <div class="row">
              <div class="col-sm-2" style="font-weight: bold">Name:</div>
              <div class="col-sm-4"><?php echo $_SESSION['name']." ".$_SESSION['lname']; ?></div>
            </div>
            <div class="row">
              <div class="col-sm-2" style="font-weight: bold">Email:</div>
              <div class="col-sm-4"><?php echo $_SESSION['email']; ?></div>
            </div>
            <div class="row">
              <div class="col-sm-2" style="font-weight: bold">Phone Number:</div>
              <div class="col-sm-4"><?php echo "+91 ".$_SESSION['phone']; ?></div>
            </div>
            <?php if(isset($_SESSION['address'])){ ?>
            <div class="row">
              <div class="col-sm-2" style="font-weight: bold">Address:<a href="#" data-toggle="modal" data-target="#modalAddressForm"><i class="tiny material-icons" style="font-size:18px;">edit</i></a></div>
              <div class="col-sm-4"><?php echo $_SESSION['addr']; ?></div>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
</div>  