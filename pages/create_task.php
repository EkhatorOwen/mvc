<?php include 'header.php' ?>


<article>


<form action="https://web.njit.edu/~oe52/mvc/index.php?page=tasks&action=store" method="POST" name="form">



    <div class="container">
        <h1>Create Task</h1>

        <br>

        <label><b>createddate</b></label>
        <input type="text" value="<?php date_default_timezone_set("America/New_York");  echo  date("Y-m-d h:i:s") ?>" name="createddate" readonly>

        <br>

        <label><b>duedate(Y-m-d h:i:s)</b></label>
        <input type="text" value="" name="duedate" >
        

        <br>

        <label><b>message</b></label>

        <textarea name="message" cols="50" rows="5"> </textarea>

        <br>

        <label><b>isdone</b></label>
        <input type="text" value="" name="isdone" >

        <br>

        <input type="submit" name="btSubmit" value="Add Task">



</form>

    </article>


<?php include 'footer.php' ?>
