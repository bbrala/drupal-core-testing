<?php
declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function(RectorConfig $rectorConfig): void {
  $rectorConfig->ruleWithConfiguration(\DrupalRector\Drupal10\Rector\Deprecation\AnnotationToAttributeRector::class, [

    // Setting remove version to 10.x means the comments are not kept.
    new \DrupalRector\Drupal10\Rector\ValueObject\AnnotationToAttributeConfiguration('10.1.0', '10.0.0', 'Action', 'Drupal\Core\Action\Attribute\Action'),
  ]);

  $rectorConfig->autoloadPaths([
    './lib',
    './modules',
    './profiles',
    './themes'
  ]);


  $rectorConfig->skip([
    '*/upgrade_status/tests/modules/*',
    '*/ProxyClass/*',
    '*/tests/fixtures/*',
    '*/vendor/*',
  ]);
  $rectorConfig->fileExtensions([
    'php',
    'module',
    'theme',
    'install',
    'profile',
    'inc',
    'engine'
  ]);
  $rectorConfig->importNames(FALSE, FALSE);
  $rectorConfig->importShortClasses(FALSE);
};
