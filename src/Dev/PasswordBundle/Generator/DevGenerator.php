<?php
// src/Dev/PasswordBundle/Generator/DevGenerator.php

namespace Dev\PasswordBundle\Generator;

class DevGenerator
{
    /**
     * Charger de générer un mot de passe robuste
     * Un mot de passe robuste doit contenir
     * au moins 12 caractères
     * au moins 1 caractère en minuscule
     * au moins 1 caractère en majuscule
     * au moins 1 caractère non alphanumérique
     */
     public function generatorPassword()
     {
         $range_start = 33;
         $range_end   = 126;
         $random_string = "";
         $random_string_length = 12;
        
         for ( $i = 0 ; $i < $random_string_length ; $i++ )
         {
             $ascii = round( mt_rand( $range_start , $range_end ) );
             $random_string .= chr( $ascii );
         }
         
         return $random_string;
     }
}