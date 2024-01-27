<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
     // أضف هذه الطريقة للعلاقة في نموذج التحويل
     public function senderOffice()
     {
         return $this->belongsTo(Office::class, 'sender_office_id');
     }
 
     // أضف هذه الطريقة للعلاقة في نموذج التحويل
     public function receiverOffice()
     {
         return $this->belongsTo(Office::class, 'receiver_office_id');
     }
}