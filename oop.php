<?php 

/*
//////Объектно ориентированое программирование///////

//1) Введение основы ООП. Классы и объекты.:

//Объект это маленька  часть кода которая может объединять данные и свойства вместе.
//Объект это экземпляр класса 
//Класс это тип данных, а переменная это объект.

class ShoppingCard
{
	$product; //свойство класса
	function product()
	{
	 //метод класса
	}
	
}
$product1 = new ShoppingCard();// экземпляр класса
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();

var_dump($product1);//вывод экземпляра класса 
					//object(ShoppingCard)#1 (0) { } - идентификатор класс #1

var_dump($product1 instanceof ShoppingCard);//проверка на отношение к экземпляру класса - bool(true) 
var_dump($product2 instanceof Card);//bool(false) 
var_dump($product3);//Каждый объект имеет свой идентификатор. - object(ShoppingCard)#3 (0) { } 

//instanceof - проверка, является ли данный объект экземпляром класса. (применяется для отладки).


//2) Свойства класса. Область видимости свойства.:
//- Свойства класса это переменная которую содержит класс
//- У свойств и методов класса есть области видимости

class Shop//Объявление класса Shop
{
	//Спецификаторы доступа:
	//Public :все свойства и методы класса могут быть использованны как вне класса так и в нем.
	//Private :этот спецификатор доступа говорит об использовании свойства или метода класса только внутри методов этого класса. Закрыт от внешенего кода.
	//Protected: Свойства и методы могут использоваться внутри класса и дочернего класса
	
	public $price;//открытый доступ к свойству класса
	private $name; // переменная $name с областью видимости private
	public function naming(){ // Объявление функции naming() с областью видимости public, без аргументов
		$this -> name = "Adidas";//обращение к свойству name со значением "Adidas", используя ключевое слово $this
		echo $this->name;//получение значения 
	}
}
$product = new Shop; //создание экземпляра класса
$product->naming(); //обращение к методу - вывод значения : Adidas
$product->name="Nike";//Fatal error: Uncaught Error: Cannot access private property Shop::$name

class User//Объявление класса User
{
	//создание свойств класса с областью видимости public
	//данные значения default
	public $name = "Name";//свойство $name со значением "Name"
	public $password = "Password";//свойство $password со значением "Password"
	public $email = "Email";//свойство $email со значением "Email"
	public $city = "City";//свойство $city со значением "City"
}
//Количество экземпляров класса неограниченно
$admin = new User();//создание экземпляра класса
$user1 = new User();//создание экземпляра класса
echo $admin->name;//вывод значения "Name"
$admin -> name = "Admin";//присваивание имени пользователю
$user1 -> name = "User1";//присваивание имени пользователю
echo $admin -> name;//вывод: "Admin"
echo $user1 -> name;//вывод: "User1"
$user1 -> surname = "Surname";//пример динамического добавления свойства "Surname"
echo $user1 -> surname;//вывод: "Surname"

//3) Методы и функции класса
//Методы это обычные функции которые объявляются внутри класса (с областью видимости)

class User //Объявление класса User
{
	public $surname= "DefaultSurname";//свойство $surname со значением "DefaultSurname"
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
$admin = new User();//создание экземпляра класса
$admin->name="NewName";//Присваивание нового имени пользователю
$admin->Hello();//вывод метода содержащее приветствие пользователя
echo "Пользователь: {$admin->getInfo()}";//вывод имени и фамилии пользователя

//4)Конструкторы и деструкторы. Магические методы.

//---Конструктор--//

//Метод конструктор позволяет избавится от дублирования кода, и настроить все значения необходимых свойств
//Конструкторы содержат значения для дальнейшего использования в классе

class User
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
$user = new User("Name", "123456", "exqmple@gmail.com", "MyCity");//создание экземпляра класса с необходимыми значениями
var_dump($user);//проверка на содержимое данных
echo $user->getInfo();//обращение с помощью экземпляра класса $user3 к методу getInfo()

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

//$this - Специальная переменная которая используется для доступа к объекту класса из самого класса, фактически она будет содержать ссылку на объект класса.

class User
{
	public $name;
	
	public function getName()
	{
		echo $this->name;
		$this->test();
	}
	public function test()
	{
		echo "Тест";
	}
}
$user = new User();
$user->name = "Name";
$user->getName();//NameТест

$user1 = new User();
$user1->name = "Name2";
$user1->getName();//Name2 Тест
//self - Специальное ключевое слово для обращения к статическим методам или свойствам.
//Отличие статического типа данных в том что он действует не на уровне метода, а на уровне класса и обращатся к нему следует так - self::

class User
{
	private static $testname;
	public static function setName($testname)
	{
		self::$testname = $testname;
	}
	public static function getName()
	{
		return self::$testname;
	}
}
User::setName('new_Name');
echo User::getName();//new_Name

//6)Наследование. Конструкторы в наследовании. Свойство protected.
//Наследование это определенный класс который имеет те же свойства и методы как и родительский класс, а так же дополнительную функциональность которая расширяет класс.
//extends - наследование класса

class User
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
$user = new User("Name", "123456", "exqmple@gmail.com", "MyCity");//создание экземпляра класса с необходимыми значениями
echo $user->getInfo();

class Moderator extends User
{
	function hello(){
		echo "Здесь модератор";
	}
} 
$moder = new Moderator("NameAdmin","123456", "moder@gmail.com", "City");
echo $moder->getInfo();

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
$user = new User("Name", "123456", "example@gmail.com", "City");
//echo $user->getInfo();

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

class Test
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
$test2->hello();

//$test2->info()="information";//error

//final - запрет переопределения в дочерних классах и наследование.

final class Test
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

//protected - область видимости которая ограничивает доступ к функционалу родительского класса из дочернего(защищенное свойство или метод).

//7)Инкапсуляция и Полиморфизм. 

//Инкапсуляция свойство класса регулировать доступ к компанентам
//(privat & protected - примеры инкапсуляции)
//Инкапсуляция - это механизм который объединяет код манипулирующий данными, а так же защищает доступ к ккомпанентам из объекта и класса.
// - делает доступ к компанентам private, protected.
//Пример устройство на котором есть кнопни доступные пользователю и сама схема устройства которая в свою очередь защищена корпусом от общего доступа к компанентам.

//Полиморфизм это следствие наследования, возможность иметь одинаковые методы которые работают по разному в контексте класса.(поведение одного и тогоже метода в разных классах)
// - похожие кнопки но с разной функциональностью удалить загрузить.
//Полиморфизм используется для создания модульности приложения.

//8)Статические свойства и методы

//Три принципа ООП: - полиморфизм, - инкапсуляция, - наследование.
-класс шаблон для создания объекта.
Статические свойства это свойства к которым можно обратится без создания объекта, в контексте самого класса.
public static $name;
user::$name = "Name";
echo $user::$name;
с методом то же самое:
public static function hello();
return self:$name;
Self в методе
Статический метод может использовать константы.

class User
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

//9)Константы класса. Постоянные свойства.
const - объявление константы (неиспользуемый спецификатор доступа).
обращение через класс user::CONST;
Константы это неизменное свойство.

class User
{
	const SOME_CONST = 314;
}
echo user::SOME_CONST;

//10)Абстрактные классы
Абстрактный класс это класс для которого не могут быть созданы экземпляры класса.
abstract class user
- Необходимость в моделировании сущностей (шаблонов).
- Абстрактные классы могут иметь методы без тела (фигурных строк)
Абсстрактный метод должен обязательно быть реализован в дочернем классе.
abstract public function getName();

abstract class User
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


//11)Интерфейсы в ООП
В php отказались вводить множественное наследование как в других языках программирования, вместо этого помпенсировали недостаток интерфейсами.
Интерфейсы это структуры которые описывают то какие константы и методы должен содержать класс который будет реализовывать интерфейс.
- Интерфейсы это шаблоны.
- Интерфейс не должен содержать реализацию метдов, там содержатся только перечисление того что должно быть в классе.
- Винтерфейсе могут быть только объявление методов но не тело этих методов.
interface FirstInterface{
	public function getName();
}
- Для интерфейса как и для абстрактного класса не могут быть ссозданы.
- Для реализации интерфейса ключевое слово  implements
- Класс обязательно должен иметь реализацию всех методов интерфейса.
- Один класс может реализовать несколько интерфейсов.
- Интерфейсы поддерживают наследование extends
Отличие интерфейса от абстрактного класса
- в том что для обоих нельзя создать экземпляр класса.
- абстрактный класс может отображать реализацию метода, а интерфейсы нет.
- в интерфейсе возможно множественное наследование.


interface FirstInterface
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

//12)Трейты

//Трейт это механизм обеспечения повторного использования кода. (если нужно применить методы для наследующих классов)
//Трейт преднозначен для группирирования функционала хорошо структурированным и последовательным образом.
//trait User
//use - через него перечисляются трейты которые будут использоваться.
//-Трейты как реализация интерфейсов с методами.

class Base
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

//13)Магические методы get, set, clone

//Метод clone копирует метод.
//Если переменная класса закрыта то обращение к ней из вне можно только через открытые методы.
//get и set перехватывают обращение к переменной.

class User
{
	public function __clone()
	{
		echo "Cloned";
	}
}
$obj = new User;
$obj1 = clone $obj;

class User
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

//object(User)#2 (3) { ["name":"User":private]=> string(4) "Name" ["city":"User":private]=> string(4) "City" ["id"]=> int(0) }

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

//14)Пространства имен

//Пространство имен это некий способ организации кода, аналогично файловой системы. Например: так же как вы изолируете файлы положив в разные папки, так и различные функции классы, мы можем изолировать по пространствам имен.  Это помогает избежать конфликтов классов.
//Пространство имен это имеющий имя фрагмент кода содержащий функции, классы и т.д.
//Действие пространстваа имен распространяется на классы, функции, константы.
//Все пространства имен должны находится в верху, перед html тегами.
//Ключевое слово use позволяет создать псевдонимы и группирировать классы, константы, функции.

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


//15)Обработка ошибок

//@require_once 'file.txt';//ошибка из-за отсутствия файла
// @ - оператор игнорирующий ошибку

//Warning: require_once(file.txt): failed to open stream: No such file or directory in


//16)Исключения(Exceptions)

//Исключения позволяют писать код выводимый в случае ошибки.

//try{ ... }catch{ ... } Используются по схожему принципу с if(){ ... }else{ ... }

try{
	$file = 'namespace.php';
	if(!file_exists($file)){
		throw new Exception('File note found');//Исключение - 'File note found' 
		//Для того что бы кинуть исключение нужно использовать ключевое слово throw при использовании экземпляра класса exception
	}else{
		//echo "File available";
	}
}catch(Exception $e){
	echo $e->getMessage(); //экземпляр класса
}
//Если исключение брошено в try оно будет проигнорированно после инструкции throw, а если поймано, будет выполнятся инструкция catch.

class NewException extends Exception
{

}
*/

