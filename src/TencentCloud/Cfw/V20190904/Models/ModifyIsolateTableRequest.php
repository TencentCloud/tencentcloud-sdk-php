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
 * ModifyIsolateTable请求参数结构体
 *
 * @method string getButtonAction() 获取<p>操作动作，仅接受精确值 edit 或 delete。ButtonAction 为 edit 时修改该资产所有匹配隔离记录的有效期，需传 StartTime 和 EndTime；ButtonAction 为 delete 时解除该资产的全部匹配隔离，StartTime 和 EndTime 可省略。</p>
 * @method void setButtonAction(string $ButtonAction) 设置<p>操作动作，仅接受精确值 edit 或 delete。ButtonAction 为 edit 时修改该资产所有匹配隔离记录的有效期，需传 StartTime 和 EndTime；ButtonAction 为 delete 时解除该资产的全部匹配隔离，StartTime 和 EndTime 可省略。</p>
 * @method string getInstanceID() 获取<p>必填的资产实例 ID。调用 DescribeCfwRules，传 RuleType=intrusion_prevention、ListType=isolate 和目标 InstanceId，并使用完全匹配的 rules[].instance_id。edit 或 delete 作用于该实例的全部隔离记录。</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>必填的资产实例 ID。调用 DescribeCfwRules，传 RuleType=intrusion_prevention、ListType=isolate 和目标 InstanceId，并使用完全匹配的 rules[].instance_id。edit 或 delete 作用于该实例的全部隔离记录。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method string getEndTime() 获取<p>隔离结束时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得早于 StartTime；除永久隔离值 3000-01-01 00:00:00 外，必须晚于当前时间。ButtonAction 为 delete 时可省略。</p>
 * @method void setEndTime(string $EndTime) 设置<p>隔离结束时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得早于 StartTime；除永久隔离值 3000-01-01 00:00:00 外，必须晚于当前时间。ButtonAction 为 delete 时可省略。</p>
 * @method string getStartTime() 获取<p>隔离起始时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得晚于 EndTime；该时间将应用于该实例的全部匹配隔离记录。ButtonAction 为 delete 时可省略。</p>
 * @method void setStartTime(string $StartTime) 设置<p>隔离起始时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得晚于 EndTime；该时间将应用于该实例的全部匹配隔离记录。ButtonAction 为 delete 时可省略。</p>
 */
class ModifyIsolateTableRequest extends AbstractModel
{
    /**
     * @var string <p>操作动作，仅接受精确值 edit 或 delete。ButtonAction 为 edit 时修改该资产所有匹配隔离记录的有效期，需传 StartTime 和 EndTime；ButtonAction 为 delete 时解除该资产的全部匹配隔离，StartTime 和 EndTime 可省略。</p>
     */
    public $ButtonAction;

    /**
     * @var string <p>必填的资产实例 ID。调用 DescribeCfwRules，传 RuleType=intrusion_prevention、ListType=isolate 和目标 InstanceId，并使用完全匹配的 rules[].instance_id。edit 或 delete 作用于该实例的全部隔离记录。</p>
     */
    public $InstanceID;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var string <p>隔离结束时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得早于 StartTime；除永久隔离值 3000-01-01 00:00:00 外，必须晚于当前时间。ButtonAction 为 delete 时可省略。</p>
     */
    public $EndTime;

    /**
     * @var string <p>隔离起始时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得晚于 EndTime；该时间将应用于该实例的全部匹配隔离记录。ButtonAction 为 delete 时可省略。</p>
     */
    public $StartTime;

    /**
     * @param string $ButtonAction <p>操作动作，仅接受精确值 edit 或 delete。ButtonAction 为 edit 时修改该资产所有匹配隔离记录的有效期，需传 StartTime 和 EndTime；ButtonAction 为 delete 时解除该资产的全部匹配隔离，StartTime 和 EndTime 可省略。</p>
     * @param string $InstanceID <p>必填的资产实例 ID。调用 DescribeCfwRules，传 RuleType=intrusion_prevention、ListType=isolate 和目标 InstanceId，并使用完全匹配的 rules[].instance_id。edit 或 delete 作用于该实例的全部隔离记录。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param string $EndTime <p>隔离结束时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得早于 StartTime；除永久隔离值 3000-01-01 00:00:00 外，必须晚于当前时间。ButtonAction 为 delete 时可省略。</p>
     * @param string $StartTime <p>隔离起始时间。ButtonAction 为 edit 时必填，格式为 YYYY-MM-DD HH:MM:SS，且不得晚于 EndTime；该时间将应用于该实例的全部匹配隔离记录。ButtonAction 为 delete 时可省略。</p>
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
        if (array_key_exists("ButtonAction",$param) and $param["ButtonAction"] !== null) {
            $this->ButtonAction = $param["ButtonAction"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
