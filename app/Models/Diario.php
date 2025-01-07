<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diario
 *
 * @property $id
 * @property $data
 * @property $abertura
 * @property $max
 * @property $min
 * @property $fechamento
 * @property $range
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'diario';
    protected $fillable = ['data', 'abertura', 'max', 'min', 'fechamento', 'range'];


}
