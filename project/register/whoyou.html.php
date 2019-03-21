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
<secton>
<aside>
 <h3>Options</h3>
 <table row=8 col=8>
   <tr>
     <th>Event</th>
     <th>Cost</th>
   </tr>
   <tr>
     <td class="text">Long Course</td>
     <td class="text">$240</td>
   </tr>
   <tr>
     <td class="text">Olympic</td>
     <td class="text">$110</td>
   </tr>
   <tr>
     <td class="text">10K</td>
     <td class="text">$50</td>
   </tr>
   <tr>
     <td class="text">Half Marathon</td>
     <td class="text">$75</td>
   </tr>
   <tr>
     <td class="text">Sprint</td>
     <td class="text">$90</td>
   </tr>
   <tr>
     <td class="text">Try-a-Tri</td>
     <td class="text">$65</td>
   </tr>
   <tr>
     <td class="text">Splash n Dash</td>
     <td class="text">FREE</td>
   </tr>

</table>	  	
</aside>
	  <h2>Cost Includes</h2>
<ul>
    <li>Food &amp; Beer</li>
    <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
    <li>Commemorative Finisher medal</li>
    <li>Accurate Chip Timing for competitive races</li>
    <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
    <li>Post-event party &amp; entertainment</li>
</ul>
<p><em>NOTE: Tech shirts guaranteed to pre-registered participants only.</em></p>

      <h2>Register here!</h2>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="register">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <ul style="list-style: none;">
 
        <li><label for="name">*Name:</label>
          <input type="text" name="name" id="name" required></li><br>
        <li><label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required></li><br>
        <li><label for="myage">Age:</label>
          <input type="number" name="myage" id="myage" style="width: 70px;"></li><br>
	    <li><label for="sex">Gender:</label>
        <select size="1" name="sex" id="sex">
          <option> </option>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select></li>
        <li><label for="status">*Status:</label>
        <select size="1" name="status" id="status" required>
		  <option> </option>
          <option value="A">Athlete</option>
          <option value="V">Volunteer</option>
        </select></li><br>
        <label for="satevent">*Saturday Event:</label>
        <select size="1" name="satevent" id="satevent" required>
          <option>Choose Your Event</option>
          <option value="long course">Long Course Triathlon - $240</option>
          <option value="Olympic">Olympic Triathlon - $110</option>
          <option value="10K">10K - $50</option>
         <option value="Half Marathon">Half Marathon - $75</option>
        </select>
        <label for="sunevent">*Sunday Event:</label>
        <select size="1" name="sunevent" id="sunevent" required>
          <option>Choose Your Event</option>
          <option value="downtown">Sprint - $90</option>
          <option value="growth">Try-A-Tri - $65</option>
          <option value="landmarks">Splash N Dash - FREE</option>
        </select>
		<li><label for="ename">*Emergency Contact:</label>
          <input type="text" name="ename" id="ename" required></li><br>
        <li><label for="ephone">*Emergency Phone:</label>
          <input type="tel" name="ephone" id="ephone" required></li><br>
        <li><label for="mycomments">Special Requests</label><br>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20"></textarea><br>
          <input id="mysubmit" type="submit" value="Submit"></li>
        </ul>
      </form>
      </div>
    </main>
</secton>
    <footer>
      <?php include '../includes/footer.inc.html.php';
	 ?>
    </footer>
  </div>
</body>
</html>