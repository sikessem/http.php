<?php namespace SIKessEm\HTTP;

/**
 * The sheet class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
abstract class Sheet {

  use \SIKessEm\Encapsulation\Accessor;

  /**
   * The sheet accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return ['owner'];
  }

  /**
   * Create a new handlers sheet
   *
   * @param Messenger $owner The sheet sender
   * @param array $handlers The sheet handlers list
   */
  public function __construct(protected Messenger $owner, array $items = []) {
    foreach($items as $item)
      $this->add($item);
  }

  /**
   * Add a new handler
   *
   * @param callable $callback The command handler
   * @return Handler The handler created
   */
  abstract public function add(callable $handle): SheetItem;
}
