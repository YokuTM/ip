<p> Задача 3:
<p>
<?php
$N=rand();

function printDivisors($N)

{
	for ($i = 1; $i <= sqrt($N); $i++)
{
	if ($N%$i == 0)
{
	if ($n / $i == $i)
		echo $i," ";
	else 
		echo $i," ", $N/$i," ";
}
}
}
echo "Делители " . $N . " -> \n";
	printDivisors($N);
  
?>