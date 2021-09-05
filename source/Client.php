<?php namespace SIKessEm\HTTP;

/**
 * The client class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Client extends Messenger {

  /**
   * Create a new client
   *
   * @param string $ip The client IP address
   * @param int $port The port used by the client
   * @param array $handlers Commands handlers list
   */
  public function __construct(string $ip, int $port, array $handlers = []) {
    parent::__construct($ip, $port, new Cart($this, $handlers));
  }

  /**
   * Order a server
   *
   * @param namespace\Server $server The server to order
   * @throws namespace\Error If no command defined
   * @return namespace\Request The last cammand request
   */
  public function order(Server $server): Request {
    if(empty($commands = $this->sheet->commands))
      throw new Error('No command defined', Error::NO_COMMAND);

    $command = $request = null;
    foreach($commands as $command)
      $request = $command->execute($server, $request, $command);
    return $request;
  }

  /**
   * Listen to client order : create a new command and add it to the client sheet
   *
   * @param callable $handler The order handler
   * @return namespace\Command The command created
   */
  public function onOrder(callable $handler): Command {
    return $this->sheet->command($handler);
  }
}
