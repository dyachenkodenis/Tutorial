<?php

// <br />
function n(){
	echo "<br />";
}



//abs(); 
// Модуль числа
/*$abs = abs(-4.2); // 4,2
$abs1 = abs(5); // 5
$abs2 = abs(-5); // 5
echo $abs . " and " . $abs1 . " and " . $abs;
*/

//acos(); 
// Арккосинус
//echo(acos(0.3));

//acosh(); 
// Гиперболический арккосинус
//echo(acosh(7));

//addcslashes(); 
// Экранирует строку слешами в стиле языка С
//echo addcslashes('foo[ ]', 'A..z');
//echo addcslashes("Hello, World!", 'A..z');

//addslashes(); 
// Экранирует строку с помощью слешей
//$str = "Hello, O'reilly";
//echo addslashes($str);

//aggregate(); 
//Динамическое объединение методов и свойств классов и объектов
/*
void aggregate (object $object, string $class_name)
*/

//aggregate_info();
//Возвращает ассоциативный массив методов и свойств из каждого класса, который был агрегирован с объектом.
/* 
array aggregate_info (object $object) 
*/

//aggregate_methods()
//Динамическое объединение классов и объектов методов
/* 
void aggregate_methods (object $object, string $class_name)
*/

//aggregate_methods_by_list()
//Селективная агрегация методов динамического класса в объект
/*
 void aggregate_method_by_list( object $object, string $class_name, array $methods_list [, bol $exclude = false])
*/

//aggregate_methods_by_regexp()
//Селективная агрегация методов класса в объект с использованием регулярного выражения
/*
void aggregate_methods_by_regexp( object $object, string $class_name, string $regexp [, bool $exlude = false] )
*/

//aggregate_properties()
//Динамическое объединение свойств класса с объектом
/*
void aggregate_properties (object $object, string $class_name)
*/

//aggregate_properties_by_list()
//Селективное объединение свойств динамического класса в объект
/*
void aggregate_properties_by_list ( object $object, string $class_name , array $properties_list [, bool $exclude = false])
*/

//aggregate_properties_by_regexp()
//Выборочная агрегация свойств класса для объекта с использованием регулярного выражения
/*
void aggregate_properties_by_regexp( object $object , string $class_name , string $regexp [, bool $exclude = false])
*/

//aggregation_info()
//Псевдоним aggregate_info()

//apache_child_terminate()
//Завершить процесс Apache по окончании текущего запроса
// bool apache_child_terminate ( void )

//apache_get_modules()
//Возвращает список загруженных модулей сервера Apache
/*
apache_get_modules (void) array
*/

//apache_get_version()
// Возвращает версию Apache
//string apache_get_version(void)
//echo apache_get_version();

//apache_getenv()
//Возвращает переменную окружения подпроцесса сервера Apache
/*
string apache_getenv (string $variable [, bool $walk_to_top = false])
*/
//$ret = apache_getenv("SERVER_ADDR");
//echo $ret;


//apache_lookup_uri()
//Осуществить частичный запрос на указанный URI и вернуть все полученные сведения
/*
object apache_lokup_uri (string $filename)
*/
/*$info = apache_lookup_uri('index.php?var=value');
print_r($info);
if(file_exists($info->filename)){
	echo 'file exists!';
}
*/

//apache_note()
//Возвращает и устанавливает уведомления к запросу Apache
/*
string apache_note( string $note_name [, string $note_value = "" ])
*/
//Пример кода
//apache_note('name', 'Fredrik Ekengren');
//Вызов Perl скрипта
//virtual("/perl/some_script.pl");
//$result = apache_note("resultdata");

//apache_request_headers()
//Получает список всех заголовков HTTP-запроса
/*
array apache_request_headers( void )
*/
/*$headers = apache_request_headers();
foreach($headers as $header => $value){
	echo "$header: $value <br />";
}
*/

//apache_setenv()
//Устанавливает переменную subprocess_env Apache
/*
bool apache_setenv (string $variable , string $value [, bool $walk_to_top = false])
*/
//apache_setenv("EXAMPLE_VAR", "Любое значение");

//apache_reset_timeout()
//Сбрасывает таймер сервера Apache
/*
bool apache_reset_timeout (void )
*/


//apache_response_headers()
//Возвращает список всех HTTP-заголовков ответа Apache
/*
array apache_response_headers (void)
*/
//print_r(apache_response_headers());

