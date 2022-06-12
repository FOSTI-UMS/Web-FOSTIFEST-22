<?php

use App\Models\Competition;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member2s', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('email');
            $table->string('name');
            $table->string('agency');
            $table->string('ktm');
            $table->string('idcard');
            $table->foreignIdFor(Competition::class);
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
        Schema::dropIfExists('member2s');
    }
};
