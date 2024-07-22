
<!-- <?php
include("connect.php");
session_start();
 if(isset($_POST["submit"])){
    $email = $_POST['Email'];
    $pass = $_POST['password'];
  $sql = "Select  * from user  where  Email = '$email' and password = '$pass'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0)
   {
    $_SESSION['Email'] = $email;
    header('location:index2.php');

   }else{
    header('location:login.php');
   }
};
 
if(isset($_REQUEST['logout.php'])){
    session_unset();
    session_destroy();

}
?> -->
<!doctype html>
<html lang="en">
  <head>
    <title>Home-Page| Reads-Info</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="resposive.css">
  <!-- jquery cdn -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="body">
  <?php
    include 'Navbar.php';
    ?>
      <!-- start login section  -->

       <section class="container">
         <div class="row">
            <div class="col-md-12  mt-5" style="display: flex; flex-wrap: wrap;">
               <form action="" class="login-form" id="form" method="Post">
                  <h2>
                        Login 
                  </h2>
                     <label for="">Email</label> <br>
                     <input type="email" name="Email" placeholder=" Your Email @" id="email"> 
                      <i class="fa fa-user" aria-hidden="true" id="user"></i> <br>
                      <label for="">Password</label> <br>
                      <input type="password" id="password" name="Password" placeholder="password">
                        <i class="fa fa-eye" aria-hidden="true" id="show"></i> <br> 
                       <span> <input type="checkbox" name="" id=""> Remember Me</span> <br>
                    <input type="submit"  class="login-btn" value="Login"> <br>
                   <span><a href="">Forget Your Password</a></span>
              </form>
              <div class="regster">
                     <h1>Register</h1><br>
                     <h6>Don't hava an Account? Register One </h6>
                     <button><a href="Register.php">Register an Account</a></button>
              </div>
    </div>
            <div class="col-md-6"></div>
         </div>
       </section>
                
          <script>
             // PASSWORD HIDE OR SHOW METHOD
       let password = document.getElementById("password")
       let show = document.getElementById("show")
       show.onclick = function (){
        if (password.type === "password"){
            password.type = "text"
           
        }
        else {
            password.type = "password"
        }
    }

          </script>
          <!-- end register form section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>