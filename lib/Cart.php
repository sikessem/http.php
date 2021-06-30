<?php namespace SIKessEm\HTTP;
/**
 * Commands cart class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Cart {

  /**
   * Create a new cart
   *
   * @param Messenger $sender The cart sender
   * @param array $handlers The cart handlers list
   */
  public function __construct(protected Messenger $sender, array $handlers = []) {
    foreach($handlers as $handler)
      $this->add($handler);
  }

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
  public function add(callable $handler): Command {
    return $this->commands[] = new Command($handler);
  }
}
