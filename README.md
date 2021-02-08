![Image of Yaktocat](/img/logo-dark.png)



# API Rest Farmaconnect
Descripción del uso de la API Rest de Farmaconnect

## Información básica
A continuación se mostrarán las funciones básicas para implementar la API de Farmaconnect en cualquier entorno. Todas la peticiones HTTP se realizan en [https://rest.farmaconnect.es](https://rest.farmaconnect.es)

[Obtención de Token de acceso](/lang/es/token.md)


## Servicios disponible ( Endpoints )

Endpoints                    | Documentación                                                   |
------------------------     | ------------------------                                        |
tag                          | [Métodos HTTP - Etiquetas](/lang/es/tag.md)                     |
product                      | [Métodos HTTP - Artículos](/lang/es/product.md)                 |
category                     | [Métodos HTTP - Categoría de productos ](/lang/es/category.md)  |
storehouse                   | [Métodos HTTP - Almacenes](/lang/es/storehouse.md)              |
info                         | [Métodos HTTP - Información](/lang/es/info.md)                  |

Para usar los servicios simplemente se añade la url + el endpoint.

`Ejemplo: https://rest.farmaconnect.es/tag`

## Gestión de respuestas HTTP
Todas las peticiones devuelven una estructura en formato JSON (JavaScript Object Notation) con la siguiente estructura:

```javascript
{
    status:200,
    error:null,
    result: {data} // String o Array de objetos
}
```

En peticiones con status 200, únicamente en los siguientes casos la respuesta se devolverá en formato String:
- Obtención del token; devuelve un string con el Token
- POST, PUT y DELETE; devuelve un string con sintaxis uuid V4

Respuesta (status)                  | Nota                      |
------------------------    | ------------------------  |
200 | La petición se efectuó correctamente|
400 | No se ha podido finalizar la petición |
404 | En general no se ha encontrado la referencia |
500 | Se produjo un error en el lado de servidor |

` `
> *Recomendaciones*: En el caso de que se produzca un error 500 o 400, se recomienda que se tenga implementado un gestor de cache evento, para poder reenviar más tarde la petición.

## Pruebas de peticiones HTTP
En cualquier momento se pueden realizar pruebas de petición http. A continuación dejamos disponible como realizar dichas peticiones con postman.


[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/e786fe99b60ba75b87a8)

## Bugs conocidos
- El total de productos asociados a una categoría no se devuelve correctamente en el método GET
