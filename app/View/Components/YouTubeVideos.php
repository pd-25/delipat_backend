<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class YouTubeVideos extends Component
{
    public $videos;

    public function __construct()
    {
        $apiKey = env('YOUTUBE_API_KEY'); // Replace with your API Key
        $channelId = env('YOUTUBE_CHANNEL_ID'); // Replace with your Channel ID
        $apiUrl = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet&type=video&order=date&maxResults=10";

        $response = Http::get($apiUrl);

        if ($response->ok()) {
            $this->videos = $response->json()['items'];
        } else {
            $this->videos = [];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.you-tube-videos');
    }
}
