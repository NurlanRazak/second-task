<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function getBookById(int $id) {
        $book = Book::where('id', $id)->get();
        return $book;
    }

    public function getBooksByAuthor(string $author) {
        $books = Book::where('author', $author)->get();
        return $books;
    }

    public function getBooksByName(string $name) {
        $books = Book::where('name', $name)->get();
        return $books;
    }

    public function getBooksByYear(int $year) {
        $books = Book::where('year', $year)->get();
        return $books;
    }

    public function getBooksByManufacture(string $man) {
        $books = Book::where('manufacture', $man)->get();
        return $books;
    }
}
