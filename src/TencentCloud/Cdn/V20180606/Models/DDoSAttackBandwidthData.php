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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ddos攻击带宽峰值数据
 *
 * @method string getAttackType() 获取ddos攻击类型，当值为all的时候表示所有的攻击类型的总带宽峰值
 * @method void setAttackType(string $AttackType) 设置ddos攻击类型，当值为all的时候表示所有的攻击类型的总带宽峰值
 * @method float getValue() 获取ddos攻击带宽大小
 * @method void setValue(float $Value) 设置ddos攻击带宽大小
 * @method string getTime() 获取攻击时间点
 * @method void setTime(string $Time) 设置攻击时间点
 */
class DDoSAttackBandwidthData extends AbstractModel
{
    /**
     * @var string ddos攻击类型，当值为all的时候表示所有的攻击类型的总带宽峰值
     */
    public $AttackType;

    /**
     * @var float ddos攻击带宽大小
     */
    public $Value;

    /**
     * @var string 攻击时间点
     */
    public $Time;

    /**
     * @param string $AttackType ddos攻击类型，当值为all的时候表示所有的攻击类型的总带宽峰值
     * @param float $Value ddos攻击带宽大小
     * @param string $Time 攻击时间点
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
        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
