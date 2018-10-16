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
        $this->isValid = !! preg_match($this->getPattern(), $url, $matches);

        if (isset($matches[1])) {
            $this->videoId = $matches[1];
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

    protected function getPattern()
    {
        return '/(?:https?:\/\/)?(?:www\.)?(?:youtu.be\/|youtube\.com\/(?:watch(?:\/|\/?\?(?:\S*&)?v=)|embed\/))([\w\d]+)/';
    }
}
