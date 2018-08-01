<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MiniChat</title>
    <link rel="stylesheet" type="text/css" href="water.css">
</head>
<body>
<center>
<h1> Welcome To My MiniChat!</h1>
<h3>Please fill the form,thank you</h3>
</center>
<center>
<form  action="send.php" method="post" onsubmit="storeMessage(event, this)" >
<fieldset>

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo" value="<?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : " " ; ?>"
 
    >

    <br>
    <label for="message">Message</label>
    <input type="text" name="message" id="message">
    <br>

    <button class="btn"  type="submit"  /> valider</button> <br>

</fieldset>
</form>
 </center>   


<div id="refresh">
<?php

include('return.php');

?>
</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="water.js" type="text/javascript"></script>
</body>
</html>