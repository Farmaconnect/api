[Atras](/README.md) 

# Métodos HTTP - Flash Led
A continuación se mostrará como usar las peticiones API REST para lanzar el evento de layout.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriormente.

## GET
Realizar una consulta de los layout disponibles, con la posibilidad de validar si la etiqueta tiene un layout
disponible

### Recupear todos los layout

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/layout';

const SETTING =
{
    method: 'POST', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}


```

### Recupear layout de una etiqueta en especifico

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/layout?tag=BB3E6FFC';

const SETTING =
{
    method: 'POST', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN':TOKEN
    }
}

const REQUEST = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}


```

Parámetros adicionales que se pueden usar.

Parámetro de consulta       | Tipo de dato              |  Uso                    | Nota    |
------------------------    | ------------------------  |------------------------ |------------------------         |
tag                         | string                  | Opcional             | Id de la etiqueta |