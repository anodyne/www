<?php namespace Anodyne\Users\Data\Interfaces;

interface PermissionRepositoryInterface {

	public function all($value = false, $id = false);
	public function create(array $data);
	public function delete($id);
	public function find($id);
	public function paginate($number);
	public function update($id, array $data);

}