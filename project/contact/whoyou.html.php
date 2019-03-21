<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACE | Contact</title>
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
      <h2>Contact us any time</h2>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="register">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <ul style="list-style: none;">
        <li><label for="myfname">*Name:</label>
          <input type="text" name="myfname" id="myfname" required></li><br>
        <li><label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required></li><br>
        <li><label for="status">Status:</label>
        <select size="1" name="status" id="status">
          <option value="I">Interested Party</option>
          <option value="A">Athlete</option>
          <option value="V">Volunteer</option>
        </select></li><br>
        <li><label for="mycomments">Comments and Questions</label><br>
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