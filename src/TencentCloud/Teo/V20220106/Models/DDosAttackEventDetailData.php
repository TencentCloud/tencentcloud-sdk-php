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
 * ddos 攻击事件的详情
 *
 * @method integer getAttackStatus() 获取攻击状态，取值有：
<li>1 ：观察中 ；</li>
<li>2 ：攻击开始 ；</li>
<li>3 ：攻击结束 。</li>
 * @method void setAttackStatus(integer $AttackStatus) 设置攻击状态，取值有：
<li>1 ：观察中 ；</li>
<li>2 ：攻击开始 ；</li>
<li>3 ：攻击结束 。</li>
 * @method string getAttackType() 获取攻击类型。
 * @method void setAttackType(string $AttackType) 设置攻击类型。
 * @method integer getEndTime() 获取结束时间。
 * @method void setEndTime(integer $EndTime) 设置结束时间。
 * @method integer getStartTime() 获取开始时间。
 * @method void setStartTime(integer $StartTime) 设置开始时间。
 * @method integer getMaxBandWidth() 获取最大带宽。
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置最大带宽。
 * @method integer getPacketMaxRate() 获取最大包速率。
 * @method void setPacketMaxRate(integer $PacketMaxRate) 设置最大包速率。
 * @method string getEventId() 获取事件Id。
 * @method void setEventId(string $EventId) 设置事件Id。
 * @method integer getPolicyId() 获取ddos 策略组id。
 * @method void setPolicyId(integer $PolicyId) 设置ddos 策略组id。
 */
class DDosAttackEventDetailData extends AbstractModel
{
    /**
     * @var integer 攻击状态，取值有：
<li>1 ：观察中 ；</li>
<li>2 ：攻击开始 ；</li>
<li>3 ：攻击结束 。</li>
     */
    public $AttackStatus;

    /**
     * @var string 攻击类型。
     */
    public $AttackType;

    /**
     * @var integer 结束时间。
     */
    public $EndTime;

    /**
     * @var integer 开始时间。
     */
    public $StartTime;

    /**
     * @var integer 最大带宽。
     */
    public $MaxBandWidth;

    /**
     * @var integer 最大包速率。
     */
    public $PacketMaxRate;

    /**
     * @var string 事件Id。
     */
    public $EventId;

    /**
     * @var integer ddos 策略组id。
     */
    public $PolicyId;

    /**
     * @param integer $AttackStatus 攻击状态，取值有：
<li>1 ：观察中 ；</li>
<li>2 ：攻击开始 ；</li>
<li>3 ：攻击结束 。</li>
     * @param string $AttackType 攻击类型。
     * @param integer $EndTime 结束时间。
     * @param integer $StartTime 开始时间。
     * @param integer $MaxBandWidth 最大带宽。
     * @param integer $PacketMaxRate 最大包速率。
     * @param string $EventId 事件Id。
     * @param integer $PolicyId ddos 策略组id。
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
        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("PacketMaxRate",$param) and $param["PacketMaxRate"] !== null) {
            $this->PacketMaxRate = $param["PacketMaxRate"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
