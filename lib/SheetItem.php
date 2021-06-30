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
   * Create a new sheet item
   *
   * @param Sheet $sheet The command sheet
   */
  public function __construct(protected Sheet $sheet) {}
}
