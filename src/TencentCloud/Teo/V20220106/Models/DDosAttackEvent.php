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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDos攻击事件对象
 *
 * @method integer getPolicyId() 获取ddos 策略组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置ddos 策略组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackType() 获取攻击类型(对应交互事件名称)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackType(string $AttackType) 设置攻击类型(对应交互事件名称)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackStatus() 获取攻击状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackStatus(integer $AttackStatus) 设置攻击状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackMaxBandWidth() 获取攻击最大带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) 设置攻击最大带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackPacketMaxRate() 获取攻击包速率峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackPacketMaxRate(integer $AttackPacketMaxRate) 设置攻击包速率峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackStartTime() 获取攻击开始时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackStartTime(integer $AttackStartTime) 设置攻击开始时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackEndTime() 获取攻击结束时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackEndTime(integer $AttackEndTime) 设置攻击结束时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取站点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置站点id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDosAttackEvent extends AbstractModel
{
    /**
     * @var integer ddos 策略组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 攻击类型(对应交互事件名称)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackType;

    /**
     * @var integer 攻击状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackStatus;

    /**
     * @var integer 攻击最大带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer 攻击包速率峰值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackPacketMaxRate;

    /**
     * @var integer 攻击开始时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackStartTime;

    /**
     * @var integer 攻击结束时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackEndTime;

    /**
     * @var string 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string 站点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @param integer $PolicyId ddos 策略组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackType 攻击类型(对应交互事件名称)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackStatus 攻击状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackMaxBandWidth 攻击最大带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackPacketMaxRate 攻击包速率峰值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackStartTime 攻击开始时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackEndTime 攻击结束时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId 站点id
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("AttackMaxBandWidth",$param) and $param["AttackMaxBandWidth"] !== null) {
            $this->AttackMaxBandWidth = $param["AttackMaxBandWidth"];
        }

        if (array_key_exists("AttackPacketMaxRate",$param) and $param["AttackPacketMaxRate"] !== null) {
            $this->AttackPacketMaxRate = $param["AttackPacketMaxRate"];
        }

        if (array_key_exists("AttackStartTime",$param) and $param["AttackStartTime"] !== null) {
            $this->AttackStartTime = $param["AttackStartTime"];
        }

        if (array_key_exists("AttackEndTime",$param) and $param["AttackEndTime"] !== null) {
            $this->AttackEndTime = $param["AttackEndTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
