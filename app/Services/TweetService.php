<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{

    // Tweetを取得して、投稿日時の降順に表示する.
    public function getTweets()
    {
        return Tweet::orderBy('created_at', 'DESC')->get();
    }

    // 自分のTweetかどうかをチェックするメソッド.
    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        $tweet = Tweet::where('id', $tweetId)->first();
        
        if (!$tweet) {
            return false;
        }

        return $tweet->user_id === $userId;
    }
}