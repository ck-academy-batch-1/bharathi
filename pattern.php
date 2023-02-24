<?php
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
?>
<br><br>

<?php
// PHP implementation to print
// the arrow pattern

// Function to print pattern
function print_arrow($n)
{
	// for printing upper part
	// of the arrow
	for ($i = 1; $i < $n; $i++)
	{

		// To give space before printing
		// stars in upper part of arrow
		for ($j = 0; $j < $i; $j++)
		{
			echo "&nbsp;";
		}

		// To print stars in upper
		// part of the arrow
		for ($k = 0; $k < $i; $k++)
		{
			echo "*";
		}
		echo "<br>";
	}

	// for printing lower part
	// of the arrow
	for ($i = 0; $i < $n; $i++)
	{

		// To give space before printing
		// stars in lower part of arrow
		for ($j = 0; $j < $n - $i; $j++)
		{
			echo "&nbsp;";
		}

		// To print stars in lower
		// part of the arrow
		for ($k = 0; $k < $n - $i; $k++)
		{
			echo "*";
		}
		echo "<br>";
	}
}

// Driver code
$n = 5;
print_arrow($n);

// This code is contributed by Mithun Kumar
?>


<br><br>


<?php
// PHP Program to print Kite Pattern

$space = 4;
$prt = '*';

for ($i = 1; $i <= 5; $i++)
{

	// For printing the space
	for ($sp = $space; $sp >= 1; $sp--)
	{
		echo ("&nbsp");
	}

	// For printing the $
	for ($j = 1; $j <= $i; $j++)
	{
		echo ( $prt);
	}

	for ($k = 1; $k <= ($i - 1); $k++)
	{
		if ($i == 1)
		{
			continue;
		}

		echo ( $prt);
	}
echo ("<br>");
$space--;
}

$space = 1;

for ($i = 4; $i >= 1; $i--)
{
	for ($sp = $space; $sp >= 1; $sp--)
	{
		echo ("&nbsp");
	}

	for ($j = 1; $j <= $i; $j++)
	{
		echo ( $prt);
	}

	for ($k = 1; $k <= ($i - 1); $k++)
	{
		echo ( $prt);
	}

	$space++;
	echo ("<br>");
}

$space = 3;

for ($i = 2; $i <= 5; $i++)
{
	if (($i % 2) != 0)
	{
		for ($sp = $space; $sp >= 1; $sp--)
		{
			echo ("&nbsp");
		}

		for ($j = 1; $j <= $i; $j++)
		{
			echo ( $prt);
		}
	}

	if (($i % 2) != 0)
	{
		echo ("<br>");
		$space--;
	}
}

// This code is contributed
// by Sach_Code
?>



