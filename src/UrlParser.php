<?php

namespace Optix\YoutubeUrlParser;

class UrlParser
{
    protected $isValid;

    protected $videoId;

    public function __construct($url)
    {
        $this->parse($url);
    }

    protected function parse($url)
    {
        $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtu.be\/|youtube\.com\/(?:watch(?:\/|\/?\?(?:\S*&)?v=)|embed\/))([\w\d]+)/';

        $this->isValid = preg_match($pattern, $url, $matches);

        if (isset($matches[0])) {
            $this->videoId = $matches[0];
        }
    }

    public function isValid()
    {
        return $this->isValid;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    public function getEmbedUrl()
    {
        return 'https://www.youtube.com/embed/' . $this->videoId;
    }
}