/*
- Объектно-ориентированное программирование (ООП) — парадигма программирования, в которой основными концепциями являются понятия объектов и классов.

- Объект — это сущность, экземпляр класса, которой можно посылать сообщения и которая может на них реагировать, используя свои данные.

- Абстрагирование — это способ выделить набор значимых характеристик объекта, исключая из рассмотрения не значимые  Соответственно, абстракция: это набор всех таких характеристик.

- Инкапсуляция: свойство системы, позволяющее объединить данные и методы, работающие с ними в классе, и скрыть детали реализации от пользователя. 
(Другими словами инкапсуляция – это механизм контроля доступа.)

- Наследование: свойство системы, позволяющее описать новый класс на основе уже существующего с частично или полностью заимствующейся функциональностью. Класс, от которого производится наследование, называется базовым, родительским или суперклассом. (процесс, посредством которого один объект может приобретать свойства другого)

- Полиморфизм: свойство системы использовать объекты с одинаковым интерфейсом без информации о типе и внутренней структуре объекта.
(один интерфейс, множество методов || возможность объектов с одинаковой спецификацией иметь различную реализацию)

- 4 вида доступа: public, protected, private и default.

- Public уровень предполагает  доступ к компоненту с этим модификатором из экземпляра любого класса и любого пакета.

- Protected уровень  предполагает  доступ к компоненту с этим модификатором из экземпляров родного класса и классов-потомков, независимо от того, в каком пакете они находятся.

- Default уровень предполагает  доступ к компоненту с этим модификатором из экземпляров любых классов, находящихся в одном пакете с этим классом.

- Private уровень предполагает  доступ к компоненту с этим модификатором только из этого класса.

*/