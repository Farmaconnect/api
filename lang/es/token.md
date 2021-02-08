[Atras](/README.md) 

# Obtención de Token de acceso
Para solicitar el Token de acceso deberá envíar la **TOKEN_KEY** en la cabecera de la petición **GET**.
Esta será proporcionada por el administador de la API.

## Ejemplo en Javascript (ES6)
```javascript
const KEY = '111111-2222-3333-4444-5555555555';
const URL = 'https://rest.farmaconnect.es/';

const SETTING =
{
    method: 'GET', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN_KEY':KEY
    }
}

const REQUEST_TOKEN = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}

```
## Respuesta
Si la petición es correcta, se recibirá una respuesta como el ejemplo siguiente:
```javascript

{
    status:200,
    result: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxIiwibmFtZSI6IkZhcm1hY29ubmVjdCBFamVtcGxvIiwiaWF0IjoxNTE2MjM5MDIyfQ.voSErXX9Wl2b0HtUNPk1PG_j7wXkikSHwb4U0wO_Uas'
}
```

## Ejemplo en otros lenguajes
Lenguage                    | Ejemplo                      |
------------------------    | ------------------------  |
Javascript (ES6)            | [Ver archivo](/examples_token/javascript.js)        |  
PHP                         | [Ver archivo](/examples_token/php.php)        |  
PHP ( Curl )                | [Ver archivo](/examples_token/php_curl.php)        |  
Java                        | [Ver archivo](/examples_token/java.jar)        |  
C#                          | [Ver archivo](/examples_token/c_sharp.cs)        |  
Object C                    | [Ver archivo](/examples_token/objc.c)        |  
Python 2.7                  | [Ver archivo](/examples_token/python_2.7.py)        |  
Python 3.2                  | [Ver archivo](/examples_token/python_3.2.py)        |  
Ruby                        | [Ver archivo](/examples_token/ruby.r)        |  
