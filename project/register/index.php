<?php

if (isset($_POST['name']) AND empty($_POST['honeypot']))
  {
   	include '../includes/db.inc.php'; //connect to database
	$name = $_POST['name'];	
	$sex = $_POST['sex'];
	$age = $_POST['myage'];
	$status = $_POST['status'];
	$email = $_POST['myemail'];
	$satevent = $_POST['satevent'];
	$sunevent = $_POST['sunevent'];
	$ename = $_POST['ename'];
	$ephone = $_POST['ephone'];
	$comments = $_POST['mycomments'];
    						//register is a table in the database
    try {
      $sql = 'INSERT INTO register SET
          sex = :sex,
		  name = :name,
		  ename = :ename,
		  satevent = :satevent,
		  sunevent = :sunevent,
		  email = :email,
		  ephone = :ephone,
		  status = :status,
		  age = :age,
          comments = :comments';
      $s = $pdo->prepare($sql);
      $s->bindValue(':sex', $sex);
	  $s->bindValue(':name', $name);
      $s->bindValue(':status', $status);
	  $s->bindValue(':satevent', $satevent);
	  $s->bindValue(':sunevent', $sunevent);
	  $s->bindValue(':ename', $ename);
	  $s->bindValue(':email', $email);
	  $s->bindValue(':ephone', $ephone);
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
