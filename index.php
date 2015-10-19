<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/17/15
 * Time: 12:46 PM.
 */
require 'vendor/autoload.php';

use Carbon\Carbon;
use Respect\Validation\Validator as v;

$faker = Faker\Factory::create('uk_UA');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 2</title>
</head>
<body>
<?php
echo '<h3>Home Work 2</h3>';
echo('Now in <b>Kiev</b>: '.Carbon::now().' || ');
echo('in <b>New York</b>: '.Carbon::now('America/New_York').' || ');
echo('in <b>London</b>: '.Carbon::now('Europe/London').'<hr />');
echo '<b>Generating fake data:</b><br />';
echo 'Enter number of data you want (between 1 and 150)';
?>
<form method="post" action="">
        <label for="number">Entet number</label>
        <input type="text" value="" name="number"/>
        <input type="submit" value="Generate"/>
</form><hr />
<?php
if (isset($_POST['number'])) {
    $num = 1;
    if (v::string()->notEmpty()->validate($_POST['number'])) {
        if (v::numeric()->positive()->between(0, 151)->validate($_POST['number'])) {
            $n = $_POST['number'];
            for ($i = 0; $i < $n; ++$i) {
                echo "<b>$num</b>name: ".$faker->name.'<br />';
                echo 'address: '.$faker->address.'<br /><br />';
                echo 'comments: '.$faker->text.'<br />';
                ++$num;
            }
        } else {
            echo'you entered not correct data';
        }
    } else {
        echo 'you entered empty data';
    }
}
?>
</body>
</html>
