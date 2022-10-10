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
     * $this->attributes['boxId'] - bigInt
     * $this->attributes['pokemonId'] - bigInt
     */

    /* #region Properties */
    protected $fillable = [
        'boxId',
        'pokemonId',
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

    public function getBoxId() {
        return $this->attributes['boxId'];
    }

    public function getPokemonId() {
        return $this->attributes['pokemonId'];
    }
    /* #endregion */

    /* #region Setters */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function setBoxId($boxId) {
        $this->attributes['boxId'] = $boxId;
    }

    public function setPokemonId($pokemonId) {
        $this->attributes['pokemonId'] = $pokemonId;
    }
    /* #endregion */
}
