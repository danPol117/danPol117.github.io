<!-- 
    Daniel Pol 
    10/03/2023
    IT202-003
    Unit 3 Assignment
    dmp@njit.edu
 -->

<html>

<head>
    <title>Bob's Bread Homepage</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <p>Based in Mahwah, New Jersey, Bob's Bread is a family-owned bakery that has proudly been serving its community
            ​top of the line bread products for over 80 years. Specializing in bread products such as bagels, loaves,
            and muffins, we can do everything from a small order for somebody's lunch, to a large scale request for a
            local restaurant. Everything is made fresh, with only the finest sourced ingredients, to ensure you are
            satisfied with what you are eating. You can find us at 101 Corporate Drive, Mahwah, NJ, or order right here from our website!</p>
        <h3 class="center" style="font-size: 200%">Some of our Avaiable Products </h3>
        <figure>
        <img  class="gallery" id = "centerimg" src="./images/bread1.jpeg" alt="Bread 1" height="150" />
        <figcaption>Our most famous loaf of bread.</figcaption>
        </figure>
        <figure>
        <img class="gallery" id = "centerimg" src="./images/bread2.jpeg" alt="Bread 2" height="150" />
        <figcaption>A selction of our various products.</figcaption>
        </figure>
        <figure>
        <img class="gallery" id = "centerimg" src="./images/bread3.jpeg" alt="Bread 3" height="150" />
        <figcaption>Some of our more exotic products, such as pretzles.</figcaption>
        </figure>
        <figure>
        <img class="gallery" id = "centerimg" src="./images/bread4.jpeg" alt="Bread 4" height="150" />
        <figcaption>Selection of both sweet and savory goods.</figcaption>
        </figure>

    </main>
    <?php include('footer.php'); ?>
</body>

</html>