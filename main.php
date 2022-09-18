<?
include_once "Farm.php";

$animals = [
	"cows" => [
		"count" = 10,
		"resourseCollected" = 0,
		"lastWeeksCollected" = 0
	],
	"chickens" => [
		"count" = 20,
		"resouseCollected" = 0,
		"lastWeeksCollected" = 0 
	]
];

$farm = new Farm($animals);
for($i=1;$i<=7;$i++){
	echo "День №{$i}";
	$farm->collectResourses($i);
	echo "Собраны яйца и молоко";
}
$farm->getCountResousesForWeek();
$farm->buyAnimals(1,5);
for($i=1;$i<=7;$i++){
	echo "День №{$i}";
	$farm->collectResourses($i);
	echo "Собраны яйца и молоко";
}
$farm->getCountResousesForWeek();
?>
