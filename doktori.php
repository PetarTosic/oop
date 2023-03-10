<?php 
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktori</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("header.php"); 
    $sql = "SELECT * FROM doktori";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $doktori = $statement->fetchAll();
    ?>

    <?php foreach($doktori AS $doktor) { ?>
        <div class="dok-div">
            <p class="dok-p"><?php echo "Ime doktora: " . $doktor['ime'] . " " . $doktor['prezime']; ?></p>
            <p class="dok-p"><?php echo "Email: " . $doktor['email']; ?></p>
        </div>
    <?php } ?>
    <a class="dok-button" href="nov-doktor.php">Unesi novog doktora</a><br>
    <a class="dok-button" href="nov-pacijent.php">Unesi novog pacijenta</a>
</body>
</html>