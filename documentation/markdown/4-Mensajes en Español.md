# Cambiar idioma de los mensajes de error

Clonar el repositorio:

```git
git clone https://github.com/MarcoGomesr/laravel-validation-en-espanol.git resources/lang
```
Abrir el archivo `/config/app.php` y reemplazar el valor de la variable `locale` por `es`.

Desde los formularios un parametro más es `no validate` para que se usen las validaciones de laravel y no de HTML

> En el caso de algunos componente de breeze es necesario modificar manualmente. x-auth-validation-errors / x-input-error