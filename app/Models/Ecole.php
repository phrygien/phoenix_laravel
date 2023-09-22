<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecole extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $table = 'ecoles';

    /*
    * fillable
    */
    protected $fillable = [
        'ecole_name',
        'ecole_sigle',
        'cle_unique',
        'ecole_type',
        'ecole_statut',
        'ecole_logo',
        'ecole_phone_fixe',
        'ecole_phone_mobile',
        'ecole_email',
        'ecole_email_alternative',
        'province_id',
        'region_id',
        'district_id',
        'commune_id',
        'ecole_adresse',
        'user_id'
    ];
}
