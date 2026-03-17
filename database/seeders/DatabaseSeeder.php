<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
    public function up()
{
    Schema::create('leads', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email');
        $table->string('telefono')->nullable();
        $table->text('mensaje')->nullable();
        $table->timestamps();
    });
}
}
