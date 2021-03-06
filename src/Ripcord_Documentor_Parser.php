<?php

namespace Ripcord;

/**
 * This interface describes the minimum interface needed for a comment parser object used by the
 * Ripcord_Documentor
 * @package Ripcord
 */
interface Ripcord_Documentor_Parser
{
    /**
     * This method parses a given docComment block and returns an array with information.
     * @param string $commentBlock The docComment block.
     * @return array The parsed information.
     */
    public function parse($commentBlock);
}
