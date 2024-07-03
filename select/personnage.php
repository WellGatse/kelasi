
<?php
function chargerClasse($classe){
  
    require $classe.".class.php";
}
spl_autoload_register('chargerClasse')
 ?>
<?php
$connexion=mysqli_connect("localhost", "root", "", "personnage");
$req = mysqli_query($connexion, "SELECT * FROM personne where forcePerso=90");
while($donnees = mysqli_fetch_assoc($req)){


    $perso = new personnage($donnees);
    $perso->setNom($donnees['nom']);
    $perso->setforcePerso($donnees['forcePerso']);
    $perso->setdegats($donnees['degats']);
    $perso->setexperience($donnees['experience']);
    $perso->setniveau($donnees['niveau']) ;
    echo $perso->nom().' a '.$perso->forcePerso().'% de force,'.$perso->degats().'% de dégâts , '.$perso->experience().'% d\' expérience et est au niveau '.$perso->niveau()."<br>";
}
 ?>