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
 * @method string getCaptchaMode() 获取EdgeOne 人机校验模式，取值有：<li> Invisible：无感验证；</li><li>Adaptive：自适应交互验证。</li>
 * @method void setCaptchaMode(string $CaptchaMode) 设置EdgeOne 人机校验模式，取值有：<li> Invisible：无感验证；</li><li>Adaptive：自适应交互验证。</li>
 */
class TCEOCaptchaOption extends AbstractModel
{
    /**
     * @var string EdgeOne 人机校验模式，取值有：<li> Invisible：无感验证；</li><li>Adaptive：自适应交互验证。</li>
     */
    public $CaptchaMode;

    /**
     * @param string $CaptchaMode EdgeOne 人机校验模式，取值有：<li> Invisible：无感验证；</li><li>Adaptive：自适应交互验证。</li>
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
    }
}
