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
     * $this->attributes['type'] - string
     * $this->attributes['weakness'] - string
     * $this->attributes['ablity'] - string
     * $this->attributes['height'] - double
     * $this->attributes['weight'] - double
     * $this->attributes['description'] - string
     * $this->attributes['cost'] - double
     * $this->attributes['evolution'] - boolean
     * $this->attributes['evolutionId'] - bigInt
     * $this->attributes['stat_hp'] - integer
     * $this->attributes['stat_attack'] - integer
     * $this->attributes['stat_defense'] - integer
     * $this->attributes['stat_special_attack'] - integer
     * $this->attributes['stat_special_defense'] - integer
     * $this->attributes['stat_speed'] - integer
     * $this->attributes['of_the_month'] - boolean
     */

    /* #region Properties */
    protected $fillable = [
        'name',
        'type',
        'weakness',
        'ablity',
        'height',
        'weight',
        'description',
        'cost',
        'evolution',
        'stat_hp',
        'stat_attack',
        'stat_defense',
        'stat_special_attack',
        'stat_special_defense',
        'stat_speed',
        'of_the_month',
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
        return $this->attribute['name'];
    }

    public function getType() {
        return $this->attribute['type'];
    }

    public function getWeakness() {
        return $this->attribute['weakness'];
    }

    public function getAblity() {
        return $this->attribute['ablity'];
    }

    public function getHeight() {
        return $this->attribute['height'];
    }

    public function getWeight() {
        return $this->attribute['weight'];
    }

    public function getDescription() {
        return $this->attribute['description'];
    }

    public function getCost() {
        return $this->attribute['cost'];
    }

    public function getEvolution() {
        return $this->attribute['evolution'];
    }

    public function getStatHp() {
        return $this->attribute['stat_hp'];
    }

    public function getStatAttack() {
        return $this->attribute['stat_attack'];
    }

    public function getStatDefense() {
        return $this->attribute['stat_defense'];
    }

    public function getStatSpecialAttack() {
        return $this->attribute['stat_special_attack'];
    }

    public function getStatSpecialDefense() {
        return $this->attribute['stat_special_defense'];
    }

    public function getStatSpeed() {
        return $this->attribute['stat_speed'];
    }

    public function getOfTheMonth() {
        return $this->attribute['of_the_month'];
    }
    /* #endregion */

    /* #region Setters */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function setName($name) {
        $this->attribute['name'] = $name;
    }

    public function setType($type) {
        $this->attribute['type'] = $type;
    }

    public function setWeakness($weakness) {
        $this->attribute['weakness'] = $weakness;
    }

    public function setAblity($ablity) {
        $this->attribute['ablity'] = $ablity;
    }

    public function setHeight($height) {
        $this->attribute['height'] = $height;
    }

    public function setWeight($weight) {
        $this->attribute['weight'] = $weight;
    }

    public function setDescription($description) {
        $this->attribute['description'] = $description;
    }

    public function setCost($cost) {
        $this->attribute['cost'] = $cost;
    }

    public function setEvolution($evolution) {
        $this->attribute['evolution'] = $evolution;
    }

    public function setStatHp($stat_hp) {
        $this->attribute['stat_hp'] = $stat_hp;
    }

    public function setStatAttack($stat_attack) {
        $this->attribute['stat_attack'] = $stat_attack;
    }

    public function setStatDefense($stat_defense) {
        $this->attribute['stat_defense'] = $stat_defense;
    }

    public function setStatSpecialAttack($stat_special_attack) {
        $this->attribute['stat_special_attack'] = $stat_special_attack;
    }

    public function setStatSpecialDefense($stat_special_defense) {
        $this->attribute['stat_special_defense'] = $stat_special_defense;
    }

    public function setStatSpeed($stat_speed) {
        $this->attribute['stat_speed'] = $stat_speed;
    }

    public function setOfTheMonth($of_the_month) {
        $this->attribute['of_the_month'] = $of_the_month;
    }
    /* #endregion */
}
