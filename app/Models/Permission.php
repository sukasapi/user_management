<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    public function menu(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Menu::class, 'menu_id');
    }
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_permission');
    }
}
