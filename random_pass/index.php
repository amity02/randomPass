<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Pass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="text-center mt-5">




<?php
    $randomPass = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $pass = array();
    $comb = strlen($randomPass) - 1;

    for ($i = 0; $i < 16; $i++) {
        $n = rand(0, $comb);
        $pass[] = $randomPass[$n];
    }
print(implode($pass));

?>

<form action="" method="post" class="mt-5">
    <input type="submit" name="btn" value="Generate" class="btn btn-success">
</form>


</body>
</html>