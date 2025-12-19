# Taller Mecánico – CRUD en Laravel

Proyecto desarrollado como parte del Examen Práctico de Desarrollo en Plataformas.
El sistema permite la gestión de vehículos que ingresan a un taller mecánico, aplicando
la arquitectura MVC y operaciones CRUD completas.

---

## Tecnologías utilizadas

- Laravel 12
- PHP 8
- MySQL
- Blade
- Laragon
- HTML básico

---

## Funcionalidades del sistema

- Registro de vehículos
- Listado de vehículos
- Edición de información del vehículo
- Eliminación lógica del registro
- Validaciones de formularios
- Migraciones para la base de datos

---

## Arquitectura

El proyecto sigue el patrón MVC:

- **Modelo:** Vehiculo  
- **Controlador:** VehiculoController  
- **Vistas Blade:**  
  - index.blade.php  
  - create.blade.php  
  - edit.blade.php  

Las rutas fueron definidas mediante `Route::resource`, permitiendo una estructura limpia
y organizada.

---

## Capturas del sistema

### Listado de vehículos
![Listado de vehículos](capturas/listado.png)

### Registro de vehículo
![Registro de vehículo](capturas/registro.png)

### Edición de vehículo
![Edición de vehículo](capturas/edicion.png)

---

## Ejecución del proyecto

1. Clonar el repositorio
2. Ejecutar las migraciones:
   ```bash
   php artisan migrate




https://github.com/estebangarciaojeda-ui/Examen.git
