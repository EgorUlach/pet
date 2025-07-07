<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class Go extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        Post::create([
//            "title" => "test1",
//            "content" => "test1 content",
//            "profile_id" => "1",
//            "is_published" => true,
//            "category_id" => "1",
//            "like" => 2,
//            "image_path" => "qweqweeqwe",
//            "tag_id" => "1",
//            "views" => 1,
//        ]);
//        $post = Post::find(1);
//        $post->update([
//            "title" => "title update",
//        ]);
//        $post->delete();
//        dd($post);
    }
}
