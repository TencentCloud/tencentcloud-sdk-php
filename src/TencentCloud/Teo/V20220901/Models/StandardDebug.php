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
 * 支持标准debug结构体
 *
 * @method string getSwitch() 获取Debug 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置Debug 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getAllowClientIPList() 获取允许的客户端来源。支持填写 IPV4 以及 IPV6 的 IP/IP 段，不填则表示允许任意客户端 IP。
 * @method void setAllowClientIPList(array $AllowClientIPList) 设置允许的客户端来源。支持填写 IPV4 以及 IPV6 的 IP/IP 段，不填则表示允许任意客户端 IP。
 * @method string getExpireTime() 获取Debug 功能到期时间。超出设置的时间，则功能失效。
 * @method void setExpireTime(string $ExpireTime) 设置Debug 功能到期时间。超出设置的时间，则功能失效。
 */
class StandardDebug extends AbstractModel
{
    /**
     * @var string Debug 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 允许的客户端来源。支持填写 IPV4 以及 IPV6 的 IP/IP 段，不填则表示允许任意客户端 IP。
     */
    public $AllowClientIPList;

    /**
     * @var string Debug 功能到期时间。超出设置的时间，则功能失效。
     */
    public $ExpireTime;

    /**
     * @param string $Switch Debug 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $AllowClientIPList 允许的客户端来源。支持填写 IPV4 以及 IPV6 的 IP/IP 段，不填则表示允许任意客户端 IP。
     * @param string $ExpireTime Debug 功能到期时间。超出设置的时间，则功能失效。
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

        if (array_key_exists("AllowClientIPList",$param) and $param["AllowClientIPList"] !== null) {
            $this->AllowClientIPList = $param["AllowClientIPList"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
