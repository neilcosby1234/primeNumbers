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

		if ($counter == 2)
			{
			$primeNumbers[] = $i; // store value to array
			}
		}

	return json_encode($primeNumbers); // return converted json object
	}

header('Content-Type: application/json'); // tell browser what to expect
echo prima(1000); // echo the json string returned from function

?>




