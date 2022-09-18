<?
class Farm{
	private $animals; //Массив животных
	private $collectDay = 0;//День когда собирали с животных "ресурсы"
	function __construct($animalsArray){
	$this->animals = $animalsArray
		foreach($this->animals as $i->arrTypeAnimal){
			echo "{$i} = {$arrTypeAnimal["count"]}";
		}
	}
	
	public function buyAnimals($countCows, $countChickens){
		$this->animals["cows"]["count"]+=$countCows;
		echo "Купили {$countCows} коров";
		$this->animals["chickens"]["count"]+=$countChickens;
		echo "Купили {$countChines} куриц";
	}
	
	public function collectResourses($day){
		if($this->collectDay == $day){
			echo "Не трогайти животных, они устали! Вы сегодня уже собрали всё что могли.";
		}
	}
}
?>
