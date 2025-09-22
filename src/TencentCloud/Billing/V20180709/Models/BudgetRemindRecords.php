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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算历史详情
 *
 * @method string getDateDesc() 获取预算周期
 * @method void setDateDesc(string $DateDesc) 设置预算周期
 * @method string getRealCost() 获取实际费用
 * @method void setRealCost(string $RealCost) 设置实际费用
 * @method string getBudgetQuota() 获取预算值额度
 * @method void setBudgetQuota(string $BudgetQuota) 设置预算值额度
 * @method string getAlarmType() 获取提醒类型。
枚举值:
BUDGET 预算提醒,
WAVE 波动提醒.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmType(string $AlarmType) 设置提醒类型。
枚举值:
BUDGET 预算提醒,
WAVE 波动提醒.
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessageContent() 获取消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageContent(string $MessageContent) 设置消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSendTime() 获取发送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendTime(integer $SendTime) 设置发送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetRemindRecords extends AbstractModel
{
    /**
     * @var string 预算周期
     */
    public $DateDesc;

    /**
     * @var string 实际费用
     */
    public $RealCost;

    /**
     * @var string 预算值额度
     */
    public $BudgetQuota;

    /**
     * @var string 提醒类型。
枚举值:
BUDGET 预算提醒,
WAVE 波动提醒.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmType;

    /**
     * @var string 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageContent;

    /**
     * @var integer 发送时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $DateDesc 预算周期
     * @param string $RealCost 实际费用
     * @param string $BudgetQuota 预算值额度
     * @param string $AlarmType 提醒类型。
枚举值:
BUDGET 预算提醒,
WAVE 波动提醒.
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MessageContent 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SendTime 发送时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("DateDesc",$param) and $param["DateDesc"] !== null) {
            $this->DateDesc = $param["DateDesc"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("MessageContent",$param) and $param["MessageContent"] !== null) {
            $this->MessageContent = $param["MessageContent"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
