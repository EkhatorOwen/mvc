<?php include 'header.php' ?>


<article>


<form action="https://web.njit.edu/~oe52/mvc/index.php?page=tasks&action=store" method="POST" name="form">



    <div class="container">
        <h1>Create Task</h1>

        <br>

        <label><b>createddate</b></label>
        <input type="text" value="" name="createddate" >

        <br>

        <label><b>duedate</b></label>
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
