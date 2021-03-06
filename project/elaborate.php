<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELABORATE</title>

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
                <div class="label-text">Elaborate</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Inspired by both vaporware and synthwave aesthetics, this animation was a little something different done for March, 2021.
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_Elaborate\EM_ElaborateAnimation_Mar21.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>