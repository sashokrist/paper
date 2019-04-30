<?php namespace Sasho\Rps\Models;

use Model;

/**
 * Model
 */
class Profile extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sasho_rps_profiles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
