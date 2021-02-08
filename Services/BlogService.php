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

    public function getBlogByUserId($userId){
       return $this->blogRespository->getBlogByUserId($userId);
    }

    public function getBlogInDescOrder($userId){
        return $this->blogRespository->getBlogInDescOrder($userId);
    }

    public function getBlogInAscOrder($userId){
        return $this->blogRespository->getBlogInAscOrder($userId);
    }

}
