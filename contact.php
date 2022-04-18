<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Muli&display=swap" rel="stylesheet">

  
</head>
<body>

<?php include 'navi.php'; ?>
<div class="jumbotron">
  <h1>JAStechnologies Production</h1>
  <p>Contact Us.</p>
</div>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" >Contact Us</h2>

  </div>
  
   <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div>
                <label>Name</label><br>
                <input type="text" name="user" placeholder="Name">
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Email Address">
              </div>
              <label>Mobile</label><br>
                <input type="text" name="mobile" placeholder="Contact">
              <div>
                <label>Message</label><br>
                <textarea placeholder="Message" name="comment"></textarea>
              </div>
              <button class="button_1" type="submit">Send</button>
              </div>
    </form>
  </div>



</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">&copy; JAStechnologiesProduction</p>
</footer>
</body>
</html>
