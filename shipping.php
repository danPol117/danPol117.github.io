<!-- 
    Daniel Pol 
    10/03/2023
    IT202-003
    Unit 3 Assignment
    dmp@njit.edu
 -->

<?php
    if (!isset($name)) { $name = ''; } 
    if (!isset($street)) { $street = ''; } 
    if (!isset($city)) { $city = ''; } 
    if (!isset($state)) { $state = ''; } 

    if (!isset($zip)) { $zip = ''; } 
    if (!isset($date)) { $date = ''; } 
    if (!isset($order)) { $order = ''; } 
    if (!isset($height)) { $height = ''; } 
    if (!isset($width)) { $width = ''; } 
    if (!isset($lenght)) { $lenght = ''; } 
    if (!isset($weight)) { $weight = ''; } 
?>

<html>

<head>
    <title>Bobs Bakery Shipping Form</title>
    <link rel="stylesheet" href="styles1.css">

</head>

<body>

    <?php include('header.php');?>
    <h1 style="font-size:200%;">Shipping Form</h1>

    <?php if(!empty($error_message)) { ?>
            <p style="color: red">
                <?php echo htmlspecialchars($error_message); $error_message = '';?>
            </p>
        <?php } ?>
    <div class = "container">
    <form action="shipping_results.php" method="post">
        <label>First and Last Name</Label>
        <input type="text" name="name" value = "<?php echo htmlspecialchars($name);?>"/>
        <br>
        <label>Street address</Label>
        <input type="text" name="street" value = "<?php echo htmlspecialchars($street);?>"/>
        <br>
        <label>City</Label>
        <input type="text" name="city" value = "<?php echo htmlspecialchars($city);?>"/>
        <br>
        <label>State</label>
        <select type="text" name = "state" value = "<?php echo htmlspecialchars($state);?>">
            <option value="">Select a state...</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <br>
        <label>Zip Code</Label>
        <input type="text" name="zip" value = "<?php echo htmlspecialchars($zip);?>"/>
        <br>
        <br>
        <br>
        <label>Ship Date(mm/dd/yyyy)</Label>
        <input type="text" name="date" value = "<?php echo htmlspecialchars($date);?>"/>
        <br>
        <label>Order Number</Label>
        <input type="text" name="order" value = "<?php echo htmlspecialchars($order);?>"/>
        <br>
        <label>Height Of Package</Label>
        <input type="text" name="height" value = "<?php echo htmlspecialchars($height);?>"/>
        <br>
        <label>Width of Package</Label>
        <input type="text" name="width" value = "<?php echo htmlspecialchars($width);?>"/>
        <br>
        <label>Lenght of Package</Label>
        <input type="text" name="lenght" value = "<?php echo htmlspecialchars($lenght);?>"/>
        <br>
        <label>Weight Of Package</Label>
        <input type="text" name="weight" value = "<?php echo htmlspecialchars($weight);?>"/>
        <br>

        <input type="submit" value="Order Up!" />
    </form>

    <figure style= "margin-right:200px;">
        <img style="float:right; width:500; height:auto; " src="./images/bakers.jpeg" alt="bcode" height="150" />
        <figcaption>Thank you for your support!</figcaption>
        </figure>
    </div>
    <?php include('footer.php');?>
</body>

</html>