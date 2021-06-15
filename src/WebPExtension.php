<?php

namespace BiffBangPow\Extension;

use SilverStripe\Control\Controller;
use SilverStripe\Core\Extension;

class WebPExtension extends Extension
{

    /**
     * @return bool
     */
    public function getWebPSupport()
    {
        $request = Controller::curr()->getRequest()->getHeader('accept');
        if (stristr($request, 'image/webp') !== false) {
            return true;
        }
        return false;
    }

}
