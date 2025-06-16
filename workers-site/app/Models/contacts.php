<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $table = 'contacts'; // Ensure the table name is correct
    protected $primaryKey = 'id'; // Optional: if not using default 'id'

    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'message'];
}
