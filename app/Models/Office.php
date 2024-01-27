<?php

namespace App\Models;

use App\Http\Controllers\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $fillable = ['name', 'address', 'country' ,'current_balance','id_user'];

    // أضف هذا الطريقة للعلاقة في نموذج المكتب
    public function sentTransfers()
    {
        return $this->hasMany(Transfer::class, 'sender_office_id');
    }

    // أضف هذا الطريقة للعلاقة في نموذج المكتب
    public function receivedTransfers()
    {
        return $this->hasMany(Transfer::class, 'receiver_office_id');
    }
    // في نموذج Office
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}