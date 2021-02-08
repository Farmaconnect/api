[Atrás](/README.md) 

# Métodos HTTP - Information
A continuación se mostrará como usar las peticiones API REST para obtener la información general de su usuario.


## GET
Recuperar información sobre el estado del uso de su API Rest.

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/info/';

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