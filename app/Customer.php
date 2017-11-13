<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'busines_name',//razon social
    	'comercial_name',//nombre comercial
    	'country_id',//pais
    	'department_id',//departamento
    	'city_id',//ciudad
    	'address',//direccion
    	'telephone',//telefono
    	'email',//correo
        'contact_person',//persona de contacto
        'frecuency',//frecuencia de visita
        'latest_visit',//fecha ultima visita
        'reference',//referencia codigo de barras
        'type1', //tipo 1. Segmento basico No basico etc
        'type2', //Tipo de comercio ejm Abasto
        'Licence',//Licencia de Licores
        'pay_conditions',//condiciones de pago ejm. dentro de los 15 dias etc
        'limit_credit',//Credito limite del cliente
        'balance',//balance del cliente
        'pay_option_1',//metodo pago 1
        'pay_option_2',//metodo pago 2
        'pay_option_3',//metodo pago 3
        'pay_option_4',//metodo pago 4
    	'discount_tax',//descuento del cliente
    	'photo',//foto / logo
        'active',//estado activo o no
    	'company_id'//id de la compañia
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
