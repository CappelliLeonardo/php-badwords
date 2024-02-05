<?php
    $inputUser = $_GET['inputUser'];
    $badWords = $_GET['badWords'];
?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            echo $inputUser;
            echo strlen($inputUser);
        ?>
    </p>
    <p>
    <?php
        // 
        echo str_replace($badWords,'***',$inputUser);


        echo strlen(str_replace($badWords,'***',$inputUser));


        var_dump(str_replace($badWords,'***',$inputUser));
    ?>
    </p>
    
</body>
</html>