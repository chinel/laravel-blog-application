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

    /**
     * Create a new blog post
     *
     * @param $attributes
     * @return mixed
     */
    public function create($attributes){
        return $this->blog->create($attributes);
    }


    /**
     * Get all Blog posts
     *
     * @return mixed
     */

    public function getAllBlogPost(){
        return $this->blog->orderBy('publication_date','DESC');
    }

    /**
     * Get all Blog posts in Asc Order
     *
     * @return mixed
     */

    public function getAllBlogPostInAscOrder(){
        return $this->blog->orderBy('publication_date','ASC');

    }


    /**
     * Get all Blog details by id
     * @param $blogId
     * @return mixed
     */
    public function getBlogPostById($blogId){
        return $this->blog->find($blogId);
    }


    /**
     * Get all Blog Posts posted by a user
     * @param $userId
     * @return mixed
     */

    public function getBlogByUserId($userId){
        return $this->blog->where('user_id', $userId)->orderBy('publication_date','DESC');
    }

    /**
     * Get all Blog Posts posted by a user in ASC Order
     * @param $userId
     * @return mixed
     */

    public function getBlogByUserInAscOrder($userId){
        return $this->blog->where('user_id', $userId)->orderBy('publication_date','ASC');
    }




}
