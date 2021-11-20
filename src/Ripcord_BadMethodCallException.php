<?php

namespace Ripcord;

/**
 * This class is used whenever an when a method passed to the server is invalid.
 * - ripcord::methodNotFound (-1) Method {method} not found. - Thrown by the ripcord server when a requested method isn't found.
 * @package Ripcord
 */
class Ripcord_BadMethodCallException extends \BadMethodCallException implements Ripcord_Exception
{
}
