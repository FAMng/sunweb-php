<?php include_once './img.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Images</title>
</head>
<body>
<table>
    <?php

    $i = 0;
    foreach ($images as $image) {
        if ($i % 4 === 0) {
            echo '<tr>';
        }

        echo '<td>';
        echo '<img src="' . $image . '" width="250" height="250" alt="Image">';
        echo '</td>';

        $i++;
        if ($i % 4 === 0) {
            echo '</tr>';
        }
    }
    ?>
</table>
<form method="post" action="">
    <input type="submit" name="copy" id="copyButton" value="Copy">
    <input type="submit" name="delete" id="deleteButton" value="Delete">
</form>
</body>
</html>


