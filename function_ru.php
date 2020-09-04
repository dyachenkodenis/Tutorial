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
$trans = array( 1 => 'banana', 2 => 'apple', 3 => 'peach');
print_r($trans);
n();
$trans = array_flip($trans);
print_r($trans);
n();

//array_intersect()
//Вычисляет схождение массивов
//array array_intersect ( array $array1 , array $array2 [, array $...])
$array1 = array('a' => 'green', 'yellow', 'blue');
$array2 = array('b' => 'red', 'green', 'blue', 'silver');
$result = array_intersect($array1, $array2);
print_r($result);
n();

//array_intersect_assoc()
//Вычисляет схождение массивов с дополнительной проверкой индекса
//array array_intersect_assoc (array $array1 , array $array2 [, array $ ... ])
$array1 = array('a' => 'green', 'yellow', 'blue');
$array2 = array('a' => 'green', 'red', 'yellow');
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);
n();

//array_intersect_key()
//Вычислить пересечение массивов сравнивая ключи
//array array_intersect_key (aray $array1 , array $array2 [, array $ ...])
$array1 = array('blue' => 1, 'red' => 4, 'green' => 5);
$array2 = array('red' => 4, 'green' => 5, 'silver' => 6);
$result_array = array_intersect_key($array1, $array2);
print_r($result_array);
n();

//array_intersect_uassoc()
//Вычисляет схождение массивов с дополнительной проверкой индекса, осуществляемой при помощи callback - функции
//array array_intersect_uassoc (array $array1 , array $array2 [, array $ ...], callable $key_compare_func)
$array1 = array('a' => 'green', 'red', 'b' => 'blue');
$array2 = array('a' => 'red', 'b' => 'blue', 'green', 'orange');
print_r(array_intersect_uassoc($array1, $array2, 'strcasecmp'));
n();

//array_intersect_ukey()
//Вычисляет схождение массивов, используя callback - функцию для сравнения ключей
//array array_intersect_ukey ( array $array1, array $array2 [, array $...], callable $key_compare_func)
function key_compare_func_a($key1, $key2)
{
	if($key1 == $key2)
		return 0;
	else if ($key1 > $key2)
		return 1;
	else
		return -1;
}
$array1 = array('blue' => 1, 'green' => 4, 'red' => 6);
$array2 = array('green' => 8, 'brown' => 7, 'orange' => 9);
var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func_a'));
n();

//array_key_exists()
//Проверяет, присутствует ли в массиве указвнный ключ или индекс
//bool array_key_exists (mixed $key, array $search)
$search_array = array('first' => 1, 'second' => 2);
if(array_key_exists('first', $search_array)){
	echo "Массив содержит элемент: 'first' ";
}
n();

//array_keys()
//Возвращает все или некоторое подмножество ключей массива
//array array_keys (array $input [, mixed $search_value = NULL [, bool $strict = false]])
$array = array(0 => 100, 'color' => 'red');
print_r(array_keys($array));
n();
$array = array('blue', 'green', 'blue', 'blue');
print_r(array_keys($array, 'blue'));
n();
$array = array(
				'color' => array('blue', 'red', 'green'),
				'size'  => array('small', 'large', 'medium')
		);
print_r(array_keys($array));
n();

