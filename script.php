<?php
$censor = $_GET["censor"];
$text = $_GET["text"];

$censoredText = str_replace($censor, "***", $text);

$textLengh = strlen($text);
$censoredTextLengh = strlen($censoredText);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo:<?php echo $textLengh?></h2>
    <h4><?php echo $text?></h4>
    <hr>
    <h2>Testo censurato:<?php echo $censoredTextLengh?></h2>
    <h4><?php echo $censoredText?></h4>
</body>
</html>