<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */


   

    public function index()
    {
        // $bookData = $this->getBookData("Personal development");
        $bookData = Book::paginate(8);


        return view('library', ['bookData' => $bookData]);
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

        $filteredBooks = Book::where('title', 'like', "%$query%");
        if ($query) {
            $filteredBooks = $filteredBooks->orWhere('auteur', 'like', "%$query%");
        }

        $filteredBooks = $filteredBooks->paginate(8);

        return response()->json($filteredBooks);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {

        
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('/public/images', $imageName);
        // dd($request);
        Book::create([
            'title' => $request->title,
            'content' => $request->content,
            'auteur' => $request->auteur,
            'image' => $imageName,
        ]);


        return redirect()->back()->with('success', 'Livre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $bookData = Book::paginate(8);
        $reservations = Reservation::with('client')->where('statut', 'en attente')->get();
        return view('side', compact('bookData', 'reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function detailofbook($id){

        $book = Book::findOrFail($id);
        // dd($book);
        return view('singlepagebook', ['book' => $book]);
      
    }
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, $id)
    {

      
        // dd($request);
        $book = Book::findOrFail($id);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('/public/images', $imageName);

        $book->update([
            'title' => $request->title,
            'content' => $request->content,
            'auteur' => $request->auteur,
            'image'=>$imageName,
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
