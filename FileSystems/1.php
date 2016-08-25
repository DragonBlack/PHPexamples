<meta charset="utf-8">
<?php
error_reporting(E_ALL);
$path = __DIR__;
//echo 'PATH: ', $path, '<br/>';
//echo DIRECTORY_SEPARATOR, '<br/>';
//$scan = scandir('../../', 0); //sorting 0 or 1;
//print_pre($scan);

//
//$dir = opendir($path);
//while (($file = readdir($dir)) !== false) {
//	echo $file, '<br/>';
//}
//closedir($dir);
//
//if(!is_dir($path.DIRECTORY_SEPARATOR.'upload')){
//	mkdir($path.DIRECTORY_SEPARATOR.'upload', 776);
//}
//else{
//	rmdir($path.DIRECTORY_SEPARATOR.'upload');
//}

//$a = glob(dirname(__FILE__).'/*'); //Флаги
//print_pre($a);
//
//print_pre(dirname(__FILE__));

/* =========== Потоки =========== */

//$a = file_get_contents('1.php');
//print_pre(htmlentities($a));
//file_put_contents('test.txt', $a, FILE_APPEND);

//$a = file_get_contents('http://yaplakal.ru');
//print_pre(htmlentities($a));

//$a = file_get_contents('php://input');
//print_pre($a);
//
//$f = fopen('potok.php', 'rb');
//while(!feof($f)){
//	$a = fgetc($f);
//	echo $a, '<br/>';
//}

//fseek($f, 0);
//while(!feof($f)){
//	$a = fread($f, 50);
//	echo htmlentities($a), '<br/>';
//}
//fclose($f);
//
//$f = fopen('example.txt', 'a');
//$s = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget augue eget nunc lobortis ornare et non magna. Curabitur finibus tempor metus. Duis blandit vestibulum congue. Praesent quis tempor nibh. Quisque dapibus lacus ac turpis mollis, sed interdum enim pellentesque. Etiam nec sollicitudin odio. Pellentesque dignissim, urna sed tincidunt eleifend, quam mauris finibus ipsum, id egestas velit tellus in erat. ';
//fwrite($f, $s);
//fwrite($f, "\r\nAppend text");
//fclose($f);
//
// unlink('example.txt');
//print_r(round(disk_free_space($path)/1024/1024));

function print_pre($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

