<?php namespace SIKessEm\HTTP;

/**
 * Services menu class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Menu extends Sheet {

  /**
   * The menu accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return ['services'];
  }

  /**
   * Create a new menu sheet
   *
   * @param namespace\Messenger $owner The menu owner
   * @param array $services Services handlers list
   */
  public function __construct(protected Messenger $owner, array $services = []) {
    parent::__construct($owner);
    foreach($services as $service)
      $this->service($service);
  }

  /**
   * @var array The list of services
   */
  protected array $services = [];

  /**
   * Add a new service
   *
   * @param callable $handler The service handler
   * @return namespace\Service The service created
   */
  public function service(callable $handler): Service {
    return $this->services[] = new Service($this, $handler);
  }
}
