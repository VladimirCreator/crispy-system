<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

use App\Contracts\NotebookRepository;
use App\Models\Notebook;

class NotebookController extends Controller {
	/**
	 *
	 */
	public function __construct(private NotebookRepository $repository) {
	}

	/**
	 *
	 */
	#[OA\Get(path: 'api/v1/notebook/')]
	#[
		OA\Response(
			response: 200,
			descriptionn: 'Get a list of notebooks. A response contains a list of notebooks.'
		)
	]
	public function index() {
		return $this->repository->findAll();
	}

	/**
	 *
	 */
	#[OA\Get(path: 'api/v1/notebook/{id}')]
	#[
		OA\Response(
			response: 200,
			descriptionn: 'Get information about a notebook. A response contains a list of notebooks.'
		)
	]
	public function read(string $id) {
		return $this->repository->find($id);
	}

	/**
	 *
	 */
	#[OA\Post(path: 'api/v1/notebook/')]
	#[
		OA\Response(
			response: 200,
			descriptionn: 'Create a new notebook. A response contains a list of notebooks.'
		)
	]
	public function create(Request $request, Notebook $notebook) {
		$request->validate([
			'name' => 'required',
			'tel' => 'required',
			'email' => 'required'
		]);
		$createdNotebook = new Notebook();
		$createdNotebook->name = $request->name;
		$createdNotebook->organization_id = $request->organization_id;
		$createdNotebook->tel = $request->tel;
		$createdNotebook->email = $request->email;
		$createdNotebook->date_of_birth = $request->date_of_birth;
		$createdNotebook->photo = $request->photo;

		$createdNotebook->save();
		return $createdNotebook;
	}

	/**
	 *
	 */
	#[OA\Delete(path: 'api/v1/notebook/{id}')]
	#[
		OA\Response(
			response: 200,
			descriptionn: 'Delete notebook with specified id. A response contains a deleted notebook.'
		)
	]
	public function delete(Notebook $notebook, string $id) {
		$deletedNotebook = $notebook->find($id);
		$copy = clone $deletedNotebook;

		$deletedNotebook->delete();
		return $copy;
	}

	/**
	 *
	 */
	#[OA\Post(path: 'api/v1/notebook/{id}')]
	#[
		OA\Response(
			response: 200,
			descriptionn: 'Update a notebook. A response contains a modified notebook.'
		)
	]
	public function update(Request $request, Notebook $notebook, string $id) {
		$updatedNotebook = $notebook->find($id);
		$updatedNotebook->update($request->all());

		return $updatedNotebook;
	}
}
