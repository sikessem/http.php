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
   * The client accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return array_merge(parent::accessible_properties(), ['cart']);
  }

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
   * @var namespace\Cart The client cart
   */
  protected Cart $cart;

  /**
   * Order a server
   *
   * @param namespace\Server $server The server to order
   * @throws namespace\Error If no command defined
   * @return namespace\Request The last cammand request
   */
  public function order(Server $server): Request {
    if(empty($commands = $this->cart->commands))
      throw new Error('No command defined', Error::NO_COMMAND);

    $command = $request = null;
    foreach($commands as $command)
      $request = $command->execute($server, $request, $command);
    return $request;
  }

  /**
   * Listen to client order : create a new command and add it to the client cart
   *
   * @param callable $handler The order handler
   * @return namespace\Command The command created
   */
  public function onOrder(callable $handler): Command {
    return $this->cart->command($handler);
  }
}
