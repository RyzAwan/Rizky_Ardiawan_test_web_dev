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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('name', 100);
            $table->string('address', 100);
            $table->integer('age');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('customers')->insert(
            [
                [
                    'email' => 'Ardiawan@email.com',
                    'name' => 'Ardi',
                    'address' => 'Madiun',
                    'age' => 22
                ],
                [
                    'email' => 'Messi@email.com',
                    'name' => 'Messi',
                    'address' => 'Sao Paulo',
                    'age' => 20
                ]
            ]
        );

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
