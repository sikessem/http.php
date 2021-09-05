<?php namespace SIKessEm\HTTP;

/**
 * The sheet item class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
abstract class SheetItem {

  /**
   * The item accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return ['sheet'];
  }

  /**
   * Create a new item
   *
   * @param namespace\Sheet $sheet The item sheet
   */
  public function __construct(protected Sheet $sheet) {}
}
