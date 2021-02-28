<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Star Wars</title>
            <script src="https://kit.fontawesome.com/5d0c07b8e7.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/>
            <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
            <link rel="stylesheet" href="<?php echo DIR_CSS; ?>" />
        </head>
        <body>

            <header id="header">
                <img src="<?php echo DIR_IMG."logo.png"; ?>" />
                <?php include_once DIR_MENU; ?>
            </header>