[Atras](/README.md) 

# Métodos HTTP - Etiquetas
A continuación se mostrará como usar las peticiones API REST.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriorment.

## POST
Asignar una etiqueta a un producto o varios productos.

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/tag/';

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
        tag:'F751BB1C',
        articles:['89449'], // Array de productos, se require validar cuantos productos permite el diseño
        template:'NORMAL' // Opcional, por defecto siempre pondrá el primer diseño creado
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## GET
Recuperar información de las etiquetas

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/tag/?tag=F751BB1C';

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
tag                         | string                    | Obligatorio             | Id de la etiqueta |
template                    | int                       | Opcional                | Recuperar diseños asociados al modelo de etiqueta|
flash                       | int (0,1)                 | Opcional                | Lanzar evento flash |

## PUT
Cambiar el diseño, el producto o ambos
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/tag/';

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
        tag:'F751BB1C',
        articles:['89449'], // Array de productos, se require validar cuantos productos permite el diseño
        template:'NORMAL' // Opcional, por defecto siempre pondrá el primer diseño creado
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## DELETE 
Quitar un asignación.
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/tag/';

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
        tag:'F751BB1C'
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```