[Atras](/README.md) 

# Métodos HTTP - Categoria de productos
A continuación se mostrará como usar las peticiones API REST.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriorment.

## POST
Añadir un productos a una categoria

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
        id:'Listado principal', // string
        articles: []            // array de enteros
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## GET
Recuperar información de una categoria

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/product/?id=Ad-74174';

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

Parametro adicionales que se pueden usar.

Parametro de consulta       | Tipo de dato              |  Uso                    | Nota    |
------------------------    | ------------------------  |------------------------ |------------------------         |
id                          | string                    | Obligatorio             |  |

## PUT
Cambiar productos asociados a la categoria
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/product/';

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
        id:'Listado principal', // string
        add:[],                 // array de enteros, Añadir a la lista actual
        del:[]                  // array de enteros, Eliminar a la lista actual
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## DELETE 
Quitar una categoria
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/product/';

const SETTING =
{
    method: 'DELETE', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }, 
    body : 
    {
        id:'Listado principal'
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```