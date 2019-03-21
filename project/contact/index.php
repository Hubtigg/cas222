<?php

if (isset($_POST['myfname']) AND empty($_POST['honeypot']))
  {
   	include '../includes/db.inc.php'; //connect to database
	
	$status = $_POST['status'];
	$name = $_POST['myfname'];
	$email = $_POST['myemail'];
	$comments = $_POST['mycomments'];
    						//register is a table in the database
    try {
      $sql = 'INSERT INTO contact SET
          status = :status,
		  name = :name,
		  email = :email,
          comments = :comments';
      $s = $pdo->prepare($sql);
      $s->bindValue(':status', $status);
	  $s->bindValue(':name', $name);
	  $s->bindValue(':email', $email);
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
