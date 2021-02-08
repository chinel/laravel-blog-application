<?php
namespace App\Repositories;
use App\Blog;

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
        return $this->blog->orderBy('created_at','DESC');
    }

    public function getAllBlogPostInAscOrder(){
        return $this->blog->orderBy('created_at','ASC');

    }

    public function getBlogByUserId($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','DESC');
    }


    public function getBlogByUserInAscOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','ASC');
    }


}
