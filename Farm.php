<?php
class Farm{
	private $animals; //Массив животных
	private $collectDay = 0;//День когда собирали с животных "ресурсы"
	function __construct($animalsArray){
	$this->animals = $animalsArray;
		foreach($this->animals as $i=>$arrTypeAnimal){
			echo "{$i} = {$arrTypeAnimal["count"]}\n";
		}
	}
	
	public function buyAnimals($countCows, $countChickens){
		$this->animals["cows"]["count"]+=$countCows;
		echo "Купили {$countCows} коров\n";
		$this->animals["chickens"]["count"]+=$countChickens;
		echo "Купили {$countChickens} куриц\n";
	}
	
	public function collectResourses($day){
		if($this->collectDay == $day){
			echo "Не трогайти животных, они устали! Вы сегодня уже собрали всё что могли.";
			return 0;
		}
		foreach($this->animals as $typeAnimal=>$arrTypeAnimal){
			if($typeAnimal == "cows"){
				for($i = 0;$i<$arrTypeAnimal["count"];$i++){
					$this->animals["cows"]["resourseCollected"]+=rand(8, 12);
				}
			}
			if($typeAnimal == "chickens"){
				for($i=0;$i<$arrTypeAnimal["count"];$i++){
					$this->animals["chickens"]["resourseCollected"]+=rand(0,1);
				}
			}
		}
	}
	
	public function getCountResousesForWeek(){
		echo "За неделю собрано ".($this->animals["cows"]["resourseCollected"]-$this->animals["cows"]["lastWeeksCollected"])." литров молока\n";
		$this->animals["cows"]["lastWeeksCollected"] = $this->animals["cows"]["resourseCollected"];
		echo "За неделю собрано ".($this->animals["chickens"]["resourseCollected"]-$this->animals["chickens"]["lastWeeksCollected"])." яиц\n";
		$this->animals["chickens"]["lastWeeksCollected"] = $this->animals["chickens"]["resourseCollected"];
	}
}
?>
