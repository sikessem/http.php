<?php namespace SIKessEm\HTTP;

/**
 * The command class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Command extends SheetItem {

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
   * @param null|namespace\Server $server The server to order
   * @param null|namespace\Command $command The old command
   * @return namespace\Request The command request
   */
  public function execute(Server $server, ?Command $command = null): Request {
    return call_user_func($this->handler, $server, $command);
  }
}
