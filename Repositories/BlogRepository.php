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

    public function getBlogByUserId($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','DESC')->get();
    }

    public function getBlogInDescOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','DESC')->get();

    }

    public function getBlogInAscOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('created_at','ASC')->get();
    }


}
