<?php namespace SIKessEm\HTTP;

/**
 * The error class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/http
 * @license Apache-2.0
 */
class Error extends \RuntimeException {

  /**
   * No service defined error code
   */
   const NO_SERVICE = 0x01;

   /**
    * No command defined error code
    */
    const NO_COMMAND = 0x02;
}
