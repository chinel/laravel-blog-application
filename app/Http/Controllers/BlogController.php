<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogRequest;
use App\Services\BlogService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function redirect;


class BlogController extends Controller
{
    protected $blogService;

    public function  __construct(BlogService $blogService){
        $this->blogService = $blogService;
    }

    /**
     * Create a new Blog Post
     *
     * @param BlogRequest $blogRequest
     * @return RedirectResponse|Redirector
     */

    public function create(BlogRequest $blogRequest){

        $blogDetails = $blogRequest->all();
        $blogDetails['user_id'] = Auth::user()->id;
        $blogDetails['publication_date'] = \Carbon\Carbon::now();

        $this->blogService->create($blogDetails);
        Session::flash('success','Post successfully published');
        return redirect('/dashboard');
    }


    /**
     * Get All blog Posts, and if orderBy Query string order all post in either ascending or descending order
     *
     * @param Request $request
     * @return Factory|View
     */

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


    /**
     * Get Post details by iD
     *
     * @param $blogId
     * @return Factory|View
     */
    public function getBlogPostById($blogId){
        $blogPost = $this->blogService->getBlogPostById($blogId);

        return view('blog-frontend.view', compact('blogPost'));

    }


    /**
     * Get all posts for the logged in user
     *
     * @param Request $request
     * @return Factory|View
     */
    public function getBlogPostByUser(Request $request){
        $blogPosts = [];
        $userId = Auth::user()->id;
        if($request->query('sortBy')){
            $sortBy = $request->query('sortBy');
            switch ($sortBy){
                case "latest":
                    $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(5);
                    break;
                case "oldest":
                    $blogPosts = $this->blogService->getBlogByUserInAscOrder($userId)->paginate(5);
                    break;
                default:
                    $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(5);
            }
        }else{
            $blogPosts = $this->blogService->getBlogByUserId($userId)->paginate(5);

        }
        return view('dashboard.index', compact('blogPosts'));
    }
}
