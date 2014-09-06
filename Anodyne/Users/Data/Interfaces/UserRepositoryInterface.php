<?php namespace Anodyne\Users\Data\Interfaces;

interface UserRepositoryInterface {

	public function all();
	public function count();
	public function create(array $data);
	public function delete($id);
	public function find($id);
	public function findByUsername($username);
	public function update($username, array $data);

}