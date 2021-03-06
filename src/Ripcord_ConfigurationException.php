<?php

namespace Ripcord;

/**
 * This class is used whenever prerequisite requirements are not met.
 * - ripcord::xmlrpcNotInstalled (-5) PHP XMLRPC library is not installed - Thrown by the ripcord server and client when the xmlrpc library is not installed.
 * @package Ripcord
 */
class Ripcord_ConfigurationException extends \Exception implements Ripcord_Exception
{
}
