# Caso: ParkingExpress - Parqueadero del Centro

Este proyecto consiste en el desarrollo de un sistema **CRUD** completo utilizando el framework **Laravel 12**. La aplicación, denominada **ParkingExpress**, permite gestionar de manera eficiente el ingreso y salida de vehículos en un parqueadero, almacenando información crítica como la placa, el tipo de vehículo, el nombre del propietario y observaciones adicionales.

**Características técnicas:**
* **Framework:** Laravel 12.
* **Base de Datos:** MySQL.
* **Frontend:** Bootstrap 5 para un diseño responsivo.
* **Testing:** Pest PHP.

---

## Evidencias del Desarrollo (Capturas de Pantalla)

### 1. Preparación del Entorno y Base de Datos
Uso de la interfaz de comandos de Artisan para ejecutar migraciones y generar automáticamente el modelo, controlador y migración del vehículo.
<img width="1024" height="354" alt="image" src="https://github.com/user-attachments/assets/9bd03a4b-b6b9-4ab4-8a46-95319024b6c8" />



### 2. Listado Principal de Vehículos (Index)
Vista general que muestra todos los vehículos registrados actualmente, permitiendo ver la placa, tipo, propietario y fecha de ingreso.
<img width="1600" height="412" alt="image" src="https://github.com/user-attachments/assets/1403b122-3587-4516-815e-6b36d73bb975" />


### 3. Registro de Nuevo Ingreso (Create)
Interfaz diseñada para el registro de vehículos con validación de campos obligatorios para asegurar la integridad de los datos.
<img width="691" height="835" alt="image" src="https://github.com/user-attachments/assets/83b6b94f-638b-46c0-8d18-82888bf6ce24" />


### 4. Actualización de Información (Edit)
Formulario prellenado que permite la modificación de los datos de un vehículo existente para corregir información.
<img width="833" height="754" alt="image" src="https://github.com/user-attachments/assets/cfb9a3ad-57f5-4b7a-a2f3-d43a6795ab0c" />


### 5. Control de Salida y Eliminación
Implementación de la funcionalidad de borrado con confirmación visual para gestionar la salida definitiva de los vehículos.
<img width="1600" height="409" alt="image" src="https://github.com/user-attachments/assets/07e71200-4bcd-4a89-85cf-22a73defff77" />
<img width="1600" height="335" alt="image" src="https://github.com/user-attachments/assets/9dbe1216-e48d-4a8d-abfc-2727ffe74209" />


### 6. Interfaz usable en móvil
<img width="735" height="862" alt="image" src="https://github.com/user-attachments/assets/5f9a0fca-d4b8-49f6-a9b1-4134f6da350f" />

---

## Mis Decisiones de Diseño

### 1. Tabla de Base de Datos
**Nombre de la tabla:** `vehiculos`

| Campo | Tipo | ¿Obligatorio? |
| :--- | :--- | :--- |
| `id` | BigInt (Auto-increment) | Sí |
| `placa` | String (10) | Sí |
| `tipo` | String (20) | Sí |
| `propietario` | String (100) | No  |
| `observaciones` | Text | No  |
| `created_at` | Timestamp | Sí |

### 2. Tipos de vehículo
Se han definido tres categorías principales para la selección en el sistema: **Automóvil, Motocicleta y Camioneta**.

### 3. ¿Se puede eliminar registros?
**Respuesta:** Sí, es posible gracias al método `delete()` de Eloquent en el Modelo porque se implementó para gestionar la salida física de los vehículos del establecimiento, permitiendo que el controlador remueva la fila correspondiente en MySQL y así mantener la base de datos optimizada y con información real.
---

## Comandos Útiles
* **Ejecutar migraciones:** `php artisan migrate`
* **Crear Modelo/Controlador:** `php artisan make:model Vehiculo -mcr`
* **Ver lista de rutas:** `php artisan route:list`

   php artisan migrate






<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities



If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




