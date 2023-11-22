<?php
session_start();
if(isset($_GET['la'])){
    $_SESSION['la'] = $_GET['la'];
}
if(isset($_SESSION['la'])){
    switch($_SESSION['la']){
        case "cze":
            require_once('lang/cze.php');
          break;
        case "eng":
            require_once('lang/eng.php');
          break;
        case "ger":
            require_once('lang/ger.php');
          break;
        case "fin":
            require_once('lang/fin.php');
          break;
      default:
          require_once('lang/cze.php');
          break;
    }
}
else{
    require_once('lang/cze.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['index_title'];?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <link rel="stylesheet" href="web_style.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <style type="text/css">
        </style>
    </head>
    <body>
        <script>
            Email.send({
                Host : "strojnidilnaevangelik.answer",
                Username : "username",
                Password : "password",
                To : 'them@website.com',
                From : "you@isp.com",
                Subject : "This is the subject",
                Body : "And this is the body"
            }).then(
                message => alert(message)
            );
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>