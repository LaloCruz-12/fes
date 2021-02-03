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
                 <h1>Index</h1><?php echo dirname(__FILE__) . '\key\tecnofes-spc-firebase-adminsdk-3o6ct-af4dc76ed1.json'?>
                <?php  
                    if(isset($_COOKIE['status']) && $_COOKIE['status'] != null){
                      ?>  
                        
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4> 
                        </div>
                        <?php
                        unset($_COOKIE['status']);
                    }
                ?> 
            </div>
        </div>
    </div>
    
</body>
</html>