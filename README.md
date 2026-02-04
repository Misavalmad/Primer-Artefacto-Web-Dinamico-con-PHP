# Primer-Artefacto-Web-Dinamico-con-PHP
# Proyecto: Actividad Integradora - Desarrollo de Aplicaciones WEB

Este repositorio contiene una práctica de fundamentos de programación en el lado del servidor utilizando PHP. El proyecto ha sido desarrollado como parte de las actividades académicas de la materia Tópico 1: Desarrollo de Aplicaciones WEB.

## Descripción del Proyecto

La aplicación consiste en una página dinámica que procesa información en el servidor para generar una interfaz de usuario personalizada. El script principal demuestra la implementación de los siguientes conceptos de programación en PHP:

* **Definición de Constantes:** Uso de `define()` para valores inmutables como el nombre de la materia y la institución.
* **Estructuras de Control:** Implementación de condicionales (if/elseif/else) para determinar un saludo dinámico basado en una variable de tiempo.
* **Manejo de Arrays y Bucles:** Uso de arreglos indexados y estructuras de repetición `foreach` para listar tecnologías.
* **Funciones de Tiempo:** Manipulación de strings y fechas mediante `date()` y `strtotime()`.
* **Integración CSS:** Aplicación de estilos dinámicos mediante la asignación de clases condicionales desde PHP.

## Tecnologías Utilizadas

* PHP (Lógica del servidor)
* HTML5 (Estructura de la página)
* CSS3 (Diseño responsivo y presentación)

## Estructura de Archivos

* `index.php`: Contiene toda la lógica de programación en PHP, la definición de variables, constantes y la estructura HTML.
* `style.css`: Hoja de estilos encargada de la estética visual, incluyendo los esquemas de colores para los diferentes estados del saludo (día, tarde y noche).

## Ejecución Local

Para visualizar este proyecto en un entorno local, se requiere un servidor que soporte PHP (como Apache o Nginx):

1. Clonar el repositorio o descargar los archivos.
2. Colocar los archivos en el directorio raíz de su servidor local (ej. htdocs en XAMPP).
3. Asegurarse de que el servidor web esté en ejecución.
4. Acceder a través del navegador a la dirección `localhost/[nombre-de-la-carpeta]`.
