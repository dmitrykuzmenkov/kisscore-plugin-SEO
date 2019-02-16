<?php namespace Plugin\SEO;
class Robots {
  public static function generate($file, array $lines = [], $host = null) {
    if (!$host) {
      $host = config('common.proto') . '://' . config('common.domain');
    }

    file_put_contents($file,
      'User-agent: *'
      . PHP_EOL . 'Crawl-delay: 1'
      . PHP_EOL . 'Host: ' . $host
      . PHP_EOL . 'Sitemap: ' . $host . '/sitemap.xml'
      . ($lines ? PHP_EOL . implode(PHP_EOL, $lines) : '')
    );
  }
}
