# Caso: ParkingExpress - Parqueadero del Centro 🐱🚗

[cite_start]Este proyecto consiste en el desarrollo de un sistema **CRUD** completo utilizando el framework **Laravel 12**[cite: 1, 2]. [cite_start]La aplicación, denominada **ParkingExpress**, permite gestionar de manera eficiente el ingreso y salida de vehículos en un parqueadero, almacenando información crítica como la placa, el tipo de vehículo, el nombre del propietario y observaciones adicionales[cite: 110, 111, 112, 113, 228].

**Características técnicas:**
* [cite_start]**Framework:** Laravel 12[cite: 1].
* [cite_start]**Base de Datos:** MySQL[cite: 7, 79].
* [cite_start]**Frontend:** Bootstrap 5 para un diseño responsivo[cite: 221].
* **Testing:** Pest PHP.

---

## Evidencias del Desarrollo (Capturas de Pantalla)

### 1. Preparación del Entorno y Base de Datos
[cite_start]Uso de la interfaz de comandos de Artisan para ejecutar migraciones y generar automáticamente el modelo, controlador y migración del vehículo[cite: 94, 98].


### 2. Listado Principal de Vehículos (Index)
[cite_start]Vista general que muestra todos los vehículos estacionados actualmente, permitiendo ver la placa, tipo, propietario y fecha de ingreso[cite: 174, 242, 270].


### 3. Registro de Nuevo Ingreso (Create)
[cite_start]Interfaz diseñada para el registro de vehículos con validación de campos obligatorios para asegurar la integridad de los datos[cite: 181, 288, 302].


### 4. Actualización de Información (Edit)
[cite_start]Formulario prellenado que permite la modificación de los datos de un vehículo existente[cite: 190, 323, 334].


### 5. Control de Salida y Eliminación
[cite_start]Implementación de la funcionalidad de borrado con confirmación para gestionar la salida de los vehículos[cite: 204, 275, 279].


---

## Mis Decisiones de Diseño

### 1. Tabla de Base de Datos
[cite_start]**Nombre de la tabla:** `vehiculos` [cite: 108, 126]

| Campo | Tipo | ¿Obligatorio? |
| :--- | :--- | :--- |
| `id` | BigInt (Auto-increment) | [cite_start]Sí [cite: 108] |
| `placa` | String (10) | [cite_start]Sí [cite: 110] |
| `tipo` | String (20) | [cite_start]Sí [cite: 111] |
| `propietario` | String (100) | [cite_start]No (Nullable) [cite: 112] |
| `observaciones` | Text | [cite_start]No (Nullable) [cite: 113] |
| `created_at` | Timestamp | [cite_start]Sí [cite: 114] |

### 2. Tipos de vehículo
[cite_start]Se han definido tres categorías principales para la selección en el sistema: **Automóvil, Motocicleta y Camioneta**[cite: 304, 305, 306].

### 3. ¿Se puede eliminar registros?
[cite_start]**Respuesta:** Sí, se permite la eliminación de registros para mantener la base de datos limpia y actualizada cuando un vehículo abandona el establecimiento[cite: 153, 204].

---

## Comandos Útiles
* [cite_start]**Ejecutar migraciones:** `php artisan migrate`[cite: 94, 408].
* [cite_start]**Crear Modelo/Controlador:** `php artisan make:model Vehiculo -mcr`[cite: 98].
* [cite_start]**Ver lista de rutas:** `php artisan route:list`[cite: 408].


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



<img width="1600" height="412" alt="image" src="https://github.com/user-attachments/assets/c237a36e-3590-465b-a862-3f42d57756a4" />

