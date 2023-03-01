# Notificaciones

```php artisan make:notification Notification```

Se crea en la ruta: `app/Notifications/Notification.php`

## Guardar Notificaciones en la base de datos

En el archivo de notificacion generado se debe agregar:

```php

    // Almacena las notificaciones en la base de datos
    public function toDatabase($notifiable){

    }
```

y crear una tabla para almacenar:

```php artisan notifications:table```