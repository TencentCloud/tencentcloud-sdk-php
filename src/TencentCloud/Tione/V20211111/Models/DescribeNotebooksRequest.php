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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebooks请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取每页返回的实例数，默认为10
 * @method void setLimit(integer $Limit) 设置每页返回的实例数，默认为10
 * @method string getOrder() 获取输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC
 * @method void setOrder(string $Order) 设置输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC
 * @method string getOrderField() 获取根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime
 * @method void setOrderField(string $OrderField) 设置根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime
 * @method array getFilters() 获取过滤器，eg：[{ "Name": "Id", "Values": ["nb-123456789"] }]

取值范围
Name（名称）：notebook1
Id（notebook ID）：nb-123456789
Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed
ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）
ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）
DefaultCodeRepoId（默认代码仓库ID）：cr-123456789
AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789
LifecycleScriptId（生命周期ID）：ls-12312312311312
 * @method void setFilters(array $Filters) 设置过滤器，eg：[{ "Name": "Id", "Values": ["nb-123456789"] }]

取值范围
Name（名称）：notebook1
Id（notebook ID）：nb-123456789
Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed
ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）
ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）
DefaultCodeRepoId（默认代码仓库ID）：cr-123456789
AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789
LifecycleScriptId（生命周期ID）：ls-12312312311312
 * @method array getTagFilters() 获取标签过滤器，eg：[{ "TagKey": "TagKeyA", "TagValue": ["TagValueA"] }]
 * @method void setTagFilters(array $TagFilters) 设置标签过滤器，eg：[{ "TagKey": "TagKeyA", "TagValue": ["TagValueA"] }]
 */
class DescribeNotebooksRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 每页返回的实例数，默认为10
     */
    public $Limit;

    /**
     * @var string 输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC
     */
    public $Order;

    /**
     * @var string 根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime
     */
    public $OrderField;

    /**
     * @var array 过滤器，eg：[{ "Name": "Id", "Values": ["nb-123456789"] }]

取值范围
Name（名称）：notebook1
Id（notebook ID）：nb-123456789
Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed
ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）
ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）
DefaultCodeRepoId（默认代码仓库ID）：cr-123456789
AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789
LifecycleScriptId（生命周期ID）：ls-12312312311312
     */
    public $Filters;

    /**
     * @var array 标签过滤器，eg：[{ "TagKey": "TagKeyA", "TagValue": ["TagValueA"] }]
     */
    public $TagFilters;

    /**
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 每页返回的实例数，默认为10
     * @param string $Order 输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC
     * @param string $OrderField 根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime
     * @param array $Filters 过滤器，eg：[{ "Name": "Id", "Values": ["nb-123456789"] }]

取值范围
Name（名称）：notebook1
Id（notebook ID）：nb-123456789
Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed
ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）
ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）
DefaultCodeRepoId（默认代码仓库ID）：cr-123456789
AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789
LifecycleScriptId（生命周期ID）：ls-12312312311312
     * @param array $TagFilters 标签过滤器，eg：[{ "TagKey": "TagKeyA", "TagValue": ["TagValueA"] }]
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
