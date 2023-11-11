<?php
/*Color*/
$green = "\033[92m";
$blue = "\033[94m";
$red = "\033[91m";
$cyan = "\033[96m";
$yellow = "\033[93m";
$bold = "\033[1m";
$underline = "\033[4m";
$white = "\033[0m";

/*Form*/
$date = date('d-M-Y H:i');
//system("clear");

// Create an array to store results
$resultsArray = [];

echo $red . "
___ ____ _____    ____              _
|_ _/ ___|_   _|  / ___|__ _ _ __ __| |
 | | |     | |   | |   / _` | '__/ _` |
 | | |___  | |   | |__| (_| | | | (_| |
|___\____| |_|    \____\__,_|_|  \__,_|

";
echo $blue . "==================================";
echo $bold . $green . "\nModder   : trhacknon
Team    : Trhacknon Security Script
Code    : PHP
Version : 8.9.8.0
Note: 
DON'T TRUST ANYONE!!\n";
echo $bold . $green . "DMYH    : $date\n";
echo $blue . "==================================\n";
echo $bold . $red . "Count      : ";
$count = trim(fgets(STDIN, 1024));
echo $bold . $white . "Delay      : ";
$sleep = trim(fgets(STDIN, 1024));
for ($x = 0; $x < $count; $x++) {
		$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
		$var = '/<div class="col2">(.*?)<\/div>/s';
		preg_match_all($var, $str, $matches);
		$result = [
				"name" => str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3])),
				"address" => $matches[1][8],
				"phone" => $matches[1][9],
				"email" => $matches[1][10],
				"card_number" => str_replace(" ", "", $matches[1][14]),
				"cvv" => $matches[1][16],
				"exp_date" => $matches[1][15],
		];

		// Append the result to the array
		$resultsArray[] = $result;

		echo $red . "\n $$$$$$$$$$$$$$$ MORE INFORMATION $$$$$$$$$$$$$$$\n";
		echo $bold . $cyan . "[name : " . $result["name"] . "]" .
				" [address : " . $result["address"] . "]" .
				" [phone : " . $result["phone"] . "]\n";
		echo $red . "\n $$$$$$$$$$$$$$$ CARD INFORMATION $$$$$$$$$$$$$$$\n";
		echo $bold . $yellow . "[email : " . $result["email"] . "]" .
				" [card number : " . $result["card_number"] . "]" .
				" [cvv : " . $result["cvv"] . "]" .
				" [exp-date : " . $result["exp_date"] . "]\n";
		sleep($sleep);
}

// Save results to a file
$filename = 'results.txt';
file_put_contents($filename, print_r($resultsArray, true));

// Provide a link to download the file
echo "\nResults saved to file. You can download them from: $filename\n";
?>