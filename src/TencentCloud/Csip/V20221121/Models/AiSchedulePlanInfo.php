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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未来触发计划条目
 *
 * @method string getTriggerId() 获取触发器 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置触发器 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFireTime() 获取预计触发时间，Unix 毫秒时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFireTime(integer $FireTime) 设置预计触发时间，Unix 毫秒时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerType() 获取触发器类型。取值：1（Cron 表达式）、2（固定时间）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(integer $TriggerType) 设置触发器类型。取值：1（Cron 表达式）、2（固定时间）。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiSchedulePlanInfo extends AbstractModel
{
    /**
     * @var string 触发器 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var integer 预计触发时间，Unix 毫秒时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FireTime;

    /**
     * @var integer 触发器类型。取值：1（Cron 表达式）、2（固定时间）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @param string $TriggerId 触发器 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FireTime 预计触发时间，Unix 毫秒时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerType 触发器类型。取值：1（Cron 表达式）、2（固定时间）。
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
        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("FireTime",$param) and $param["FireTime"] !== null) {
            $this->FireTime = $param["FireTime"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }
    }
}
