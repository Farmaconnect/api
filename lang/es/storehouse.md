[Atras](/README.md) 

# Métodos HTTP - Almacenes
A continuación se mostrará como usar las peticiones API REST.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriorment.

## POST
Añadir una etiqueta a un almacén

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/storehouse/';

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
        tags: []                // array de enteros
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

const URL = 'https://rest.farmaconnect.es/storehouse/?id=Ad-74174';

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
list                          | string                    | Obligatorio  (1)           | Recuperar todos los almacenes  |

## PUT
Cambiar productos asociados a la categoria
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/storehouse/';

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

const URL = 'https://rest.farmaconnect.es/storehouse/';

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