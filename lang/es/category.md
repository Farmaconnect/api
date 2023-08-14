[Atras](/README.md) 

# Métodos HTTP - Categoria de productos
A continuación se mostrará como usar las peticiones API REST para la obtención de las categorías de productos.

## Importante
En todas las peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solicitó anteriormente.

## POST
Añadir un producto a una categoria

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/category/';

const SETTING =
{
    method: 'POST', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }, 
    body : 
    {
        id: 'Principal category', // string
        articles: []            // array de string
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## GET
Recuperar información de una categoría

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/category?id=Ad-74174';

const SETTING =
{
    method: 'GET', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }, 
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}

```

Parámetro adicionales que se pueden usar.

Parámetro de consulta       | Tipo de dato              |  Uso                    | Nota    |
------------------------    | ------------------------  |------------------------ |------------------------         |
id                          | string                    | Opcional             |  |
list                         | string                    | Opcional (1)           |  Recuperar todas las categorías |

## PUT
Cambiar productos asociados a la categoría
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/category';

const SETTING =
{
    method: 'PUT', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }, 
    body : 
    {
        id: 'Principal category', // string
        add: [],                 // array de string, Añadir a la lista actual
        del: []                  // array de string, Eliminar de la lista actual
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## DELETE 
Quitar una categoría
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/category?id=Principal category';

const SETTING =
{
    method: 'DELETE', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'TOKEN':TOKEN
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```