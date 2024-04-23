<?php namespace App\Repositories;

interface TagRepositoryInterface{
	
 

 

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

	
}