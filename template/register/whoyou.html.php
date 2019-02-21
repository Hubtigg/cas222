<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACE | Registration</title>
  <meta name="description" content="Register.">
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
      <?php include '../includes/header.inc.html.php';?>
    </header>
    <nav>
      <?php include '../includes/nav.inc.html.php';?>
    </nav>
    <main>
      <h1>Register here!</h1>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="register">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <ul style="list-style: none;">
 
        <li><label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required></li><br>
        <li><label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required></li><br>
        <li><label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required></li><br>
        <li><label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone"></li><br>
        <li><label for="myage">Age:</label>
          <input type="number" name="myage" id="myage"></li><br>
        <li><label for="sex">Sex:</label>
        <select size="1" name="sex" id="sex">
          <option>Your Sex</option>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select></li><br>
        <li><label for="mycomments">Special Requests</label><br>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20"></textarea><br>
          <input id="mysubmit" type="submit" value="Submit"></li>
        </ul>
      </form>
      </div>
    </main>
    <footer>
      <?php include '../includes/footer.inc.html.php';
	 ?>
    </footer>
  </div>
</body>
</html>