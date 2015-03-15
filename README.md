*How To:*

```
<?php require_once('vendor/autoload.php');

use Security\Filters\Cleaning;

$injection = '<a href="javascript:void(window.setInterval(function () {window.open(\'http://evil.com\');}, 1000));">kittens</a> here';
var_dump(Cleaning::string($injection));
```