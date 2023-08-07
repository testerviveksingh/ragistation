
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>


<?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>


     <div class="container mt-5">
          <h1 class="alert alert-info text-center">Login Form</h1>
          <form method="post" action="login_code.php">
               <div class="row">
                    <div class="col-lg-12">
                         <label for="email">Email</label>

                         <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                    </div>
                    <div class="col-lg-12">
                         <label for="password">Password</label>

                         <input type="password" name="password" class="form-control" placeholder="Enter your passsword" />
                    </div>
                    <div class="mt-5 col-lg-12">
                         <button type="submit" class="btn btn-primary" name="login_button">Login</button>
                    </div>
               </div>
          </form>
     </div>


     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>