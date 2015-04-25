<?php
/**
 * You can use Jaccard to calculate similarity between two data sets that
 * have different sizes (no. of terms). The sets can be either expressed as
 * doubles or as binary. The order of the elements is not relevant.
 * The array keys are not taken into account.
 * 
 * Example: you want to quickly detect the similarity between two documents
 * based on their words; each document has a different number of words
 * most likely
 * or you want to detect similar orders (in an online store) on the past
 * 3 months; each order has on or many products 
 */
 
// Example of double data:
$doubles1 = array(0.1, 0.2, 0.3, 0.4, 0.5);
$doubles2 = array(0.9, 0.8, 0.3, 0.4, 0.5, 0.6, 0.06);

// Example of binary data
$binary1 = array(1, 1, 1, 1, 0);
$binary2 = array(1, 1, 1, 0, 1, 0, 0, 1);

$jaccardDouble = new Similarities\Jaccard\JaccardArrays($doubles1, $doubles2);
echo $jaccardDouble->get() . "\n";

$jaccardBinary = new Similarities\Jaccard\JaccardArrays($binary1, $binary2);
echo $jaccardBinary->get() . "\n\n";

// Cosine method also works with characters of a string
$string1 = "John Doe The First";
$string2 = "Johnny Doe The Second";
$jaccardChars = new Similarities\Jaccard\JaccardChars($string1, $string2);
echo $jaccardChars->get() . "\n\n";

// And it also works with words of a string, in which case you will have
// to provide the words separator as the third argument to constructor;
// Default to " " (space charcter)
$longString1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
$longString2 = "Lorem Ipsum has been the industry standard dummy text ever since the 1500s";
$jaccardWords = new Similarities\Jaccard\JaccardWords($longString1, $longString2);
echo $jaccardWords->get() . "\n";
