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
 * 正文传输超时时长的具体配置。
 *
 * @method string getIdleTimeout() 获取正文传输超时时长，取值 5 ~ 120，单位仅支持秒（s）。
 * @method void setIdleTimeout(string $IdleTimeout) 设置正文传输超时时长，取值 5 ~ 120，单位仅支持秒（s）。
 * @method string getEnabled() 获取正文传输超时时长是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置正文传输超时时长是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 */
class RequestBodyTransferTimeout extends AbstractModel
{
    /**
     * @var string 正文传输超时时长，取值 5 ~ 120，单位仅支持秒（s）。
     */
    public $IdleTimeout;

    /**
     * @var string 正文传输超时时长是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @param string $IdleTimeout 正文传输超时时长，取值 5 ~ 120，单位仅支持秒（s）。
     * @param string $Enabled 正文传输超时时长是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
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
        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
