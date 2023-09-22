<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('ecole_name');
            $table->string('ecole_sigle');
            $table->string('cle_unique')->unique();
            $table->string('ecole_type');
            $table->string('ecole_statut')->default(0); // disabled
            $table->string('ecole_logo')->nullable();
            $table->string('ecole_phone_fixe')->unique();
            $table->string('ecole_phone_mobile')->unique();
            $table->string('ecole_email')->unique();
            $table->string('ecole_email_alternative')->unique()->nullable();
            $table->string('province_id');
            $table->string('region_id');
            $table->string('district_id');
            $table->string('commune_id');
            $table->text('ecole_adresse');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecoles');
    }
};
