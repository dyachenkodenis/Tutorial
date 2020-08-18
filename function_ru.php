<?php

// <br />
function n(){
	echo "<br />";
}



//abs(); 
// Модуль числа
$abs = abs(-4.2); // 4,2
$abs1 = abs(5); // 5
$abs2 = abs(-5); // 5
echo $abs . " and " . $abs1 . " and " . $abs;
n();

//acos(); 
// Арккосинус
echo(acos(0.3));
n();

//acosh(); 
// Гиперболический арккосинус
echo(acosh(7));
n();

//addcslashes(); 
// Экранирует строку слешами в стиле языка С
echo addcslashes('foo[ ]', 'A..z');
echo addcslashes("Hello, World!", 'A..z');
n();

//addslashes(); 
// Экранирует строку с помощью слешей
$str = "Hello, O'reilly";
echo addslashes($str);
n();

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
echo apache_get_version();
n();

//apache_getenv()
//Возвращает переменную окружения подпроцесса сервера Apache
/*
string apache_getenv (string $variable [, bool $walk_to_top = false])
*/
$ret = apache_getenv("SERVER_ADDR");
echo $ret;
n();

//apache_lookup_uri()
//Осуществить частичный запрос на указанный URI и вернуть все полученные сведения
/*
object apache_lokup_uri (string $filename)
*/
$info = apache_lookup_uri('index.php?var=value');
print_r($info);
if(file_exists($info->filename)){
	echo 'file exists!';
}
n();

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
$headers = apache_request_headers();
foreach($headers as $header => $value){
	echo "$header: $value <br />";
}

//apache_setenv()
//Устанавливает переменную subprocess_env Apache
/*
bool apache_setenv (string $variable , string $value [, bool $walk_to_top = false])
*/
apache_setenv("EXAMPLE_VAR", "Любое значение");

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
print_r(apache_response_headers());
n();

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
//print_r(apd_dump_regular_resources())

//apd_echo()
//Вывод в отладочный сокет



















































































































































