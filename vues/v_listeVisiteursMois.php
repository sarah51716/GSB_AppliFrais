<?php
/**
 * Vue Liste des visiteurs et du mois
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Delahaye <sarah@delahaye.pro>
 * @author    Beth Sefer
 */
?>

<h2 style="color:orange">Valider les fiches de frais</h2>
<div class="row">
    <div class="col-md-4">
        <form action="index.php?uc=validFrais&action=afficheFrais" 
              method="post" role="form">

            <?php//liste déroulante des visiteurs?>
            
            <div class="form-group" style="display: inline-block"> 
                <label for="lstVisiteurs" accesskey="n">Choisir le visiteur : </label>
                <select id="lstVisiteurs" name="lstVisiteurs" class="form-control">
                    <?php
                    foreach ($lesVisiteurs as $unVisiteur) {
                        $id = $unVisiteur['id'];
                        $nom = $unVisiteur['nom'];
                        $prenom = $unVisiteur['prenom'];
                        if ($unVisiteur == $visiteurASelectionner) {
                            ?>
                            <option selected value="<?php echo $id ?>">
                                <?php echo $nom . ' ' . $prenom ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $id ?>">
                                <?php echo $nom . ' ' . $prenom ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
            
            <?php//liste déroulante des mois?>
            
            &nbsp;<div class="form-group" style="display: inline-block">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
        </form>
    </div>


