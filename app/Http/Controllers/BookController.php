<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
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
 
                 foreach ($bookData as $bookInfo) {
                    $truncatedContent = substr($bookInfo['description'], 0, 255); 
                    Book::create([
                        'title' => $bookInfo['title'],
                        'auteur' => $bookInfo['authors'],
                        'content' => $truncatedContent,
                      
                    ]);
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
        $bookData = $this->getBookData("Personal development");
      
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
    public function search(Request $request)
{
    $query = $request->input('query');

    $filteredBooks = Book::where('title', 'like', "%$query%")
                         ->orWhere('auteur', 'like', "%$query%")
                         ->get();

    return view('library', ['bookData' => $filteredBooks]);
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
            'auteur' => 'required',
         
        ]);
    // dd($request);
       
        Book::create([
            'title' => $request->title,
            'content' => $request->content,
            'auteur' => $request->auteur,
           
        ]);
    
       
        return redirect()->back()->with('success', 'Livre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $books = Book::all();
        $reservations = Reservation::with('client')->where('statut', 'en attente')->get();
        return view('dashboardcoach', compact('books','reservations'));
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
