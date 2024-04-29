<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>HOPPY HUB WEBSITE</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Style.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  </head>
  <body>
    <section id="header">
      <div class="container">
        <img src="images/logo.png" class="logo">
        <div class="header-text">
          <h1 >Welcome to our entertainment site!
            Are you looking for a way to have fun summer trips? <br> Our website is the right place for you!</h1>
            <span class="square"></span>
          <p>The purpose is enjoy and learn about life and try something new.</p>
          <button class="common-btn">Read More</button>
          <div class="line">
            <span class="line-1"></span><br>
            <span class="line-2"></span><br>
            <span class="line-3"></span><br>
          </div>

        </div>
      </div>
    </section>
    <nav id="sideNav">
    <ul>
      <li><a href="#header">Home</a> </li>
      <li><a href="#about">About Us</a> </li>
      <li><a href="#Features">Features</a> </li>
      <li><a href="#Contact">Contact</a> </li>
    </ul>
  </nav>
  <img src="images/menu.png" id="menuBtn">

  <!--about -->
<section id="about">
  <div class="about-left-col">
    <img src="images/about.png">
  </div>
  <div class="about-right-col">
  <div class="about-text">
    <h1>About Us</h1>
    <span class="square"></span>
<p>We offer a variety of entertainment activities to suit all tastes, including:<br>

  Games: We have a wide range of games, from puzzle games to action games, to suit all ages and skill levels.<br>
  Articles: Read articles on a variety of topics, from news to entertainment.<br>
  Videos: Watch funny, interesting and inspiring videos.<br>
  Daily challenges: We set a timetable for each person in which he challenges himself to change for the better.</p><br><br>
  <div class="line">
    <span class="line-1"></span><br>
    <span class="line-2"></span><br>
    <span class="line-3"></span>
  </div>
  
  <h2>Here are some additional benefits of our website:

    Free: Our website does not require any subscription or fees.
    Easy to use: Our website interface is easy to use and navigate.
    New Content: Our website is regularly updated with new content.</h2>
    <h3>We hope you enjoy your time on our website</h3>
</div>
</div>
</section>
<!---Features--->
<section id="Features">
  <div class="Features-row">
    <div class="Features-col">
    <img src="images/pic-1.png">
    <h4>Luminous ideas</h4>
    <p>Are you looking for new ideas for your next project? <br>We have a collection of articles and tips that will help you unleash your creativity.</p></div>


    <div class="Features-col">
      <img src="images/pic-2.png">
    <h4>Challenge your mind</h4>
    <p>We have a range of games and tests<br> that will help you test your intelligence and problem-solving skills</p>
    </div>

    <div class="Features-col">
      <img src="images/pic-3.png">
    <h4>The future of humanity</h4>
    <p>Learn about space exploration plans and humanity's future in the universe.</p>
    </div>
  </div>
  <div class="Features-btn">
    <div class="line">
      <span class="line-1"></span><br>
      <span class="line-2"></span><br>
      <span class="line-3"></span>
    </div>
    <button class="common-btn">Start Free</button>
  </div>
</section>
<!---Contact-->
<section id="Contact">
  <div class="container contact-row">
      <div class="contact-left-col">
      <h1>Sign Up to join our<br>Don't wait any longer! <br>Register with us today</h1>
            <form id="login-form" method="post" action="login.php" >
            <h2>Login</h2>

                <input type="email" name="email" placeholder="Enter email" id="email">
                <span id="emptEmail"></span>
                <input type="password" name="password" placeholder="Enter password">
                <span id="emptPass" ></span>

                <div class="btn-box">
                <button  class="common-btn" type="button" id="loginId">Login</button>
                <button type="button" onclick="showSignupForm()">Sign Up</button>
                </div>
            </form>

          <form id="signup-form" method="post" action="signup.php" style="display: none;">
          <h2>Signup</h2>

              <input type="text" name="username" placeholder="Enter Name">
              <span id="SemptNm"></span>

              <input type="email" name="Semail" placeholder="Enter email">
              <span id="SemptEmail"></span>

              <input type="password" name="Spassword" placeholder="Enter password">
              <span id="SemptPass"></span>

              <input type="password" name="confirm_password" placeholder="Confirm password">
              <span id="SemptCPss"></span>

              <div class="btn-box">
                  <button class="common-btn" type="button" id="signupId">Sign Up</button>
                  <button type="button" onclick="showLoginForm()">Login</button>
              </div>
          </form>
          <div id="alert-container" style="color: red;"></div> <!-- Empty div for displaying the pop-up alert -->

          <div class="line">
              <span class="line-1"></span><br>
              <span class="line-2"></span><br>
              <span class="line-3"></span>
          </div>
      </div>
   
      <div class="contact-right-col">
          <img src="images/contact.png" alt="Contact Image">
      </div>
  </div>

</section>


