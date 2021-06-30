<?php namespace SIKessEm\HTTP;

/**
 * Commands cart class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Cart extends HandlersSheet {

  /**
   * @var array The list of commands
   */
  protected array $commands = [];

  /**
   * Add a new command
   *
   * @param callable $callback The command handler
   * @return Command The command created
   */
  public function add(callable $handle): Handler {
    return $this->commands[] = new Command($handle);
  }
}
