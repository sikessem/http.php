<?php namespace SIKessEm\HTTP;

/**
 * The response class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Response extends Message {

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
   * @param namespace\Messenger $sender The response sender
   * @param int $code The response status code
   * @param array $headers The response headers list
   */
  public function __construct(Messenger $sender, protected int $code, protected array $headers = []) {
    parent::__construct($sender);
  }
}
