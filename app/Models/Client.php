<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'd_o_b', 'blood_type_id', 'last_donation_date', 'city_id', 'mobile_num', 'password', 'pin_code','is active');
    

    
  





    public function books()
    {
        return $this->morphedByMany('Book');
    }

  

    protected $hidden = [
        'password','api_token'

    ];

}
