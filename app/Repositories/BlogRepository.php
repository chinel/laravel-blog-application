<?php
namespace App\Repositories;
use App\Models\Blog;


class BlogRepository
{
    protected $blog;
    public function  __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function create($attributes){
        return $this->blog->create($attributes);
    }

    public function getAllBlogPost(){
        return $this->blog->orderBy('id','DESC');
    }

    public function getAllBlogPostInAscOrder(){
        return $this->blog->orderBy('id','ASC');

    }

    public function getBlogPostById($blogId){
        return $this->blog->find($blogId);
    }

    public function getBlogByUserId($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','DESC');
    }


    public function getBlogByUserInAscOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','ASC');
    }

    public function isPostExists($postTitle, $userId)
    {
        return $this->blog->where('title','=',$postTitle)->where('user_id', '=', $userId)->get()->count();
    }


}
