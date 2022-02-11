<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(User::FULLNAME);
            $table->string(User::EMAIL)->unique();
            $table->string(User::PHONE_NUMBER)->unique();
            $table->string(User::AVATAR);
            $table->integer(User::ROLE);
            $table->boolean(User::ONLINE);
            $table->timestamp('email_verified_at')->nullable();
            $table->string(User::PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
