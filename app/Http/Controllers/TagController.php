<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;
use App\Repositories\TagRepositoryInterface;

class TagController extends Controller
{
    protected $tagRepository;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

  

    public function store(TagRequest $request)
    {
       
        $data = $request->validated();
        $tag = $this->tagRepository->create($data);
        
        return redirect()->back()->with('success', 'Tag créé avec succès.');
    }
    public function update(TagRequest $request, $id)
    {
        $data = $request->validated();
    
        $tag = $this->tagRepository->update($data, $id);
        
        return redirect()->back()->with('success', 'Tag mis à jour avec succès.');
    }
    

    public function destroy($id)
    {
        $this->tagRepository->delete($id);
        
        return redirect()->back()->with('success', 'Tag supprimé avec succès.');
    }
}
