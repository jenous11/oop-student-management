<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Classes/Student.php';

    $Student1= new Student();

    $Student1->setName("Jenous"); 

    echo $Student1->getName();

    $Student1->setid(007);
    
    echo $Student1->getid();
    ?>
    
</body>
</html>