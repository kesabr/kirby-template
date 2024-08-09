<?php

/** This function uses $fraction as an input value in 'site/snippets/components/layout.php' to generate calss names */
function convertFractionToClassName($fraction){

    // $column->width() returns a fraction value (ex.: 1/3)
    $fractionParts = explode('/', $fraction);

    // Check for a valid value and calculate a percentage that is rounded (1/2 => 50, 1/3 => 66)
    if (count($fractionParts) === 2 && is_numeric($fractionParts[0]) && is_numeric($fractionParts[1]) && $fractionParts[1] !== 0) {
        $percentage = ($fractionParts[0] / $fractionParts[1]) * 100;

        // Round the percentage to the nearest multiple of 25
        $roundedPercentage = floor($percentage);

        // return the class name based on the calculated percentage
        return "grid-item-$roundedPercentage";
    } else {
        // Return a default class if the fraction is invalid
        return 'grid-item-100';
    }

}