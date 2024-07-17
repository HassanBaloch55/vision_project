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
    <div class="hero_area">
      <!-- header section -->
      <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <h2 class="text-white">Reads-info</h2>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="about-us.html">About Us</a></li>
                           <li>
                              <a  href="contactus.html">Contact Us</a>
                           </li>
                           <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="login.php">Login</a></li>
                           <li>
                              <a  href="Register.php">Register</a>
                           </li>
                        </ul>
                     </li>
                   </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
         <!-- End  header section-->
      <!-- register page section -->
<div class="col-12">
            <div class="container" id="Register">
                <form action="adddata.php" class="Register-form" id="form" method="post">
                    <h2>
                     Register Your Account !
                    </h2>
                     <div id="t">
                       <label for=""> First Name *</label>
                     </div>
                      <div>
                     <input type="text" name="FirstName" id="First" placeholder="first Name" class="form-control" required="required">
                     <small id="first" ></small>
                   </div>
                    <div>
                       <label for="">   Last Name *</label>
                    </div>
                     <div>
                         <input type="text" name="LastName" id="Last" placeholder="last Name" class="form-control" required="required">
                         <small id="last"></small>
                     </div>
                       <div>
                        <i class="fa fa-institution"></i> <label for=""> City/Town*</label>
                       </div>
                       <div>
                       <div>
                           <input type="text" name="City" id="City/Town" placeholder="city/town" class="form-control" required="required" >
                           <small id="city" ></small>
                       </div>
                        <i class="fa fa-envelope"></i>    <label for="">Email@ *</label>
                      </div>
                       <div>
                            <input type="email" name="Email" id="email" placeholder="Example55@gmail.com" class="form-control" required="required" >
                            <small id="email" ></small>
                       </div>
                       <div>
                          <label for="">  Password*</label>
                     </div>
                     <div>
                              <input type="Password" name="Password" id="password" placeholder="Password" class="form-control" required="required" >
                              <small id="pass"></small>
                     </div>
                    <div>
                      <label for="">  Confirm Password*</label>
                    </div>
                     <div>
                         <input type="Password" name="Confirm_Password" id="confirmPassword" placeholder="Password" class="form-control" required="required">
                         <small id="confirm"></small>
                    </div>
                    <button class="Register-btn" type="submit"  onclick=" return validateForm()"> Submit </button>
                </form>
             </div>
          </div>
          <!-- end register form section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="script.js" ></script>
</body>
</html>