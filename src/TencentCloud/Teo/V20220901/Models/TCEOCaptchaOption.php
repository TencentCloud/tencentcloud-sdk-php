<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EdgeOne 人机校验认证实例信息。
 *
 * @method string getCaptchaMode() 获取<p>浏览器端 WebView 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Adaptive： 自适应交互验证</li></ul><p>默认值：Invisible</p>
 * @method void setCaptchaMode(string $CaptchaMode) 设置<p>浏览器端 WebView 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Adaptive： 自适应交互验证</li></ul><p>默认值：Invisible</p>
 * @method string getMobileCaptchaMode() 获取<p>移动端原生 App 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Visible： 交互验证</li></ul><p>默认值：Invisible</p>
 * @method void setMobileCaptchaMode(string $MobileCaptchaMode) 设置<p>移动端原生 App 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Visible： 交互验证</li></ul><p>默认值：Invisible</p>
 */
class TCEOCaptchaOption extends AbstractModel
{
    /**
     * @var string <p>浏览器端 WebView 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Adaptive： 自适应交互验证</li></ul><p>默认值：Invisible</p>
     */
    public $CaptchaMode;

    /**
     * @var string <p>移动端原生 App 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Visible： 交互验证</li></ul><p>默认值：Invisible</p>
     */
    public $MobileCaptchaMode;

    /**
     * @param string $CaptchaMode <p>浏览器端 WebView 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Adaptive： 自适应交互验证</li></ul><p>默认值：Invisible</p>
     * @param string $MobileCaptchaMode <p>移动端原生 App 人机校验交互模式。</p><p>枚举值：</p><ul><li>Invisible： 无感验证</li><li>Visible： 交互验证</li></ul><p>默认值：Invisible</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CaptchaMode",$param) and $param["CaptchaMode"] !== null) {
            $this->CaptchaMode = $param["CaptchaMode"];
        }

        if (array_key_exists("MobileCaptchaMode",$param) and $param["MobileCaptchaMode"] !== null) {
            $this->MobileCaptchaMode = $param["MobileCaptchaMode"];
        }
    }
}
