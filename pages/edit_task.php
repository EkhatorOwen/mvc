
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

<?php $string='https://web.njit.edu/~oe52/mvc/index.php?page=tasks&action=update&id=';$string.=$_REQUEST['id']; ?>




<form action="<?php echo $string?>" method="POST" name="form">



    <div class="container">
        <h1>Update Task</h1>

        <br>

        <label><b>createddate</b></label>
        <input type="text" value="<?php echo $array['createddate']?>" name="createddate" >

        <br>

        <label><b>duedate</b></label>
        <input type="text" value="<?php echo $array['duedate'] ?>" name="duedate" >


        <br>
        <label><b>message</b></label>

        <textarea name="message" cols="50" rows="5"><?php echo $array['message']?> </textarea>


        <br>

        <label><b>isdone</b></label>
        <input type="text" value="<?php echo $array['isdone']?>" name="isdone" >

        <br>

        <input type="submit" name="btSubmit" value="Update">



</form>


<script src="js/scripts.js"></script>
</body>
</html>