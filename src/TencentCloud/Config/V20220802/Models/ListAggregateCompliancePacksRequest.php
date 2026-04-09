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
 * ListAggregateCompliancePacks请求参数结构体
 *
 * @method integer getLimit() 获取<p>数量</p>
 * @method void setLimit(integer $Limit) 设置<p>数量</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method string getCompliancePackName() 获取<p>合规包名称</p>
 * @method void setCompliancePackName(string $CompliancePackName) 设置<p>合规包名称</p>
 * @method array getRiskLevel() 获取<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method void setRiskLevel(array $RiskLevel) 设置<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method string getStatus() 获取<p>合规包状态 ACTIVE、NO_ACTIVE</p>
 * @method void setStatus(string $Status) 设置<p>合规包状态 ACTIVE、NO_ACTIVE</p>
 * @method array getComplianceResult() 获取<p>评估状态合规： &#39;COMPLIANT&#39;<br>不合规： &#39;NON_COMPLIANT&#39;</p>
 * @method void setComplianceResult(array $ComplianceResult) 设置<p>评估状态合规： &#39;COMPLIANT&#39;<br>不合规： &#39;NON_COMPLIANT&#39;</p>
 * @method string getOrderType() 获取<p>排序类型, 倒序：desc，顺序：asc</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序类型, 倒序：desc，顺序：asc</p>
 * @method string getIncludeCompliancePackRuleResult() 获取<p>包含合规包结果定义</p><p>枚举值：</p><ul><li>NO： 不包含</li></ul><p>默认值：空</p><p>此字段为新增，因此不传或者传了YES都会默认返回包含合规结果数据，其他枚举值后面视情况丰富</p>
 * @method void setIncludeCompliancePackRuleResult(string $IncludeCompliancePackRuleResult) 设置<p>包含合规包结果定义</p><p>枚举值：</p><ul><li>NO： 不包含</li></ul><p>默认值：空</p><p>此字段为新增，因此不传或者传了YES都会默认返回包含合规结果数据，其他枚举值后面视情况丰富</p>
 */
class ListAggregateCompliancePacksRequest extends AbstractModel
{
    /**
     * @var integer <p>数量</p>
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
     * @var string <p>合规包名称</p>
     */
    public $CompliancePackName;

    /**
     * @var array <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>合规包状态 ACTIVE、NO_ACTIVE</p>
     */
    public $Status;

    /**
     * @var array <p>评估状态合规： &#39;COMPLIANT&#39;<br>不合规： &#39;NON_COMPLIANT&#39;</p>
     */
    public $ComplianceResult;

    /**
     * @var string <p>排序类型, 倒序：desc，顺序：asc</p>
     */
    public $OrderType;

    /**
     * @var string <p>包含合规包结果定义</p><p>枚举值：</p><ul><li>NO： 不包含</li></ul><p>默认值：空</p><p>此字段为新增，因此不传或者传了YES都会默认返回包含合规结果数据，其他枚举值后面视情况丰富</p>
     */
    public $IncludeCompliancePackRuleResult;

    /**
     * @param integer $Limit <p>数量</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param string $CompliancePackName <p>合规包名称</p>
     * @param array $RiskLevel <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     * @param string $Status <p>合规包状态 ACTIVE、NO_ACTIVE</p>
     * @param array $ComplianceResult <p>评估状态合规： &#39;COMPLIANT&#39;<br>不合规： &#39;NON_COMPLIANT&#39;</p>
     * @param string $OrderType <p>排序类型, 倒序：desc，顺序：asc</p>
     * @param string $IncludeCompliancePackRuleResult <p>包含合规包结果定义</p><p>枚举值：</p><ul><li>NO： 不包含</li></ul><p>默认值：空</p><p>此字段为新增，因此不传或者传了YES都会默认返回包含合规结果数据，其他枚举值后面视情况丰富</p>
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

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("IncludeCompliancePackRuleResult",$param) and $param["IncludeCompliancePackRuleResult"] !== null) {
            $this->IncludeCompliancePackRuleResult = $param["IncludeCompliancePackRuleResult"];
        }
    }
}
