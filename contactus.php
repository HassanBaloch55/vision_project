<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
  <style>
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #e6a903;
    }
    .card h2 {
      font-size: 1.5em;
    }
    .contact-form{
      background-color: rgb(2, 116, 59);
      color: white;
      border-bottom: none;
      padding: 2vh 2vw;
    }
    .btn-primary {
      background-color: #bb0971;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
    }
    .btn-primary:hover {
      background-color: #07977f;
    }
    .form-group label {
      font-weight: bold;
    }
    
 .contact-us-text{
   background-color: #06999e;
   border: 1px solid #ddd;
   padding: 1.6vw;
   margin: 0.8vw;
   width: 100%;
   height: auto;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.616);
 
 }
 .contact-us-text p{
    padding: 2vh 2vw;
    margin-left: 5vw;
    font-size: 1.2em;
    line-height: 50px;
    text-align: center;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 }
 .contact-us-text p a{
     color: #04fd19;
    
 }
 .page{
  height: auto;
  padding: 2vh 2vw;
  margin: 1vh 1vw;
  text-align: center;
  line-height: 50px;
  background-color: rgb(2, 116, 59);
 }
 .page i {
  text-align: center;
 }
 .page span a {
   font-size: 1em;
   color: rgb(255, 255, 255);
   font-weight: bold;
 }
  </style>
<body>
  <section class="container">
    <div class="col-md-12">
      <div class="contact-us-text">
        <p>
          &nbsp;&nbsp;&nbsp; If you would like to get in touch with us, please feel free to reach 
          out via email at
          <b><a href="">SindhCrafts786@gmail.com</a></b> or by phone at <a href="">+0900-784523</a>.
          Our customer support team is available to assist you with any questions,
          concerns, or feedback you may have. We look forward to hearing from you!
       </p>
     </div>
    </div>
      <div class="row">
        <div class="col-md-4"><div class="page">
          <i class="fa-brands fa-rocketchat fa-2xl" style="color: rgb(255, 255, 255);"></i> <br>
          <span>
             <a href="">  Chat with Us !</a>
          </span>
       </div></div>
        <div class="col-md-4">
          <div class="page">
            <i class="fa-solid fa-at fa-2xl" style="color: rgb(168, 233, 210);"></i> <br>
             <span>
                 <a href="">Mail us for contact !</a>
               </span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="page">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #70ff5e;"></i> <br>
           <span>
            <a href="">Contact us throw  Whatsapp!</a>
          </span>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"><div class="page">
          <i class="fa-solid fa-phone fa-2xl" style="color: #93c9f1;"></i> <br>
          <span>
            <a href="">Contact with our agent throw call !</a>
        </span>
      </div></div>
        <div class="col-md-4">
          <div class="page">
            <i class="fa fa-location-arrow  fa-2xl" aria-hidden="true"></i> <br>
            <span>
              <a href="">Visit our main branch!</a>
           </span>
         </div>
        </div>
        <div class="col-md-4">
          <div class="page">
            <i class="fa-brands fa-square-instagram fa-2xl" style="color: #fc2f2f;"></i> <br>
           <span>
             <a href="">Contact us throw Instagram !</a>
           </span>
         </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="page">
          <i class="fa-brands fa-pinterest fa-2xl" style="color: rgb(221, 199, 199);"></i> <br>
         <span>
           <a href="">Contact us throw Pinterest !</a>
         </span>
     </div>
      </div>
      <div class="col-md-4">
        <div class="page">
          <i class="fa-brands fa-linkedin fa-2xl" style="color: rgb(141, 161, 199);"></i> <br>
        <span>
         <a href="">Contact us throw Linkdin !</a>
        </span>
     </div>
      </div>
      <div class="col-md-4">
        <div class="page">
          <i class="fa-brands fa-facebook fa-2xl" style="color: blue;"></i> <br>
         <span>
          <a href="">Contact us throw Facebook !</a>
         </span>
      </div>
      </div>
    </div>
  </section>
      <!-- contact form section -->
    <section class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card mt-5">
              <div class="card-header text-center">
                <h2>For Any Information Connect with Us!</h2>
              </div>
                <form class="contact-form">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </section>
         <!-- End contact form section -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
