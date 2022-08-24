# What is OsynapsyHtml? #
OsynapsyHtml is a library for build html tag and components in Php.

##Installation##
It's recommended that you use [Composer](https://getcomposer.org/) to install osynapsy-html.

```bash
$ composer require osynapsy.net/osynapsy-html "@stable"
```

## Usage
<?php

use Osynapsy\Html\Tag;

$div = new Tag('div', 'test', 'panel');

echo $div;


