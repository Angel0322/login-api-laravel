<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class login_p8 extends Model
{
    use HasFactory;

    //protected $table = 'login_p8';
    //protected $primaryKey = 'id';
    //public $incrementing = true;

    public function up() {
        Schema::create('login_p8', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('password');
            $table->tinyInteger('idrol');
            $table->timestamps();
        });
    }
}
