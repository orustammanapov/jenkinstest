<?php
namespace Deployer;

require 'recipe/symfony.php';

set('application', 'Jenkinstest');
set('repository', 'https://github.com/orustammanapov/jenkinstest.git');

// task('test', function() {
//     run("echo 'Hello Testworld'");
// });

task('hello:world', function () {
    writeln('Hello world');
});

task('another:test', function () {
    writeln('Another test');
});

task('phpunit', function () {
    $result = run("./vendor/bin/phpunit");
    writeln($result);
});

task('deploy', [
    'another:test',
    'hello:world',
    'phpunit',
]);

// task('phpunit', function () {
//     runLocally('phpunit --testdox -c vendor/stat/frontend-bundle/Stat/FrontendBundle/phpunit-devserver.xml');
// });
