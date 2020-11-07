<?php
include_once 'header.php';
?>
<body class = "bg-info">
<div class = "container-fluid col-md-10 offset-md-1">
    <div class = "row">
        <div class = "card mt-3 px-2 py-2">
            <h1>Stationary Application: Landing page</h1>
            <p>
                <?php
                echo "Welcome. You have selected: ".$_GET["Agreement"]." : for the agreement"
                ?>
            </p>
            <p>
                <?php
                include_once ('registrationPanel.php');
                ?>
            </p>

        </div>
    </div>
</div>




<?php
include_once 'footer.php';
?>
