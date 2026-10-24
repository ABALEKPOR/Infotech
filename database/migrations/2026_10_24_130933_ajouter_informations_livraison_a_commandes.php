
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->string('nom_complet')->nullable();
            $table->string('telephone', 30)->nullable();
            $table->text('adresse')->nullable();
            $table->string('ville', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropColumn([
                'nom_complet',
                'telephone',
                'adresse',
                'ville',
            ]);
        });
    }
};
