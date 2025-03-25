<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Facades\Agent;

class UserAgentParserController extends Controller
{

    private $agent;

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    public function getDeviceInfo()
    {
        echo __('Platform: ') . $this->agent::platform() . PHP_EOL;
        echo __('Device: ') . $this->agent::device() . PHP_EOL;
        echo __('Browser: ') . $this->agent::browser() . PHP_EOL;
        echo __('Whether it is Safari browser: ') . ($this->agent::isSafari() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Whether it is a desktop: ') . ($this->agent::isDesktop() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Whether it is a tablet: ') . ($this->agent::isTablet() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Whether it is a mobile: ') . ($this->agent::isMobile() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Whether it is iOS: ') . ($this->agent::isiOS() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Whether it is Android OS: ') . ($this->agent::isAndroidOS() ? __('Yes') : __('No')) . PHP_EOL;
    }
}
