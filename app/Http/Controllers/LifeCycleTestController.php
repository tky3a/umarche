<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest', function () {
            return 'ライフサイクルテスト';
        });
        $test = app()->make('lifeCycleTest');
        // dd($test, app());
    }
}

class Message
{
    public function send()
    {
        echo ('メッセージ表示');
    }
}

class Sample
{
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function run()
    {
        return $this->message->send();
    }
}
