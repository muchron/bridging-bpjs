<?php

namespace Msfiqih\Bpjs\PCare;

use Msfiqih\Bpjs\PCare\PcareService;

class StatusPulang extends PcareService
{
    /**
     * @var string
     */
    protected $feature = 'statuspulang';

    public function rawatInap($status = true)
    {
        $this->feature .= "/rawatInap/{$status}";
        return $this;
    }
}
