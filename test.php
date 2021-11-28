<?php
$iterator = [];
foreach (new \DirectoryIterator(__DIR__.'/src/Repository') as $item) {
    $iterator[] = $item->getFilename();
}
$scandir = \scandir(__DIR__.'/src/Repository');

$iteratorCount = \count($iterator);
$scandirCount = \count($scandir);

if ($iteratorCount === $scandirCount) {
    exit("All fine!\n");
}

echo "We have problems!\n";
echo \sprintf("DirectoryIterator returns %d elements, scandir returns %d elements\n", $iteratorCount, $scandirCount);

echo "DirectoryIterator output:\n";
foreach ($iterator as $v) {
    echo $v . "\n";
}

echo "\n";
echo "Scandir output:\n";
foreach ($scandir as $v) {
    echo $v."\n";
}
