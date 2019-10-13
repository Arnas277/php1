<?php
require_once 'vendor/autoload.php';

include 'src/funkcija1.php';
include 'src/funkcija2.php';
include 'src/funkcija3.php';
include 'src/funkcija4.php';

use Nfq\Akademija\NotTyped;
use Nfq\Akademija\Soft;
use Nfq\Akademija\Strict;

echo "calculateHomeWorkSum: " . calculateHomeWorkSum(3,2.2, '1'). PHP_EOL;
echo "Nfq\Akademija\NotTyped\calculateHomeWorkSum: " . Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1'). PHP_EOL;
echo "Nfq\Akademija\Soft\calculateHomeWorkSum: " . Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,'1'). PHP_EOL;
echo "Nfq\Akademija\Strict\calculateHomeWorkSum: " . Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,'1'). PHP_EOL;






