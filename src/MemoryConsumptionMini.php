<?php


namespace Error;

use TCPDF;

class MemoryConsumptionMini
{
    private TCPDF $tcpdf;

    public function __construct()
    {
        $this->tcpdf = new TCPDF();
    }
}
