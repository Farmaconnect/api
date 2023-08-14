[Atras](/README.md) 

# Métodos HTTP - Articulos
A continuación se mostrará como usar las peticiones API REST àra la obtención de información acerca de sus productos.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solicitó anteriormente.

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
        id: '74174',                     // ( Obligatorio ) string
        attrs:
        {
            name:'Product 74174',        // ( Obligatorio ) string
            pvp: 5.00,                   // float, decimal, int
            pvp_aux: 5.00,               // float, decimal, int
            pvp_unit: 5.00,              // float, decimal, int
            supplier: 0,                 // int
            stock: 0,                    // int
            size: 0,                     // int
            size_unit: 'ml',             // string
            supplier: 10,                // int
            expiration: "2022-11-05",    // string
            location: "B-38",            // string
            url: '',                     // string
            ean: ["8555888888811"]       // array de strings
        },
        category: []                     // array de string
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

const URL = 'https://rest.farmaconnect.es/product?id=Ad-74174';

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

Parametro de consulta       | Tipo de dato              |  Uso                    | Nota                                                                                                                |
------------------------    | ------------------------  |------------------------ |------------------------                                                                                             |
id                          | string                    | Obligatorio             | Identificador que se le añadió como referencia                                                                      |
category                    | string                    | Opcional ( product )    | Recuperar categorías asociadas al producto                                                                          |
info                        | string                    | Opcional ( tag )        | Si quiere recuperar etiquetas asociadas al producto, solo deberá añadir como valor ***tag*** al atributo ***info*** |

## PUT
Cambiar datos de un producto
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/product';

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
        attrs:
        {
            name:'Product 74174',        // ( Obligatorio ) string
            pvp: 10.00,                  // float, decimal, int
            pvp_aux: 10.00,              // float, decimal, int
            pvp_unit: 10.00,             // float, decimal, int
            supplier: 0,                 // int
            stock: 1,                    // int
            size: 0,                     // int
            size_unit: 'ml',             // string
            supplier: 10,                // int
            expiration: "2022-11-05",    // string
            location: "A-37",            // string
            url: '',                     // string
            ean: ["8555888888822"]       // array de strings
        },
        category: []                     // array de string
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

const URL = 'https://rest.farmaconnect.es/product?id=Ad-74174';

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

## Ejemplo en otros lenguajes
Lenguage                    | Ejemplo                      |
------------------------    | ------------------------  |
Java             | [Ver archivo](/examples_post/java.jar)        | 