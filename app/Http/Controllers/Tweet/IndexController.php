<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // $tweetService = new TweetService(); // TweetServiceのインスタンスを作成
        $tweets = $tweetService->getTweets(); // つぶやきの一覧を取得

        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(), throw new \Error('dump report.'));

        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
