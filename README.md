#Typographie.php &nbsp;[![Build Status](https://travis-ci.org/asleepwalker/typographie.php.svg?branch=master)](https://travis-ci.org/asleepwalker/typographie.php)

Library for preparation of russian texts to web publication.<br>
Core of [Typographie](http://typographie.ru/) web service.

## Installation

Add package to the composer.json:

	composer require asleepwalker/typographie

Run Composer:

	composer install

## Example

```
<?php

use asleepwalker\typographie\Typographie;

$engine = new Typographie('inquot,dashes,specials,paragraphs');

$raw = 'Сервис "Typographie" - подготовка текстов к веб-публикации онлайн (с) 2014-2017';
echo $engine->process($raw);
// > Сервис «Typographie» — подготовка текстов к веб-публикации онлайн © 2014–2017
```

## Actions

`quotes` : Correction of quotes: "" becomes «».<br>
`inquot` (needs `quotes`) : Nested quotes: «„“» (otherwise — duplicate quotes stashing).<br>
`dashes` : If necessary replace hyphens with dashes and minus signs.<br>
`angles` : Replace asterisks and quotes with degrees, feet, inches.<br>
`dblspace` : Fix duplicate spaces in the text.<br>
`specials` : Insert special characters (from the symbol table).<br>
`mathchars` : Insert mathematical symbols (from the same table).<br>
`punctuation` : Fix punctuation, such as spaces before commas.<br>
`specialspaces` : Fix the wrong skip special characters with spaces.<br>
`nbsp` : Attach short words to following words in the text.<br>
`hellip` : Replace repeating dot symbols with ellipsis.<br>
`paragraphs` : Puts paragraphs (&lt;p&gt;) when converting to HTML (with empty string as a delimeter).<br>
`safehtml` : Don't process text inside of &lt;code&gt; and &lt;pre&gt; blocks.<br>
`entities` : Replace special chars with HTML entities.

The list should be comma separated, e.g. `action1,action2,action3`.

Beside defining in the object constructor, use can change configuration by method `actions`:

```
$engine->actions('punctuation,dblspace');
echo $engine->process('К  чёрту орфографию ,главное   все понимают !Ведь так  ?..');
// > К чёрту орфографию, главное все понимают! Ведь так?..
```

## License

The MIT License.