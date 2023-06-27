<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job_Khojo | Contact Us</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <script src="https://kit.fontawesome.com/446951514a.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <body>

      <nav class="nav nav_top">
        <div class="logo">
        <a href="indexF.php"> <img src="images/job-search.png" alt=""> </a>

        </div>
        <div class="nav_side">
          <a href="AboutUs.php">About Us</a>
          <a href="service.php">Services</a>
          <a href="blog.php">Blogs</a>
          <a href="contact.php">Contact Us</a>
          <a href="indexF.php">Home</a>
          <a href="register.php">Login/Register</a>
        </div>
      </nav>

<div class="contact_container">
  <h2>Contact Us</h2>
  <div class="g_map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3884.4187595876197!2d77.7019244147731!3d13.199005290706987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1d45513861cf%3A0xed8d399eb150b3a8!2sBangalore%20international%20airport!5e0!3m2!1sen!2sin!4v1628522084732!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="contact_content">
    <p><b>Address: Bangaluru, India </b></p>
    <p><b>Call: +9876543210 </b></p>
    <p><b>Mail:support@gmail.com</b></p>

  </div>
</div>





      <div class="feed" style="background-image: url(images/img5.jpg);">
        <h2>Write a review</h2>
        <div class="feed_form">
          <form name="submit-googlesheet" method="post">
            <input type="text" name="Name" value="" placeholder="Name"><br>
            <input type="email" name="Email" value="" placeholder="Email ID"><br>
            <input type="number" name="Number" value="" placeholder="Contact Number"><br>
            <textarea name="Review" rows="5" cols="7" placeholder="Write a review"></textarea><br>
            <button type="submit" name="button">Submit</button>
          </form>

        </div>

      </div>




      <footer>
        <div class="pages">
          <h3>Pages</h3>
          <a href="">About Us</a>|
          <a href="">Services</a>|
          <a href="">Blogs</a>|
          <a href="">Login</a>|
          <a href="">Sign Up</a>

        </div>
        <div class="doc">
          <h3>Documents</h3>
          <a href="">Privacy Policy</a>|
          <a href="">Tearms and Conditions</a>|
          <a href="">Refund Policy</a>

        </div>

        <div class="Social">
          <h3>Follow Us</h3>
          <a href="#"><i class="fab footer-icon fa-twitter-square"></i></a>
          <a href="#"><i class="fab footer-icon fa-facebook-square"></i></a>
          <a href="#"><i class="fab footer-icon fa-instagram-square"></i></a>
          <a href="#"><i class="fa  fa-linkedin-square" area-hidden="true"></i></a>

        </div>

        <div class="Contact">
          <h3>Contact Us</h3>
            <a href="#"><i class="fas footer-icon fa-envelope-square"></i></a>

          <a href="#"><i class="fa fa-phone-square" area-hidden="true"></i></a>
          <a href="#"><i class="fa fa-whatsapp" area-hidden="true"></i></a>

        </div>
        <hr>
        <p>Copyright &copy; 2023 Job_Khojo</p>
      </footer>




      <script type="text/javascript">
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxBotC0hBiQejlibEayohbHJObgiwfER9BpE-8wyWwQinfHfX-xrWFcZcQayBN-nkpgzQ/exec'
              const form = document.forms['submit-googlesheet']

              form.addEventListener('submit', e => {
                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                  .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                  .catch(error => console.error('Error!', error.message))
              })

      </script>
    </body>

    </html>
