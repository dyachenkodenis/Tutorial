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