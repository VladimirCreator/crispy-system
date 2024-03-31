<?php

namespace App\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

use App\Models\Notebook;

interface NotebookRepository {
	/**
	 *
	 */
	public function find(int $id): Notebook;

	/**
	 *
	 */
	public function findAll(): LengthAwarePaginator;
}
