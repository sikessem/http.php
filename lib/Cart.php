<?php namespace SIKessEm\HTTP;

/**
 * Commands cart class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Cart extends Sheet {

  /**
   * The cart accessible properties
   *
   * @return array The acessible properties list
   */
  public function accessible_properties(): array {
      return ['commands'];
  }

  /**
   * Create a new cart sheet
   *
   * @param Messenger $owner The cart owner
   * @param array $commands Services handlers list
   */
  public function __construct(Messenger $owner, array $commands = []) {
    parent::__construct($owner);
    foreach($commands as $command)
      $this->command($command);
  }

  /**
   * @var array The list of commands
   */
  protected array $commands = [];

  /**
   * Add a new command
   *
   * @param callable $handler The command handler
   * @return Command The command created
   */
  public function command(callable $handler): Command {
    return $this->commands[] = new Command($this, $handler);
  }
}
