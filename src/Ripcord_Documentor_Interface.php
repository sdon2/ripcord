<?php

namespace Ripcord;

/**
 * This interface defines the minimum methods any documentor needs to implement.
 * @package Ripcord
 */
interface Ripcord_Documentor_Interface
{
    public function setMethodData($methods);
    public function handle($rpcServer);
    public function getIntrospectionXML();
}
