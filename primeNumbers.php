<?php

function prima($n)
	{
	$primeNumbers = []; // Initiate result array
	for ($i = 1; $i <= $n; $i++)
		{
		$counter = 0;
		for ($j = 1; $j <= $i; $j++)
			{
			if ($i % $j == 0)
				{
				$counter++;
				}
			}
			if (count($primeNumbers) == 1000){ // stop the loop once the count is at 1000
				break;
			}

		if ($counter == 2)
			{
			$primeNumbers[] = $i; // store value to array
			}
		}

	return json_encode($primeNumbers); // return converted json object
	}

header('Content-Type: application/json'); // tell browser what to expect
echo prima(10000); // echo the json string returned from function

?>




