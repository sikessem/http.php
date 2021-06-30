<?php namespace SIKessEm\HTTP;

/**
 * The messenger class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
abstract class Messenger {

  use \SIKessEm\Encapsulation\Accessor,
      \SIKessEm\Events\Emitter,
      \SIKessEm\Events\Listener;

  /**
   * The messenger accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
    return ['ip', 'port'];
  }

  /**
   * Create a new messenger
   *
   * @param string $ip The messenger IP address
   * @param int $port The port used by the messenger
   */
  public function __construct(protected string $ip, protected int $port) {}
}
