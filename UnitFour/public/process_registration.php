<?php
include_once 'header.php';

if (isset($_POST['register']))
{

    $customerName = $_POST['customer_name'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];

}
?>

<body class = "bg-info">
<div class = "container-fluid col-md-10 offset-md-1">
    <div class = "row">
        <div class = "card mt-3 px2 py-2">
            <h1>Stationary Application: Registration landing Page</h1>
            <p>
            <p>Greetings <?php echo $customerName ?></p><p>Your contact details are :
            <?php echo $postcode?> at <?php echo $email?>
            </p>
        </div>

    </div>

</div>


</body>

<?php
    include_once 'footer.php';
?>
