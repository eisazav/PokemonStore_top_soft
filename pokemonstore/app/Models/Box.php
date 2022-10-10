<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    /**
     * ATTRIBUTES
     * $this->attributes['id'] - bigInt
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     * $this->attributes['name'] - string
     */

    /* #region Properties */
    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    /* #endregion */

    /* #region Getters */
    public function getById($id) {
        return Pokemon::findOrFail($id);
    }

    public function getId() {
        return $this->attributes['id'];
    }

    public function getName() {
        return $this->attributes['name'];
    }
    /* #endregion */

    /* #region Setters */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }
    /* #endregion */
}
