<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\NotebookRepository as NotebookRepositoryContract;
use App\Repositories\NotebookRepository;

class RepositoriesServiceProvider extends ServiceProvider {
	/**
	 *
	 *
	 * @var array
	 */
	public $singletons = [
		NotebookRepositoryContract::class => NotebookRepository::class
	];
}
