@include('layout.header')

<!DOCTYPE html>
<html>
<title>ART MAGIC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/contact.css">

<body>
<section class="contact">
  <div class="content">
    <h2>Contact</h2>
  </div>

  <div class="contain">
    <div class="contactInfo">
      <div class="box">
        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
        <div class="text">
          <h3><b>Address</b></h3>
          <p>85-B<br> New Kitchlu Nagar,<br>Ludhiana, Punjab,<br>141001</p>
        </div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-phone"></i></div>
        <div class="text">
          <h3><b>Phone</b></h3>
          <p>+91 7087280972</p>
        </div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
        <div class="text">
          <h3><b>Email</b></h3>
          <p>aadhaar2k@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="contact-form">
  <form id="contact-form" method="POST" action="/add">
      @csrf 
    <input name="name" type="text" class="form-control" placeholder="Your Name" required>
    <br>
    <input name="mobileno" type="text" class="form-control" placeholder="Your Mobile Number" required>
    <br>
    <input name="email" type="email" class="form-control" placeholder="Your Email" required>
    <br>
    <textarea name="message" class="form-control" placeholder="Write your message" row="4" required></textarea>
    <br>
    <input type="submit" class="form-control submit" value="SEND MESSAGE">
  </form>
</div>

</body>
</html>
@include ('layout.footer')