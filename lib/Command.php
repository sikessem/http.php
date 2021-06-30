<?php namespace SIKessEm\HTTP;

/**
 * The command class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Command extends SheetItem {

  /**
   * Create a new command
   *
   * @param Sheet $sheet The command sheet
   * @param callable $handler The command handler
   */
  public function __construct(Sheet $sheet, protected callable $handler) {
    parent::__construct($sheet);
  }

  /**
   * Execute the command
   *
   * @param null|Command $command The old command
   * @return Request The command request
   */
  public function execute(?Command $command = null): Request {
    return call_user_func($this->handler, $command);
  }
}
