<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; // Importación necesaria para procesar datos

class Vehiculo extends Model
{
    // Nombre de la tabla en la base de datos [cite: 126]
    protected $table = 'vehiculos';

    // Campos que permiten asignación masiva [cite: 127, 133]
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    /**
     * Obtener todos los vehículos
     */
    static public function getVehiculos()
    {
        return self::all(); // Corregido: se usa all() en lugar de getAll()
    }

    /**
     * Buscar un vehículo por su ID
     */
    static public function getVehiculosById($id)
    {
        return self::find($id);
    }

    /**
     * Crear un nuevo registro
     */
    static public function createVehiculo(array $data)
    {
        // Es mejor pasar un array que el objeto Request completo al modelo
        return self::create($data);
    }

    /**
     * Eliminar un vehículo
     */
    static public function deleteVehiculo(Vehiculo $vehiculo)
    {
        return $vehiculo->delete();
    }
}