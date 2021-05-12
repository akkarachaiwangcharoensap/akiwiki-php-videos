<?php

$catWoofs = false;
$catMeows = true;

$fishCanWalk = false;
$fishCanSwim = true;

if ($catWoofs) {
    echo 'IMPOSSIBLE! CATS DO NOT WOOF.' . '<br/>';
}

if ($catMeows) {
    echo 'Cats do meow.' . '<br/>';
}

if ($fishCanWalk) {
    echo 'IMPOSSIBLE! FISH CANNOT WALK.' . '<br/>';
}
    
else if ($fishCanSwim) {
    echo 'Fish do swim' . '<br/>';
}

echo '=======================================' . '<br/>';

$grade = 50;

if ($grade > 86) {
    echo 'A' . '<br/>';
}
    
elseif ($grade > 73) {
    echo 'B' . '<br/>';
}
    
elseif ($grade > 60) {
    echo 'C+' . '<br/>';
}
    
elseif ($grade > 50) {
    echo 'C' . '<br/>';
}
    
else {
    echo 'You did not pass the course' . '<br/>';
}

$choice = 'D';

switch ($choice) {
	case 'A':
		echo 'You choose "A" choice.' . '<br/>';
		break;
	case 'B':
		echo 'You choose "B" choice.' . '<br/>';
		break;
	case 'C':
		echo 'You choose "C" choice.' . '<br/>';
		break;
	case 'D':
		echo 'You choose "D" choice.' . '<br/>';
		break;
	default:
		echo 'You did not choose a choice nor did the choice exist.';
}





