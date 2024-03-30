<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('notebooks', function (Blueprint $column) {
			// ...
			$column->id();

			// ...
			$column->string('name')->nullable(false);
			$column->foreignId('organization_id')->nullable()->constrained();
			$column->string('tel')->nullable(false);
			$column->string('email')->nullable(false)->unique();
			$column->date('date_of_birth')->nullable();

			// ...
			$column->binary('photo')->nullable();

			// ...
			$column->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('notebooks');
	}
};
