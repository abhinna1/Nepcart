
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
        <?php
        session_start();
        include_once('EditUI.php');
        
        
        $edit = new EditUI();

        if($_SERVER['REQUEST_METHOD']!="POST"){
        ?>
            <div class="card" style="width:40%; margin-right:50%; margin-top:5%; margin-bottom:50%; background-color:#ecd9a7; margin-left:30%">
                <div class="card-header">
                    <?php
                    $edit->getData();
                    echo $edit->getForm();
                ?>
            </div>
        </div>
        <?php
        }
        else{
            echo $edit->submit();
        }
        ?>

</body>
</html>