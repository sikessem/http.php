<?php namespace SIKessEm\HTTP;

/**
 * The server class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Server extends Messenger {

  /**
   * @var Menu The server menu
   */
  protected Menu $menu;

  /**
   * Create a new server
   *
   * @param string $ip The server IP address
   * @param int $port The port used by the server
   * @param array $handlers Services handlers list
   */
  public function __construct(string $ip, int $port, array $handlers = []) {
    parent::__construct($ip, $port);
    $this->menu = new Menu($this, $handlers);
  }

  /**
   * @var Menu The server menu
   */
  protected Menu $menu;

  /**
   * Listen to server service : create a new service and add it to the server menu
   *
   * @param callable $handler The order handler
   * @return Service The service created
   */
  public function onServe(callable $handler): Service {
    return $this->menu->service($handler);
  }
}
