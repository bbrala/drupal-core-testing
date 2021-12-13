<?php

namespace Drupal\serialization_test;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SerializationTestNormalizer implements NormalizerInterface {

  /**
   * The format that this Normalizer supports.
   *
   * @var string
   */
  protected static $format = 'serialization_test';

  /**
   * Normalizes an object into a set of arrays/scalars.
   *
   * @param object $object
   *   Object to normalize.
   * @param string|null $format
   *   (optional) Format the normalization result will be encoded as. Defaults
   *   to NULL
   * @param array $context
   *   (optional) The context data. Defaults to an empty array.
   *
   * @return array
   *   An array containing a normalized representation of $object, appropriate
   *   for encoding to the requested format.
   */
  public function normalize($object, $format = NULL, array $context = []) {
    $normalized = (array) $object;
    // Add identifying value that can be used to verify that the expected
    // normalizer was invoked.
    $normalized['normalized_by'] = 'SerializationTestNormalizer';
    return $normalized;
  }

  /**
   * Checks whether format is supported by this normalizer.
   *
   * @param mixed $data
   *   Data to normalize.
   * @param string $format
   *   Format the normalization result will be encoded as.
   *
   * @return bool
   *   Returns TRUE if the normalizer can handle the request.
   */
  public function supportsNormalization($data, $format = NULL): bool {
    return static::$format === $format;
  }

}