//apc_add()
//Кешировать переменную в хранилище данных 
/*
bool apc_add (string $key, mixed $var [, int $ttl = 0])
rray apc_add (array $values [, mixed $unused = NULL [, int $ttl = 0]])
*/
/*
$bar = 'BAR';
apc_add('foo', $bar);
var_dump(apc_fetch('foo'));
echo "<br />";
$bar = 'NEVER GETS SET';
apc_add('foo', $bar);
var_dump(apc_fetch('foo'));
echo "<br />";
*/

//apc_bin_dump()
//Получить бинарный дамп заданных файлов и пользовательских переменных
/*
string apc_bin_dump([array $files = NULL [, array $user_vars = NULL]])
*/

//apc_bin_dumpfile()
// Вывести двоичный дамп кешированных файлов и пользовательских переменных в файл
/*
int apc_bin_dumpfile(array $files, array $user_vars, string $filename[, int $flags = 0[, resource $context = NULL]])
*/

//apc_bin_load()
// Загрузить бинарный дамп в файловый/пользовательский кеш APC
/*
bool apc_bin_load(string $data [, int $flags = 0])
*/
/*
$data = apc_bin_dump(NULL, NULL);
apc_bin_load($data, APC_BIN_VERIFY_MD5 | APC_BIN_VERIFY_CRC32);
*/

//apc_bin_loadfile()
//Загрузить бинарный дамп из файла в файловый/пользовательский кеш APC
/*
bool apc_bin_loadfile (string $filename [, resource $context = NULL [, int $flags = 0]])
*/

//apc_cache_info()
//Получить кешируемую информацию и метаданные из хранилища данных APC
/*
array apc_cache_info([string $chache_type = "" [, bool $limited = false]])
*/
//print_r(apc_chache_info());

//apc_compile_file()
//Сохранить файл в кеше байт-кода, не обращая внимания на фильтры 
//mixed apc_compile_file(string $filename [, bool $atomic = true])

//apc_dec()
//Уменьшить сохраненное число
/*
int apc_dec(string $key [, int $step = 1 [, bool &$success]])
*/
/*echo "Hello World!", PHP_EOL;
apc_store('anumber', 42);
echo apc_fetch('anumber'), PHP_EOL;
echo apc_dec('anumber'), PHP_EOL;
echo apc_dec('anumber', 10), PHP_EOL;
echo apc_dec('anumber', 10, $success), PHP_EOL;
var_dump($success);
echo "Hello World!", PHP_EOL, PHP_EOL;
apc_store('astring', 1, $fail);
var_dump($ret);
var_dump($fail);
*/

//apc_define_constants()
//Определить набор констант для извлечения и массового определения
/*
bool apc_define_constants(string $key, array $constants [, bool $case_sensitive = true])
*/
/*
$constants = array(
					'ONE' => 1,
					'TWO' => 2,
					'THREE' => 3,

				);
apc_define_constants('numbers', $constants);
echo ONE, TWO, THREE;
*/

//apc_delete()
//Удалить сохраненную переменную из кеша
// mixed apc_delete(string $key)
/*
$bar = 'BAR';
apc_store('foo', $bar);
apc_delete('foo');
//this is obviously useless in this form
*/

//apc_delete_file()
//Удалить файлы из кеша опкодов
// mixed apc_delete_file(mixed $keys)
/*$filename = 'file.php';
if(apc_compile_file($filename)){
	if(apc_delete_file($filename)){
		echo 'Successfully deleted file $filename from APC cache.', PHP_EOL;
	}
}
if(apc_compile_file($filename)){
	if($good = apc_delete_file(array($filename, 'donotexist.php'))){
		var_dump($good);
	}
}
$bad = apc_delete_file('donotexist.php');
var_dump($bad);
*/

//apc_exists()
//Проверить, существует ли ключ APC
// mixed apc_exists(mixed $keys)
/*$fruit = 'apple';
$veggie = 'carrot';
apc_store('foo', $fruit);
apc_store('bar', $veggie);
if(apc_exists('foo')){
	echo "Foo exists: ";
	echo apc_fetch('foo');
}else{
	echo "Foo does not exist";
}
echo PHP_EOL;
if(apc_exists('baz')){
	echo "Baz exists.";
}else{
	echo "Baz does not exist";
}
echo PHP_EOL;
$ret = apc_exists(array('foo', 'donotexist', 'bar'));
var_dump($ret);
*/

//apc_fetch()
//Выбрать сохраненную переменную из кеша
// mixed apc_fetch(mixed $key [, bool &$success])
/*$bar = 'BAR';
apc_store('foo', $bar);
var_dump(apc_fetch('foo'));
*/

