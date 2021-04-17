<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /** @var array */
    public $fillable = [
        'to', 'name', 'email', 'phone', 'message', 'is_success'
    ];

    /** @var array */
    public $casts = [
        'is_success' => 'boolean'
    ];

    /** @var array */
    public static $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required',
        'message' => 'required'
    ];
}
