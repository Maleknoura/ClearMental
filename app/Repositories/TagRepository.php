<?php namespace App\Repositories;

use App\Models\Tag;


class TagRepository implements TagRepositoryInterface
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function all()
    {
        return $this->tag->all();
    }

    public function create(array $data)
    {
        return $this->tag->create($data);
    }
    public function update(array $data, $id)
    {
        $tag = $this->tag->findOrFail($id);
        $tag->update($data);
        return $tag;
    }

    public function delete($id)
    {
        $tag = $this->tag->findOrFail($id);
        $tag->delete();
        return true;
    }

}