//apc_inc()
//Увеличить сохраненное число
// int apc_inc(string $key [, int $step = 1 [, bool &$success]])
/*apc_store('anumber', 42);
echo apc_inc('anumber'), PHP_EOL;
echo apc_inc('anumber', 10), PHP_EOL;
echo apc_inc('anumber', 10, $success), PHP_EOL;
var_dump($success);
*/

//apc_load_constants()
// Загрузить набор констант из кеша
// bool apc_load_constants (string $key [, bool $case_sensitive = true])
/*$constants = array(
					'ONE' => 1,
					'TWO' => 2,
					'THREE' => 3,
				);
apc_define_constants('numbers', $constants);
apc_load_constants('number');
echo ONE, TWO, THREE;
*/

//apc_sma_info()
// Получить информацию о выделении разделяемой памяти APC
// array apc_sma_info ([ bool $limited = false])
//print_r(apc_sma_info());

//apc_store()
// Кешировать переменную в хранилище данных
//bool apc_store (string $key , mixed $var [, int $ttl = 0])
//array apc_store (array $values [, mixed $unused = NULL [, INT $ttl = 0]])
/*
$bar = 'BAR';
apc_store('foo', $bar);
var_dump(apc_fetch('foo'));
*/

//apd_breakpoint()
// Останавливает интерпретатор и ожидает символ возврата каретки (CR) из сокета
//bool apd_breakpoint (int $debug_level)

//apd_callstack()
//Возвращает текущий вызов стека в виде массива
//array apd_callstack ( void )
//print_r(apd_callstack());

//apd_clunk()
//Выводит предупреждение и стек вызова
//void apd_clunk (string $warning [, string $delimiter])
//apd_clunk('Some Warning', '<br />');

//apd_continue()
//Перезапуск интерпретатора
// bool apd_continue (int $debug_level)
//apd_continue(0);

//apd_croak()
//Выбросить ошибку, стек вызова и выйти
// void apd_croak (string $warning [, string $delimiter = "<br />"])
//apd_croack("Some Warning", "<p>");

//apd_dump_function_table()
//Выводит текущую таблицу функций
// void apd_dump_function_table ( void )
//apd_dump_function_table();

//apd_dump_persistent_resources()
//Возвращает список всех постоянных ресурсов в виде массива
//array apd_dump_persistent_resources ( void )
//print_r(apd_dump_persistent_resources());

//apt_dump_regular_resources()
//Возвращает список всех обычных ресурсов в виде массива
// array apd_dump_regilar_resources ( void )
//print_r(apd_dump_regular_resources());

//apd_echo()
//Вывод в отладочный сокет
//bool apd_echo (string $output)
//apd_echo($i);

//apd_get_active_symbols()
//Получить массив с именами переменных в локальном скопе
//array apd_get_active_symbols ( void )
//apd_echo(apd_get_active_symbols());

//apd_set_pprof_trace()
//Старт отладки
/*
string apd_set_pprof_trace ([string $dump_directory = ini_get("apd.dumpdir") [, string $fragment = 'pprof']])
*/
//apd_set_pprof_trace();

//apd_set_session()
//Изменяет, либо устанавливает текущий уровень отладки
//void apd_set_session ( int $debug_level )
//apd_set_session(9);

//apd_set_session_trace()
//Старт отладки
/*
void apd_set_session_trace ( int $debug_level [, string $dump_directory = ini_get("apd.dumpdir")])
*/
//apd_set_session_trace(99);

//apd_set_session_trace_socket()
//Старт удаленной отладки
/*
bool apd_set_session_trace_socket( string $tcp_server , int $socket_type , int $port , int $debug_level )
*/
//apd_set_session_trace_socket("127.0.0.1", APD_AF_INET, 7112,0);

//array()
//Создает массив
// array array ([mixed $... ])
$fruits = array(
		"fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
		"numbers" => array(1, 2, 3, 4, 5, 6),
		"holes"   => array("first", 5 => "second", "third")
);
$array = array(1, 1, 1, 1, 8 => 1, 19, 3 => 13);
print_r($array);
n();
$firstquarter = array( 1 => 'January', 'February', 'March');
print_r($firstquarter);
n();
$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!";
n();

//array_change_key_case()
//Меняет регистр ключей в массиве
// array array_change_key_case( array $input [, int $case = CASE_LOWER])
// CASE_UPPER || CASE_LOWER
$input_array = array("FiRsT" => 1, "sEcOnD" => 2);
print_r(array_change_key_case($input_array, CASE_UPPER));
n();
print_r(array_change_key_case($input_array, CASE_LOWER));
n();

