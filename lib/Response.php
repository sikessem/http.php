<?php namespace SIKessEm\HTTP;

/**
 * The response class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Response extends Message {

  use \SIKessEm\Encapsulation\Accessor;

  /**
   * The response accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return parent::accessible_properties() + ['code', 'headers'];
  }

  /**
   * Create a new response
   *
   * @param Messenger $messenger The response messenger
   * @param int $code The response status code
   * @param array $headers The response headers list
   */
  public function __construct(Messenger $messenger, protected int $code, protected array $headers = []) {
    parent::__construct($messenger);
  }
}
