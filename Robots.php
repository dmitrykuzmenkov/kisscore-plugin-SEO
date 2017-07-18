<?php namespace Plugin\SEO;
class Robots {
  public static function generate($file, array $lines = [], $domain = null) {
    if (!$domain) {
      $domain = config('common.domain');
    }
    file_put_contents($file,
      'User-agent: *'
      . PHP_EOL . 'Crawl-delay: 1'
      . PHP_EOL . 'Host: ' . config('common.domain')
      . PHP_EOL . 'Sitemap: ' . config('common.proto') . '://' . $domain . '/sitemap.xml'
      . ($lines ? PHP_EOL . implode(PHP_EOL, $lines) : '')
    );
  }
}
