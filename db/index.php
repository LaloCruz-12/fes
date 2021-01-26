<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php session_start();?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php  
                    if(isset($_SESSION['status']) && $_SESSION['status'] != null){
                      ?>  
                        
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4> <?php echo $_SESSION['status'] ?>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>