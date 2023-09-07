<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Laboratory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function adminlabs()
    {
        return $this->hasMany(AdminLab::class, 'lab_id');
    }
}
