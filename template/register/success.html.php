<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact confirmaton page</title>
        <meta name="description" content="Join us.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../css/templateU.css>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
<header>
            <?php include '../includes/header.inc.html.php'; ?>
</header>
    <nav>
            <?php include '../includes/nav.inc.html.php'; ?>
    </nav>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Sex: <?php echo htmlspecialchars($sex, ENT_QUOTES, 'UTF-8');?><br>
                  First Name: <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');?><br>
                  Last Name: <?php echo htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?><br>
                  Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');?><br>
                  Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8');?><br>
                  Message: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8');?><br>
                </p>
            </main>
<footer>
            <?php include '../includes/footer.inc.html.php'; ?>
</footer>
        </div>
    </body>
</html>