<?php

namespace Msfiqih\Bpjs\PCare;

use Msfiqih\Bpjs\PCare\PcareService;

class Obat extends PcareService
{
    /**
     * @var string
     */
    protected $feature = 'obat';

    public function dpho($keyword)
    {
        $this->feature .= "/dpho/{$keyword}";
        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}
