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
 * ListAggregateConfigRules请求参数结构体
 *
 * @method integer getLimit() 获取<p>每页限制</p>
 * @method void setLimit(integer $Limit) 设置<p>每页限制</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method string getOrderType() 获取<p>排序类型, 倒序：desc，顺序：asc</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序类型, 倒序：desc，顺序：asc</p>
 * @method array getRiskLevel() 获取<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method void setRiskLevel(array $RiskLevel) 设置<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method string getState() 获取<p>规则状态</p>
 * @method void setState(string $State) 设置<p>规则状态</p>
 * @method array getComplianceResult() 获取<p>评估结果</p>
 * @method void setComplianceResult(array $ComplianceResult) 设置<p>评估结果</p>
 * @method string getRuleName() 获取<p>规则名</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名</p>
 * @method integer getRuleOwnerId() 获取<p>规则所属账号ID</p>
 * @method void setRuleOwnerId(integer $RuleOwnerId) 设置<p>规则所属账号ID</p>
 */
class ListAggregateConfigRulesRequest extends AbstractModel
{
    /**
     * @var integer <p>每页限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>账号组ID</p>
     */
    public $AccountGroupId;

    /**
     * @var string <p>排序类型, 倒序：desc，顺序：asc</p>
     */
    public $OrderType;

    /**
     * @var array <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>规则状态</p>
     */
    public $State;

    /**
     * @var array <p>评估结果</p>
     */
    public $ComplianceResult;

    /**
     * @var string <p>规则名</p>
     */
    public $RuleName;

    /**
     * @var integer <p>规则所属账号ID</p>
     */
    public $RuleOwnerId;

    /**
     * @param integer $Limit <p>每页限制</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param string $OrderType <p>排序类型, 倒序：desc，顺序：asc</p>
     * @param array $RiskLevel <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     * @param string $State <p>规则状态</p>
     * @param array $ComplianceResult <p>评估结果</p>
     * @param string $RuleName <p>规则名</p>
     * @param integer $RuleOwnerId <p>规则所属账号ID</p>
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

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
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

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }
    }
}
