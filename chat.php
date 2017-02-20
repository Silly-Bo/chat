<?php


	$messages = array(
		'你说啥？',
		'你也好',
		'你找我有啥事？',
		'我在吃饭！'
	);

	// 通过array_rand()随机获取数组下标
	// var_dump(array_rand($messages));

	//方法的含义，在其中传入一个数组，返回值是索引 有时是0 有时是3这样的随机数

	$key = array_rand($messages);　

	echo $messages[$key];

	sleep(1);


?>