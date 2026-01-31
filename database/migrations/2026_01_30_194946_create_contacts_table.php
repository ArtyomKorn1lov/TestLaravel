<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Modules\Contacts\Enums\ContactTypes;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->enum('type', array_column(ContactTypes::cases(), 'value'));
            $table->string('label');
            $table->string('value');
            $table->boolean('show_footer');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
