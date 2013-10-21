jepti-webshop
=============

### Navne Konventioner

Generelt:
- kun på engelsk
- ingen mellemrum
- [camelcase](http://en.wikipedia.org/wiki/CamelCase)

#### CSS

```css
#pageHeader
.capitalizeFirstLetterInEveryWord
```
Som kan bruges i HTML:
```HTML
<header id="pageHeader"></header>
```

#### Classes

Start med stort bogstav.

```php
class Post {}
class LineItem {}
```

#### functions

Små bogstaver med underscores imellem.

```php
function name_of_function() 
{
  // function body
}
```