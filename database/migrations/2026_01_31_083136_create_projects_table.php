<?php

use App\Core\ORM\Picture;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->foreignIdFor(Picture::class);
            $table->boolean('is_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
