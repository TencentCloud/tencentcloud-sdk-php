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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线集成对账告警规则
 *
 * @method string getRuleType() 获取离线告警规则类型
reconciliationFailure： 离线对账失败告警
reconciliationOvertime： 离线对账任务运行超时告警(需配置超时时间)
reconciliationMismatch： 离线对账不一致条数告警(需配置不一致条数阀值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置离线告警规则类型
reconciliationFailure： 离线对账失败告警
reconciliationOvertime： 离线对账任务运行超时告警(需配置超时时间)
reconciliationMismatch： 离线对账不一致条数告警(需配置不一致条数阀值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMismatchCount() 获取对账不一致条数阀值， RuleType=reconciliationMismatch对账不一致条数类型，需要配置该字段，无默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMismatchCount(integer $MismatchCount) 设置对账不一致条数阀值， RuleType=reconciliationMismatch对账不一致条数类型，需要配置该字段，无默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHour() 获取对账任务运行超时阀值： 小时， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHour(integer $Hour) 设置对账任务运行超时阀值： 小时， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMin() 获取对账任务运行超时阀值： 分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(integer $Min) 设置对账任务运行超时阀值： 分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReconciliationStrategyInfo extends AbstractModel
{
    /**
     * @var string 离线告警规则类型
reconciliationFailure： 离线对账失败告警
reconciliationOvertime： 离线对账任务运行超时告警(需配置超时时间)
reconciliationMismatch： 离线对账不一致条数告警(需配置不一致条数阀值)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var integer 对账不一致条数阀值， RuleType=reconciliationMismatch对账不一致条数类型，需要配置该字段，无默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MismatchCount;

    /**
     * @var integer 对账任务运行超时阀值： 小时， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hour;

    /**
     * @var integer 对账任务运行超时阀值： 分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @param string $RuleType 离线告警规则类型
reconciliationFailure： 离线对账失败告警
reconciliationOvertime： 离线对账任务运行超时告警(需配置超时时间)
reconciliationMismatch： 离线对账不一致条数告警(需配置不一致条数阀值)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MismatchCount 对账不一致条数阀值， RuleType=reconciliationMismatch对账不一致条数类型，需要配置该字段，无默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Hour 对账任务运行超时阀值： 小时， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Min 对账任务运行超时阀值： 分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MismatchCount",$param) and $param["MismatchCount"] !== null) {
            $this->MismatchCount = $param["MismatchCount"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }
    }
}
