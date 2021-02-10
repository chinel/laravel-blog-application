<?php

namespace App\Console\Commands;



use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class ImportPosts extends Command
{
    protected  $client;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posts from an API every hour';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->client = new Client();
    }

    /**
     * Execute the console command.
     *
     *
     */
    public function handle()
    {

        try {
            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ];

            $res = $this->client->get('https://sq1-api-test.herokuapp.com/posts',
                [
                    'headers' => $headers,
                ]);

            $res = json_decode($res->getBody()->getContents(), true);
            $posts =  $res['data'];
            foreach ($posts as  $post){
                $checkIfExist =  $this->checkIfRecordExist($post['title']);
                if(!$checkIfExist){
                    $post['publication_date'] =  \Carbon\Carbon::parse($post['publication_date'])->toDateTimeString();
                    $post['user_id'] = 1;
                    DB::table('blogs')->insert($post);
                }
            }
            \Log::info("Successfully imported posts!");

        }catch (GuzzleException $e){
            \Log::alert('Request Exception: '.$e);
        }
    }

    public function checkIfRecordExist($postTitle){
        DB::table('blogs')->where('title','=',$postTitle)->where('user_id', '=', 1)->get()->count();
    }
}
