<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->tinyText('name');
            $table->tinyText('owner_name');
            $table->longText('description');
            $table->longText('shop_image')->nullable();
            $table->longText('address');
            $table->longText('mobile_number');
            $table->string('email');
            $table->string('license_number')->nullable();
            $table->set('type', ['shop', 'training_center']);
            $table->softDeletes();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop');
    }
};
