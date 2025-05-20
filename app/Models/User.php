<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'usu_id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'usu_usuario',
        'usu_contra',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'usu_contra',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'usu_contra' => 'hashed',
        ];
    }

    public function getAuthIdentifierName()
    {
        return 'usu_usuario';
    }

    /**
     * Especificar el campo que se usa como password
     */
    public function getAuthPassword()
    {
        return $this->usu_contra;
    }

    /**
     * Accessor para el campo username (opcional, para facilitar el acceso)
     */
    public function getUsernameAttribute()
    {
        return $this->usu_usuario;
    }
}
