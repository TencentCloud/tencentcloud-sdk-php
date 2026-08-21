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
 * 修改规则项
 *
 * @method string getRuleType() 获取规则类型
枚举值：
dimension：维度级规则
category：子项级规则
severity：等级级规则
 * @method void setRuleType(string $RuleType) 设置规则类型
枚举值：
dimension：维度级规则
category：子项级规则
severity：等级级规则
 * @method string getDimensionId() 获取维度ID
 * @method void setDimensionId(string $DimensionId) 设置维度ID
 * @method string getCategoryId() 获取子项ID，category和severity级别必填
 * @method void setCategoryId(string $CategoryId) 设置子项ID，category和severity级别必填
 * @method string getSeverity() 获取等级，severity级别必填
枚举值：
critical：严重
high：高危
medium：中危
low：低危
 * @method void setSeverity(string $Severity) 设置等级，severity级别必填
枚举值：
critical：严重
high：高危
medium：中危
low：低危
 * @method integer getMaxDeductScore() 获取扣分上限
 * @method void setMaxDeductScore(integer $MaxDeductScore) 设置扣分上限
 * @method integer getDeductPerItem() 获取单次扣分
 * @method void setDeductPerItem(integer $DeductPerItem) 设置单次扣分
 */
class ModifyRuleItem extends AbstractModel
{
    /**
     * @var string 规则类型
枚举值：
dimension：维度级规则
category：子项级规则
severity：等级级规则
     */
    public $RuleType;

    /**
     * @var string 维度ID
     */
    public $DimensionId;

    /**
     * @var string 子项ID，category和severity级别必填
     */
    public $CategoryId;

    /**
     * @var string 等级，severity级别必填
枚举值：
critical：严重
high：高危
medium：中危
low：低危
     */
    public $Severity;

    /**
     * @var integer 扣分上限
     */
    public $MaxDeductScore;

    /**
     * @var integer 单次扣分
     */
    public $DeductPerItem;

    /**
     * @param string $RuleType 规则类型
枚举值：
dimension：维度级规则
category：子项级规则
severity：等级级规则
     * @param string $DimensionId 维度ID
     * @param string $CategoryId 子项ID，category和severity级别必填
     * @param string $Severity 等级，severity级别必填
枚举值：
critical：严重
high：高危
medium：中危
low：低危
     * @param integer $MaxDeductScore 扣分上限
     * @param integer $DeductPerItem 单次扣分
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductPerItem",$param) and $param["DeductPerItem"] !== null) {
            $this->DeductPerItem = $param["DeductPerItem"];
        }
    }
}
