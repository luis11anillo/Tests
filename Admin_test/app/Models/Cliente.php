<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'CC',
        'name',
        'birthday',
        'phone',
        'address',
        'city',
        'email',
        'status',
    ];

    public function avatar() 
    {
        $gravatar = 'https://www.gravatar.com/avatar/' . md5($this->email);
        $gravatarr = 'https://www.gravatar.com/avatar/?d=retro';
        
        return $gravatar;
    }

    public function edad()
    {
        // Pass to a Crbon Object
        $fechaNacimiento = Carbon::parse($this->birthday);
        
        // DiffInYears() to Catch the different birthday & current time
        $edad = $fechaNacimiento->DiffInYears(Carbon::now());
        
        return $edad;
    }
}
