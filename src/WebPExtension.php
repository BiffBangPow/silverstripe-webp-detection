<?php

namespace BiffBangPow\Extension;

use SilverStripe\Core\Extension;

class WebPExtension extends Extension
{

    /**
     * @return bool
     */
    public function getWebPSupport() {
        return true;
    }

}