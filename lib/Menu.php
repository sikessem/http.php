<?php namespace SIKessEm\HTTP;
/**
 * Services menu class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Menu extends HandlersSheet {

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
  public function add(callable $handle): Handler {
    return $this->services[] = new Service($handle);
  }
}
