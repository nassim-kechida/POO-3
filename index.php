<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>POO3</title>
</head>

<body>
<?php
// on charge les véhicules
require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "Skateboard.php";
// on charge les voies
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";
require_once "MotorWay.php";

echo "on commence par créer différent véhicules<br>";

$TomsBike = new Bicycle(1,2,'bleu');
echo "donc, un vélo pour Tom<br>";

$MollysCar = new Car(5,4,'rouge');
echo "puis, une voiture pour Molly<br>";

$TimsSkate = new Skateboard(0,4,'vert');
echo "puis, le skateboard de Tim<br>";

$MarcelsTruck = new Truck(2,6,'blanc');
echo "et enfin, le Camion de Marcel<br>";

echo "sans oublier de créer les différentes voies<br>";
$autoroute = new MotorWay();
$rueDuCentre = new ResidentialWay();
$chemin2Foret = new PedestrianWay();

echo "<hr>";
echo "bon, c'est pas tout ça, mais on va mettre ces véhicules sur les voies<br>";
$autoroute->addVehicle($MollysCar);
echo "après avoir mis la voiture de Molly sur l'autoroute, on vérrifie qu'elle y est<br>";
echo "il y a: ".count($autoroute->getCurrentVehicles())." véhicules sur l'autoroute<br>";
$autoroute->addVehicle($MarcelsTruck);
echo "après avoir mis le camion sur l'autoroute, on vérifie qu'elle y est aussi<br>";
echo "il y a: ".count($autoroute->getCurrentVehicles())." véhicules sur l'autoroute<br>";
$autoroute->removeVehicle($MollysCar);
echo "maintenant, on retire la voiture de l'autoroute<br>";
echo "il y a: ".count($autoroute->getCurrentVehicles())." véhicules sur l'autoroute<br>";

echo "<hr>";
echo "bien, maintenant, qu'on sait ajouter et retirer des véhicules sur les voies, testons ce qu'il se passe
si on essaye d'ajouter des véhicule qui n'ont rien à faire sur tel ou tel voie<br>";
echo "on va mettre la voiture et le velo sur le chemin de foret<br>";
$chemin2Foret->addVehicle($MollysCar);
$chemin2Foret->addVehicle($TomsBike);
echo "après avoir mis la voiture et le velo sur le chemin, on vérifie ce qu'il en est<br>";
echo "il y a: ".count($chemin2Foret->getCurrentVehicles())." véhicules sur le chemin2foret<br>";


?>
</body>

</html>