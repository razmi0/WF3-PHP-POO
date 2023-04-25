# Objectif

Construire une classe Character et programmer l'histoire d'une rencontre fortuite entre deux Superman et Batman.


# Structure

```mermaid
graph LR
A(index.php) -- include --> B(Character.php)
A(index.php) -- include --> C(stats.php)
A(index.php) -- include --> D(head.html.php)
A(index.php) -- include --> E(body.html.php)
D(body.html.php) -- include --> F(header.html.php)
D(body.html.php) -- include --> G(cards.html.php)
```

#  Notes

  

<p>
POO améliore lisibilité, maintenabilité et réutilisabilité du code.
Les recommendations PSR sont des conventions de codage.
</p>

> par exemple le nom du fichier doit être le même que
le nom de la classe.

<p>
Une déclaration sauf constante se type. On utilise des SETTERS et des GETTERS pour les manipuler. $this faisant référence à l'instance.
</p>
<p>
Le __construct et __destruct sont des méthodes dites <i>magique</i> Contructor à la création d'une instance, destructor / unset à la destruction d'une instance.
</p>
<p>
Les classes enfants qui <i>extend</i> peuvent acceder à la propriété/var <i>protected</i> de la classe parente.
<br> Les seules méthodes accessibles d'une instance sont dites de visibilité <i>public</i> . Les constantes, propriétés doivent être <i>private</i> . 
</p>
<p>
La portée statique <i>static</i> et son opérateur <i>::</i> permettent s'acceder à l'attribut statique sans passer par une instance d'objet. Donc pas de $this dans une methode statique. La classe se comporte comme une librairie si elle contient nombre de methode statique. Propriété, methode, constante peuvent être statique.
</p>

### Precision sur l'héritage
<p>
Les classes enfants qui <i>extend</i> peuvent acceder à la propriété/var <i>protected</i> de la classe parente. Les parents ne peuvent pas accéder aux classes enfants.
</p>

```php
class MyChild extends  MyParent {
	public  function  __construct(){
		// protected (last name) is accessible in the child
		// class but not outside the class protected 
		// lastname inherited from MyParent
		echo  $this->lastname; // print Dupont
		}
	}
```
MyChild extends from MyParent : 
```php
class MyParent {
	protected string $lastname =  "Dupont";
	}
```


