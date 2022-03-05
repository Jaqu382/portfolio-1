<?php
$previousValue;
$currentValue;
if (isset($_POST["player"])) {
    $currentContent = "<h3>Player Character: " . "" . $_POST["player"] . "</h3>";
    foreach ($_POST as $index => $value) {
        if ($value == $_POST["player"] || $value == $_POST["submit"]) continue;
        else {
            $currentContent = $currentContent . $value . "<br />";
        }
    }

    $myfile = fopen("builds.txt", "r");

    echo ("<h2>Current build:</h2> " .  $currentContent . "</br> ");
    if (filesize("builds.txt") != 0) {
        echo ("<h2>Previous Builds:</h2>" . fread($myfile, filesize("builds.txt")));
    }
    echo ('<a href ="index.html">Return</a>');
    fclose($myfile);
    $myfile = fopen("builds.txt", "a");
    fwrite($myfile, $currentContent);
    fclose($myfile);
}
