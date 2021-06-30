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
    return ['ip', 'port', 'sheet'];
  }

  /**
   * Create a new messenger
   *
   * @param string $ip The messenger IP address
   * @param int $port The port used by the messenger
   * @param namespace\Sheet $sheet The messenger sheet
   */
  public function __construct(protected string $ip, protected int $port, protected Sheet $sheet) {}
}
