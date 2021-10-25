<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ElectionSurvey
 * @package App\Models
 * @version October 25, 2021, 10:28 am UTC
 *
 * @property string $president
 * @property string $senator
 * @property string $mayor
 * @property string $congressman
 * @property string $barangay_captain
 */
class ElectionSurvey extends Model
{

    use HasFactory;

    public $table = 'election_survies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'president',
        'senator',
        'mayor',
        'congressman',
        'barangay_captain'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'president' => 'string',
        'senator' => 'string',
        'mayor' => 'string',
        'congressman' => 'string',
        'barangay_captain' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'president' => 'required|string|max:255',
        'senator' => 'required|string|max:255',
        'mayor' => 'required|string|max:255',
        'congressman' => 'required|string|max:255',
        'barangay_captain' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
