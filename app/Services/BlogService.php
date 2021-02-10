<?php

namespace App\Services;
use App\Repositories\BlogRepository;
class BlogService
{

    protected $blogRespository;

    public function __construct(BlogRepository $blogRespository)
    {
        $this->blogRespository = $blogRespository;
    }

    public function create($attributes){
       return $this->blogRespository->create($attributes);
    }

    public  function getAllBlogPost()
    {
        return $this->blogRespository->getAllBlogPost();
    }

    public function getAllBlogPostInAscOrder(){
        return $this->blogRespository->getAllBlogPostInAscOrder();
    }

    public function getBlogPostById($blogId){
        return $this->blogRespository->getBlogPostById($blogId);
    }

    public function getBlogByUserId($userId){
       return $this->blogRespository->getBlogByUserId($userId);
    }


    public function getBlogByUserInAscOrder($userId){
        return $this->blogRespository->getBlogByUserInAscOrder($userId);
    }

    public function isPostExists($postTitle, $userId)
    {
        return $this->blogRespository->isPostExists($postTitle, $userId);

    }

}