<section id="footer">
  <div class="container footer-row">
    <hr>
    <div class="footer-left-col">
     <div class="footer-links">
     <div class="link-title">
      <h4>product</h4>
      <small>our plan</small><br>
      <small>Free</small>
     </div>

     <div class="link-title">
      <h4>About Us</h4>
      <small>Request Demo</small><br>
      <small>FaQs</small>
     </div>


     <div class="link-title">
      <h4>Support</h4>
      <small>Features</small><br>
      <small>Contact Us</small>
     </div>
    
     <div class="link-title">
      <h4>Explore</h4>
      <small>Find nonprofit</small><br>
      <small>Coporate solution</small>
     </div>
    </div>
  </div>

    <div class="footer-right-col">
      <div class="footer-info">
        <div class="copyright-text">
          <small>support.hoppytem@gmail.com</small><br>
          <small>copyright 2023 Hoppy Hub</small>
        </div>
        <div class="footer-logo">
          <img src="images/logo.png">
          <button class="common-btn">English</button>
        </div>
      </div>
    </div>
  </div>
</section>



<!---social-icons---->
<div class="social-icons">
  <img src="images/facebook.png">
  <img src="images/instagram.png">
  <img src="images/twitter.png">
  <img src="images/linkedin.png">
</div>



<!-- <script src="jquery-3.7.1.min.js"> </script> -->
<!-- <script src="jquery.min.js" ></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->



  <script>
    var menuBtn = document.getElementById("menuBtn");
    var sideNav = document.getElementById("sideNav");
    sideNav.style.right="-250px";
    menuBtn.onclick=function(){
      if( sideNav.style.right=="-250px"){
        sideNav.style.right="0";
      }
      else{
        sideNav.style.right="-250px";
      }
    }
    
	var scroll = new SmoothScroll('a[href*="#"]',{
    speed:1000,
    speedAsDuration:true
  });
  
  $("#loginId").on('click', function() {


    if ($('input[name="email"]').val()=='') {
     
      $('#emptEmail').text('Please enter your email')
      $("input[name='email']").css("border", "1px solid red");
      $("#emptEmail").css("color", "red");

      return false;
      
    } if ($('input[name="password"]').val()=='') {
      $('#emptPass').text('Please enter your password')
      $("input[name='password']").css("border", "1px solid red");
      $("#emptPass").css("color", "red");
      return false;
    }
    try {
      $("#emptPass").empty();
      $("#emptEmail").empty();
        $.ajax({
            url: 'login.php',
            method: 'POST',
            data: {
                'email': $('input[name="email"]').val(),
                'password': $('input[name="password"]').val(),
            },
            success: function(response) {
                console.log(response);
                var responseData = JSON.parse(response);
                alert(responseData.message);
                $("#alert-container").text(responseData.message);
                // You can handle the response here, such as displaying a message or redirecting the user
            },
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
                $("#alert-container").html(responseData.message);

                // You can handle the error here, such as displaying an error message to the user
            }
        });
    } catch (error) {
        console.error('Error occurred:', error);
    }
});

///////////////////Signup////////////////////

$("#signupId").on('click', function() {


if ($('input[name="username"]').val()=='') {
 
  $('#SemptNm').text('Please enter your name')
  $("input[name='SemptNm']").css("border", "1px solid red");
  $("#SemptNm").css("color", "red");

  return false;
  
}

if ($('input[name="Semail"]').val()=='') {
 
 $('#SemptEmail').text('Please enter your email')
 $("input[name='Semail']").css("border", "1px solid red");
 $("#SemptEmail").css("color", "red");

 return false;
 
}

if ($('input[name="Spassword"]').val()=='') {
  $('#SemptPass').text('Please enter your password')
  $("input[name='Spassword']").css("border", "1px solid red");
  $("#SemptPass").css("color", "red");
  return false;
}
 if ($('input[name="confirm_password"]').val()=='') {
  $('#SemptCPss').text('Please enter your password')
  $("input[name='SemptCPss']").css("border", "1px solid red");
  $("#SemptCPss").css("color", "red");
  return false;
}
try {

    $.ajax({
        url: 'signup.php',
        method: 'POST',
        data: {
          'username':$('input[name="username"]').val(),
            'email': $('input[name="Semail"]').val(),
            'password': $('input[name="Spassword"]').val(),
            'confirm_password': $('input[name="confirm_password"]').val(),
        },
        success: function(response) {
            console.log(response);
            var responseData = JSON.parse(response);
            alert(responseData.message);
            $("#alert-container").text(responseData.message);
            console.log(error);
            
            // You can handle the response here, such as displaying a message or redirecting the user
        },
        error: function(xhr, status, error) {
            console.error('Error occurred:', error);

            $("#alert-container").html(error);

            // You can handle the error here, such as displaying an error message to the user
        }
    });
} catch (error) {
    console.error('Error occurred:', error);
}
});

//   function handleFormSubmit(formAction) {
//     $('form').on('submit', async function(e) {
//         e.preventDefault(); // Prevent form submission

       
//     });
// }

   
        function showSignupForm() {
            const signupForm = document.getElementById('signup-form');
            signupForm.style.display = 'block';

            const loginForm = document.getElementById('login-form');
            loginForm.style.display = 'none';
            // handleFormSubmit('signup.php');
        }

        function showLoginForm() {
            const loginForm = document.getElementById('login-form');
            loginForm.style.display = 'block';

            const signupForm = document.getElementById('signup-form');
            signupForm.style.display = 'none';
            // handleFormSubmit('login.php');
        }
        
        function showAlert(message) {
            const alertContainer = document.getElementById("alert-container");
            alertContainer.innerHTML = `<div class="alert">${message}</div>`;
        }


        
  </script>



  </body>
</html>