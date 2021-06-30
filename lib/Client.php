<?php namespace SIKessEm\HTTP;

/**
 * The client class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Client extends Messenger {

  /**
   * Create a new client
   *
   * @param string $ip The client IP address
   * @param int $port The port used by the client
   * @param array $handlers Commands handlers list
   */
  public function __construct(string $ip, int $port, array $handlers = []) {
    parent::__construct($ip, $port);
    $this->cart = new Cart($this, $handlers);
  }

  /**
   * @var Cart The client cart
   */
  protected Cart $cart;

  /**
   * Listen to client order : create a new command and add it to the client cart
   *
   * @param callable $handler The order handler
   * @return Command The command created
   */
  public function onOrder(callable $handler): Command {
    return $this->cart->command($handler);
  }
}