//array_map()
//Применяет callback - функцию ко всем элементам указанных массивов
//array array_map ( callback $callback , array $arr1 [, array $...])
function cube($n)
{
return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
n();
$func = function($value){
	return $value * 2;
};
print_r(array_map($func, range(1, 5)));
n();
function show_Spanish($n, $m)
{
	return("Число {$n} по испански - {$m}");
}
function map_Spanish($n, $m)
{
	return(array($n => $m));
}
$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");
$c = array_map("show_Spanish", $a, $b);
print_r($c);
n();
$d = array_map("map_Spanish", $a, $b);
print_r($d);
n();
$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "tree", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");
$d = array_map(null, $a, $b, $c);
print_r($d);
n();
$arr = array("stringkey" => "value");
function cb1($a){
	return array ($a);
}
function cb2 ($a, $b){
	return array ($a, $b);
}
var_dump(array_map("cb1", $arr));
n();
var_dump(array_map("cb2", $arr, $arr));
n();
var_dump(array_map(null, $arr));
n();
var_dump(array_map(null, $arr, $arr));
n();

//array_merge()
//Сливает один или больее количество массивов
//array array_merge ( array $array1 [, array $...])
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
n();
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
print_r($result);
n();
$array1 = array(0 => 'zerro_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);
n();

//array_merge_recursive()
//Рекурсивное слияние двух и более массивов
//array array_merge_recursive ( array $array1 [, array $... ])
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
n();

//array_multisort()
//Сортирует несколько массивов или многомерные массивы
//bool array_multisort ( array &$arr [, mixed $arg = SORT_ASC [, mixed $arg = SORT_REGULAR [, mixed $... ]]])
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 2, 3, 4);
array_multisort($ar1, $ar2);
var_dump($ar1);
n();
var_dump($ar2);
n();
$arr = array(
			array("10", 11, 100, 100, "a"),
			array(1, 2, "2", 3, 1)
		);
array_multisort($arr[0], SORT_ASC, SORT_STRING,
				$arr[1], SORT_NUMERIC, SORT_DESC);
var_dump($arr);
n();
$data[] = array('volume' => 67, 'edition' => 2);
n();
$data[] = array('volume' => 86, 'edition' => 1);
n();
$data[] = array('volume' => 85, 'edition' => 6);
n();
$data[] = array('volume' => 98, 'edition' => 2);
n();
$data[] = array('volume' => 86, 'edition' => 6);
n();
$data[] = array('volume' => 67, 'edition' => 7);
n();
//получение списка столбцтов
foreach($data as $key => $row){
	$volume[$key] = $row['volume'];
	$edition[$key] = $row['edition'];
}
//сортируем данные по volume по убыванию по edition по возрастанию
//добавляеи $data в качестве последнего параметра, для сортировки по общемуключу
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
n();
$array = array("car", "apple", "book");
$array_lowercase = array_map('strtolower', $array);
print_r($array_lowercase);
n();
array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);
print_r($array);
n();

//array_pad()
//Дополнить массив определенным значением до указанной длины
//array array_pad ( array $input , int $pad_size , mixed $pad_value )
$input = array(12, 10, 9);
$result = array_pad($input, 5, 0);
n();
//result: array(12, 10, 9, 0, 0);
$result = array_pad($input, -7, -1);
n();
//result: array(-1, -1, -1, -1, 12, 10, 9);
$result = array_pad($input, 2, "noop");
n();
// операция не произведена

//array_pop()
//Извлекает последний элемент массива
$stack = array("banana", "apple", "orange", "raspberry");
$new_arr = array_pop($stack);
print_r($new_arr);
n();

//array_product()
//Вычислить произведение значений массива
//number array_product(array $array)
$a = array(3, 4, 6, 7, 9);
echo array_product($a);
n();
echo array_product(array());
n();

//array_push()
//Добавляет один или несколько элементов в конец массива
//int array_push ( array &$array , mixed $var [, mixed $ ... ])
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
n();

//array_rand()
//Выбирает один или несколько случайных ключей из массива
//mixed array_rand ( array $input [, int $num_req = 1 ])
$input = array("apple", "orange", "banana");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]];
n();
echo $input[$rand_keys[1]];
n();

//array_reduce()
//Итеративно уменьшает массив к единственному значению, используя callback-функцию
//mixed array_reduce ( array $input , callable $function [, mixed $initial = NULL])
function rsum($v, $w)
{
	$v += $w;
	return $v;
}
function rmul($v, $w)
{
	$v *= $w;
	return $v;
}
$a = array(1, 2, 3, 4, 5);
$x = array();
$b = array_reduce($a, "rsum");
n();
$c = array_reduce($a, "rmul", 10);
n();
$d = array_reduce($x, "rsum", "No data to reduce");
n();

//array_replace()
//Заменяет элементы массива элементами других переданных массивов
//array array_replace( array $array , array $array1 [, array $ ...])
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
n();

