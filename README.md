# 📚 LibroSphere - Sistema de Gestión e Interacción Web

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

**LibroSphere** es una plataforma web dinámica orientada a la gestión de registros e interacción de usuarios para un entorno de librería. El proyecto está diseñado aplicando buenas prácticas de desarrollo backend en PHP nativo, modularización de componentes, control de sesiones y separación clara entre la interfaz lógica y la capa visual.

---

## 🛠️ Arquitectura y Tecnologías Utilizadas

El desarrollo del proyecto se ejecutó en un entorno servidor local **XAMPP** bajo la ruta `htdocs/VC1/`.

* **PHP Nativo:** Procesamiento de lógica del servidor, gestión de superglobales (`$_POST`, `$_SESSION`), validación de variables con `isset()` y redirección.
* **HTML5:** Estructuración semántica de formularios, secciones y componentes visuales.
* **CSS3:** Hoja de estilos centralizada (`styles.css`) para la presentación, distribución de elementos e identidad visual.
* **Resolución dinámica de rutas:** Uso de constantes mágicas como `__DIR__` para garantiza la inclusión robusta de archivos entre directorios sin fallos de ruta.

---

## 📂 Estructura del Proyecto

```text
VC1/
├── index.php                # Página principal / Formulario inicial
├── NuevoRegistro.php        # Procesamiento y validación del registro
├── ConfirmarRegistro.php    # Vista de confirmación y datos persistidos
├── includes/
│   ├── cabecera.php         # Elementos de interfaz reutilizables (Header)
│   └── funciones.php        # Lógica backend modularizada y helpers
└── img/                     # Recursos gráficos e iconografía
    ├── logo.png             # Identotipo principal de LibroSphere
    └── icono_joven.png      # Activo gráfico contextual
🚀 Conceptos Técnicos Desarrollados
Separación de Responsabilidades: Subdivisión de la lógica del negocio (includes/) e interfaz gráfica (.php raíz) para mantener un código limpio y mantenible.

Seguridad y Validación de Formularios: Captura segura de datos enviados por métodos HTTP POST, sanitización preventiva y verificación mediante condicionales isset().

Manejo de Sesiones: Mantenimiento del estado del usuario entre las distintas peticiones HTTP para asegurar la persistencia de datos durante la navegación.

Manejo de Rutas Relativas y Absolutas: Implementación de __DIR__ para resolver problemas de importación e inclusión de archivos (include/require) independientemente del entorno del servidor.
💻 Instrucciones para Ejecutar en Local
Clonar el repositorio o descargar el código fuente:
git clone [https://github.com/TU-USUARIO/LibroSphere.git](https://github.com/TU-USUARIO/LibroSphere.git)
Mover la carpeta del proyecto al directorio web de tu servidor local (ej. C:\xampp\htdocs\VC1).

Iniciar el servicio Apache desde el XAMPP Control Panel.

Abrir un navegador web e ingresar a la URL:
http://localhost/VC1/index.php
👤 Autor
-Lautaro Callupil, estudiante de programación. 
