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
      return ['messenger'];
  }

  /**
   * Create a new message
   *
   * @param Messenger $messenger The message sender
   */
  public function __construct(protected Messenger $messenger) {}
}
