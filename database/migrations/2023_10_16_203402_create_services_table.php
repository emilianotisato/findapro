<?php

use App\Models\Service;
use App\Models\Location;
use App\Models\Provider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Provider::class);
            $table->boolean('active')->default(false);
            $table->string('name');
            $table->text('description');
            $table->string('photo');
            $table->timestamps();
        });

        Schema::create('location_service', function (Blueprint $table) {
            $table->foreignIdFor(Location::class);
            $table->foreignIdFor(Service::class);
            $table->primary(['location_id', 'service_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_service');
        Schema::dropIfExists('services');
    }
};
