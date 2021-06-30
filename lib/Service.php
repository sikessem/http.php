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
   * @param Sheet $sheet The service sheet
   * @param callable $handle The service handler
   */
  public function __construct(Sheet $sheet, protected callable $handler) {
    parent::__construct($sheet);
  }

  /**
   * Process the service
   *
   * @param Request $request The request to process
   * @param null|Service $service The old service
   * @return Response The response request
   */
   public function process(Request $request, ?Service $service = null): Response {
     return call_user_func($this->handler, $request, $service);
   }
}
