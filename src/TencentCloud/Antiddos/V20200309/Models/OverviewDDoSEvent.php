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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护概览DDoS攻击事件
 *
 * @method string getId() 获取事件Id
 * @method void setId(string $Id) 设置事件Id
 * @method string getVip() 获取ip
 * @method void setVip(string $Vip) 设置ip
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getAttackType() 获取攻击类型
 * @method void setAttackType(string $AttackType) 设置攻击类型
 * @method integer getAttackStatus() 获取攻击状态，0：攻击中；1：攻击结束
 * @method void setAttackStatus(integer $AttackStatus) 设置攻击状态，0：攻击中；1：攻击结束
 * @method integer getMbps() 获取攻击流量，单位Mbps
 * @method void setMbps(integer $Mbps) 设置攻击流量，单位Mbps
 * @method integer getPps() 获取攻击包量，单位pps
 * @method void setPps(integer $Pps) 设置攻击包量，单位pps
 * @method string getBusiness() 获取业务类型，bgp-multip：高防包；bgpip：高防ip；basic：基础防护
 * @method void setBusiness(string $Business) 设置业务类型，bgp-multip：高防包；bgpip：高防ip；basic：基础防护
 * @method string getInstanceId() 获取高防实例Id
 * @method void setInstanceId(string $InstanceId) 设置高防实例Id
 * @method string getInstanceName() 获取高防实例名称
 * @method void setInstanceName(string $InstanceName) 设置高防实例名称
 */
class OverviewDDoSEvent extends AbstractModel
{
    /**
     * @var string 事件Id
     */
    public $Id;

    /**
     * @var string ip
     */
    public $Vip;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 攻击类型
     */
    public $AttackType;

    /**
     * @var integer 攻击状态，0：攻击中；1：攻击结束
     */
    public $AttackStatus;

    /**
     * @var integer 攻击流量，单位Mbps
     */
    public $Mbps;

    /**
     * @var integer 攻击包量，单位pps
     */
    public $Pps;

    /**
     * @var string 业务类型，bgp-multip：高防包；bgpip：高防ip；basic：基础防护
     */
    public $Business;

    /**
     * @var string 高防实例Id
     */
    public $InstanceId;

    /**
     * @var string 高防实例名称
     */
    public $InstanceName;

    /**
     * @param string $Id 事件Id
     * @param string $Vip ip
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $AttackType 攻击类型
     * @param integer $AttackStatus 攻击状态，0：攻击中；1：攻击结束
     * @param integer $Mbps 攻击流量，单位Mbps
     * @param integer $Pps 攻击包量，单位pps
     * @param string $Business 业务类型，bgp-multip：高防包；bgpip：高防ip；basic：基础防护
     * @param string $InstanceId 高防实例Id
     * @param string $InstanceName 高防实例名称
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
