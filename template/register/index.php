<?php

if (isset($_POST['myfname']) AND empty($_POST['honeypot']))
  {
   	include '../includes/db.inc.php'; //connect to database
	
	$sex = $_POST['sex'];
	$fname = $_POST['myfname'];
	$lname = $_POST['mylname'];
	$email = $_POST['myemail'];
	$phone = $_POST['myphone'];
	$age = $_POST['myage'];
	$comments = $_POST['mycomments'];
    						//register is a table in the database
    try {
      $sql = 'INSERT INTO register SET
          sex = :sex,
		  fname = :fname,
		  lname = :lname,
		  email = :email,
		  phone = :phone,
		  age = :age,
          comments = :comments';
      $s = $pdo->prepare($sql);
      $s->bindValue(':sex', $sex);
	  $s->bindValue(':fname', $fname);
	  $s->bindValue(':lname', $lname);
	  $s->bindValue(':email', $email);
	  $s->bindValue(':phone', $phone);
	  $s->bindValue(':age', $age);
	  $s->bindValue(':comments', $comments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted patron: ' . $e->getMessage();
      include 'includes/error.html.php';
      exit();
    }

include 'success.html.php';
    
  }

else {
		include 'whoyou.html.php';
	}
