
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
           <!-- Information Section with Search Bar -->
    <div class="info-section">
      <div class="container">
          <h1 class="mb-4">Welcome to Our Education Platform</h1>
          <p class="mb-5">Explore our courses and find the perfect one for you.</p>
        <form action="">
         <div class="search-bar d-flex justify-content-center">
            <input type="text" id="searchInput" class="form-control" placeholder="Search courses...">
            <button onclick="filter()" class="btn btn-primary">Search</button>
        </div>
        </form>
      </div>
  </div>
            <!-- heading section -->
            <div class="heading">
              <h2>
                  Our <span>Courses</span>
              </h2>
            </div>
              <!-- End  heading section -->
            <section class="container">
               <div class="row" id="Course">
                 <div class="col-md-4">
                    <div class="Course-detail">
                      <img src="images/ms-office.webp" alt="" class="Course-img">
                        <h5><a href="#ms-office" id="Ms">Ms Ofice Course</a></h5> 
                        <hr>
                        <div class="price-btn">
                           <p>
                              $75.00
                           </p>
                           <div class="rating">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                           
                           </div>
                         </div>
                    
                     </div>
                 </div>
                 <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/web Design.jpg" alt="" class="Course-img">
                      <h5><a href="#webdesign" id="design">Web Design Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $100.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/web Deve.jpg" alt="" class="Course-img">
                      <h5><a href="#webdeve" id="development"> Web Development  Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $120.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/php.jpeg" alt="" class="Course-img">
                      <h5><a href="#php-deve" id="PHP"> Php Development Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $130.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/pythone.jpeg" alt="" class="Course-img">
                      <h5><a href="#python" id="Pythone">Pythone Development Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $80.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/seo.jpeg" alt="" class="Course-img">
                      <h5><a href="#S-O-E" id="seo">S E O  Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $50.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/english-language-.jpeg" alt="" class="Course-img">
                      <h5> <a href="#English" id="Eng">English  Basic to Advance</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $100.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/arabic.jpg" alt="" class="Course-img">
                      <h5><a href="#Arabic" id="arabic">Arabic Language Course</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $80.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
               </div>
               <div class="col-md-4">
                  <div class="Course-detail">
                    <img src="images/persian.jpg" alt="" class="Course-img">
                      <h5><a href="#Persain" id="persain">Learn Persian Language</a></h5> 
                      <hr>
                      <div class="price-btn">
                        <p>
                           $70.00
                        </p>
                        <div class="rating">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                      </div>
                 
                   </div>
                </div>
             </div>
          </section>
           <!-- course decriptio section  -->
           <section class="container" id="ms-office">
            <div class="row">
                <div class="col-md-12">
                        <div class="course-details">
                           <form action="" class="payment-form">
                              <h2>Payment</h2>
                            <label for="">Amount</label> <br>
                            <input type="text" placeholder="" class="form-control" value="$130.00"> <br>
                            <label for="">Name</label> <br>
                            <input type="text"  class="form-control" placeholder="Your Name"> <br>
                            <label for="">Phone </label> <br>
                            <input type="number" class="form-control"  placeholder="Your Phone Number"> <br>
                            <label for="">Email</label> <br>
                            <input type="email"  class="form-control" placeholder="Your Email">
                            <button type="submit" class="pay-btn">Pay Now</button>
                         </form>
                            <img src="images/ms-office.webp" alt="" class="detail-img">
                           <div class="course-description">
                             <div style="display: flex;justify-content: space-between;">
                              <h5> Microsoft Office Course Overview </h5>   <span id="Hide"> X</span>
                             </div>
                             
                              <details>
                              <summary>Introduction</summary>
                               <p>
                                Microsoft Office is a suite of productivity applications that are widely used in business and personal contexts. A Microsoft Office course typically covers the core applications,
                                 which include Word, Excel, PowerPoint, and Outlook. This course is designed to equip participants with the skills necessary to efficiently use these tools for a variety of tasks, ranging from document creation and data analysis to email management and presentation design.
                               </p>
                              </details>
                              <details>
                                <summary>Course Objectives</summary>
                                 <p>
                                   <br>  Understanding the Interface: Familiarize with the user interface of each application, including the ribbon, toolbar, and navigation pane.
                                   <br>  Document Creation and Formatting: Learn to create, format, and edit documents in Word, spreadsheets in Excel, presentations in PowerPoint, and manage emails in Outlook.
                                   <br>  Advanced Features: Explore advanced features such as macros, pivot tables, mail merge, and collaboration tools.
                                   <br>  Practical Applications: Apply the skills learned to real-world scenarios to enhance productivity and efficiency in the workplace.
                                </p>
                             </details>
                             <span><i class="fa-solid fa-video"></i> 42 Hours video Duration</span> <br>
                             <span> <i class="fa-solid fa-tv"></i> 21 Live Classes Sessions</span> <br>
                             <span><i class="fa-solid fa-check"></i> 100% Clear doubts During Sessions </span> <br>
                             <span><i class="fa-solid fa-database"></i> Knowlage about DataBase</span> <br>
                             <span><i class="fa-solid fa-certificate"></i> 1 completion Certificate </span>  <br>
                             <button class="Enroll-btn" id="show" id="show" id="show"> Enroll Now</button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <section class="container" id="webdesign">
            <div class="row">
                <div class="col-md-12">
                        <div class="course-details">
                           <form action="" class="payment-form">
                              <h2>Payment</h2>
                            <label for="">Amount</label> <br>
                            <input type="text" placeholder="" class="form-control" value="$130.00"> <br>
                            <label for="">Name</label> <br>
                            <input type="text"  class="form-control" placeholder="Your Name"> <br>
                            <label for="">Phone </label> <br>
                            <input type="number" class="form-control"  placeholder="Your Phone Number"> <br>
                            <label for="">Email</label> <br>
                            <input type="email"  class="form-control" placeholder="Your Email">
                            <button type="submit" class="pay-btn">Pay Now</button>
                         </form>
                            <img src="images/web Design.jpg" alt="" class="detail-img">
                            <div class="course-description">
                              <div style="display: flex;justify-content: space-between;">
                                 <h5> Web Design Course Overview </h5>   <span id="Hide"> X</span>
                                </div>
                              <details>
                              <summary>Description</summary>
                               <p>
                                Web design encompasses a variety of skills and disciplines in the creation and maintenance of websites. 
                                It involves the planning, conceptualizing, and arranging of content intended for the internet. 
                                Modern web design goes beyond just aesthetics;
                                 it also includes the site's functionality, user experience (UX), and performance on various devices.
                               </p>
                              </details>
                              <details>
                                <summary> Key Components of Web Design</summary>
                                 <p>
                                  Web design encompasses a variety of skills and disciplines in the creation and maintenance of websites. 
                                  It involves the planning, conceptualizing, and arranging of content intended for the internet. 
                                  Modern web design goes beyond just aesthetics;
                                   it also includes the site's functionality, user experience (UX), and performance on various devices.
                                 </p>
                                </details>
                                <span><i class="fa-solid fa-video"></i> 180 Hours video Duration</span> <br>
                                <span> <i class="fa-solid fa-tv"></i> 90 Live Classes Sessions</span> <br>
                                <span><i class="fa-solid fa-check"></i> 100% Clear doubts During Sessions </span> <br>
                                <span><i class="fa-solid fa-check"></i> Responsiveness and Mobile friendly website Designs</span> <br>
                                <span><i class="fa-solid fa-certificate"></i> 1 completion Certificate </span>  <br>
                                <button class="Enroll-btn" id="show" id="show" id="show"> Enroll Now</button>
                     </div>
                </div>
            </div>
         </section>
         <section class="container" id="webdeve">
            <div class="row">
                <div class="col-md-12">
                        <div class="course-details">
                           <form action="" class="payment-form">
                              <h2>Payment</h2>
                            <label for="">Amount</label> <br>
                            <input type="text" placeholder="" class="form-control" value="$130.00"> <br>
                            <label for="">Name</label> <br>
                            <input type="text"  class="form-control" placeholder="Your Name"> <br>
                            <label for="">Phone </label> <br>
                            <input type="number" class="form-control"  placeholder="Your Phone Number"> <br>
                            <label for="">Email</label> <br>
                            <input type="email"  class="form-control" placeholder="Your Email">
                            <button type="submit" class="pay-btn">Pay Now</button>
                         </form>
                            <img src="images/web Deve.jpg" alt="" class="detail-img">
                            <div class="course-description">
                              <div style="display: flex;justify-content: space-between;">
                                 <h5> Web Development  Course Overview </h5>   <span id="Hide"> X</span>
                                </div>
                              <details>
                              <summary>Description</summary>
                               <p>
                                 Web development is the process of creating and maintaining websites. It encompasses various aspects, 
                                 including web design, web programming, database management, and web publishing.
                                  Web development can be divided into two main categories: front-end development and back-end development.
                               </p>
                              </details>
                              <details>
                                <summary>The Development Process</summary>
                                 <p>
                                   <b> The web development process typically involves several stages:</b>

                                  <br> <b> Planning:</b>    <br> Defining the project scope, goals, target audience, and requirements.
                                  <br> <b> Design:</b>      <br> Creating wireframes, mockups, and prototypes to visualize the layout and design.
                                  <br> <b> Development:</b> <br> Writing the code for the front-end and back-end, integrating databases, and implementing functionality.
                                  <br> <b> Testing:</b>     <br> Ensuring the website works as intended across different devices and browsers, and fixing any bugs or issues.
                                  <br> <b>Deployment:</b>   <br> Publishing the website to a live server and making it accessible to users.
                                  <br> <b>Maintenance:</b>  <br> Regularly updating and improving the website to ensure security, performance, and relevance.
                                 </p>
                                </details>
                                <span><i class="fa-solid fa-video"></i> 120 Hours video Duration</span> <br>
                                <span> <i class="fa-solid fa-tv"></i> 60 Live Classes Sessions</span> <br>
                                <span><i class="fa-solid fa-check"></i> 100% Clear doubts During Sessions </span> <br>
                                <span><i class="fa-solid fa-check"></i>  knowlage PHP Mysqli and Node.js langauges </span> <br>
                                <span><i class="fa-solid fa-certificate"></i> 1 completion Certificate </span>  <br>
                                <button class="Enroll-btn" id="show" id="show"> Enroll Now</button>
                     </div>
                </div>
            </div>
         </section>
         <section class="container" id="php-deve">
            <div class="row">
                <div class="col-md-12">
                        <div class="course-details">
                           <form action="" class="payment-form">
                                <h2>Payment</h2>
                              <label for="">Amount</label> <br>
                              <input type="text" placeholder="" class="form-control" value="$130.00"> <br>
                              <label for="">Name</label> <br>
                              <input type="text"  class="form-control" placeholder="Your Name"> <br>
                              <label for="">Phone </label> <br>
                              <input type="number" class="form-control"  placeholder="Your Phone Number"> <br>
                              <label for="">Email</label> <br>
                              <input type="email"  class="form-control" placeholder="Your Email">
                              <button type="submit" class="pay-btn">Pay Now</button>
                           </form>
                            <img src="images/php.jpeg" alt="" class="detail-img">
                            <div class="course-description">
                              <div style="display: flex;justify-content: space-between;">
                                 <h5> PHP Web development Course Overview </h5>   <span id="Hide"> X</span>
                                </div>
                              <details>
                              <summary>Description</summary>
                               <p>
                                 PHP (Hypertext Preprocessor) is a widely-used, open-source scripting language designed for web development. 
                                 It is especially suited for creating dynamic and interactive web pages. PHP code is executed on the server, 
                                 and the result is sent to the client's browser as plain HTML. Here’s an overview of PHP web development:      </p>
                              </details>
                              <details>
                                <summary>Key Features of PHP</summary>
                                 <p>
                                   <b> Ease of Use:</b> <br> PHP is relatively easy to learn for beginners, with a syntax that is straightforward and well-documented.
                                   <b> Open Source:</b> <br> PHP is free to use, and its source code is available for developers to study and modify.
                                   <b> Cross-Platform Compatibility:</b> <br> PHP runs on various operating systems, including Windows, Linux, Unix, and macOS.
                                   <b>Integration:</b> <br> PHP can easily integrate with various databases, including MySQL, PostgreSQL, Oracle, and SQL Server. It also works well with HTML, CSS, JavaScript, and other web technologies.
                                   <b>Community Support:</b> <br> PHP has a large and active community, offering extensive resources, libraries, frameworks, and support.
                                </details>
                                <span><i class="fa-solid fa-video"></i> 60 Hours video Duration</span> <br>
                                <span> <i class="fa-solid fa-tv"></i>  30 Live Classes Sessions</span> <br>
                                <span><i class="fa-solid fa-check"></i> 100% Clear doubts During Sessions </span> <br>
                                <span><i class="fa-solid fa-check"></i>  knowlage Frame works like laravel,CodeIgniter,Symfony </span> <br>
                                <span><i class="fa-solid fa-certificate"></i> 1 completion Certificate </span>  <br>
                                <button class="Enroll-btn" id="show" id="show" id="show" id="show"> Enroll Now</button>
                     </div>
                </div>
            </div>
         </section>
         <script>
          let show = document.getElementById('show');
          let side = document.getElementsByClassName("payment-form")[0];
           show. onclick = function (){
            if(side.style.display === "none") {
               side.style.display = "block"
           }
          else{
             side.style.display = "none"
         }
};
         </script>
         <!-- End Course description section -->
         <!-- heading section -->
         <div class="heading">
            <h2>
                 <span>Events</span>
            </h2>
          </div>
            <!-- End  heading section -->
             <!-- event Section -->
              <section class="container">
               <div class="row">
                  <div class="col-md-6">
                      <div class="event">
                         <marquee behavior="" direction="left" scrollamount="4" > This   <span class="span">12 Sep</span>  Get Live and Free Webinar. Learn Conncept of Machine Learning Form Mr: Irfan Malik.</marquee>
                       <small> It's limited-ceats hurry up!</small>
                   
                     <div class="date">
                        <span class="count"   id="days"></span> <b>Days</b>
                        <span class="count"  id="hours"></span>  <b>Hours</b>
                        <span class="count"  id="minutes"></span> <b>Min</b>
                        <span class="count"  id="seconds"></span> <b>Sec</b>
                     </div>
                     <div class="time-status">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                     </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="sign-up">
                        <form action="" class="form">
                           <h5>Register  Now</h5>
                            <input type="text" name="" id="" placeholder="Whats your Name"> <br>
                            <input type="text" name="" id="" placeholder="What your E-mail"> <br>
                            <input type="text" name="" id="" placeholder="What is your Phone Number"> <br>
                             <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Get You Seat!
                            </button>
                        </form>
                      </div>
                  </div>
               </div>
            </div>
 </section>
    <!-- End testimonials slider section -->
       <!-- Subscribe Section  -->
       <section class="container">
         <div class="row">
  <div class="col-md-12">
   <div class="subscribe">
      <div class="subcription">
       <div class="stay">
         <i class="fa-brands fa-staylinked fa-2xl" style="color: #0b419d;"></i>
         <h1><span>&nbsp; &nbsp; &nbsp; Stay Tuned With Us !</span></h1>
       </div>
        <p>Subscribe now and receive weekly newsletters and educational materials.
         new courses interesting posts popular books and much more! </p>
      </div>
      <div>
         <form class="sub-form" action="">
           <input type="text" placeholder="Enter your E-mail" name="search">
           <button type="submit">SUBSCRIBE</button>
         </form>
      </div>
    </div>
  </div>
         </div>
        </section>
        <!-- End Subscribe section  -->
                 <!-- heading section -->
        <div class="heading">
         <h2>
           Meet Our <span>Teachers</span>
         </h2>
       </div>
           <!-- End  heading section -->
          <!-- our teachers Section -->
       <section class="container">
         <div class="row">
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/Teacher-01.jpg" class="card-img-top" alt="John Doe">
                     <div class="our-teachers">
                         <h5 > Sara John</h5>
                         <p>Computer Science</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/Teacher - 02.jpeg" class="card-img-top" alt="Jane Smith">
                     <div class="our-teachers">
                         <h5> Amit Kumar </h5>
                         <p>Software Engineer</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/teacher-03.jpeg" class="card-img-top" alt="Robert Brown">
                     <div class="our-teachers">
                         <h5>Robert Brown</h5>
                         <p>Computer Science</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/Teacher-04.jpeg" class="card-img-top" alt="Emily Davis">
                     <div class="our-teachers">
                         <h5>Shaikh Al Ahmed</h5>
                         <p> Arabic </p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/Teacher-05.jpeg" class="card-img-top" alt="Michael Johnson">
                     <div class="our-teachers">
                         <h5 >Liu Hua</h5>
                         <p >Information Technology</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card teacher-card">
                     <img src="images/teacher-06.avif" class="card-img-top" alt="Sarah Wilson">
                     <div class="our-teachers">
                        <h5>Ali Reza</h5>
                        <p >History</p>
                     </div>
                 </div>
             </div>
         </div>
       </section>
      <!-- End our teachers Section -->
        <!-- heading section -->
        <div class="heading">
         <h2>
             Why <span>Reads Info</span>
         </h2>
       </div>
          <!-- Why  Section -->
          <section class="container">
         <div class="row">
             <div class="col-md-4 mb-4">
                 <div class="card">
                  <div class="icon-img">
                    <img src="images/com-icon.jpg" alt="" class="i-img">
                  </div>
                     <div class="card-body">
                         <h5 class="card-title">Comprehensive Content</h5>
                         <p class="card-text">Our courses cover all necessary topics in-depth to provide you with a thorough understanding.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card">
                  <div class="icon-img">
                    <img src="images/expr-icon.png" alt="" class="i-img">
                   </div>
                     <div class="card-body">
                         <h5 class="card-title">Expert Instructors</h5>
                         <p class="card-text">Learn from industry experts who have a wealth of knowledge and experience.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card">
                  <div class="icon-img">
                    <img src="images/flex-icon.png" alt="" class="i-img">
                   </div>
                     <div class="card-body">
                         <h5 class="card-title">Flexible Learning</h5>
                         <p class="card-text">Our courses are designed to fit into your busy schedule with flexible learning options.</p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-4 mb-4">
                 <div class="card">
                  <div class="icon-img">
                    <img src="images/affordable-icon.png" alt="" class="i-img">
                   </div>
                     <div class="card-body">
                         <h5 class="card-title">Affordable Prices</h5>
                         <p class="card-text">We offer competitive pricing to make education accessible to everyone.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card">
                    <div class="icon-img">
                        <img src="images/interactive-icon.png" alt="" class="i-img">
                       </div>
                     <div class="card-body">
                         <h5 class="card-title">Interactive Learning</h5>
                         <p class="card-text">Engage with interactive content and real-world scenarios to enhance learning.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mb-4">
                 <div class="card">
                  <div class="icon-img">
                    <img src="images/certication-icon.png" alt="" class="i-img">
                   </div>
                     <div class="card-body">
                         <h5 class="card-title">Certification</h5>
                         <p class="card-text">Receive a certification upon course completion to add to your professional profile.</p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Why section -->

       <!-- End our teachers Section -->
        <!-- heading section -->
        <div class="heading">
         <h2>
             Students <span>Testimonials</span>
         </h2>
       </div>
           <!-- End  heading section -->
      <section class="container">
         <!-- start testimonials slider section -->
   <div class="testimonails">
      <div class="slider">
        <div class="slider-btns">
         <h1>Testimonials</h1>
         <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
         <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        <div class="slides">
            <div class="slide">
                <img src="images/user.png" alt="" class="Testimonial-pic">
                <p>"Wonderfull learing plac for online its improve my mind set !"</p>
                <h1>- Jane Doe</h1>
            </div>
            <div class="slide">
               <img src="images/user.png" alt="" class="Testimonial-pic">
                <p>"Excellent Skills training  live webinars and sessions Highly informative for Students!"</p>
                <h1>-Ankit Sharma</h1>
            </div>
            <div class="slide">
               <img src="images/user.png" alt="" class="Testimonial-pic">
                <p>"A fantastic experience from start to finish. Will be back for more."</p>
                <h1>- Sarah Ali</h1>
            </div>
          </div>
      </div>
    </div>
  </section>
 </section>
      <!-- Footer Section -->
    <footer class="footer">
     <section class="container-fluid">
      <div class="row">
         <div class="col-md-4">
             <h5 class="footer-title">About Us</h5>
             <p>We are dedicated to providing the best education and resources for our students. Our courses are designed to be comprehensive, affordable, and flexible.</p>
         </div>
         <div class="col-md-4">
             <h5 class="footer-title">Quick Links</h5>
             <div class="footer-links">
                 <a href="#courses">Courses</a>
                 <a href="#about">About Us</a>
                 <a href="#contact">Contact</a>
                 <a href="">Site Map</a> 
                 <a href="#faq">FAQ</a>
             </div>
         </div>
         <div class="col-md-4">
             <h5 class="footer-title">Follow Us</h5>
             <div class="social-icons">
                 <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook    fa-xl "   style="color: #03058f;"  ></i></a>
                 <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter      fa-xl  "     style="color: #000000;"  ></i></a>
                 <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram  fa-xl  " style="color: #f10427;"  ></i></a>
                 <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin    fa-xl  "   style="color: #04739e;"  ></i></a>
             </div>
         </div>
      </div>
      <div class="row mt-4">
         <hr>
         <div class="col text-center">
             <p class="mb-0">&copy; 2024 Your Website Name. All Rights Reserved.</p>
         </div>
      </div>
     </section>
  </footer>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
   </body>
</html>