<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function index()
    {
        $books = Book::paginate(5);
        return $books;
    }

    public function getBookById(int $id) {
        $book = Book::where('id', $id)->paginate(5);
        return $book;
    }

    public function getBooksByAuthor(string $author) {
        $books = Book::where('author', $author)->paginate(5);
        return $books;
    }

    public function getBooksByName(string $name) {
        $books = Book::where('name', $name)->paginate(5);
        return $books;
    }

    public function getBooksByYear(int $year) {
        $books = Book::where('year', $year)->paginate(5);
        return $books;
    }

    public function getBooksByManufacture(string $man) {
        $books = Book::where('manufacture', $man)->paginate(5);
        return $books;
    }
}
