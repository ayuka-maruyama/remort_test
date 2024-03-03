<?php
function getSquareArea($base , $height) //四角形の面積を求める
{
    return $base * $height;
}

function getTriangleArea($base , $height) //三角形の面積を求める
{
    return $base * $height / 2 ;
}

function getTrapezoidArea($uppeerBase , $lowerBase ,$height) //台形の面積を求める
{
    return ($uppeerBase + $lowerBase) * $height / 2; 
}

echo getSquareArea(5 ,5) . "\n";
echo getTriangleArea(7,8) . "\n";
echo getTrapezoidArea(4 , 5 ,4);
