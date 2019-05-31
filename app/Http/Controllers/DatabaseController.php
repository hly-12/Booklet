<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Books;
use App\Is_Comment_On;
use App\IsCategory;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 

class DatabaseController extends Controller
{
    //
    public function test(Request $request){
        
        $id_book = 1;
        
        $write_books = Books::where('id',$id_book)->first();
        return $write_books;
    }

    public function addBook(Request $request){
        


            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo( $filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStrore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStrore);

        if (Auth::check())
        {
            $book = new Books();
            $book->Title = $request->input('title');
            $book->Content = $request->input('body');
            $book->TitleCover = $fileNameToStrore;
            $book->ViewCount = 0;
            $book->TotalRate = '';
            $book->TotalReview= '';
            $book->UserID = Auth::user()->id;
            $book->DateOfPublish =  date("Y-m-d");
            $book->save();

            $is_category = new IsCategory();
            $categories = Category::all();
            $is_category->CategoryID =$categories[$request->category]->id;
            $is_category->BookID = Books::max('id');

            $is_category->save();
            $route = "/viewdata/$is_category->BookID";
        }
        

        return redirect($route);
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

    public function getProfileById($id_user){

        $user = User::where('id',$id_user)->get();
        return $user;
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


    public function getBookPage(Request $request){
        $categories = Category::all();
        $id_book = $request->id_book;
        
        $book = Books::find($id_book);
        $book->ViewCount = $book->ViewCount + 1;
        $book->save();

        $write_books = Books::where('id',$id_book)->first();
        $write_books->user = User::where('id',$write_books->UserID)->first();



        return view('Layout.viewdata',['categories' => $categories,'book'=>$write_books]);
    }

    public function getProfilePage(Request $request){
        $categories = Category::all();
        

        $profile = $this->getProfileById($request->id_profile);


        $sql = "SELECT * FROM `books` WHERE UserID = $request->id_profile
        ORDER BY books.`created_at` DESC
        ";
        $write_books = DB::select($sql);

        return view('Layout.profile',['categories' => $categories,'profile' => $profile[0],'write_books'=>$write_books]);
    }

    public function getEditorPage(){
        $categories = Category::all();

        foreach($categories as $category){
            $list[] = $category->Genre;
        }
        return view('Layout.editor',['categories' => $categories,'list'=>$list]);
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


    public function getAllBooksMostView(Request $request){
        $categories = Category::all();

        $books = $this->getLastestBookByCategoryId(1,100);
        return ['categories' => $categories,'books'=>$books];
    }


}