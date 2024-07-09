<?php
function getSquareArea ($h, $b) {
    return $b * $h;
}

function getTriangleArea ($h, $b) {
    return $b * $h / 2;
}

function getTrapezoidArea ($h, $ub, $lb) {
    return ($ub + $lb) * $h / 2;
}

echo getSquareArea (10, 5) . "\n";
echo getTriangleArea (5, 12) . "\n";
echo getTrapezoidArea (4, 7, 8);