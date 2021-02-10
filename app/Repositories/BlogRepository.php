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
        return $this->blog->orderBy('publication_date','DESC');
    }

    public function getAllBlogPostInAscOrder(){
        return $this->blog->orderBy('publication_date','ASC');

    }

    public function getBlogPostById($blogId){
        return $this->blog->find($blogId);
    }

    public function getBlogByUserId($userId){
        return $this->blog->where('user_id', $userId)->orderBy('publication_date','DESC');
    }


    public function getBlogByUserInAscOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('publication_date','ASC');
    }




}
