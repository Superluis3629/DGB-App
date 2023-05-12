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
        Schema::create('compliance_apps', function (Blueprint $table) {
            $table->id();
            $table->string('group_of_complaints');
            $table->string('type_of_complaints');
            $table->string('detail_of_event');
            $table->string('the_attached_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compliance_apps');
    }
};
