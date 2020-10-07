<?php 
function n()
{
	echo "<br />";
}
/*
//Объектно орентированое програмирование

//1) Введение основы ООП. Классы и объекты.:

//обьект это часть кода которая может объединять свойства и методы класса
//объект это экземпляр класса 

Class ShoppingCard
{
	//$product - свойство класса
	//function product() - метод класса
	//{
	//
	//}

}
$product1 = new ShoppingCard();// экземпляр класса
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();

var_dump($product1);//вывод экземпляра класса 
					//object(ShoppingCard)#1 (0) { } 

var_dump($product1 instanceof ShoppingCard);//проверка на отношение к экземпляру класса - bool(true) 

//2) Свойства класса. Область видимости свойства.:
//- Свойства класса это переменная которую содержит класс
//- У свойств и мктодов класса есть области видимости
class Shop//Объявление класса Shop
{
	//Спецификаторы доступа:
	//Public :Все свойства и методы доступны в любой области скрипта
	//Private : Используется внутри методов класса.  Закрыт от внешенего кода.
	//Protected: свойства и методы могут использоваться внутри класса и дочернего класса
	Public $price;//открытый доступ к свойству класса
	Private $name; // переменная $name с областью видимости Private
	public function naming(){ // Объявление функции naming() с областью видимости public, без аргументов
		$this -> name = "Adidas";//обращение к свойству name со значением "Adidas", используя ключевое слово $this
		echo $this->name;//получение значения 
	}
}
$product = new Shop; //создание экземпляра класса
$product->naming(); //вывод значения : Adidas

Class User//Объявление класса User
{
	//создание свойств класса с областью видимости public
	public $name = "Name";//свойство $name со значением "Name"
	public $password = "Password";//свойство $password со значением "Password"
	public $email = "Email";//свойство $email со значением "Email"
	public $city = "City";//свойство $city со значением "City"
}
//Количество экземпляров класса неограниченно
$admin = new User();//создание экземпляра класса
$user1 = new User();//создание экземпляра класса
echo $admin->name;//вывод значения "Name"
$admin -> name = "User0";//присваивание имени новому пользователю
$user1 -> name = "User1";//присваивание имени новому пользователю
echo $admin->name;//вывод: "User0"
echo $user1->name;//вывод: "User1"
$user1->surname = "Surname";//пример динамического добавления свойства "Surname"
echo $user1->surname;//вывод: "Surname"
//3) Методы и функции класса
//методы работают так же как и функции но они вызываются из контекста объекта

class User//Объявление класса User1
{
	public $surname= "Surname";//свойство $surname со значением "Surname"
	public $name = "DefaultName";//свойство $name со значением "DefaultName" (значение по умолчанию)
	public function Hello()//Метод "Hello" со спецификатором "public" 
	{
		echo "Hello, {$this->name}";//Вывод приветствия с именем пользователя которое хранится в свойстве "$name"
	}
	function getInfo()//Метод "getInfo"
	{
		return "{$this->name}"."{$this->surname}";//Вывод имени и фамилии пользователя, используя ключевое слово "$this" для вызова свойств класса
	}
}
$admin = new User1();//создание экземпляра класса
$admin->name="NewName";//Присваивание нового имени пользователю
$admin->Hello();//вывод метода содержащее приветствие пользователя
echo "Пользователь: {$admin->getInfo()}";//вывод имени и фамилии пользователя
//4)Конструкторы и деструкторы. Магические методы.
//---Конструктор--//
//Метод конструктор позволяет избавится от дублирования кода, и настроить все значения необходимых свойств
class User3
{
	function __construct($name, $password, $email, $city)//передача в конструктор свойств
	{
	//использование $this для обращение к свойствам
	$this->name = $name;//обращение к свойству $name
	$this->password = $password;//обращение к свойству $password
	$this->email = $email;//обращение к свойству $email
	$this->city = $city;//обращение к свойству $city
	}
	function getInfo()//созданние метода который возвращает все значения
	{
		return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";//обращение к свойствам в методе __construct
	}
}
$user3 = new User3("Name", "123456", "exqmple@gmail.com", "MyCity");//создание экземпляра класса с необходимыми значениями
var_dump($user3);//проверка на содержимое данных
echo $user3->getInfo();//обращение с помощью экземпляра класса $user3 к методу getInfo()
//В старых версиях php имя конструктора должно совпадать с именем класса
//--Деструктор--//
//Деструктор вызывается при освобождении всех ссылок на определенный объект или при завершении скрипта
class DestractableClass//создание нового класса
{
	function __construct()
	{
		print "Конструктор";
		$this->name = "DestractableClass";// вывод названия класса
	}
	function __destruct()
	{
		print "Уничтожение".$this->name;//визуальное представления имени уничтоженного класса
	}
}
$object = new DestractableClass();//вывод отображения конструктора и его удаление
//5)Переменная $this и self
//$this - это специальная переменная которая используется для доступа к объекту класса из нутри самого класса
class User4
{
	public $name1;
	
	public function getName()
	{
		echo $this->name1;
		$this->test();
	}
	public function test()
	{
		echo "Тест";
	}
}
$user4 = new User4();
$user4->name1 = "Name";
$user4->getName();//NameТест

$user5 = new User4();
$user5->name1 = "Name2";
$user5->getName();//Name2Тест
//self - искпользуется для обращения к внутреннему содержимого класса
//
class User6
{
	private static $testname;
	public static function setName($testname6)
	{
		self::$testname = $testname6;
	}
	public static function getName()
	{
		return self::$testname;
	}
}
User6::setName('Namesss');
echo User6::getName();//Namesss
//6)Наследование. Конструкторы в наследовании. Свойство protected.
//Наследование это свойство класса которое наследует часть функции из родительского класса и некоторые дополнительные своства и методы
class User7
{
	function __construct($name, $password, $email, $city)//передача в конструктор свойств
	{
	//использование $this для обращение к свойствам
	$this->name = $name;//обращение к свойству $name
	$this->password = $password;//обращение к свойству $password
	$this->email = $email;//обращение к свойству $email
	$this->city = $city;//обращение к свойству $city
	}
	function getInfo()//созданние метода который возвращает все значения
	{
		return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";//обращение к свойствам в методе __construct
	}
}
$user7 = new User7("Name", "123456", "exqmple@gmail.com", "MyCity");//создание экземпляра класса с необходимыми значениями
echo $user7->getInfo();
class Moderator extends User7
{
	function hello(){
		echo "Здесь модератор";
	}
} 
$moder = new Moderator("NameAdmin","123456", "moder@gmail.com", "City");
echo $moder->getInfo();

*////////////
/*class User
{
	public $name;
	public $password;
	public $email;
	public $city;

	function __construct($name, $password, $email, $city)
	{
	$this->name = $name;
	$this->password = $password;
	$this->email = $email;
	$this->city = $city;
	}
	function getInfo()
	{
		$information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
		return $information;
	}
}
$user = new User("Name", "123456", "example@gmail.com", "City");
//echo $user->getInfo();

n();

class Moderator extends User
{
	public $info;
	public $rights;

	function __construct($name, $password, $email, $city, $info, $rights)
	{
		parent::__construct($name, $password, $email, $city);
		$this->info = $info;
		$this->rights = $rights;
	}
	function getInfo()
	{
		$information = parent::getInfo();
		$information .= "{$this->info}"."{$this->rights}";

		return $information;
	}
}
$moder = new Moderator("ModeratorName", "123456", "moder@gmail.com", "MyCity", "Moderator", "true");
echo $moder->getInfo();
*/
/*class Test
{
	protected $info;//защищенное свойство
	
}
class Test2 extends Test
{
	public function test()
	{
		$this->info = "info";
		echo $this->info;
	}
}
$test2 = new Test2();
$test2->test();
$test2->hello();*/
//$test2->info()="information";//error
//ключевое слово final запрещает наследование
/*final class Test
{
	function hello()
	{
	echo 'Hello World!';
	}
}
class Test2 extends Test
{
	
	//..
}
$test2 = new Test2();
$test2->hello();//error - причина в модификаторе final
*/
//7)Инкапсуляция и Полиморфизм. 
//Инкапсуляция свойство класса регулиировать доступ к компанентам
//(privat & protected - примеры инкапсуляции)
//8)Статические свойства и методы
//статические свойства/методы класса это свойство/методы к которым можно обратится в контексте класса без создания объекта
/*class User
{
	public static $name;
	public static function hello()
	{
		echo "Hello";
		return self::$name;
	}

}
user::$name="Name";
echo user::$name;
echo user::hello();
*/
//9)Константы класса. Постоянные свойства.
/*
class User
{
	const SOME_CONST = 314;
}
echo user::SOME_CONST;
*/
//10)Абстрактные классы
/*abstract class User
{
	public $name;
	public $status;

	abstract public function getStatus();
}
class Admin extends User
{
	public function getStatus()
	{
		echo "Admin";
	}
}
$user = new User;//error
$user1 = new Admin;
$user1->getStatus();
*/

