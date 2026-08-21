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
 * 等级扣分明细
 *
 * @method string getSeverity() 获取风险等级
枚举值：
critical：严重
high：高危
medium：中危
low：低危
 * @method void setSeverity(string $Severity) 设置风险等级
枚举值：
critical：严重
high：高危
medium：中危
low：低危
 * @method string getSeverityName() 获取等级中文名
 * @method void setSeverityName(string $SeverityName) 设置等级中文名
 * @method integer getRiskCount() 获取该等级风险数量
 * @method void setRiskCount(integer $RiskCount) 设置该等级风险数量
 * @method integer getDeductPerItem() 获取单次扣分
 * @method void setDeductPerItem(integer $DeductPerItem) 设置单次扣分
 * @method integer getMaxDeductScore() 获取等级扣分上限
 * @method void setMaxDeductScore(integer $MaxDeductScore) 设置等级扣分上限
 * @method integer getDeductScore() 获取实际扣分
 * @method void setDeductScore(integer $DeductScore) 设置实际扣分
 */
class SeverityItem extends AbstractModel
{
    /**
     * @var string 风险等级
枚举值：
critical：严重
high：高危
medium：中危
low：低危
     */
    public $Severity;

    /**
     * @var string 等级中文名
     */
    public $SeverityName;

    /**
     * @var integer 该等级风险数量
     */
    public $RiskCount;

    /**
     * @var integer 单次扣分
     */
    public $DeductPerItem;

    /**
     * @var integer 等级扣分上限
     */
    public $MaxDeductScore;

    /**
     * @var integer 实际扣分
     */
    public $DeductScore;

    /**
     * @param string $Severity 风险等级
枚举值：
critical：严重
high：高危
medium：中危
low：低危
     * @param string $SeverityName 等级中文名
     * @param integer $RiskCount 该等级风险数量
     * @param integer $DeductPerItem 单次扣分
     * @param integer $MaxDeductScore 等级扣分上限
     * @param integer $DeductScore 实际扣分
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
        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("SeverityName",$param) and $param["SeverityName"] !== null) {
            $this->SeverityName = $param["SeverityName"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("DeductPerItem",$param) and $param["DeductPerItem"] !== null) {
            $this->DeductPerItem = $param["DeductPerItem"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }
    }
}
