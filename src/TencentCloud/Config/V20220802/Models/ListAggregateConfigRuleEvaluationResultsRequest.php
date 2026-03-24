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
 * ListAggregateConfigRuleEvaluationResults请求参数结构体
 *
 * @method string getConfigRuleId() 获取<p>规则ID</p>
 * @method void setConfigRuleId(string $ConfigRuleId) 设置<p>规则ID</p>
 * @method integer getLimit() 获取<p>偏移量</p>
 * @method void setLimit(integer $Limit) 设置<p>偏移量</p>
 * @method integer getOffset() 获取<p>当前页</p>
 * @method void setOffset(integer $Offset) 设置<p>当前页</p>
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method array getResourceType() 获取<p>类型</p>
 * @method void setResourceType(array $ResourceType) 设置<p>类型</p>
 * @method array getComplianceType() 获取<p>评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规</p>
 * @method void setComplianceType(array $ComplianceType) 设置<p>评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规</p>
 * @method integer getResourceOwnerId() 获取<p>资源所属用户ID</p>
 * @method void setResourceOwnerId(integer $ResourceOwnerId) 设置<p>资源所属用户ID</p>
 * @method array getResourceOwnerIds() 获取<p>筛选的资源拥有者uin集合</p>
 * @method void setResourceOwnerIds(array $ResourceOwnerIds) 设置<p>筛选的资源拥有者uin集合</p>
 */
class ListAggregateConfigRuleEvaluationResultsRequest extends AbstractModel
{
    /**
     * @var string <p>规则ID</p>
     */
    public $ConfigRuleId;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Limit;

    /**
     * @var integer <p>当前页</p>
     */
    public $Offset;

    /**
     * @var string <p>账号组ID</p>
     */
    public $AccountGroupId;

    /**
     * @var array <p>类型</p>
     */
    public $ResourceType;

    /**
     * @var array <p>评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规</p>
     */
    public $ComplianceType;

    /**
     * @var integer <p>资源所属用户ID</p>
     */
    public $ResourceOwnerId;

    /**
     * @var array <p>筛选的资源拥有者uin集合</p>
     */
    public $ResourceOwnerIds;

    /**
     * @param string $ConfigRuleId <p>规则ID</p>
     * @param integer $Limit <p>偏移量</p>
     * @param integer $Offset <p>当前页</p>
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param array $ResourceType <p>类型</p>
     * @param array $ComplianceType <p>评估结果 COMPLIANT：合规   NON_COMPLIANT：不合规</p>
     * @param integer $ResourceOwnerId <p>资源所属用户ID</p>
     * @param array $ResourceOwnerIds <p>筛选的资源拥有者uin集合</p>
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
        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("ResourceOwnerId",$param) and $param["ResourceOwnerId"] !== null) {
            $this->ResourceOwnerId = $param["ResourceOwnerId"];
        }

        if (array_key_exists("ResourceOwnerIds",$param) and $param["ResourceOwnerIds"] !== null) {
            $this->ResourceOwnerIds = $param["ResourceOwnerIds"];
        }
    }
}
