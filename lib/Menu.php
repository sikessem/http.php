<?php namespace SIKessEm\HTTP;
/**
 * Services menu class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Menu {

  /**
   * Create a new menu
   *
   * @param Messenger $sender The menu sender
   * @param array $handlers The menu handlers list
   */
  public function __construct(protected Messenger $sender, array $handlers = []) {
    foreach($handlers as $handler)
      $this->add($handler);
  }

  /**
   * @var array The list of services
   */
  protected array $services = [];

  /**
   * Add a new service
   *
   * @param callable $callback The service handler
   * @return Service The service created
   */
  public function add(callable $handler): Service {
    return $this->services[] = new Service($handler);
  }
}
