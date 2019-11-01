<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>City Mall</title>
    <meta name="theme-color" content="#161719">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
</head>
<body>
<?php echo '<p>Hello, everyone!!!</p>';?>
<?php echo $_SERVER['HTTP_USER_AGENT'];?>


<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
  echo '<p>Вы используете Internet Explorer.<br /></p>';
}
?>
</body>
</html>
