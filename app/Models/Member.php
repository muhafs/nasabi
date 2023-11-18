<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $guraded = ['id'];

    public function father()
    {
        return $this->belongsTo(self::class, 'father_id');
    }

    public function mother()
    {
        return $this->belongsTo(self::class, 'mother_id');
    }

    public function childrenAsMom()
    {
        return $this->hasMany(self::class, 'mother_id');
    }

    public function childrenAsDad()
    {
        return $this->hasMany(self::class, 'father_id');
    }
}
