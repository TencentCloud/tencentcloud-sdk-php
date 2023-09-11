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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主备切换日志
 *
 * @method string getEventId() 获取切换事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置切换事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchType() 获取切换模式 0-系统自动切换，1-手动切换
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchType(integer $SwitchType) 设置切换模式 0-系统自动切换，1-手动切换
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取切换开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置切换开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取切换结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置切换结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取机器故障导致自动切换
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置机器故障导致自动切换
注意：此字段可能返回 null，表示取不到有效值。
 */
class SwitchLog extends AbstractModel
{
    /**
     * @var string 切换事件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var integer 切换模式 0-系统自动切换，1-手动切换
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchType;

    /**
     * @var string 切换开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 切换结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 机器故障导致自动切换
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $EventId 切换事件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchType 切换模式 0-系统自动切换，1-手动切换
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 切换开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 切换结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 机器故障导致自动切换
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
