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
 * DDos主攻击事件
 *
 * @method integer getPolicyId() 获取ddos 策略组id。
 * @method void setPolicyId(integer $PolicyId) 设置ddos 策略组id。
 * @method integer getAttackMaxBandWidth() 获取攻击最大带宽。
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) 设置攻击最大带宽。
 * @method integer getAttackTime() 获取攻击请求时间，采用unix秒级时间戳。
 * @method void setAttackTime(integer $AttackTime) 设置攻击请求时间，采用unix秒级时间戳。
 */
class DDosMajorAttackEvent extends AbstractModel
{
    /**
     * @var integer ddos 策略组id。
     */
    public $PolicyId;

    /**
     * @var integer 攻击最大带宽。
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer 攻击请求时间，采用unix秒级时间戳。
     */
    public $AttackTime;

    /**
     * @param integer $PolicyId ddos 策略组id。
     * @param integer $AttackMaxBandWidth 攻击最大带宽。
     * @param integer $AttackTime 攻击请求时间，采用unix秒级时间戳。
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

        if (array_key_exists("AttackMaxBandWidth",$param) and $param["AttackMaxBandWidth"] !== null) {
            $this->AttackMaxBandWidth = $param["AttackMaxBandWidth"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
