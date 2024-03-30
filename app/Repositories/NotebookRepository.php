<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

use App\Contracts\NotebookRepository as NotebookRepositoryContract;
use App\Models\Notebook;

class NotebookRepository implements NotebookRepositoryContract {
	/**
	 *
	 */
	public function find(int $id): Notebook {
		return Notebook::where('id', '=', $id)->findOrFail($id);
	}

	/**
	 *
	 */
	public function findAll(): LengthAwarePaginator {
		return Notebook::paginate(30);
	}
}
