<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple HTML &amp; CSS Login Form</title>
  <link rel="stylesheet" href="{{ asset('deshboard/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<form method="post" action="index.html">
<div class="box">
<h1>Dashboard</h1>

<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<a href="#"><div class="btn">Sign In</div></a> <!-- End Btn -->

<a href="#"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>

<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<!-- partial -->
  <script  src="{{ asset('deshboard/script.js')}}"></script>

</body>
</html>
