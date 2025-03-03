<?php
function generatePassword($length = 0)
{
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randomChar = chr(mt_rand(33, 126));
        $password .= $randomChar;
    }
    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD GENERATOR</title>
</head>

<body>
    <h1>PASSWORD GENERATOR</h1>
    <h2>Set your password</h2>

    <form action="./index.php" method="GET">
        <label for="length">Password Length:</label>
        <input type="number" id="length" name="length" min="1" max="10" required>
        <button type="submit">SET</button>
    </form>
    <?php
    if (isset($_GET["length"])) {
        echo generatePassword($_GET["length"]);
    }
    ?>
</body>

</html>