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
 * 客户端认证规则
 *
 * @method string getId() 获取客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li>
 * @method void setId(string $Id) 设置客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li>
 * @method string getName() 获取客户端认证规则的名称。
 * @method void setName(string $Name) 设置客户端认证规则的名称。
 * @method string getEnabled() 获取规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method integer getPriority() 获取规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
 * @method void setPriority(integer $Priority) 设置规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
 * @method string getCondition() 获取规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method string getAttesterId() 获取客户端认证选项 ID。
 * @method void setAttesterId(string $AttesterId) 设置客户端认证选项 ID。
 * @method array getDeviceProfiles() 获取客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。
 * @method void setDeviceProfiles(array $DeviceProfiles) 设置客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。
 * @method SecurityAction getInvalidAttestationAction() 获取客户端认证未通过的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 * @method void setInvalidAttestationAction(SecurityAction $InvalidAttestationAction) 设置客户端认证未通过的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 */
class ClientAttestationRule extends AbstractModel
{
    /**
     * @var string 客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li>
     */
    public $Id;

    /**
     * @var string 客户端认证规则的名称。
     */
    public $Name;

    /**
     * @var string 规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var integer 规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
     */
    public $Priority;

    /**
     * @var string 规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var string 客户端认证选项 ID。
     */
    public $AttesterId;

    /**
     * @var array 客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。
     */
    public $DeviceProfiles;

    /**
     * @var SecurityAction 客户端认证未通过的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
     */
    public $InvalidAttestationAction;

    /**
     * @param string $Id 客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li>
     * @param string $Name 客户端认证规则的名称。
     * @param string $Enabled 规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param integer $Priority 规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
     * @param string $Condition 规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     * @param string $AttesterId 客户端认证选项 ID。
     * @param array $DeviceProfiles 客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。
     * @param SecurityAction $InvalidAttestationAction 客户端认证未通过的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AttesterId",$param) and $param["AttesterId"] !== null) {
            $this->AttesterId = $param["AttesterId"];
        }

        if (array_key_exists("DeviceProfiles",$param) and $param["DeviceProfiles"] !== null) {
            $this->DeviceProfiles = [];
            foreach ($param["DeviceProfiles"] as $key => $value){
                $obj = new DeviceProfile();
                $obj->deserialize($value);
                array_push($this->DeviceProfiles, $obj);
            }
        }

        if (array_key_exists("InvalidAttestationAction",$param) and $param["InvalidAttestationAction"] !== null) {
            $this->InvalidAttestationAction = new SecurityAction();
            $this->InvalidAttestationAction->deserialize($param["InvalidAttestationAction"]);
        }
    }
}
