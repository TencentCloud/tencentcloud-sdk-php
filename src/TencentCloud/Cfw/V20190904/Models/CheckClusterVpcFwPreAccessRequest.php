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
 * CheckClusterVpcFwPreAccess请求参数结构体
 *
 * @method array getCcnSwitch() 获取<p>CCN 开关配置，长度为 1 的数组 JSON 字符串，结构与 ModifyClusterVpcFwSwitch 的 CcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
 * @method void setCcnSwitch(array $CcnSwitch) 设置<p>CCN 开关配置，长度为 1 的数组 JSON 字符串，结构与 ModifyClusterVpcFwSwitch 的 CcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
 * @method string getCheckMode() 获取<p>预接入检查模式</p><p>枚举值：</p><ul><li>open： 开启开关时预接入检查</li><li>modify： 编辑变更开关时预接入检查</li></ul>
 * @method void setCheckMode(string $CheckMode) 设置<p>预接入检查模式</p><p>枚举值：</p><ul><li>open： 开启开关时预接入检查</li><li>modify： 编辑变更开关时预接入检查</li></ul>
 */
class CheckClusterVpcFwPreAccessRequest extends AbstractModel
{
    /**
     * @var array <p>CCN 开关配置，长度为 1 的数组 JSON 字符串，结构与 ModifyClusterVpcFwSwitch 的 CcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
     */
    public $CcnSwitch;

    /**
     * @var string <p>预接入检查模式</p><p>枚举值：</p><ul><li>open： 开启开关时预接入检查</li><li>modify： 编辑变更开关时预接入检查</li></ul>
     */
    public $CheckMode;

    /**
     * @param array $CcnSwitch <p>CCN 开关配置，长度为 1 的数组 JSON 字符串，结构与 ModifyClusterVpcFwSwitch 的 CcnSwitch 完全一致。SwitchMode 必须为 1（自动接入），RoutingMode 必须为 1（策略路由）。</p>
     * @param string $CheckMode <p>预接入检查模式</p><p>枚举值：</p><ul><li>open： 开启开关时预接入检查</li><li>modify： 编辑变更开关时预接入检查</li></ul>
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
        if (array_key_exists("CcnSwitch",$param) and $param["CcnSwitch"] !== null) {
            $this->CcnSwitch = [];
            foreach ($param["CcnSwitch"] as $key => $value){
                $obj = new CcnSwitchInfo();
                $obj->deserialize($value);
                array_push($this->CcnSwitch, $obj);
            }
        }

        if (array_key_exists("CheckMode",$param) and $param["CheckMode"] !== null) {
            $this->CheckMode = $param["CheckMode"];
        }
    }
}
