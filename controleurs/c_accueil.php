<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Delahaye <sarah@delahaye.pro>
 * @author    Beth Sefer
 */

$estVisiteurConnecte = estVisiteurConnecte();
$estComptableConnecte = estComptableConnecte();

if ($estVisiteurConnecte) {
include
   'vues/v_accueilVisiteur.php';
}
 elseif
   ($estComptableConnecte){
    include 'vues/v_accueilComptable.php';
} else {
   include 'vues/v_connexion.php';
}