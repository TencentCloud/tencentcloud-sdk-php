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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckClusterNatFwPreAccess请求参数结构体
 *
 * @method NatCcnSwitchConfig getNatCcnSwitch() 获取<p>NAT CCN 开关配置 JSON 字符串，与 OpenClusterNatFwSwitch 的 NatCcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
 * @method void setNatCcnSwitch(NatCcnSwitchConfig $NatCcnSwitch) 设置<p>NAT CCN 开关配置 JSON 字符串，与 OpenClusterNatFwSwitch 的 NatCcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
 * @method string getCheckMode() 获取<p>预接入模式</p><p>枚举值：</p><ul><li>open： 开启防火墙前预接入检查</li><li>modify： 编辑修改防火墙开关时预接入检查</li></ul>
 * @method void setCheckMode(string $CheckMode) 设置<p>预接入模式</p><p>枚举值：</p><ul><li>open： 开启防火墙前预接入检查</li><li>modify： 编辑修改防火墙开关时预接入检查</li></ul>
 */
class CheckClusterNatFwPreAccessRequest extends AbstractModel
{
    /**
     * @var NatCcnSwitchConfig <p>NAT CCN 开关配置 JSON 字符串，与 OpenClusterNatFwSwitch 的 NatCcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
     */
    public $NatCcnSwitch;

    /**
     * @var string <p>预接入模式</p><p>枚举值：</p><ul><li>open： 开启防火墙前预接入检查</li><li>modify： 编辑修改防火墙开关时预接入检查</li></ul>
     */
    public $CheckMode;

    /**
     * @param NatCcnSwitchConfig $NatCcnSwitch <p>NAT CCN 开关配置 JSON 字符串，与 OpenClusterNatFwSwitch 的 NatCcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
     * @param string $CheckMode <p>预接入模式</p><p>枚举值：</p><ul><li>open： 开启防火墙前预接入检查</li><li>modify： 编辑修改防火墙开关时预接入检查</li></ul>
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
        if (array_key_exists("NatCcnSwitch",$param) and $param["NatCcnSwitch"] !== null) {
            $this->NatCcnSwitch = new NatCcnSwitchConfig();
            $this->NatCcnSwitch->deserialize($param["NatCcnSwitch"]);
        }

        if (array_key_exists("CheckMode",$param) and $param["CheckMode"] !== null) {
            $this->CheckMode = $param["CheckMode"];
        }
    }
}
