<?php include 'header.php' ?>

<body>

<?php $array = get_object_vars($data); ?>

<?php $string='https://web.njit.edu/~oe52/mvc/index.php?page=tasks&action=update&id=';$string.=$_REQUEST['id']; ?>




<form action="<?php echo $string?>" method="POST" name="form">



    <div class="container">
        <h1>Create Task</h1>

        <br>

        <label><b>createddate</b></label>
        <input type="text" value="Create date.." name="createddate" >

        <br>

        <label><b>duedate</b></label>
        <input type="text" value="due date.." name="duedate" >


        <br>
        <label><b>message</b></label>

        <textarea name="message" cols="50" rows="5">task.. </textarea>


        <br>

        <label><b>isdone</b></label>
        <input type="text" value="done..?" name="isdone" >

        <br>

        <input type="submit" name="btSubmit" value="Add Task">



</form>


<?php include 'footer.php' ?>
