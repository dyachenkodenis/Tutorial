<?php 

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
class User1//Объявление класса User1
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
