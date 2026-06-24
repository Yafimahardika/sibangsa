<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
        {
            Schema::table('jenis_sampahs', function (Blueprint $table) {
                $table->renameColumn('harga_per_kg', 'harga_satuan');
                $table->string('satuan')->default('kg');
                $table->text('deskripsi')->nullable();
                $table->boolean('status')->default(true);
            });
        }

        public function down()
        {
            Schema::table('jenis_sampahs', function (Blueprint $table) {
                $table->renameColumn('harga_satuan', 'harga_per_kg');
                $table->dropColumn(['satuan', 'deskripsi', 'status']);
            });
        }

};
