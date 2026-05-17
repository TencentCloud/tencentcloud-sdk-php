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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos风险告警信息
 *
 * @method integer getPolicyType() 获取策略类型枚举值
 * @method void setPolicyType(integer $PolicyType) 设置策略类型枚举值
 * @method string getPolicyTypeName() 获取策略名
 * @method void setPolicyTypeName(string $PolicyTypeName) 设置策略名
 * @method integer getPolicyCount() 获取策略类型对应的策略数量
 * @method void setPolicyCount(integer $PolicyCount) 设置策略类型对应的策略数量
 */
class CosRiskAlarmInfo extends AbstractModel
{
    /**
     * @var integer 策略类型枚举值
     */
    public $PolicyType;

    /**
     * @var string 策略名
     */
    public $PolicyTypeName;

    /**
     * @var integer 策略类型对应的策略数量
     */
    public $PolicyCount;

    /**
     * @param integer $PolicyType 策略类型枚举值
     * @param string $PolicyTypeName 策略名
     * @param integer $PolicyCount 策略类型对应的策略数量
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyTypeName",$param) and $param["PolicyTypeName"] !== null) {
            $this->PolicyTypeName = $param["PolicyTypeName"];
        }

        if (array_key_exists("PolicyCount",$param) and $param["PolicyCount"] !== null) {
            $this->PolicyCount = $param["PolicyCount"];
        }
    }
}
