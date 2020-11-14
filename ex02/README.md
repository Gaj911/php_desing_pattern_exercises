# ex02 - Decorator

La classe `SimpleCookie` implémente l'interface `Cookie`.

Faites en sortes d'utiliser un décorateurs avec les classes `CookieMacadamia`, `CookieWhiteChocolate`. Dans le fichier `DecoratorCookie.php`.

Les décorateurs auront dans leurs classes:

Un attribut:

```php
protected $cookie;
```

Des methodes:

```php
public function __construct(Cookie $coffee){}

// Qui retournera la calorie courrante + l'ajout d'un nombre
public function getCalories(): Cookie {} 

// Qui retournera le type courrant + l'ajout d'une string
public function getType(): string {}
```

La sortie que vous devez obtenir est la suivante:

```
Simple Cookie 170
Simple Cookie, macadamia 180
Simple Cookie, macadamia, white chocolate 200
```