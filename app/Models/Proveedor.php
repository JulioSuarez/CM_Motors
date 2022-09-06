<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'nit',
        'tipo',
    ];

    public $timestamps = false;

    public function produtos(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(Producto::class);
    }
}
