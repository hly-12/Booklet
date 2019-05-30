<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Books;
use App\Is_Comment_On;
use Auth;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    public function test(Request $request){
        $categories = Category::all();

        $id_category = 1;
        $itemCount = 3;

        $most_view_books = $this->getMostViewBookInCategory($id_category,$itemCount);

        $latest_books = $this->getLastestBookByCategoryId($id_category,$itemCount);

        $popular_books = $this->getMostPopularBookInCategory($id_category,$itemCount);

        return ['categories' => $categories,'latest_books'=>$latest_books,'most_view_books'=>$most_view_books,'popular_books'=>$popular_books];
    }

    public function addBook(Request $request){

        $book = new Books();
        if (Auth::check())
        {
            $book->Title = $request->input('title');
            $book->Content = $request->input('body');
            $book->TitleCover = '';
            $book->ViewCount = 0;
            $book->TotalRate = '';
            $book->TotalReview= '';
            $book->UserID = Auth::user()->id;
            $book->DateOfPublish =  date("Y-m-d");
            $book->save();
        }
        

        return redirect('/');
    }

    public function getCommentInBook(Request $request){
        $id_book = $request->id_book;

        $comments = Is_Comment_On::where("BookID",$id_book)->get();
        foreach($comments as $comment){
            $user = User::where("id",$comments->UserID)->get();
            $comments->user = $user;
            
        }
        
        return response()->json($comments);
    }

    public function getProfileById(Request $request){

        $id_user = $request->id_user;
        $user = User::where('id',$id_user)->get();
        return response()->json($user);
    }

    public function getMostPopularBookInCategory($id_category , $itemCount){
        
        
        $sql = "SELECT * FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.`TotalRate` DESC
        LIMIT $itemCount";

        $popular_books = DB::select($sql);
        foreach($popular_books as $book){
            $user = User::where("id",$book->UserID)->get();
            $category = Category::where("id",$book->CategoryID)->get();
            $book->user = $user;
            $book->category = $category[0];
        }
        return $popular_books;
    }


    public function getMostViewBookInCategory($id_category , $itemCount){

        $sql = "SELECT * FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.`ViewCount` DESC
        LIMIT $itemCount";
        $most_view_books = DB::select($sql);
        foreach($most_view_books as $book){
            $user = User::where("id",$book->UserID)->get();
            $category = Category::where("id",$book->CategoryID)->get();
            $book->user = $user;
            $book->category = $category[0];
        }
        return $most_view_books;
    }

    public function getLastestBookByCategoryId($id_category , $itemCount){

        $sql = "SELECT books.`id`, books.`Title`, books.`TitleCover`, books.`Content`, books.`DateOfPublish`, books.`ViewCount`, books.`TotalRate`, books.`TotalReview`, books.`UserID`, books.`created_at`, books.`updated_at` FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.created_at DESC
        LIMIT $itemCount";
        $latest_books = DB::select($sql);
        foreach($latest_books as $book){
            $user = User::where("id",$book->UserID)->get();
            $book->user = $user;
        }

        return $latest_books;
    }

    public function getProfilePage(Request $request){
        $categories = Category::all();
        

        return view('Layout.profile',['categories' => $categories]);
    }

    public function getHomepage(Request $request){
        $categories = Category::all();

        $id_category = 1;
        $itemCount = 3;

        $most_view_books = $this->getMostViewBookInCategory($id_category,$itemCount);

        $latest_books = $this->getLastestBookByCategoryId($id_category,$itemCount);

        $popular_books = $this->getMostPopularBookInCategory($id_category,$itemCount);

        return view('Layout.homepage',['categories' => $categories,'latest_books'=>$latest_books,'most_view_books'=>$most_view_books,'popular_books'=>$popular_books]);
        // return response()->json($books);
        
    }
}