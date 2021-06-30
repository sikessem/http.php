<?php namespace SIKessEm\HTTP;

/**
 * The message class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
abstract class Message {

  use \SIKessEm\Encapsulation\Accessor;

  /**
   * The message accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return ['sender'];
  }

  /**
   * Create a new message
   *
   * @param Messenger $sender The message sender
   */
  public function __construct(protected Messenger $sender) {}
}
