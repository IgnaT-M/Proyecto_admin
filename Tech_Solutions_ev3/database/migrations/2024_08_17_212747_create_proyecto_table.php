<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion');
            $table->binary('imagen')->nullable();
            $table->unsignedBigInteger('user_id_create');
            $table->unsignedBigInteger('user_id_last_update');
            // Definición de claves foráneas
            $table->foreign('user_id_create')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_last_update')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('activo')->default(false);
            $table->timestamps();
        });

        // Agregar datos a la tabla recién creada
        DB::table('proyectos')->insert([
            [
                'nombre' => 'EV3',
                'descripcion' => 'lol',
                'user_id_create' => 1,
                'user_id_last_update' => 1,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
