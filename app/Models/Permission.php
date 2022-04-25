<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table='permissions';

    protected $fillable = [
        'name',
        'display_name'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role', 'permission_id', 'role_id');
    }
    public function scopeWithName($query, $name)
    {
        return $name ? $query->where('name', 'LIKE', "%{$name}%") : null;
    }
}
