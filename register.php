<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <title>Register System in PHP MySQL</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

     <div class="container mt-5">
          <div class="row justify-content-center">
               <div class="col-md-6">

                    <?php
                    // Your message code
                    if (isset($_SESSION['message'])) {
                         echo '<h4 class="alert alert-warning">' . $_SESSION['message'] . '</h4>';
                         unset($_SESSION['message']);
                    } // Your message code
                    ?>

                    <div class="card shadow">
                         <div class="card-header text-center">
                              <h4>Register System in PHP MySQL</h4>
                         </div>
                         <div class="card-body">

                              <form action="registercode.php" method="POST">

                                   <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fname" required placeholder="Enter First Name" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" required placeholder="Enter Last Name" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <label>Email Id</label>
                                        <input type="email" name="email" required placeholder="Enter Email Address" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" required placeholder="Enter Password" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" required placeholder="Enter Confirm Password" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                                   </div>

                              </form>

                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>