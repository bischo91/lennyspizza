<html lang="en" dir="ltr">
<head><?php include 'head.php' ?></head>
<body><header><?php include 'header.php' ?></header>
  <div class="container">
    <div class="content">
      <h1 class="center-align">CONTACT US</h1>

      <div class="content-left">
        <img src="images/contact_us.jpg" alt="contact" style="max-height: 500px">
        <br><br>
        Unfortunately, we do not take any online order.
      </div>
      <form class="content-right contactus-font" name="contactform" method="post" action="send_form_email.php">
        <label for="name">Name *</label>
        <input  type="text" name="name" class="contact-input" style="display:block;">
        <label for="email">Email Address *</label>
        <input  type="text" name="email" class="contact-input"style="display:block;">
        <label for="telephone">Telephone Number</label>
        <input  type="text" name="telephone" class="contact-input" style="display:block;">
        <label for="comments">Message *</label>
        <textarea  name="comments" class="contact-input-message" style="display:block;"></textarea>
        <input type="submit" value="Submit" style="display: block; margin-top: 1em; font-size: 1.2em; border-radius: 10px">
      </form>
    </div><!-- class content -->
  </div><!-- class container -->
  <script src="apps.js"></script>
</body>
<footer><?php include 'footer.php'?></footer>
</html>
