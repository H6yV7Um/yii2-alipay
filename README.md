yii2 for alipay
===============
noecs self do

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist noecs/yii2-alipay "*"
```

or add

```
"noecs/yii2-alipay": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \noecs\alipay\alpay::widget(); ?>```