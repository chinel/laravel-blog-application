<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'publication_date'
    ];

    public $timestamps = false;

    public function getUser($userId){
        $user = User::find($userId);
        return $user->firstname . " ". $user->lastname;
    }

    public function formatDate($date){
        return \Carbon\Carbon::parse($date)->format('F j, Y');
    }

    public function getPostSummaryTitle($postTitle){
        return (strlen($postTitle) <= 45) ? substr($postTitle, 0, 50): substr($postTitle, 0, 40). "...";
    }

    public function getPostSummary($postContent){
        return (strlen($postContent) <= 50) ? substr($postContent, 0, 50): substr($postContent, 0, 47). "...";
    }
}
