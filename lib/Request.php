<?php namespace SIKessEm\HTTP;

/**
 * The request class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Request extends Message {

  use \SIKessEm\Encapsulation\Accessor;

  /**
   * The request accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return parent::accessible_properties() + ['method', 'uri'];
  }

  /**
   * Create a new request
   *
   * @param Messenger $messenger The request messenger
   * @param string $method The request method
   * @param string $uri The request target
   */
  public function __construct(Messenger $messenger, protected string $method, protected string $target) {
    parent::__construct($messenger);
  }
}
