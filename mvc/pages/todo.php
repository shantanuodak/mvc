<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=tods&action=register" method="post">
    Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>" > <br>
    Owner Id: <input type="text" name="Ownerid" value="<?php echo  $data->ownerid; ?>"><br>
    Create Date: <input type="text" name="createdate" value="<?php echo $data->createdate; ?>"><br>
    Due date : <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
    Status: <input type="text" name="status" value="<?php echo $data->status; ?>"><br>

    <input type="Submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
