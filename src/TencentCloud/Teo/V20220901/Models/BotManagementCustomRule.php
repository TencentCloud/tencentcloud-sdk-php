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
 * Web 安全的 Bot 自定义规则。
 *
 * @method string getId() 获取Bot 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BotManagementCustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method void setId(string $Id) 设置Bot 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BotManagementCustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method string getName() 获取Bot 自定义规则的名称。
 * @method void setName(string $Name) 设置Bot 自定义规则的名称。
 * @method string getEnabled() 获取Bot 自定义规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置Bot 自定义规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method integer getPriority() 获取Bot 自定义规则的优先级，范围是 1 ~ 100，默认为 50。
 * @method void setPriority(integer $Priority) 设置Bot 自定义规则的优先级，范围是 1 ~ 100，默认为 50。
 * @method string getCondition() 获取Bot 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置Bot 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method array getAction() 获取Bot 自定义规则的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中 DenyActionParameters.Name 支持 Deny 和 ReturnCustomPage；</li><li>Challenge：挑战，其中 ChallengeActionParameters.Name 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至 URL。</li>
 * @method void setAction(array $Action) 设置Bot 自定义规则的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中 DenyActionParameters.Name 支持 Deny 和 ReturnCustomPage；</li><li>Challenge：挑战，其中 ChallengeActionParameters.Name 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至 URL。</li>
 */
class BotManagementCustomRule extends AbstractModel
{
    /**
     * @var string Bot 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BotManagementCustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     */
    public $Id;

    /**
     * @var string Bot 自定义规则的名称。
     */
    public $Name;

    /**
     * @var string Bot 自定义规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var integer Bot 自定义规则的优先级，范围是 1 ~ 100，默认为 50。
     */
    public $Priority;

    /**
     * @var string Bot 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var array Bot 自定义规则的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中 DenyActionParameters.Name 支持 Deny 和 ReturnCustomPage；</li><li>Challenge：挑战，其中 ChallengeActionParameters.Name 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至 URL。</li>
     */
    public $Action;

    /**
     * @param string $Id Bot 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BotManagementCustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     * @param string $Name Bot 自定义规则的名称。
     * @param string $Enabled Bot 自定义规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param integer $Priority Bot 自定义规则的优先级，范围是 1 ~ 100，默认为 50。
     * @param string $Condition Bot 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     * @param array $Action Bot 自定义规则的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中 DenyActionParameters.Name 支持 Deny 和 ReturnCustomPage；</li><li>Challenge：挑战，其中 ChallengeActionParameters.Name 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至 URL。</li>
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = [];
            foreach ($param["Action"] as $key => $value){
                $obj = new SecurityWeightedAction();
                $obj->deserialize($value);
                array_push($this->Action, $obj);
            }
        }
    }
}
