<?php
// src/Dev/PasswordBundle/Generator/DevTester.php

namespace Dev\PasswordBundle\Generator;

class DevTester
{
    /**
     * Charger de tester un mot de passe
     * Un mot de passe complexe doit contenir
     * au moins 3/4 des éléments suivants
     * - caractère majuscule
     * - caractère minuscule
     * - caractère non alphanumériques
     * 
     * @param string $str
     */
     public function testerPassword( $str )
     {
         $complexity = countCharacters( $str ) + countDigits( $str ) + countUppercase( $str ) + countLowercase( $str ) + countSymbols( $str );
                  
         return $complexity;
     }
}


/* -------------------- Gestion des additions -------------------- */
     
/**
  * Description...
  * 
  * @param string $str
  */
function countCharacters( $str )
{
    return (strlen( $str ) * 4);
}
     
/**
  * Description...
  * 
  * @param string $str
  */
function countDigits( $str )
{
    return ( 4 * preg_match_all("#[0-9]#", $str) );
}
     
/**
  * Description...
  * 
  * @param string $str
  */
function countUppercase( $str )
{
    return ( strlen($str) - ( preg_match_all("#[A-Z]#", $str) * 2 ) );
}
     
/**
  * Description...
  * 
  * @param string $str
  */
function countLowercase( $str )
{
    return ( strlen($str) - ( preg_match_all("#[a-z]#", $str) * 2 ) );
}
     
/**
  * Description...
  * 
  * @param string $str
  */
function countSymbols( $str )
{
    return ( preg_match_all("#[^a-zA-Z\d\s]#", $str) * 2 );
}
     
/* -------------------- Fin de la gestion des additions -------------------- */

               
/* -------------------- Gestion des deductions -------------------- */
     
/* -------------------- Fin de la gestion des additions -------------------- */