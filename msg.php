<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $to='anchaltiwari1607@gmail.com';
    $subject='Form Contact';
    $message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo " <h1> Sent Successfully! Thank you"." ".$name.", We will contact you shortly! </h1>";
    }
    else{
      echo "Something went wrong!";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact form</title>
  <style type="text/css">
    .contain{
        margin: 0;
        padding: 0;
        color: black;
        text-align: center;
        background:url("images/contact.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        background-position: center;
        font-family: sans-serif;
      }
        #contact-form{
        padding-top: 100px;
      }
      form{
        margin-top: 50px;
        transition: all 4s ease-in-out;
      }
      .form-control{
        width: 600px;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid black;
        color: white;
        font-size: 18px;
        margin-bottom: 16
      }
      input{
        height: 45px;
      }
      form .submit{
        background-color: #ff5722;
        border-color: transparent;
        color: #fff;font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        height: 50px;
        margin-top: 20px;
      }
      form.submit:hover{
        background-color: #f44336;
        cursor: pointer;
      }
      ::placeholder{
        color:white;
      }

  </style>
</head>
<body class="contain">
  <div class="event">
  <div id="contact-form">
    <form action="msg.php" id="contact-form" method="post" >
      <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" pattern="[a-zA-Z]{1,}" required><br>
      <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
      <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
      <input type="submit" name="submit" class="form-control submit" value="Send Message">
    </form>
  </div>
</div>
</body>
</html>


