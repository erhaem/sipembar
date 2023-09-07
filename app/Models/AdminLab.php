<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLab extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'lab_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class, 'lab_id');
    }

}
