<?php namespace SIKessEm\HTTP;

/**
 * Handlers sheet class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
abstract class HandlersSheet {

  /**
   * Create a new handlers sheet
   *
   * @param Messenger $sender The cart sender
   * @param array $handlers The cart handlers list
   */
  public function __construct(protected Messenger $sender, array $handlers = []) {
    foreach($handlers as $handler)
      $this->add($handler);
  }

  /**
   * Add a new handler
   *
   * @param callable $callback The command handler
   * @return Handler The handler created
   */
  abstract public function add(callable $handle): Handler;
}
