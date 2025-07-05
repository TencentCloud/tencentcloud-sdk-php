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
 * 存储客户端请求IP的头部信息配置。
 *
 * @method string getSwitch() 获取配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getHeaderName() 获取回源时，存放客户端 IP 的请求头名称。当 Switch 为 on 时，该参数必填。该参数不允许填写 X-Forwarded-For。
 * @method void setHeaderName(string $HeaderName) 设置回源时，存放客户端 IP 的请求头名称。当 Switch 为 on 时，该参数必填。该参数不允许填写 X-Forwarded-For。
 */
class ClientIPHeaderParameters extends AbstractModel
{
    /**
     * @var string 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 回源时，存放客户端 IP 的请求头名称。当 Switch 为 on 时，该参数必填。该参数不允许填写 X-Forwarded-For。
     */
    public $HeaderName;

    /**
     * @param string $Switch 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $HeaderName 回源时，存放客户端 IP 的请求头名称。当 Switch 为 on 时，该参数必填。该参数不允许填写 X-Forwarded-For。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
