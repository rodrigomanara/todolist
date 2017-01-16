# todolist
TodoList was build using a simple bootstrap 

###Controller that need to extends Asbtractcontroller
```

use Lib\AbstractController;

class DefaultController extends AbstractController {
....



}
```

###Model needs to extends AbstractModel


```
<?php

namespace Lib\AbstractModel;

class ModelClass extends AbstractModel {


}
```
### View stands alone as does not use any template system

```
<?php

class ViewClass {

}
```

## how to create a first page and configure the route
-- create a file on src/Config/router.ini
-- add the configuration
```
[router]
;home page
home[namespace] = "\\Rmanara\\Controller\\DefaultController"
home[method] ="index"
home[router] = "/"

```
adding this you will be able to create a router to your page

## How to render a page using php
you need to declare this method inside the controller
!notice that you can send any data you need in array only not object

```
<?php
$this->view->render("Default/index.php", $array);
``` 
### how to customise add the args on the view page
```
<?php
var_dump($args);
```
