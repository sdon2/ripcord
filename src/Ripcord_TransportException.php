<?php

namespace Ripcord;

/**
 * This class is used whenever something goes wrong in sending / receiving data. Possible exceptions thrown are:
 * - ripcord::cannotAccessURL (-4) Could not access {url} - Thrown by the transport object when unable to access the given url.
 * @package Ripcord
 */
class Ripcord_TransportException extends \RuntimeException implements Ripcord_Exception
{
}
