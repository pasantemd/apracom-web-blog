# Apracom

Versión PHP del sitio público https://apracom-ec.com/, restaurada con su contenido, estilos y recursos publicados el 28 de septiembre de 2026.

## Abrir en XAMPP

Con Apache iniciado, abrir http://localhost/web-apracom-blog/.

## Publicar en apracom-ec.com

Subir el contenido de esta carpeta directamente a la raíz web del dominio, normalmente `public_html`. No subir la carpeta `web-apracom-blog` como una subcarpeta. La estructura debe quedar así:

```text
public_html/
|-- .htaccess
|-- index.php
|-- assets/
|-- blog/
|-- includes/
`-- soluciones/
```

El `.htaccess` gestiona las rutas internas, habilita la ruta corta `/blog/salmonella/` y muestra la página 404 del sitio. La configuración del dominio y HTTPS corresponde al hosting. El servidor debe ejecutar PHP 8.1 o superior, Apache con `mod_rewrite` y permitir reglas `.htaccess`.

Antes de habilitar el formulario, cambiar la antigua credencial SMTP y configurar `APRACOM_SMTP_PASSWORD` como variable segura del servidor. Opcionalmente se pueden definir `APRACOM_SMTP_HOST`, `APRACOM_SMTP_USER` y `APRACOM_CONTACT_TO`.
Las rutas se calculan en `includes/header.php` para admitir tanto una subcarpeta como la raíz del dominio. Los CSS llevan una versión basada en su fecha de modificación para evitar que el navegador conserve los estilos anteriores.
