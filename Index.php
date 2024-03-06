<!DOCTYPE html>
<?php
@include_once 'php/create_file.php'; 
?>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beroeps_Vitaliteit</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><button>Form</button></li>
                <li><button>samenVatting</button></li>
            </ul>
        </nav>
    </header>
    <div class="batterij" id="batterij-1"></div>
    <div class="batterij" id="batterij-2"></div>
    <div class="batterij" id="batterij-3"></div>

<form action="php/formhandler.php" method="post" name="form">
    <input type="datetime-local" name="time" id="time">


    <button type="submit">Submit</button>
</form>

</body>

<script src="js/main.js">

</script>

</html>