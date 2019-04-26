<?php
fscanf(STDIN, '%d %d %d', $a, $b, $c);
echo($a <=> $c) * ($b <=> $c) < 0 ? 'Yes' : 'No';
