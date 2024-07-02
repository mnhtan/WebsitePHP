<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" type="text/css" href="css/styles_admincp.css">
    <title>admincp</title>
</head>
<body>

    <h3 class="title_page">Welcome Admin Page</h3>
    <div class="wrapper">
         <?php
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");
            ?>
    </div>

</body>
</html>