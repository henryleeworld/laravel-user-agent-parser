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
        echo '作業系統：' . $this->agent::platform() . PHP_EOL;
        echo '設備名稱：' . $this->agent::device() . PHP_EOL;
        echo '瀏覽器：' . $this->agent::browser() . PHP_EOL;
        echo '是否為 Safari 瀏覽器：' . ($this->agent::isSafari() ? '是' : '否') . PHP_EOL;
        echo '是否為桌上型電腦：' . ($this->agent::isDesktop() ? '是' : '否') . PHP_EOL;
        echo '是否為平板裝置：' . ($this->agent::isTablet() ? '是' : '否') . PHP_EOL;
        echo '是否為行動裝置：' . ($this->agent::isMobile() ? '是' : '否') . PHP_EOL;
        echo '是否為 iOS：' . ($this->agent::isiOS() ? '是' : '否') . PHP_EOL;
        echo '是否為 Android OS：' . ($this->agent::isAndroidOS() ? '是' : '否') . PHP_EOL;
    }
}
