[Atras](/README.md) 

# Métodos HTTP - Promociones
A continuación se mostrará como usar las peticiones API REST para la obtención de información acerca de sus promociones.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solicitó anteriormente.

## POST
Añadir una promoción a la plataforma.

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/promotion/';

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
        name: "Oferta 20%",             // ( Obligatorio ) string
        target: "32",                   // ( Obligatorio ) Id de [Artículo / Lista / Familia / Categoría / Etiqueta]
        promotion_type: 1,              // Tipo promoción (ver abajo)
        type_calendar: 1,               // Tipo calendario (ver abajo)
        dates: [                        // Listado de fechas (ver tipo de calendario y ejemplos)
            { date_init: "2023-07-10", date_end: "2023-07-16" }
        ],
        discount: 20,                   // float, decimal, int
        type_discount: 2,               // Tipo descuento (ver abajo)
        title: "-20%",                  // string
        text_content: ""                // string
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}

```
## GET
Recuperar listado de las promociones

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/promotion';

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

## PUT
Cambiar datos de una promoción
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/promotion';

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
        id: 40,                         // ( Obligatorio ) id de promoción
        name: "Oferta 20%",             // ( Obligatorio ) string
        target: "32",                   // ( Obligatorio ) Id de [Artículo / Lista / Familia / Categoría / Etiqueta]
        promotion_type: 1,              // Tipo promoción (ver abajo)
        type_calendar: 1,               // Tipo calendario (ver abajo)
        dates: [                        // Listado de fechas (ver tipo de calendario y ejemplos)
            { date_init: "2023-07-10", date_end: "2023-07-16" }
        ],
        discount: 20,                   // float, decimal, int
        type_discount: 2,               // Tipo descuento (ver abajo)
        title: "-20%",                  // string
        text_content: ""                // string
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}

```
## DELETE 
Quitar una promoción	
```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/promotion?id=42';

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

### Tipos de calendario "type_calendar"
id                          | Descripción                | Ejemplo                                                                                                              |
------------------------    | ------------------------   | -------------------------------------------------------------------------------------------------------------------  |
1                           | Fija                       | [ { date_init: "2023-07-10", date_end: null } ]                                                                      |
2                           | Rango                      | [ { date_init: "2023-07-10", date_end: "2023-07-16" } ]                                                              |
3                           | Temporal                   | [ { "date_init": "2023-07-19", "date_end": "2023-07-19" }, { "date_init": "2023-07-22", "date_end": "2023-07-22" } ] |

### Tipos de descuento "type_discount"
id                          | Descripción                  |
------------------------    | ------------------------     |
1                           | Artículo                     |
2                           | Lista                        |
3                           | Familia                      |
4                           | Categoría                    |
5                           | Etiqueta                    |

### Tipos de promociones "promotion_type"
id                          | Descripción                  |
------------------------    | ------------------------     |
1                           | Sin descuento                |
2                           | Porcentaje                   |
3                           | Descontar cantidad           |
4                           | Nuevo PVP                    |

## Ejemplo en otros lenguajes
Lenguage                    | Ejemplo                      |
------------------------    | ------------------------     |
Java             | [Ver archivo](/examples_post/java.jar)  | 