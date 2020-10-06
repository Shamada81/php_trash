<?
/* В нашей вселенной, здоровье не может быть более 100ед. */
header('Content-Type: text/html; charset=utf-8');
class Person{
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;
  function __construct($name,$lastname,$age,$mother=null,$father=null){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }
	public function getName(){return $this->name;}
	public function getLastname(){return $this->lastname;}
	public function getAge(){return $this->age;}
	public function getMother(){return $this->mother;}
	public function getFather(){return $this->father;}
	public function getInfo1(){
	  return "
	    Меня зовут: ".$this->name."<br>
	    Мою маму зовут: ".$this->mother->name."<br>
	    Моего папу зовут: ".$this->getFather()->getName()."<br>
	    По папиной линии: <br>
	            дедушка: ".$this->getFather()->getName()."<br>
	            бабушка: ".$this->getMother()->getName()."<br>
	    ";
	}
	public function getInfo2(){
	  return "
	    По папиной линии: <br>
	            дедушка: ".$this->getFather()->getName()."<br>
	            бабушка: ".$this->getMother()->getName()."<br>
	    ";
	}
	public function getInfo3(){
	  return "
	    По маминой линии: <br>
	            дедушка: ".$this->getFather()->getName()."<br>
	            бабушка: ".$this->getMother()->getName()."<br>
	    ";
	}
}
/* Тут создать 2 бубшки и 2 дедушки  */
$ivan = new Person("Иван","Иванов",65);
$marya = new Person("Марья","Иванова",65);
$kuzma = new Person("Кузьма","Петров",70);
$tatyana = new Person("Татьяна","Петрова",67);
$oleg = new Person("Олег","Петров",41,$tatyana,$kuzma);
$olga = new Person("Ольга","Петрова",41,$marya,$ivan);
$igor = new Person("Игорь","Петров",12,$olga,$oleg);


echo $igor->getInfo1();
echo $oleg->getInfo2();
echo $olga->getInfo3();
?>
