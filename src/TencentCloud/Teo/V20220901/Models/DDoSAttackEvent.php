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
 * DDoS攻击事件对象
 *
 * @method string getEventId() 获取<p>事件 ID。</p>
 * @method void setEventId(string $EventId) 设置<p>事件 ID。</p>
 * @method string getAttackType() 获取<p>攻击类型。</p>
 * @method void setAttackType(string $AttackType) 设置<p>攻击类型。</p>
 * @method integer getAttackStatus() 获取<p>攻击状态。</p><p>枚举值：</p><ul><li>0： 观察中</li><li>1： 攻击中</li><li>2： 攻击结束</li></ul>
 * @method void setAttackStatus(integer $AttackStatus) 设置<p>攻击状态。</p><p>枚举值：</p><ul><li>0： 观察中</li><li>1： 攻击中</li><li>2： 攻击结束</li></ul>
 * @method integer getAttackMaxBandWidth() 获取<p>攻击最大带宽，单位为 bps。</p>
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) 设置<p>攻击最大带宽，单位为 bps。</p>
 * @method integer getAttackPacketMaxRate() 获取<p>攻击包速率峰值，单位为 pps。</p>
 * @method void setAttackPacketMaxRate(integer $AttackPacketMaxRate) 设置<p>攻击包速率峰值，单位为 pps。</p>
 * @method integer getAttackStartTime() 获取<p>攻击开始时间戳。</p><p>单位：秒</p>
 * @method void setAttackStartTime(integer $AttackStartTime) 设置<p>攻击开始时间戳。</p><p>单位：秒</p>
 * @method integer getAttackEndTime() 获取<p>攻击结束时间戳。</p><p>单位：秒</p>
 * @method void setAttackEndTime(integer $AttackEndTime) 设置<p>攻击结束时间戳。</p><p>单位：秒</p>
 * @method integer getPolicyId() 获取<p>DDoS 策略组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置<p>DDoS 策略组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取<p>站点 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取<p>攻击事件所属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置<p>攻击事件所属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDDoSBlockData() 获取<p>封禁解封信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSBlockData(array $DDoSBlockData) 设置<p>封禁解封信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDDoSAttackDips() 获取<p>被 DDoS 攻击的目的 IP 列表。</p>
 * @method void setDDoSAttackDips(array $DDoSAttackDips) 设置<p>被 DDoS 攻击的目的 IP 列表。</p>
 */
class DDoSAttackEvent extends AbstractModel
{
    /**
     * @var string <p>事件 ID。</p>
     */
    public $EventId;

    /**
     * @var string <p>攻击类型。</p>
     */
    public $AttackType;

    /**
     * @var integer <p>攻击状态。</p><p>枚举值：</p><ul><li>0： 观察中</li><li>1： 攻击中</li><li>2： 攻击结束</li></ul>
     */
    public $AttackStatus;

    /**
     * @var integer <p>攻击最大带宽，单位为 bps。</p>
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer <p>攻击包速率峰值，单位为 pps。</p>
     */
    public $AttackPacketMaxRate;

    /**
     * @var integer <p>攻击开始时间戳。</p><p>单位：秒</p>
     */
    public $AttackStartTime;

    /**
     * @var integer <p>攻击结束时间戳。</p><p>单位：秒</p>
     */
    public $AttackEndTime;

    /**
     * @var integer <p>DDoS 策略组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string <p>站点 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string <p>攻击事件所属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var array <p>封禁解封信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSBlockData;

    /**
     * @var array <p>被 DDoS 攻击的目的 IP 列表。</p>
     */
    public $DDoSAttackDips;

    /**
     * @param string $EventId <p>事件 ID。</p>
     * @param string $AttackType <p>攻击类型。</p>
     * @param integer $AttackStatus <p>攻击状态。</p><p>枚举值：</p><ul><li>0： 观察中</li><li>1： 攻击中</li><li>2： 攻击结束</li></ul>
     * @param integer $AttackMaxBandWidth <p>攻击最大带宽，单位为 bps。</p>
     * @param integer $AttackPacketMaxRate <p>攻击包速率峰值，单位为 pps。</p>
     * @param integer $AttackStartTime <p>攻击开始时间戳。</p><p>单位：秒</p>
     * @param integer $AttackEndTime <p>攻击结束时间戳。</p><p>单位：秒</p>
     * @param integer $PolicyId <p>DDoS 策略组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId <p>站点 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area <p>攻击事件所属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DDoSBlockData <p>封禁解封信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DDoSAttackDips <p>被 DDoS 攻击的目的 IP 列表。</p>
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("DDoSBlockData",$param) and $param["DDoSBlockData"] !== null) {
            $this->DDoSBlockData = [];
            foreach ($param["DDoSBlockData"] as $key => $value){
                $obj = new DDoSBlockData();
                $obj->deserialize($value);
                array_push($this->DDoSBlockData, $obj);
            }
        }

        if (array_key_exists("DDoSAttackDips",$param) and $param["DDoSAttackDips"] !== null) {
            $this->DDoSAttackDips = $param["DDoSAttackDips"];
        }
    }
}
