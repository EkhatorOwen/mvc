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

<?php $array = get_object_vars($data); ?>

<?php $string='https://web.njit.edu/~oe52/mvc/index.php?page=accounts&action=update&id=';$string.=$_REQUEST['id']; ?>




<form action=<?php echo $string ?> method="POST">



    <div class="container">
        <label><b>email</b></label>
        <input type="text" value="<?php echo $array['email']?>" name="email" >

        <br>

        <label><b>firstname</b></label>
        <input type="text" value="<?php echo $array['fname']?>" name="fname" >

        <br>

        <label><b>lastname</b></label>
        <input type="text" value="<?php echo $array['lname']?>" name="lname" >

        <br>

        <label><b>phone</b></label>
        <input type="text" value="<?php echo $array['phone'] ?>" name="phone" >

        <br>

        <label><b>birthday</b></label>
        <input type="text" value="<?php echo $array['birthday']?>" name="birthday" >

        <br>

        <label><b>gender</b></label>
        <input type="text" value="<?php echo $array['gender']?>" name="gender" >

        <br>

        <label><b>password</b></label>
        <input type="text" value="<?php echo $array['password'] ?>" name="password" >

        <button type="submit">Update</button>
    </div>



</form>



<script src="js/scripts.js"></script>
</body>
</html>