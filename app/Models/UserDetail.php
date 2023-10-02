<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id' , 'name' , 'image_download_count' ,
        'image_genrate_count', 'address' , 'phone_number',
        'country' , 'state' , 'city',
    ];
}
