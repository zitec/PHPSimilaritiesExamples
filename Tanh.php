<?php
/**
 * You can use Tanh to calculate similarity between two data sets that
 * have different sizes (no. of terms). The sets can be either expressed as
 * doubles or as binary. The order of the elements is not relevant.
 * The array keys are taken into account.
 * 
 * Example: you want to calculate the similarity between products. Each
 * product has a set of attributes and two or more attributes have the
 * same value(ie. UV factor 3 and Inch size 3) that is why their name
 * must be taken into account as well
 */
 
// Example of double data:
$doubles1 = array("k1" => 0.5, "k2" => 0.16, "k4" => 0.16, "k6" => 0.16, "k22" => 0);
$doubles2 = array("k1" => 2, "k3" => 0.16, "k4" => 2, "k7" => 0.16, "k10" => 3.5, "k12" => 3, "k22" => 4);

$tanhDouble = new Similarities\Tanh\TanhArrays($doubles1, $doubles2);
echo $tanhDouble->get() . "\n";

// Cosine method also works with characters of a string
$string1 = "John Doe The First";
$string2 = "Johnny Doe The Second";
$tanhChars = new Similarities\Tanh\TanhChars($string1, $string2);
echo $tanhChars->get() . "\n\n";

// And it also works with words of a string, in which case you will have
// to provide the words separator as the third argument to constructor;
// Default to " " (space charcter)
$longString1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
$longString2 = "Lorem Ipsum has been the industry standard dummy text ever since the 1500s";
$tanhWords = new Similarities\Tanh\TanhWords($longString1, $longString2);
echo $tanhWords->get() . "\n";
