<?php
/**
 * You can use euclidean to calculate similarity between two data sets that
 * have the same size (no. of terms). The sets can be either expressed as
 * doubles or as binary. The order of the elements is relevant.
 * The array keys are not taken into account.
 * 
 * Example: Consider that you have users filling in a poll with
 * 5 questions (all users filling in all the questions) and you want to
 * find respondents based on their choices.
 */
 
// Example of double data:
$doubles1 = array(0.1, 0.2, 0.3, 0.4, 0.5);
$doubles2 = array(0.9, 0.8, 0.3, 0.4, 0.5);

// Example of binary data
$binary1 = array(1, 1, 1, 1, 0);
$binary2 = array(1, 1, 1, 0, 1);

$euclideanDouble = new Similarities\Euclidean\EuclideanArrays($doubles1, $doubles2);
echo $euclideanDouble->get() . "\n";

$euclideanBinary = new Similarities\Euclidean\EuclideanArrays($binary1, $binary2);
echo $euclideanBinary->get() . "\n\n";

// Cosine method also works with characters of a string
$string1 = "John Doe The First";
$string2 = "Johnny Doe The Second";
$euclideanChars = new Similarities\Euclidean\EuclideanChars($string1, $string2);
echo $euclideanChars->get() . "\n\n";

// And it also works with words of a string, in which case you will have
// to provide the words separator as the third argument to constructor;
// Default to " " (space charcter)
$longString1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
$longString2 = "Lorem Ipsum has been the industry standard dummy text ever since the 1500s";
$euclideanWords = new Similarities\Euclidean\EuclideanWords($longString1, $longString2);
echo $euclideanWords->get() . "\n";
