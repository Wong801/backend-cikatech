<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRekeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->integer('id_user');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('nama_pemilik');
            $table->timestamps();
        });

        DB::table('rekenings')->insert(array(
            [
                'level' => 1,
                'id_user' => 1,
                'bank' =>  'BCA',
                'no_rekening' => '7777779999999',
                'nama_pemilik' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'BCA',
                'no_rekening' => '6514332',
                'nama_pemilik' => 'bca si anu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'Mandiri',
                'no_rekening' => '4524512',
                'nama_pemilik' => 'mandiri aBank jago',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'BNI',
                'no_rekening' => '315123341',
                'nama_pemilik' => 'ini bni',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'BRI',
                'no_rekening' => '12345',
                'nama_pemilik' => 'nama rek bri nih',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'CIMB',
                'no_rekening' => '612323',
                'nama_pemilik' => 'ini CIMB',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level' => 0,
                'id_user' => 0,
                'bank' =>  'Danamon',
                'no_rekening' => '315234',
                'nama_pemilik' => 'ini danamon',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekenings');
    }
}
