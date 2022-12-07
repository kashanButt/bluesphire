<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $companyName = "Blue Sphire";
            $seperator = "-";
            if($_SERVER["REQUEST_URI"] == "/bluesphire/admin"){
                echo "Blue Sphire Admin";
            }else{
                echo "";
            }
        ?>
    </title>
</head>
<body>
    
</body>
</html>