<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <h2>Task Table</h2>
    <p> Task Table</p>
    <table class="table table-striped">

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>
</div>


<script src="js/scripts.js"></script>
</body>
</html>