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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('pamflet'); // For storing the pamphlet image/file path
            $table->string('title');   // For the event title
            $table->date('date');      // For the event date
            $table->decimal('price', 8, 2)->nullable(); // For the event price, allowing decimal values
            $table->string('link_info')->nullable(); // For additional information link
            $table->string('link_reg')->nullable();  // For registration link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
