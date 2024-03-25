<!DOCTYPE html>
<?php
@include_once 'php/create_file.php'; 
?>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Beroeps_Vitaliteit</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="h-list"><button>Form</button></li>
                <li class="h-list"><button>samenVatting</button></li>
                <li class="h-list"><a href="php/gegevens.php">Gegevens</a></li>
            </ul>
        </nav>
    </header>
<main>    
    <div class="batterij" id="batterij-1"></div>
    <div class="batterij" id="batterij-2"></div>
    <div class="batterij" id="batterij-3"></div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Naam: <input type="text" name="naam" required><br>
        E-mail: <input type="email" name="email" required><br>
        Bericht: <textarea name="bericht" required></textarea><br>
        <input type="submit" value="Verzenden">
    </form>


        <button type="submit">Submit</button>
    </form>
</main>
</body>

<script src="js/main.js">

</script>

</html>