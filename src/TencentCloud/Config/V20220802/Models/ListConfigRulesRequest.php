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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListConfigRules请求参数结构体
 *
 * @method integer getLimit() 获取每页数量。
取值范围：1~200
 * @method void setLimit(integer $Limit) 设置每页数量。
取值范围：1~200
 * @method integer getOffset() 获取偏移量。
取值范围：最小值为0
 * @method void setOffset(integer $Offset) 设置偏移量。
取值范围：最小值为0
 * @method string getOrderType() 获取排序类型(规则名称)。
倒序：desc，
顺序：asc
 * @method void setOrderType(string $OrderType) 设置排序类型(规则名称)。
倒序：desc，
顺序：asc
 * @method array getRiskLevel() 获取风险等级。
1：高风险，
2：中风险，
3：低风险。
 * @method void setRiskLevel(array $RiskLevel) 设置风险等级。
1：高风险，
2：中风险，
3：低风险。
 * @method string getState() 获取规则状态。
ACTIVE：启用
UN_ACTIVE：停用

 * @method void setState(string $State) 设置规则状态。
ACTIVE：启用
UN_ACTIVE：停用

 * @method array getComplianceResult() 获取评估结果。
COMPLIANT：合规
NON_COMPLIANT：不合规
 * @method void setComplianceResult(array $ComplianceResult) 设置评估结果。
COMPLIANT：合规
NON_COMPLIANT：不合规
 * @method string getRuleName() 获取规则名
 * @method void setRuleName(string $RuleName) 设置规则名
 */
class ListConfigRulesRequest extends AbstractModel
{
    /**
     * @var integer 每页数量。
取值范围：1~200
     */
    public $Limit;

    /**
     * @var integer 偏移量。
取值范围：最小值为0
     */
    public $Offset;

    /**
     * @var string 排序类型(规则名称)。
倒序：desc，
顺序：asc
     */
    public $OrderType;

    /**
     * @var array 风险等级。
1：高风险，
2：中风险，
3：低风险。
     */
    public $RiskLevel;

    /**
     * @var string 规则状态。
ACTIVE：启用
UN_ACTIVE：停用

     */
    public $State;

    /**
     * @var array 评估结果。
COMPLIANT：合规
NON_COMPLIANT：不合规
     */
    public $ComplianceResult;

    /**
     * @var string 规则名
     */
    public $RuleName;

    /**
     * @param integer $Limit 每页数量。
取值范围：1~200
     * @param integer $Offset 偏移量。
取值范围：最小值为0
     * @param string $OrderType 排序类型(规则名称)。
倒序：desc，
顺序：asc
     * @param array $RiskLevel 风险等级。
1：高风险，
2：中风险，
3：低风险。
     * @param string $State 规则状态。
ACTIVE：启用
UN_ACTIVE：停用

     * @param array $ComplianceResult 评估结果。
COMPLIANT：合规
NON_COMPLIANT：不合规
     * @param string $RuleName 规则名
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
