<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Confirmation Page</title>
        <meta name="description" content="Thank you for your inquiry.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../project.css>
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
                  
                  Name: <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');?><br>
                  
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?><br>
                  
                  Question: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8');?><br>
                </p>
            </main>
<footer>
            <?php include 'footer.inc.html.php'; ?>
</footer>
        </div>
    </body>
</html>