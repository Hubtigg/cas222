<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Contact Form</title>
  <meta name="description" content="Contact Us.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/navigation.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href=../css/templateU.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php include '../includes/header.inc.html.php';
	 ?>
    </header>
    <nav>
      <?php include '../includes/nav.inc.html.php';
	 ?>
    </nav>
    <main>
      <h1>Contact us with any questions or concerns.</h1>
      <form method="post" action=" " id="inquiryForm">
       <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myfname">Name:</label>
          <input type="text" name="myfname" id="myfname"><br><br>
        <label for="myemail">E-mail:</label>
          <input type="text" name="myemail" id="myemail"><br><br>
        <label for="mycomments">Message:</label><br>
          <textarea form="inquiryForm" rows="10" cols="50" name="mycomments" id="mycomments"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
    </main>
    <footer>
      <?php include '../includes/footer.inc.html.php';
	 ?>
    </footer>
  </div>
</body>
</html>