//array_replace_recursive()
//Рекурсивно заменяет элементы первого массива элементами переданных массивов
//array array_replace_recursive (array $array , array $array1 [, array $...])
$base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"),);
$replacements = array('citrus' => array('pinapple'), 'berries' => array('blueberry'));
$basket = array_replace_recursive($base, $replacements);
print_r($basket);
n();
$basket = array_replace($base, $replacements);
print_r($basket);
n();

//array_reverse()
//Возвращает массив с элементами в обратном порядке
//array array_reverse ( array $array [, bool $preserve_keys = false ])
$input = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);
print_r($input);
n();
print_r($reversed);
n();
print_r($preserved);
n();

//array_search()
//Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
// mixed array_search ( mixed $needle , array $haystack [, bool $strict = false])
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2
print_r($key);
n();
$key = array_search('red', $array); // $key = 1
print_r($key);
n();

//array_shift()
//Извлекает первый элемент массива
//mixed array_shift (array &$array)
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
n();

//array_slice()
//Выбирает срез массива
//array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preselve_keys = false ]])
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 2); //возвращает "c", "d" и "e"
print_r($output);
n();
$output = array_slice($input, -2, 1); //возвращает "d"
print_r($output);
n();
$output = array_slice($input, 0, 3); //возвращает "a", "b" и "c"
print_r($output);
n();

//array_splice()
//Удаляет часть массива и заменяет её чем-нибудь ещё
//array array_splice ( array &$input , int $offset [, int $length = 0 [, mixed $replacement ]])
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 2)); 
print_r($input);
n();
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 1, -1)); 
n();
print_r($input);
n();
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 1, count($input), "orange")); 
n();
print_r($input);
n();
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, -1, 1, array("black", "maroon"))); 
n();
print_r($input);
n();
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 3, 0, "purple")); 
n();
print_r($input);
n();

//array_sum()
//Вычисляет сумму значений массива
//number array_sum( $array )
$a = array(1, 5, 6, 2, 9);
echo "sum(a) = " . array_sum($a);
n();
$b = array("a" => 3.4, "b" => 5.3, "c" => 1.2);
echo "sum(b) = " . array_sum($b);
n();

//array_udiff()
//Вычисляет расхождение массивов, используя для сравнения callback-функцию
//array array_udif ( array $array1 , array $array2 [, array $ ... ], callable $data_compare_func)
class cr{
	private $priv_member;
	function cr($val)
	{
		$this->priv_member = $val;
	}
	static function comp_func_cr($a, $b)
	{
		if($a->priv_member === $b->priv_member) return 0;
		return($a->priv_member > $b->priv_member)? 1 : -1;
	}
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15));
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15));
$result = array_udiff($a, $b, array("cr", "comp_func_cr"));
print_r($result);
n();

//array_udiff_assoc()
//Вычисляет расхождение в массивах с дополнительной проверкой индексов, используя для сравнения значений callback-функцию
//array array_udiff_assoc ( array $array1, array $array2 [, array $ ...], callable $data_compare_func )
class cr1{
	private $priv_member;
	function cr1($val)
	{
		$this->priv_member = $val;
	}
	static function comp_func_cr1($a, $b)
	{
		if($a->priv_member === $b->priv_member) return 0;
		return($a->priv_member > $b->priv_member)? 1 : -1;
	}
}
$a = array("0.1" => new cr1(9), "0.5" => new cr1(12), 0 => new cr1(23), 1 => new cr1(4), 2 => new cr1(-15));
$b = array("0.2" => new cr1(9), "0.5" => new cr1(22), 0 => new cr1(3), 1 => new cr1(4), 2 => new cr1(-15));
$result = array_udiff_assoc($a, $b, array("cr1", "comp_func_cr1"));
print_r($result);
n();

