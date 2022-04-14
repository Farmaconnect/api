[Atras](/README.md) 

# Métodos HTTP - Flash Led
A continuación se mostrará como usar las peticiones API REST para lanzar el evento de flash.

## Importante
En todas la peticiones se tiene que enviar en el encabezado ***TOKEN***, que se solició anteriormente.

## POST
Realizar un flasheo a uno o varias etiquetas a la vez

```javascript
const TOKEN = {token};

const URL = 'https://rest.farmaconnect.es/flash';

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
        tag:'F751BB1C', // String o Array de String con el codigo de etiqueta
        color:'RED',  // Opcional, Tipo de color: RED,GREEN,BLUE,CYAN,MAGENTA,YELLOW,WHITE
        duration:10, // Opcional, cuanto va a durar el proceso de flash
        frequency:2 // Opcional, cada cuanto se emitirá el flash
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
tag                         | string or [string]                   | Obligatorio             | Id de la etiqueta |
color                       | string                    | Opcional                | Tipo de color |
duration                    | int (5,10,20,30)          | Opcional                | Cuanto va a durar el proceso en  segundos|
frequency                   | int (1,2,4)               | Opcional                | Cada cuanto se emitirá el flash |

### Tipos de colores
- WHITE ( Default )
- RED,
- GREEN
- BLUE
- CYAN
- MAGENTA
- YELLOW

### Tipos de frecuencia de flash
- 1 Cada segundo
- 2 Cada 2 segundos ( Default )
- 4 Cada 4 segundos

### Tipos de duración
- 20 segundos ( Default )
- o cualquier valor inferior a 30 segundos