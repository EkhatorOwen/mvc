<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?>

<h1>Register</h1>

<form action="index.php?page=accounts&action=store" method="POST">

    <div class="container">
        <label><b>email</b></label>
        <input type="text" placeholder="Enter email" name="email" required>

        <br>

        <label><b>firstname</b></label>
        <input type="text" placeholder="Enter firstname" name="fname" required>

        <br>

        <label><b>lastname</b></label>
        <input type="text" placeholder="Enter lastname" name="lname" required>

        <br>

        <label><b>phone</b></label>
        <input type="text" placeholder="Enter phone number" name="phone" required>

        <br>

        <label><b>birthday</b></label>
        <input type="text" placeholder="Enter birthday" name="birthday" required>

        <br>

        <label><b>gender</b></label>
        <input type="text" placeholder="Enter gender" name="gender" required>

        <br>

        <label><b>password</b></label>
        <input type="text" placeholder="Enter gender" name="password" required>

        <button type="submit">Submit</button>
    </div>



</form>


<script src="js/scripts.js"></script>
</body>
</html>

