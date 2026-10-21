<?php

use App\Enums\StatusCompetitionEnum;
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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('event');
            $table->string('field');
            $table->string('participant');
            $table->string('advisor');
            $table->date('date');
            $table->enum('status', [
                StatusCompetitionEnum::ONGOING->value,
                StatusCompetitionEnum::UPCOMING->value,
                StatusCompetitionEnum::FINISHED->value
            ])->default(StatusCompetitionEnum::UPCOMING->value);
            $table->string('location');
            $table->string('achievement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
