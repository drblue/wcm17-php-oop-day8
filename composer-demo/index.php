<?php

require("vendor/autoload.php");

$faker = Faker\Factory::create();

?>

<h1>Composer demo</h1>

<p>Namn: <?php echo $faker->name; ?></p>
<p>Address: <?php echo $faker->address; ?></p>
<p>Email: <?php echo $faker->email; ?></p>
<p>paragraph: <?php echo $faker->paragraph(15); ?></p>
