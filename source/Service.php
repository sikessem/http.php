<?php namespace SIKessEm\HTTP;

/**
 * The service class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Service extends SheetItem {

  /**
   * Create a new service
   *
   * @param namespace\Menu $menu The service menu
   * @param callable $handler The service handler
   */
  public function __construct(Menu $menu, callable $handler) {
    parent::__construct($menu);
    $this->handler = $handler;
  }

  /**
   * @var callable The service handler
   */
  protected $handler;

  /**
   * Process the service
   *
   * @param namespace\Request $request The request to process
   * @param null|namespace\Response $response The old response
   * @param null|namespace\Service $service The old service
   * @return namespace\Response The process response
   */
   public function process(Request $request, ?Response $response = null, ?Service $service = null): Response {
     return call_user_func($this->handler, $request, $response, $service);
   }
}
