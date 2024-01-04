<?php

namespace Msfiqih\Bpjs\PCare;

use Msfiqih\Bpjs\PCare\PcareService;

class Mcu extends PcareService
{
    /**
     * @var string
     */
    protected $feature = 'mcu';

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}
