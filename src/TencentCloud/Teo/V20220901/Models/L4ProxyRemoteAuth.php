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
 * 四层远程鉴权信息
 *
 * @method string getSwitch() 获取四层远程鉴权开关，取值有：
<li>on：表示开启;</li>
<li>off：表示关闭。</li>
 * @method void setSwitch(string $Switch) 设置四层远程鉴权开关，取值有：
<li>on：表示开启;</li>
<li>off：表示关闭。</li>
 * @method string getAddress() 获取远程鉴权服务地址，格式为: domain/ip:port。例：example.auth.com:8888

 * @method void setAddress(string $Address) 设置远程鉴权服务地址，格式为: domain/ip:port。例：example.auth.com:8888

 * @method string getServerFaultyBehavior() 获取远程鉴权服务不可访问后，经过四层转发规则默认回源行为，取值有：
<li>reject：表示进行拦截，拒绝访问;</li>
<li>allow：表示允许通过。</li>
 * @method void setServerFaultyBehavior(string $ServerFaultyBehavior) 设置远程鉴权服务不可访问后，经过四层转发规则默认回源行为，取值有：
<li>reject：表示进行拦截，拒绝访问;</li>
<li>allow：表示允许通过。</li>
 */
class L4ProxyRemoteAuth extends AbstractModel
{
    /**
     * @var string 四层远程鉴权开关，取值有：
<li>on：表示开启;</li>
<li>off：表示关闭。</li>
     */
    public $Switch;

    /**
     * @var string 远程鉴权服务地址，格式为: domain/ip:port。例：example.auth.com:8888

     */
    public $Address;

    /**
     * @var string 远程鉴权服务不可访问后，经过四层转发规则默认回源行为，取值有：
<li>reject：表示进行拦截，拒绝访问;</li>
<li>allow：表示允许通过。</li>
     */
    public $ServerFaultyBehavior;

    /**
     * @param string $Switch 四层远程鉴权开关，取值有：
<li>on：表示开启;</li>
<li>off：表示关闭。</li>
     * @param string $Address 远程鉴权服务地址，格式为: domain/ip:port。例：example.auth.com:8888

     * @param string $ServerFaultyBehavior 远程鉴权服务不可访问后，经过四层转发规则默认回源行为，取值有：
<li>reject：表示进行拦截，拒绝访问;</li>
<li>allow：表示允许通过。</li>
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

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ServerFaultyBehavior",$param) and $param["ServerFaultyBehavior"] !== null) {
            $this->ServerFaultyBehavior = $param["ServerFaultyBehavior"];
        }
    }
}
