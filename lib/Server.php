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
   * The server accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return array_merge(parent::accessible_properties(), ['menu']);
  }

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
   * @var namespace\Menu The server menu
   */
  protected Menu $menu;

  /**
   * Serve a client
   *
   * @param namespace\Client $client The client to serve
   * @throws namespace\Error If no service defined
   * @return namespace\Response The last service response
   */
  public function serve(Client $client): Response {
    if(empty($this->menu->services))
      throw new Error('No service defined', Error::NO_SERVICE);

    $service = $response = null;
    foreach($this->menu->services as $service)
      $response = $service->process($client->order($this), $response, $service);
    return $response;
  }

  /**
   * Listen to server service : create a new service and add it to the server menu
   *
   * @param callable $handler The order handler
   * @return namespace\Service The service created
   */
  public function onServe(callable $handler): Service {
    return $this->menu->service($handler);
  }
}
