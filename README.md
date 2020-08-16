This is a study project based on  Default Project
===============
This is a study serialize library.

Installation
------------
Either run

composer require bovsunovsky/serialize-study-library

or add

"bovsunovsky/serialize-study-library": "~2.0"

to the require section of your composer.json.

Usage
----- 
1)  Add: use BOA\Serializer;
2)  Set returned format by method setReturnedFormat(),
3)  Call method serialize($data);

Example:

$seralizer = new Serializer();
$seralizer->setReturnedFormat('xml');
echo $seralizer->serialize($data);

Tests
-----
Run with console :" ./tests/serializeTest" or "php tests/serializeTest"

License
-------
This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2020, Alexandr Bovsunovsky
