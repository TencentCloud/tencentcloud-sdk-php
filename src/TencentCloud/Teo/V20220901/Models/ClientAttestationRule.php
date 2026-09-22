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
 * @method string getId() 获取<p>客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li></p>
 * @method void setId(string $Id) 设置<p>客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li></p>
 * @method string getName() 获取<p>客户端认证规则的名称。</p>
 * @method void setName(string $Name) 设置<p>客户端认证规则的名称。</p>
 * @method string getEnabled() 获取<p>规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
 * @method void setEnabled(string $Enabled) 设置<p>规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
 * @method integer getPriority() 获取<p>规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。</p>
 * @method void setPriority(integer $Priority) 设置<p>规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。</p>
 * @method string getCondition() 获取<p>规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
 * @method void setCondition(string $Condition) 设置<p>规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
 * @method string getAttesterId() 获取<p>客户端认证选项 ID。</p>
 * @method void setAttesterId(string $AttesterId) 设置<p>客户端认证选项 ID。</p>
 * @method SecurityAction getInvalidAttestationAction() 获取<p>客户端认证未通过的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge、ManagedChallenge、InterstitialChallenge 和 InlineChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method void setInvalidAttestationAction(SecurityAction $InvalidAttestationAction) 设置<p>客户端认证未通过的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge、ManagedChallenge、InterstitialChallenge 和 InlineChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method array getDeviceProfiles() 获取<p>客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。</p>
 * @method void setDeviceProfiles(array $DeviceProfiles) 设置<p>客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。</p>
 * @method AccountProtectionSettings getAccountProtectionSettings() 获取<p>账号保护配置。</p>
 * @method void setAccountProtectionSettings(AccountProtectionSettings $AccountProtectionSettings) 设置<p>账号保护配置。</p>
 */
class ClientAttestationRule extends AbstractModel
{
    /**
     * @var string <p>客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li></p>
     */
    public $Id;

    /**
     * @var string <p>客户端认证规则的名称。</p>
     */
    public $Name;

    /**
     * @var string <p>规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
     */
    public $Enabled;

    /**
     * @var integer <p>规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。</p>
     */
    public $Priority;

    /**
     * @var string <p>规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
     */
    public $Condition;

    /**
     * @var string <p>客户端认证选项 ID。</p>
     */
    public $AttesterId;

    /**
     * @var SecurityAction <p>客户端认证未通过的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge、ManagedChallenge、InterstitialChallenge 和 InlineChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     */
    public $InvalidAttestationAction;

    /**
     * @var array <p>客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。</p>
     */
    public $DeviceProfiles;

    /**
     * @var AccountProtectionSettings <p>账号保护配置。</p>
     */
    public $AccountProtectionSettings;

    /**
     * @param string $Id <p>客户端认证规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：BotManagement 参数中，ClientAttestationRule 列表中未包含的已有规则将被删除。</li></p>
     * @param string $Name <p>客户端认证规则的名称。</p>
     * @param string $Enabled <p>规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
     * @param integer $Priority <p>规则的优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。</p>
     * @param string $Condition <p>规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
     * @param string $AttesterId <p>客户端认证选项 ID。</p>
     * @param SecurityAction $InvalidAttestationAction <p>客户端认证未通过的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge、ManagedChallenge、InterstitialChallenge 和 InlineChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     * @param array $DeviceProfiles <p>客户端设备配置。若 ClientAttestationRules 参数中，未指定 DeviceProfiles 参数值：保持已有客户端设备配置，不做修改。</p>
     * @param AccountProtectionSettings $AccountProtectionSettings <p>账号保护配置。</p>
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

        if (array_key_exists("InvalidAttestationAction",$param) and $param["InvalidAttestationAction"] !== null) {
            $this->InvalidAttestationAction = new SecurityAction();
            $this->InvalidAttestationAction->deserialize($param["InvalidAttestationAction"]);
        }

        if (array_key_exists("DeviceProfiles",$param) and $param["DeviceProfiles"] !== null) {
            $this->DeviceProfiles = [];
            foreach ($param["DeviceProfiles"] as $key => $value){
                $obj = new DeviceProfile();
                $obj->deserialize($value);
                array_push($this->DeviceProfiles, $obj);
            }
        }

        if (array_key_exists("AccountProtectionSettings",$param) and $param["AccountProtectionSettings"] !== null) {
            $this->AccountProtectionSettings = new AccountProtectionSettings();
            $this->AccountProtectionSettings->deserialize($param["AccountProtectionSettings"]);
        }
    }
}
