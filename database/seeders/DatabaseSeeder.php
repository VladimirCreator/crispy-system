<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		\App\Models\Notebook::factory()
			->count(0x64)
			->has(\App\Models\Organization::factory()->count(0x2))
			->create();
	}
}
