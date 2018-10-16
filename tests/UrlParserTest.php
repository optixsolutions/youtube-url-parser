<?php

namespace Optix\YoutubeUrlParser\Tests;

use Optix\YoutubeUrlParser\UrlParser;

class UrlParserTest extends TestCase
{
    protected $validUrls = [
        'youtube.com/watch/e2SUGfXVy4A',
        'www.youtube.com/watch/e2SUGfXVy4A',
        'http://youtube.com/watch/e2SUGfXVy4A',
        'https://youtube.com/watch/e2SUGfXVy4A',
        'http://www.youtube.com/watch/e2SUGfXVy4A',
        'https://www.youtube.com/watch/e2SUGfXVy4A',
        'https://www.youtube.com/watch/e2SUGfXVy4A?t=69',

        'youtube.com/watch?v=e2SUGfXVy4A',
        'www.youtube.com/watch?v=e2SUGfXVy4A',
        'http://youtube.com/watch?v=e2SUGfXVy4A',
        'https://youtube.com/watch?v=e2SUGfXVy4A',
        'http://www.youtube.com/watch?v=e2SUGfXVy4A',
        'https://www.youtube.com/watch?v=e2SUGfXVy4A',
        'https://www.youtube.com/watch?t=69&v=e2SUGfXVy4A',
        'https://www.youtube.com/watch?t=69&v=e2SUGfXVy4A&autoplay=1',

        'youtube.com/embed/e2SUGfXVy4A',
        'www.youtube.com/embed/e2SUGfXVy4A',
        'http://youtube.com/embed/e2SUGfXVy4A',
        'https://youtube.com/embed/e2SUGfXVy4A',
        'http://www.youtube.com/embed/e2SUGfXVy4A',
        'https://www.youtube.com/embed/e2SUGfXVy4A',
        'https://www.youtube.com/embed/e2SUGfXVy4A?t=69',

        'youtu.be/e2SUGfXVy4A',
        'www.youtu.be/e2SUGfXVy4A',
        'http://youtu.be/e2SUGfXVy4A',
        'https://youtu.be/e2SUGfXVy4A',
        'http://www.youtu.be/e2SUGfXVy4A',
        'https://www.youtu.be/e2SUGfXVy4A',
        'https://www.youtu.be/e2SUGfXVy4A?t=69'
    ];

    /** @test */
    public function it_can_recognise_a_valid_url()
    {
        foreach ($this->validUrls as $url) {
            $parser = new UrlParser($url);
            $this->assertTrue($parser->isValid());
        }
    }

    /** @test */
    public function it_can_parse_the_video_id_from_a_valid_url()
    {
        foreach ($this->validUrls as $url) {
            $parser = new UrlParser($url);
            $this->assertEquals('e2SUGfXVy4A', $parser->getVideoId());
        }
    }
}
