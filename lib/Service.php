<?php namespace SIKessEm\HTTP;

/**
 * The service class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Service {

  /**
   * Create a new service
   *
   * @param namespace\Menu $menu The service menu
   * @param callable $handler The service handler
   */
  public function __construct(Menu $menu, protected callable $handler) {
    parent::__construct($menu);
  }

  /**
   * Process the service
   *
   * @param namespace\Request $request The request to process
   * @param null|namespace\Service $service The old service
   * @return namespace\Response The response request
   */
   public function process(Request $request, ?Service $service = null): Response {
     return call_user_func($this->handler, $request, $service);
   }
}
