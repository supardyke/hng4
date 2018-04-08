<!DOCTYPE html>
<html lang="eng">
<head>
    <title>
        HNG App
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="description" content="My hng app">
    <meta name="author" content="Supardyke">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
    <section class="section"> 
        <div>
            <img src="img/img3.jpg" class="image" alt="image" />
        </div>
        <div class="position">
            <h1 class="heading text-center">
                Welcome to HNG<br/>
                Internship<br/>
                programme
            </h1>
            <h2 class="text-center time">
                <?php 
                echo date("Y-m-d h:i:sa"); 
                ?>
            </h2>
        </div>
    </section> 
</body>
</html>