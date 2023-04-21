<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class emp_info extends Model
{
    use HasFactory;
    
    protected $fillable = ['role', 'emp_name','contect','email'];

 
    
}