//array_udiff_uassoc()
//Вычисляет расхождение в массивах с дополнительной проверкой индексов, используя для сравнения значений и индексов callback-функцию
//array array_udiff_uassoc(array $array1, array $array2 [, array $ ... ], callable $data_compare_func, callable $key_compare_func )
class cr2{
	private $priv_member;
	function cr2($val)
	{
		$this->priv_member = $val;
	}
	static function comp_func_cr2($a, $b)
	{
		if($a->priv_member === $b->priv_member) return 0;
		return($a->priv_member > $b->priv_member)? 1 : -1;
	}
	static function comp_func_key2($a, $b)
	{
		if($a === $b) return 0;
		return ($a > $b)? 1 : -1;
	}
}
$a = array("0.1" => new cr2(9), "0.5" => new cr2(12), 0 => new cr2(23), 1 => new cr2(4), 2 => new cr2(-15));
$b = array("0.2" => new cr2(9), "0.5" => new cr2(22), 0 => new cr2(3), 1 => new cr2(4), 2 => new cr2(-15));
$result = array_udiff_uassoc($a, $b, array("cr2", "comp_func_cr2"), array("cr2", "comp_func_key2"));
print_r($result);
n();

//array_uintersect()
//Вычисляет пересечение массивов, используя для сравнения значений callback-функцию
//array array_uintersect( array $array1, array $array2 [, $ ...], callable $data_compare_func )
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_uintersect($array1, $array2, "strcasecmp"));
n();

//array_uintersect_assoc()
//Вычисляет пересечение массивов с дополнительной проверкой индексов, используя для сравнения значений callback-функцию
//array array_uintersect_assoc( array $array1, array $array2 [, array $ ...], callable $data_compare_func)
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));
n();

//array_uintersect_uassoc()
//Вычисляет пересечение массивов с дополнительной проверкой индекса, используя для сравнения индексов и значений индивидуальные callback-функции
//array array_uintersect_uassoc (array $array1, array $array2 [, array $ ...], callable $data_compare_func, calable $key_compare_func)
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
n();

//array_unique()
//Убирает повторяющиеся значения из массива
//array array_unique( array $array,  [, int $sort_flags = SORT_STRING])
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
n();
$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
print_r($result);
n();

//array_unshift()
//Добавляет один или несколько элементов в начало массива
//int array_unshift (array &$array, mixed $var [, mixed $...])
$array = array("orange", "banana");
array_unshift($array, "apple", "raspberry");
print_r($array);
n();

//array_values()
//Выбирает все значения массива
//array array_values( array $input)
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));
n();

//array_walk()
//Применяет заданную пользователем функцию к каждому элементу массива
//bool array_walk( array &$array, callable $funcname [, mixed $userdata = NULL])
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
function test_alter(&$item1, $key, $prefix)
{
	$item1 = "$prefix: $item1";
}
function test_print($item2, $key)
{
	echo "$key . $item2 <br />";
}
echo "До ...:";
array_walk($fruits, 'test_print');
array_walk($fruits, 'test_alter', 'fruit');
echo "... После:";
array_walk($fruits, 'test_print');
n();

//array_walk_recursive()
//Рекурсивно применяет пользовательскую функцию к каждому элементу массива
//bool array_walk_recursive( array &$input, callable $funcname [, mixed $userdata = NULL])
$sweet = array("a" => "apple", "b" => "banana");
$fruits = array("sweet" => $sweet, "sour" => "lemon");
function test_print1($item, $key)
{
	echo "$key holds $item <br />";
}
array_walk_recursive($fruits, "test_print1");
n();

//arsort()
//Сортирует массив в обратном порядке, сохраняя ключи
//bool arsort (array &$array [, int $sort_flags = SORT_REGULAR ])
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach($fruits as $key => $value){
	echo "$key = $value". "<br />";
}
n();

//asin()
//Арксинус
//float asin (float $arg)
echo asin(0.2);
n();

//asinh()
//Гиперболический арксинус
//float asinh (float $arg)
echo asinh(1.2);
n();

//asort()
//Сортирует массив, сохраняя ключи
//bool asort(array &$array [, int $sort_flags = SORT_REGULAR])
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $key => $value){
	echo "$key = $value <br />";
}
n();

//assert()







































































































