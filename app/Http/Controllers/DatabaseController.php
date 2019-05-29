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
        return $request;
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

    public function getMostPopularBookInCategory(Request $request){
        $id_category = $request->id_category;
        $itemCount = $request->itemCount;
        $sql = "SELECT books.`id`, books.`Title`, books.`TitleCover`, books.`Content`, books.`DateOfPublish`, books.`ViewCount`, books.`TotalRate`, books.`TotalReview`, books.`UserID`, books.`created_at`, books.`updated_at` FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.`TotalRate` DESC
        LIMIT $itemCount";
        $books = DB::select($sql);
        foreach($books as $book){
            $user = User::where("id",$book->UserId)->get();
            $book->user = $user;
            $book_date[] = $book;
        }
        return response()->json($books);
    }


    public function getMostViewBookInCategory(Request $request){
        $id_category = $request->id_category;
        $itemCount = $request->itemCount;
        $sql = "SELECT books.`id`, books.`Title`, books.`TitleCover`, books.`Content`, books.`DateOfPublish`, books.`ViewCount`, books.`TotalRate`, books.`TotalReview`, books.`UserID`, books.`created_at`, books.`updated_at` FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.`ViewCount` DESC
        LIMIT $itemCount";
        $books = DB::select($sql);
        foreach($books as $book){
            $user = User::where("id",$book->UserID)->get();
            $book->user = $user;
        }
        return response()->json($books);
    }

    public function getLastestBookByCategoryId(Request $request){
        $id_category = $request->id_category;
        $itemCount = $request->itemCount;
        $sql = "SELECT books.`id`, books.`Title`, books.`TitleCover`, books.`Content`, books.`DateOfPublish`, books.`ViewCount`, books.`TotalRate`, books.`TotalReview`, books.`UserID`, books.`created_at`, books.`updated_at` FROM `books` 
        INNER JOIN is_categories ON books.id = is_categories.BookID
        WHERE is_categories.CategoryID = $id_category
        ORDER BY books.created_at DESC
        LIMIT $itemCount";
        $books = DB::select($sql);
        foreach($books as $book){
            $user = User::where("id",$book->UserID)->get();
            $book->user = $user;
        }
        return response()->json($books);
    }

    public function getAllCategoryTitle(){
        $categories = Category::all();
        return response()->json($categories);
    }
}
