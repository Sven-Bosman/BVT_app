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
                <li><a href="php/gegevens.php">Gegevens</a></li>
            </ul>
        </nav>
    </header>
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

</body>

<script src="js/main.js">

</script>

</html>