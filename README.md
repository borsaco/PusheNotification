# PusheNotification
PHP pushe.co API wrapper

## Install

Via Composer

``` bash
composer require borsaco/pushe-notification
```
## Initialise

first initialise with this code and token you get from http://poushe.co

```php
<?php

  $token = '7fb1***********29b464c';
  $pushNotification = new \Borsaco\PusheNotification\PushNotification($token);
  
?>
```
## Usage

For set add application:
```php
<?php

  $pushNotification->addApplication('com.example.app');

?>
```

For set Notification part:
```php
<?php

  $notification = new \Borsaco\PusheNotification\Entities\Notification();
  $notification->setTitle('title');
  $notification->setContent('test content');

  $pushNotification->setNotification($notification);

?>
```

Finaly you can send notification with ```send()``` method:
```php
<?php

  $pushNotification->send();

?>
```

## More

You can find more information in: http://panel.pushe.co/documentation
