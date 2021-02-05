[Atras](/README.md) 

# Métodos HTTP - Articulos
A continuación se mostrará como usar las peticiones API REST.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriorment.

## POST
Añadir un producto a la plataforma.

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/product/';

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
        id:'Ad-74174',
        attrs:
        {
            description:'', // ( Obligatorio ) string
            pvp:0.00,       // float, decimal, int
            pvp_aux:0.00,   // float, decimal, int
            pvp_unit:0.00,  // float, decimal, int
            supplier: 0,    // int
            stock:0,        // int
            size:0,         // int
            size_unit:'ml', // strin
            url:'',         // string
            ean:[]          // array de strings
        },
        category: []        // array de string
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## GET
Recuperar información de un producto

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
id                          | string                    | Obligatorio             | Identificador que se le añadió como referencia |
category                    | string                    | Opcional ( product )    | Recuperar categorias asociandas al producto |
info                        | string                    | Opcional ( tag )        | Si quiere recuperar etiquetas asociadas al producto, solo deberá 
añadir como valor ***tag*** al atributo ***info*** |

## PUT
Cambiar datos de un producto
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
        id:'Ad-74174',
        attrs:
        {
            name:'', // string
            pvp:0.00,       // float, decimal, int
            pvp_aux:0.00,   // float, decimal, int
            supplier: '',    // string
            stock:0,        // int
            url:'',         // string
        },
        category: []        // array de string
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```
## DELETE 
Quitar un producto
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
        id:'Ad-74174'
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}
```