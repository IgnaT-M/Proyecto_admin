<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolMantenedorPrivilegio extends Model
{
    use HasFactory;
    
    protected $table = 'roles_mantenedores_privilegios';

    protected $fillable = [
        'rol_id',
        'mantenedor_id',
        'privilegio_id',
        'user_id_create',
        'user_id_last_update',
        'activo',
    ];

    // Relaciones con otros modelos

    // Relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
    // Relación con el modelo Mantenedor
    public function mantenedor()
    {
        return $this->belongsTo(Mantenedor::class, 'mantenedor_id');
    }

    // Relación con el modelo Privilegio
    public function privilegio()
    {
        return $this->belongsTo(Privilegio::class, 'privilegio_id');
    }
    // Relación con el modelo User
    public function userCreate()
    {
        return $this->belongsTo(User::class, 'user_id_create');
    }
    public function userLastUpdate()
    {
        return $this->belongsTo(User::class, 'user_id_last_update');
    }
}
