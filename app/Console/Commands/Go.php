<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Console\Command;

class Go extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

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
//        $profile = Profile::first();
//        dd($profile->role);
        $post = Post::first();
        return $post->likes()->syncWithoutDetaching([1,2,3,4,5]);
//        return $post->tags()->toggle(1);
    }
}
