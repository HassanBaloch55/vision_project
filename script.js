
      $(document).ready(function(){
        $("#Ms").click(function(){
           $("#ms-office").show()
           $("#webdesign").hide()
           $("#webdeve").hide()
           $("#php-deve").hide()
        })

     })
     $(document).ready(function(){
        $("#design").click(function(){
           $("#webdesign").show()
           $("#ms-office").hide()
           $("#webdeve").hide()
           $("#php-deve").hide()
          
        })

     })
     $(document).ready(function(){
        $("#development").click(function(){
           $("#webdeve").show()
           $("#ms-office").hide()
           $("#webdesign").hide()
           $("#php-deve").hide()
        })
     })
     $(document).ready(function(){
      $("#PHP").click(function(){
         $("#webdeve").hide()
         $("#ms-office").hide()
         $("#webdesign").hide()
         $("#php-deve").show()
      })
   })
     $(document).ready(function(){
      $("#Hide").click(function(){
         $("#ms-office").hide()
       
      })
   })
//  end register form code
// limited time out 
// Set the date we're counting down to
let countDownDate = new Date();
countDownDate.setDate(countDownDate.getDate() + 2);

// Update the count down every 1 second
let countdownFunction = setInterval(function() {
    // Get today's date and time
    let now = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the elements with id="days", "hours", "minutes", "seconds"
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(countdownFunction);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);

