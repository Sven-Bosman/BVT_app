<!DOCTYPE html>
<?php
@include_once 'php/create_file.php'; 
?>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/baterijen.css">
    
    <title>Beroeps_Vitaliteit</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="h-list"><button>Form</button></li>
                <li class="h-list"><button>samenVatting</button></li>
                <li class="h-list"><a class="nuw" href="php/gegevens.php">Gegevens</a></li>
            </ul>
        </nav>
    </header>
<div class="outer_form">
    <div class="batterij" id="batterij-1"><img src="assests/img/Batterij.png" alt="bat-1" width="10rem"></div>
    <div class="batterij" id="batterij-2"><img src="assests/img/Batterij.png" alt="bat-2" width="10rem" ></div>
    <div class="batterij" id="batterij-3"><img src="assests/img/Batterij.png" alt="bat-3" width="10rem" ></div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Naam: <input type="text" name="naam" required><br>
        E-mail: <input type="email" name="email" required><br>
        Bericht: <textarea name="bericht" required></textarea><br>
        check: <input type="radio" name="check" id="checked">
        <input type="submit" value="Verzenden">
    </form>


</div>
</body>

<script src="js/main.js">

</script>

</html>