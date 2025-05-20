<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getMaskedEmailAttribute()
    {
        $email = $this->email;

        if (strlen($email) < 7) {
            return '***@***';
        }

        $prefix = substr($email, 0, 3);
        $suffix = substr($email, -3);

        return $prefix . '***@***' . $suffix;
    }
}
