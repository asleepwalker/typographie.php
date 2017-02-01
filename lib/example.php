<?php

	require_once('Typographie.php');
	use asleepwalker\typographie\Typographie;

	$engine = new Typographie('quotes,inquot,dashes,specials,paragraphs');

	$raw = 'Сервис "Typographie" - подготовка текстов к веб-публикации онлайн (с) 2014-2017';
	echo $engine->process($raw);
	// > Сервис «Typographie» — подготовка текстов к веб-публикации онлайн © 2014–2017
