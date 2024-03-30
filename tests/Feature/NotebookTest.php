<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Notebook;

class NotebookTest extends TestCase {
	use RefreshDatabase;

	/**
	 *
	 */
	public function test_responseShouldContainPaginatedArray() {
		$response = $this->getJson('/api/v1/notebook/');
		$response->assertOk();
		$response->assertJsonStructure([
			'data' => [
				'*' => [
					'id',
					'organization_id',
					'tel',
					'email',
					'date_of_birth',
					'photo'
				]
			]
		]);
	}

	/**
	 *
	 */
	public function test_responseShouldContainNotebookWithId_0() {
		Notebook::factory()->create([
			'id' => 0,
			'organization_id' => null,
			'tel' => '+01234567891',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => '2003-09-14',
			'photo' => null
		]);

		$response = $this->getJson('/api/v1/notebook/0/');
		$response->assertOk();
		$response->assertJson([
			'id' => 0,
			'organization_id' => null,
			'tel' => '+01234567891',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => '2003-09-14',
			'photo' => null
		]);
	}

	/**
	 *
	 */
	public function test_responseShouldContainACreatedNotebook() {
		$this->assertEquals(100, Notebook::all()->count());

		$response = $this->postJson('/api/v1/notebook/', [
			'name' => 'Vladimir',
			'tel' => '+03292024529',
			'email' => 'vladimir@icloud.com'
		]);
		$this->assertEquals(101, Notebook::all()->count());
		$response->assertCreated();
		$response->assertJson([
			'name' => 'Vladimir',
			'organization_id' => null,
			'tel' => '+03292024529',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => null,
			'photo' => null
		]);
	}

	/**
	 *
	 */
	public function test_responseShouldContainADeletedNotebook() {
		Notebook::factory()->create([
			'id' => 0,
			'organization_id' => null,
			'tel' => '+01234567891',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => '2003-09-14',
			'photo' => null
		]);
		$this->assertEquals(101, Notebook::all()->count());

		$response = $this->deleteJson('/api/v1/notebook/0/');
		$this->assertEquals(100, Notebook::all()->count());
		$response->assertOk();
		$response->assertJson([
			'id' => 0,
			'organization_id' => null,
			'tel' => '+01234567891',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => '2003-09-14',
			'photo' => null
		]);
	}

	/**
	 *
	 */
	public function test_responseShouldNotDeleteNonExistentNotebook() {
		$this->assertTrue(true);
	}

	/**
	 *
	 */
	public function test_responseShouldContainAnUpdatedNotebook() {
		Notebook::factory()->create([
			'id' => 0,
			'name' => 'Vladimir',
			'organization_id' => null,
			'tel' => '+01234567891',
			'email' => 'vladimir@icloud.com',
			'date_of_birth' => '2003-09-14',
			'photo' => null
		]);
		$this->assertEquals(101, Notebook::all()->count());
		$response = $this->postJson('/api/v1/notebook/0/', [
			'name' => 'Tim Cook',
			'tel' => '+98765432109',
			'email' => 'vladimir@gmail.com',
			'date_of_birth' => '2003-09-15'
		]);

		$this->assertEquals(101, Notebook::all()->count());
		$response->assertOk();
		$response->assertJson([
			'name' => 'Tim Cook',
			'tel' => '+98765432109',
			'email' => 'vladimir@gmail.com',
			'date_of_birth' => '2003-09-15'
		]);
	}
}
