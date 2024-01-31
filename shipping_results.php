<!-- 
    Daniel Pol 
    10/03/2023
    IT202-003
    Unit 3 Assignment
    dmp@njit.edu
 -->


<?php

    $name = filter_input(INPUT_POST,'name');
    $street = filter_input(INPUT_POST,'street');
    $city = filter_input(INPUT_POST,'city');
    $state = filter_input(INPUT_POST,'state');  
    $zip = filter_input(INPUT_POST,'zip');

    $date = filter_input(INPUT_POST,'date');
    $order = filter_input(INPUT_POST,'order',FILTER_VALIDATE_FLOAT);
    $height= filter_input(INPUT_POST,'height',FILTER_VALIDATE_FLOAT);
    $width= filter_input(INPUT_POST,'width',FILTER_VALIDATE_FLOAT);
    $lenght= filter_input(INPUT_POST,'lenght',FILTER_VALIDATE_FLOAT);
    $weight= filter_input(INPUT_POST,'weight',FILTER_VALIDATE_FLOAT);

    $error_message = '';

    if($name === false)
    {
        $error_message.="Please enter a name. ";
    }

    if($street === false)
    {
        $error_message.="Please enter a street address. ";
    }

    if($city === false)
    {
        $error_message.="Please enter a city. ";
    }

    if($state === false || $state=='')
    {
        $error_message.="Please select a state. ";
    }

    if($zip === false || strlen($zip) != 5 || !is_numeric($zip) || preg_match("/[\'^£$%&*.()}{@#~?><>,|=_+¬-]/", $zip))
    {
        $error_message.="Please enter a valid zip code of 5 digits. ";
    }

    if($date === false || !(bool)strtotime($date))
    {
        $error_message.="Please enter a valid date. ";
    }

    if($order === false)
    {
        $error_message.="Please enter a valid order number(only digits). ";
    }

    if($height === false || $height>36)
    {
        $error_message.="Please enter a valid height(max 36in). ";
    }

    if($width === false || $width>36)
    {
        $error_message.="Please enter a valid width(max 36in). ";
    }
    if($lenght === false || $lenght>36)
    {
        $error_message.="Please enter a valid lenght(max 36in). ";
    }

    if($weight === false || $weight>150)
    {
        $error_message.="Please enter a valid wight(max 150lbs). ";
    }

    if($error_message != '')
    {
        include('shipping.php');
        exit();
    }
    


?>

<html>
<head>
    <title>Confirmation Page Bobs Bread</title>
    <link rel="stylesheet" href="styles1.css">
   
</head>
<body>
<?php include('header.php');?>
<div class = "centerbox">
<h1 style="font-size:250%; ">Confrimation Page</h1>
<h2 style="font-size:150%; ">Your Generated Shipping Label</h2>
    <main class = "border" style = "" >     
    <h1 style="font-size:200%;">Shiping label for order: <?php echo htmlspecialchars($order); ?></h1>

    <div class = "border2" >
        <br>
        <label>From:</label>
        <br>
        <span>101 Corporate Drive, Mahwah, NJ</span>
        <br>
        <label>Shipping To:</label>
        <br>
        <span><?php echo htmlspecialchars($street); ?></span>
        <span>, </span>
        <span><?php echo htmlspecialchars($city); ?></span>
        <span>, </span>
        <span><?php echo htmlspecialchars($state); ?></span>
        <br>
        <label>Shipping Date:</label>
        <br>
        <span><?php echo htmlspecialchars($date); ?></span>
        <br>
        <label>Size and Weight:</label>
        <br>
        <span><?php echo htmlspecialchars($lenght); ?></span>
        <span>x</span>
        <span><?php echo htmlspecialchars($width); ?></span>
        <span>x</span>
        <span><?php echo htmlspecialchars($height); ?></span>
        <br>
        <span><?php echo htmlspecialchars($weight); ?></span>
        <span>pounds(lbs)</span>
        <br>
        <br>
        <span>USPS Priority Mail Shipping Tracking number: </span>
        <br>
        <span>#484171387</span>
        <br>
        <br>
        <figure>
        <img id = "centerimg" src="./images/barcode.jpeg" alt="bcode" height="150" />
        <figcaption>#484171387</figcaption>
        </figure>
        <br>
        <label>Recipient:</label>
        <span><?php echo htmlspecialchars($name); ?></span>
        <br>
    </div>

    </main>
    </div>
    <br>
    <br>
    <?php include('footer.php');?>
</body>
</html>