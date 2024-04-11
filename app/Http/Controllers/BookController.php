<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function getBookData($query)
     {
         $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($query);
 
         $response = Http::get($url);
 
         if ($response->successful()) {
             $data = $response->json();
 
             if (isset($data['items'])) {
                 $books = $data['items'];
 
                 $bookData = [];
 
                 foreach ($books as $book) {
                     $bookInfo = [];
 
                     $bookInfo['title'] = $book['volumeInfo']['title'];
 
                     if (isset($book['volumeInfo']['authors'])) {
                         $bookInfo['authors'] = implode(", ", $book['volumeInfo']['authors']);
                     } else {
                         $bookInfo['authors'] = "Auteur inconnu";
                     }
 
                     if (isset($book['volumeInfo']['description'])) {
                         $bookInfo['description'] = $book['volumeInfo']['description'];
                     } else {
                         $bookInfo['description'] = "Pas de description disponible";
                     }
 
                     if (isset($book['volumeInfo']['imageLinks']['thumbnail'])) {
                         $bookInfo['thumbnail'] = $book['volumeInfo']['imageLinks']['thumbnail'];
                     } else {
                         $bookInfo['thumbnail'] = "Pas d'image de couverture disponible";
                     }
 
                     $bookData[] = $bookInfo;
                 }
 
                 return $bookData;
             } else {
                 return null;
             }
         } else {
             return null;
         }
     }
 
    public function index()
    {
        $bookData = $this->getBookData("SPERITUALITE");
      
        $booksWithImages = array_filter($bookData, function ($book) {
            return isset($book['thumbnail']) && $book['thumbnail'] != '';
        });

        return view('library', ['bookData' => $booksWithImages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'numbre_of_page' => 'required|numeric',
         
        ]);
    // dd($request);
        // Créer un nouveau livre avec les données du formulaire
        Book::create([
            'title' => $request->title,
            'content' => $request->content,
            'numbre_of_page' => $request->numbre_of_page,
           
        ]);
    
       
        return redirect()->back()->with('success', 'Livre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $books = Book::all();
        return view('dashboardcoach', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
     
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'numbre_of_page' => 'required|integer',
        ]);
    
        $book = Book::findOrFail($id);
    
     
        $book->update([
            'title' => $request->title,
            'content' => $request->content,
            'numbre_of_page' => $request->numbre_of_page,
        ]);
    
      
        return redirect()->back()->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        
        $book->delete();
    

        return redirect()->back()->with('success', 'Book deleted successfully');
    }
}
