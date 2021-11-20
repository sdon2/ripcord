<?php

namespace Ripcord;

/**
 * This class is used for exceptions generated from xmlrpc faults returned by the server. The code and message correspond
 * to the code and message from the xmlrpc fault.
 * @package Ripcord
 */
class Ripcord_RemoteException extends \Exception implements Ripcord_Exception
{
}
