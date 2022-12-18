<?php

namespace App\Models;

use App\Models\Privilegio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrivilegioUser extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'privilegio_id',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function privilegio()
    {
        return $this->belongsTo(Privilegio::class, 'privilegio_id');
    }
}
