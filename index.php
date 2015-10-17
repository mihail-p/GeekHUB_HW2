<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/17/15
 * Time: 12:46 PM
 */
require 'vendor/autoload.php';

use Carbon\Carbon;

echo "<h3>Home Work 2</h3><br />";
echo("Now in Kiev: ". Carbon::now()." || ");
echo("Now in New York: ". Carbon::now('America/New_York')." || ");
echo("Now in London: ". Carbon::now('Europe/London')."<hr />");
