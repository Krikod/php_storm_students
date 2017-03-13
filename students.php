<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 13/03/17
 * Time: 17:33
 */
 $students = ["Emmanuel" => 42, "Thierry" => 51, "Pascal" => 45, "Eric" => 48, "Nicolas" => 19];
 foreach ($students as $name => $age) {
     $average_age = array_sum($age) / count($age);
     echo '<p>Les prénoms et l\'âge des élèves (liste)</p>' .
         $name . ': ' . $age . '<br>' .
         'La moyenne de l\'âge des élèves est' . $average_age . 'ans.';
 }