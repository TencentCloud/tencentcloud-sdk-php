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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例购买付费参数
 *
 * @method string getInstanceChargeType() 获取实例付费类型: PREPAID(包年包月), POSTPAID_BY_HOUR(按量付费)
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例付费类型: PREPAID(包年包月), POSTPAID_BY_HOUR(按量付费)
 * @method integer getInstanceChargePeriod() 获取购买时长: 包年包月时需要填写, 按量计费无需填写
 * @method void setInstanceChargePeriod(integer $InstanceChargePeriod) 设置购买时长: 包年包月时需要填写, 按量计费无需填写
 */
class InstanceChargeParam extends AbstractModel
{
    /**
     * @var string 实例付费类型: PREPAID(包年包月), POSTPAID_BY_HOUR(按量付费)
     */
    public $InstanceChargeType;

    /**
     * @var integer 购买时长: 包年包月时需要填写, 按量计费无需填写
     */
    public $InstanceChargePeriod;

    /**
     * @param string $InstanceChargeType 实例付费类型: PREPAID(包年包月), POSTPAID_BY_HOUR(按量付费)
     * @param integer $InstanceChargePeriod 购买时长: 包年包月时需要填写, 按量计费无需填写
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePeriod",$param) and $param["InstanceChargePeriod"] !== null) {
            $this->InstanceChargePeriod = $param["InstanceChargePeriod"];
        }
    }
}
