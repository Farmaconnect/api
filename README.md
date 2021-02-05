# API Rest Farmaconnect
Descripción del uso de la API Rest de Farmaconnect

## Información básica
A continuación se mostrará la funciones básica para implementar la API de Farmaconnect en cualquier entorno. Toda la peticiones HTTP se realizan en [https://rest.farmaconnect.es](https://rest.farmaconnect.es)

[Obtención de Token de acceso](/lang/es/token.md)


## Servicios disponible ( Endpoints )

Enpoints                    | Documentación                                             |
------------------------    | ------------------------                                  |
tag                         | [Métodos HTTP - Etiquetas](/lang/es/tag.md)               |
product                     | [Métodos HTTP - Articulos](/lang/es/product.md)           |
category                    | [Métodos HTTP - Categoria de productos ](/lang/es/category.md)  |
storehouse                  | [Métodos HTTP - Almacenes](/lang/es/storehouse.md)        |

Para usar los servicios simplemente se añade la url + el enpoint.

`Ejemplo: https//rest.farmaconnect.es/tag`

## Gestión de respuestas HTTP
Todas las peticiones devuelven una estructura en formato JSON (JavaScript Object Notation), con la siguiente estructura.

```javascript
{
    status:200,
    error:null,
    result: {data} // String o Array de objectos
}
```

En los casos que se devuelve una respuesta en Formato String, solamente ocurrirá en peticiones con status 200 en los siguientes casos:
- Obtención del token, devuelve un string con el Token
- POST, PUT y DELETE; devolverá un string con sintaxis uuid V4

Respuesta (status)                  | Nota                      |
------------------------    | ------------------------  |
200 | La petición se efectuó correctamente|
400 | No se ha podido finalizar la petición |
404 | En general no se ha encontrado la referencia |
500 | Se produjo un error en el lado de servido |

` `
> *Recomendaciones*: En el caso de que se produzca un error 500 o 400, se recomienda que tenga implementado un gestor de cache evento, para poder reenviar más tarde la petición.

## Pruebas de peticiones HTTP
En cualquier momento puede realizar pruebas de petición http. A continuación dejamos disponible como realizar dichas peticiones con postman.


[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/e786fe99b60ba75b87a8)