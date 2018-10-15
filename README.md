# Youtube Url Parser

## Installation

```bash
composer require optix/youtube-url-parser
```

## Usage

```php
use Optix\YoutubeUrlParser\UrlParser;

$parser = new UrlParser('https://www.youtube.com/watch?v=e2SUGfXVy4A');

$parser->isValid(); // true
$parser->getVideoId(); // e2SUGfXVy4A
$parser->getEmbedUrl(); // https://www.youtube.com/embed/e2SUGfXVy4A
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
