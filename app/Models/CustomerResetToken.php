<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerResetToken extends Model
{
    use HasFactory;
    protected $primaryKey = 'email'; // Sử dụng cột 'email' làm khóa chính
    public $incrementing = false; // Tắt tính năng tự tăng cho trường khóa chính
    protected $fillable = ['email', 'token']; // Các trường có thể gán tự động
   
    
    public function customer() {
        return $this->hasOne(Customer::class, 'email','email');
    }

    public function scopeCheckToken($q, $token) {
        return $q->where('token', $token)->firstOrFail();
    }
}