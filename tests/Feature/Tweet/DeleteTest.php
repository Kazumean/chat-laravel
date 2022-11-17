<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use RefreshDatabase;
use App\Models\User;
use App\Models\Tweet;

class DeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_delete_successed()
    {
        // ユーザーを作成
        $user = User::findOrFail(User::factory()->create());

        // つぶやきを作成
        $tweet = Tweet::factory()->create(['user_id' => $user->id]);

        // 指定したユーザーでログインした状態にする
        $this->actingAs($user);

        // 作成したつぶやきIDを指定
        $responce = $this->delete('/tweet/delete/' . $tweet->id);

        $responce->assertRedirect('/tweet');
    }
}
