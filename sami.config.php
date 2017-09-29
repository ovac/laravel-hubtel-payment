<?php

// require_once 'vendor/autoload.php';

use Sami\Sami;
use Symfony\Component\Finder\Finder;
// use Sami\Version\GitVersionCollection;
use Sami\RemoteRepository\GitHubRemoteRepository;

$finder = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir = __DIR__.'/src');

// generate documentation for all v2.0.* tags, the 2.0 branch, and the master one
// $versions = GitVersionCollection::create($dir)
//     ->addFromTags('v1.0.*')
// // ->add('1.0', '1.0 branch')
//     ->add('master', 'master branch')
// ;

$config = [
    'theme' => 'ovac',
    'versions' => $versions = 'master',
    'title' => 'Laravel Hubtel Payment API',
    'build_dir' => __DIR__.'/build/sami',
    'cache_dir' => __DIR__.'/build/sami_cache',
    'default_opened_level' => 2,
    'remote_repository' => new GitHubRemoteRepository('OVAC/laravel-hubtel-payment', dirname($dir)),
    'template_dirs' => [__DIR__.'/../themes/default'],
];

$sami = new Sami($finder, $config);

return $sami;
