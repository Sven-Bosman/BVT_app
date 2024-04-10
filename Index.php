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
                <li class="h-list"><a class="nuw" href="php/gegevens.php">Gegevens</a></li>
            </ul>
        </nav>
    </header>
<div class="outer_form">
    <div class="holder">
        <div class="batterij" id="batterij-1">

            <img src="assests/img/Project_3_Batterij_1.png	" alt="" srcset="">
            <img src="assests/img/Project_3_Batterij_2.png" alt="" srcset="">
            <img src="assests/img/Project_3_Batterij_3.png" alt="" srcset="">
            <img src="assests/img/Project_3_Battery_4.png" alt="" srcset="">
            <img src="assests/img/Project_3_Battery_5.png" alt="" srcset="">

        </div>




        <div class="batterij" id="batterij-2">

        </div>




        <div class="batterij" id="batterij-3">

        </div>
    </div>

    
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