//array_chunk();
//Разбивает массив на части
// array array_chunk (array $input, int $size [, bool $preserve_kes = false])
$input_array = array('a', 'b', 'c', 'd', 'e', 'f');
print_r(array_chunk($input_array, 2));
n(); // key save
print_r(array_chunk($input_array, 2, true));
n();

//array_column()
//Возвращает массив из значений одного столбца входного массива
/* array_column ( array $input , ixed $column_key [, mixed $index__key = NULL ]) : array
*/
$records = array(
		array(
			'id' => 2135,
			'first_name' => 'John',
			'last_name' => 'Doe',
		),
		array(
			'id' => 3245,
			'first_name' => 'Sally',
			'last_name' => 'Smith',
		),
		array(
			'id' => 4325,
			'first_name' => 'Jane',
			'last_name' => 'Jones',
		),
		array(
			'id' => 5432,
			'first_name' => 'Peter',
			'last_name' => 'Doe',
		)
);
$first_names = array_column($records, 'first_name');
print_r($first_names);
n();
$lastnames = array_column($records, 'last_name', 'id');
print_r($lastnames);
n();

//array_combine()
//Создает новый массив, используя один массив в качестве ключей, а другой для его значений
// array array_combine (array $keys , array $values)
$a = array('green', 'red', 'yelloy');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
n();

//array_count_values()
// Подсчитывает количество всех значений массива
//array array_count_values (array $input)
$array = array(1, "text", "world", 45, "Hello", 45, 45);
print_r(array_count_values($array));
n();

//array_diff()
//Вычислить расхождение массивов
//array array_diff (array $array, array $array2 [, array $...])
$array1 = array('a' => 'green', 'red', 'blue', 'red');
$array2 = array('b' => 'green', 'yellow', 'red');
print_r(array_diff($array1, $array2));

//array_diff_assoc()
//Вычисляет расхождение массивов с дополнительной проверкой индекса
//array array_diff_assoc (array $array1, array2 [, array $... ])
$array1 = array('a'=>'green', 'b'=>'yellow', 'c'=>'blue');
$array2 = array('a'=>'green', 'b'=>'brown', 'c'=> 'blue');
$result = array_diff_assoc($array1, $array2);
print_r($result);
n();

//array_diff_key()
//Вычисляет расхождение массивов, сравнивая ключи
//array array_diff_key ( array $array1, array $array2 [, array $...])
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7);
var_dump(array_diff_key($array1, $array2));
n();

//array_diff_uassoc()
//Вычисляет расхождение массивов с дополнительной проверкой индекса, осуществляемой при помощи callback-функции
//array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )
function key_compare_func($a, $b)
{
	if ($a === $b){
		return 0;
	}
	return ($a > $b)? 1:-1;
}
$array1 = array('a'=>'green', 'b'=>'brown', 'c'=>'blue', 'red');
$array2 = array('a'=>'green', 'yellow', 'red');
$result = array_diff_uassoc($array1, $array2, 'key_compare_func');
print_r($result);
n();

//array_diff_ukey()
//Вычисляет расхождение массивов, используя callback-функцию для сравнения ключей
/*
array array_diff_ukey ( array $array1 , array $array2 [, array $...], callable $key_compare_func )
*/
function test_func($key1, $key2)
{
	if($key1 === $key2){
		return 0;
	}
	elseif ($key1 > $key2){
		return 1;
	}
	else{
		return -1;
	}
}
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
var_dump(array_diff_ukey($array1, $array2, 'test_func'));
n();

//array_fill()
//Заполняет массив значениями
// array array_fill (int $start_index, int $num, mixed $value)
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
n();
print_r($b);
n();

//array_fill_keys()
//Создает массив и заполняет его значениями с определенными ключами
//array array_fill_keys (array $keys, mixed $value)
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

//array_filter()
//Фильтрует элементы массива с помощью callback-функции
//array array_filter (array $input [, callable $callback = ""])
function odd($var)
{	
	//является ли переданное число нечетным
	return($var & 1);
}
function even($var)
{
	//является ли переданное число четным
	return(!($var & 1));
}
$array = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);
echo 'Нечетные: ';
print_r(array_filter($array, "odd"));
n();
echo 'Четные: ';
print_r(array_filter($array2, "even"));
n();
$entry = array(
				0 => 'foo',
				1 => false,
				2 => -1,
				3 => null,
				4 => '',
			);
print_r(array_filter($entry));
n();

//array_flip()
//Меняет местами ключи с их значениями в массиве
//array array_flip ( array $trans )







































































































































