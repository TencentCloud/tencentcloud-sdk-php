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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompliancePolicyItemAffectedAssetList请求参数结构体
 *
 * @method integer getCustomerPolicyItemId() 获取DescribeComplianceTaskPolicyItemSummaryList返回的CustomerPolicyItemId，表示检测项的ID。
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) 设置DescribeComplianceTaskPolicyItemSummaryList返回的CustomerPolicyItemId，表示检测项的ID。
 * @method integer getOffset() 获取起始偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置起始偏移量，默认为0。
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100。
 * @method array getFilters() 获取过滤条件。
Name - String
Name 可取值：NodeName, CheckResult
 * @method void setFilters(array $Filters) 设置过滤条件。
Name - String
Name 可取值：NodeName, CheckResult
 */
class DescribeCompliancePolicyItemAffectedAssetListRequest extends AbstractModel
{
    /**
     * @var integer DescribeComplianceTaskPolicyItemSummaryList返回的CustomerPolicyItemId，表示检测项的ID。
     */
    public $CustomerPolicyItemId;

    /**
     * @var integer 起始偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
Name - String
Name 可取值：NodeName, CheckResult
     */
    public $Filters;

    /**
     * @param integer $CustomerPolicyItemId DescribeComplianceTaskPolicyItemSummaryList返回的CustomerPolicyItemId，表示检测项的ID。
     * @param integer $Offset 起始偏移量，默认为0。
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100。
     * @param array $Filters 过滤条件。
Name - String
Name 可取值：NodeName, CheckResult
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
