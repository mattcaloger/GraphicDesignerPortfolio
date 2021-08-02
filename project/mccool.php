<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCCOOL’S ANTIQUES</title>
    
    <?php 
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/headerIncludes.php"); 
    ?>

</head>

<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/3dbox.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/navbar.php");
        
    ?>

    <div class="content">
        <div class="label-container">
            <div class="label-header">
                <div class="label-text">MCCOOL’S ANTIQUES</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        An exercise in logo making for an antique shop. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_McCool\EM_McCoolLogos_BlueGold.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_McCool\EM_McCoolLogos_RedYellow.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>