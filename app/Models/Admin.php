<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    public function roles()
    {
        return $this->belongsTo(AdminRole::class, 'admin_role_id', 'id');
    }
}