//11)Интерфейсы в ООП
/*interface FirstInterface
{
	public function getName();
}
interface SecondInterface
{
	public function getStatus();
}
interface ThirdInterface extends FirstInterface, SecondInterface
{
	//..
}
class Test implements FirstInterface, SecondInterface
{
	public $name = "Name";
	public $status = "Admin";
	public function getName()
	{
		echo $this->name;
	}
	public function getStatus()
	{
		echo $this->status;
	}
} 
$user = new Test;
$user->getStatus();
$user->getName();
*/
//12)Трейты
/*class Base
{
	public function sayHello()
	{
		echo "Hello";
	}
}
trait sayWorld
{
	public function sayHello()
	{
		parent::sayHello();
		echo "World";
	}
}
class myHelloWorld extends Base{
	use sayWorld;
}
$obj = new myHelloWorld();
$obj->sayHello();

trait Hello
{
	public function sayHello()
	{
		echo "Hello";
	}
}
trait World{
	public function sayWorld()
	{
		echo "World";
	}
}
class myHelloWorld{
	use Hello,World;
}
$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();
*/
//13)Магические методы get, set, clone
/*class User
{
	public function __clone()
	{
		echo "Cloned";
	}
}
$obj = new User;
$obj1 = clone $obj;
*/
/*class User
{
	private $name;
	private $city;

	public function __construct($name, $city)
	{
		$this->name = $name;
		$this->city = $city;
	}
	function setId($id)
	{
		$this->id = $id;
	}
	public function __clone()
	{
		$this->id = 0;
	}
}
$user1 = new User("Name", "City");
$user1->setId(4567);
$user2 = clone $user1;
var_dump($user2);
*/
/* object(User)#2 (3) { ["name":"User":private]=> string(4) "Name" ["city":"User":private]=> string(4) "City" ["id"]=> int(0) } */
/*
class GetSet
{
	private $number = 1;

	public function __get($name)
	{
		echo "you get {$name}";
	}
	public function __set($name, $value)
	{
		echo "you set {$name} to {$value}";
	}
}
$obj = new GetSet();
echo $obj->number;
echo $obj->number = 4566;
*/
//14)Пространства имен
/*
namespace Home;
{
class User
{
	public $name;
	public $password;
	public $email;
	public $city;

	function __construct($name, $password, $email, $city)
	{
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
		$this->city = $city;
	}
	function getInfo()
	{
		$information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
		return $information;
	}
}
$user = new User("testName", "test123456", "testexample@gmail.com", "testCity");
echo $user->getInfo();
}
namespace newClass\Home2;
{

}
*/

//15)Обработка ошибок
//@require_once 'file.txt';//ошибка из-за отсутствия файла
// @ - оператор игнорирующий ошибку
/*
Warning: require_once(file.txt): failed to open stream: No such file or directory in
*/

//16)Исключения(Exceptions)
/*
try{
	$file = 'namespace.php';
	if(!file_exists($file)){
		throw new Exception('File note found');
	}else{
		//echo "File available";
	}
}catch(Exception $e){
	echo $e->getMessage();
}

class NewException extends Exception
{

}
*/