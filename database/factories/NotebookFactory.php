<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class NotebookFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		$name = fake()->name();
		$organization_id = null;
		$tel = fake()->e164PhoneNumber();
		$email = fake()->safeEmail();
		$date_of_birth = fake()->dateTime();
		$photo = null;

		return [
			'name' => $name,
			'organization_id' => $organization_id,
			'tel' => $tel,
			'email' => $email,
			'date_of_birth' => $date_of_birth,
			'photo' => $photo
		];
	}
}
