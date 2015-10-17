<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/17/15
 * Time: 12:46 PM
 */
require 'vendor/autoload.php';

use Carbon\Carbon;

$faker = Faker\Factory::create('uk_UA');
# $fake = Faker;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 2</title>
</head>
<body>
<?php
echo "<h3>Home Work 2</h3><br />";
echo("Now in Kiev: ". Carbon::now()." || ");
echo("Now in New York: ". Carbon::now('America/New_York')." || ");
echo("Now in London: ". Carbon::now('Europe/London')."<hr />");
echo '<b>Faker:</b><br />';
echo "name: ".$faker->name."<br />";
echo "address: ".$faker->address."<br /><br />";
echo "text: ".$faker->text;
# echo "Phone: ".$fake->phoneNumber;
?>
</body>
</html>