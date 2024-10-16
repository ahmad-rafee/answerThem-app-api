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
        Schema::create('friend_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')
                ->constrained('users')
                ->onDelete('cascade') // Cascade delete
                ->onUpdate('cascade');// Cascade update

            $table->foreignId('receiver_id')
                ->constrained('users')
                ->onDelete('cascade') // Cascade delete
                ->onUpdate('cascade') ;
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending')->index();
            $table->timestamps();
            $table->softDeletes(); // Soft delete
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friend_requests');
    }
};
