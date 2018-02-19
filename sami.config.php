<?php

use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Sami;
use Symfony\Component\Finder\Finder;

$finder = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir = __DIR__ . '/src')
;

$config = array(
    'theme' => 'ovac',
    'versions' => $versions = 'master',
    'title' => 'Laravel Hubtel Payment API',
    'build_dir' => __DIR__ . '/build/sami',
    'cache_dir' => __DIR__ . '/build/sami_cache',
    'default_opened_level' => 2,
    'remote_repository' => new GitHubRemoteRepository('OVAC/laravel-hubtel-payment', dirname($dir)),
    'template_dirs' => array(__DIR__ . '/../themes/default'),
);

$sami = new Sami($finder, $config);

return $sami;
