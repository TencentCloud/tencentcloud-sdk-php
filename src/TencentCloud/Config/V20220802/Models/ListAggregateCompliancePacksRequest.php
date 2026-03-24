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
 * @method integer getLimit() 获取数量
 * @method void setLimit(integer $Limit) 设置数量
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method string getCompliancePackName() 获取合规包名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置合规包名称
 * @method array getRiskLevel() 获取风险等级
1：高风险。
2：中风险。
3：低风险。
 * @method void setRiskLevel(array $RiskLevel) 设置风险等级
1：高风险。
2：中风险。
3：低风险。
 * @method string getStatus() 获取合规包状态 ACTIVE、NO_ACTIVE
 * @method void setStatus(string $Status) 设置合规包状态 ACTIVE、NO_ACTIVE
 * @method array getComplianceResult() 获取评估状态合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
 * @method void setComplianceResult(array $ComplianceResult) 设置评估状态合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
 * @method string getOrderType() 获取排序类型, 倒序：desc，顺序：asc
 * @method void setOrderType(string $OrderType) 设置排序类型, 倒序：desc，顺序：asc
 */
class ListAggregateCompliancePacksRequest extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var string 合规包名称
     */
    public $CompliancePackName;

    /**
     * @var array 风险等级
1：高风险。
2：中风险。
3：低风险。
     */
    public $RiskLevel;

    /**
     * @var string 合规包状态 ACTIVE、NO_ACTIVE
     */
    public $Status;

    /**
     * @var array 评估状态合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
     */
    public $ComplianceResult;

    /**
     * @var string 排序类型, 倒序：desc，顺序：asc
     */
    public $OrderType;

    /**
     * @param integer $Limit 数量
     * @param integer $Offset 偏移量
     * @param string $AccountGroupId 账号组ID
     * @param string $CompliancePackName 合规包名称
     * @param array $RiskLevel 风险等级
1：高风险。
2：中风险。
3：低风险。
     * @param string $Status 合规包状态 ACTIVE、NO_ACTIVE
     * @param array $ComplianceResult 评估状态合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
     * @param string $OrderType 排序类型, 倒序：desc，顺序：asc
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
    }
}
