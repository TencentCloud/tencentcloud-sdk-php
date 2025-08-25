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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警接收组
 *
 * @method integer getAlarmRecipientType() 获取告警接收人类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) 设置告警接收人类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipientId() 获取告警接收人ID，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人ID，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipientName() 获取告警接收人名称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientName(string $AlarmRecipientName) 设置告警接收人名称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmWay() 获取告警方式，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmWay(string $AlarmWay) 设置告警方式，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuietPeriods() 获取免打扰时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuietPeriods(array $QuietPeriods) 设置免打扰时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmMessageRule() 获取告警渠道规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmMessageRule(string $AlarmMessageRule) 设置告警渠道规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmReceiverGroup extends AbstractModel
{
    /**
     * @var integer 告警接收人类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientType;

    /**
     * @var string 告警接收人ID，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientId;

    /**
     * @var string 告警接收人名称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientName;

    /**
     * @var string 告警方式，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmWay;

    /**
     * @var array 免打扰时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuietPeriods;

    /**
     * @var string 告警渠道规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmMessageRule;

    /**
     * @param integer $AlarmRecipientType 告警接收人类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipientId 告警接收人ID，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipientName 告警接收人名称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmWay 告警方式，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuietPeriods 免打扰时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmMessageRule 告警渠道规则
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
        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("QuietPeriods",$param) and $param["QuietPeriods"] !== null) {
            $this->QuietPeriods = [];
            foreach ($param["QuietPeriods"] as $key => $value){
                $obj = new QuietPeriod();
                $obj->deserialize($value);
                array_push($this->QuietPeriods, $obj);
            }
        }

        if (array_key_exists("AlarmMessageRule",$param) and $param["AlarmMessageRule"] !== null) {
            $this->AlarmMessageRule = $param["AlarmMessageRule"];
        }
    }
}
