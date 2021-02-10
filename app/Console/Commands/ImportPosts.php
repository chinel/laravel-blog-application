<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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
            \Log::info("Cron is working fine!");

        }catch (GuzzleException $e){
            \Log::alert('Request Exception: '.$e);
        }
    }
}
