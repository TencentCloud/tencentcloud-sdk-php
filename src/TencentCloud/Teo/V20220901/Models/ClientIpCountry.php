<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 回源时携带客户端IP所属地域信息，值的格式为ISO-3166-1两位字母代码。
 *
 * @method string getSwitch() 获取配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getHeaderName() 获取存放客户端 IP 所属地域信息的请求头名称，当 Switch=on 时有效。
为空则使用默认值：EO-Client-IPCountry。
 * @method void setHeaderName(string $HeaderName) 设置存放客户端 IP 所属地域信息的请求头名称，当 Switch=on 时有效。
为空则使用默认值：EO-Client-IPCountry。
 */
class ClientIpCountry extends AbstractModel
{
    /**
     * @var string 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 存放客户端 IP 所属地域信息的请求头名称，当 Switch=on 时有效。
为空则使用默认值：EO-Client-IPCountry。
     */
    public $HeaderName;

    /**
     * @param string $Switch 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $HeaderName 存放客户端 IP 所属地域信息的请求头名称，当 Switch=on 时有效。
为空则使用默认值：EO-Client-IPCountry。
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
