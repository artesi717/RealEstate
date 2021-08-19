<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function scopeFilter($query)
    {
        if(request('location')){
            $query
                ->where('location','like', '%' .request('location'). '%')
                ->Where('property_type','like', '%' .request('property_type'). '%')
                ->Where('rental','like', '%' .request('rental'). '%');
        }
        elseif(request('rental')){
            $query
                ->where('location','like', '%' .request('location'). '%')
                ->Where('property_type','like', '%' .request('property_type'). '%')
                ->Where('rental','like', '%' .request('rental'). '%');
        }
        elseif(request('property_type')){
            $query
                ->where('location','like', '%' .request('location'). '%')
                ->Where('property_type','like', '%' .request('property_type'). '%')
                ->Where('rental','like', '%' .request('rental'). '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}