<?php namespace SIKessEm\HTTP;

/**
 * The command class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Command {

  /**
   * Create a new command
   *
   * @param namespace\Cart $cart The command cart
   * @param callable $handler The command handler
   */
  public function __construct(Cart $cart, protected callable $handler) {
    parent::__construct($cart);
  }

  /**
   * Execute the command
   *
   * @param null|namespace\Command $command The old command
   * @return namespace\Request The command request
   */
  public function execute(?Command $command = null): Request {
    return call_user_func($this->handler, $command);
  }
}
