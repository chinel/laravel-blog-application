<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogRequest;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class BlogController extends Controller
{
    protected $blogService;

    public function  __construct(BlogService $blogService){
        $this->blogService = $blogService;
    }

    public function create(BlogRequest $blogRequest){
        $blogRequest->user_id = Auth::user()->id;
        $this->blogService->create($blogRequest);
    }



    public function getAllBlogPosts(Request $request){
     $blogPosts = [];
        if($request->query('sortBy')){
            $sortBy = $request->query('sortBy');
           switch ($sortBy){
               case "latest":
                   $blogPosts = $this->blogService->getAllBlogPost()->paginate(5);
                   break;
               case "oldest":
                   $blogPosts = $this->blogService->getAllBlogPostInAscOrder()->paginate(5);
                   break;
               default:
                   $blogPosts = $this->blogService->getAllBlogPost()->paginate(5);
           }
     }else{
            $blogPosts = $this->blogService->getAllBlogPost()->paginate(5);

        }

        return view('blog-frontend.index', compact('blogPosts'));
    }


    public function getBlogPostById($blogId){
        $blogPost = $this->blogService->getBlogPostById($blogId);
      
        return view('blog-frontend.view', compact('blogPost'));

    }


    public function getBlogPostByUser(Request $request){
        $blogPosts = [];
        $userId = Auth::user()->id;
        if($request->query('sortBy')){
            $sortBy = $request->query('sortBy');
            switch ($sortBy){
                case "latest":
                    $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(10);
                    break;
                case "oldest":
                    $blogPosts = $this->blogService->getBlogByUserInAscOrder($userId)-paginate(10);
                    break;
                default:
                    $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(10);
            }
        }else{
            $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(10);

        }
        return view('dashboard.index', compact('blogPosts'));
    }
}
