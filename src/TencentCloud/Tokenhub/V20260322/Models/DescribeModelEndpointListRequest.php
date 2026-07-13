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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelEndpointList请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量，从 0 开始，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，从 0 开始，默认为 0。</p>
 * @method integer getLimit() 获取<p>每页返回数量，默认为 20，最大值为 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量，默认为 20，最大值为 100。</p>
 * @method array getFilters() 获取<p>过滤条件列表。支持的过滤字段：Status（状态，取值 ACTIVE/INACTIVE）、ChargeType（计费方式，取值 FREE/TOKEN）、RequestSource（创建来源，取值 MC/GW）、ModelName（模型名称）、ModelId（模型 ID）、PaymentEnabled（是否已开启后付费，取值 true/false）。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件列表。支持的过滤字段：Status（状态，取值 ACTIVE/INACTIVE）、ChargeType（计费方式，取值 FREE/TOKEN）、RequestSource（创建来源，取值 MC/GW）、ModelName（模型名称）、ModelId（模型 ID）、PaymentEnabled（是否已开启后付费，取值 true/false）。</p>
 * @method array getSorts() 获取<p>排序条件列表。支持的排序字段：CreatedTime、UpdatedTime。不传时使用默认排序规则。</p>
 * @method void setSorts(array $Sorts) 设置<p>排序条件列表。支持的排序字段：CreatedTime、UpdatedTime。不传时使用默认排序规则。</p>
 */
class DescribeModelEndpointListRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，从 0 开始，默认为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量，默认为 20，最大值为 100。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件列表。支持的过滤字段：Status（状态，取值 ACTIVE/INACTIVE）、ChargeType（计费方式，取值 FREE/TOKEN）、RequestSource（创建来源，取值 MC/GW）、ModelName（模型名称）、ModelId（模型 ID）、PaymentEnabled（是否已开启后付费，取值 true/false）。</p>
     */
    public $Filters;

    /**
     * @var array <p>排序条件列表。支持的排序字段：CreatedTime、UpdatedTime。不传时使用默认排序规则。</p>
     */
    public $Sorts;

    /**
     * @param integer $Offset <p>偏移量，从 0 开始，默认为 0。</p>
     * @param integer $Limit <p>每页返回数量，默认为 20，最大值为 100。</p>
     * @param array $Filters <p>过滤条件列表。支持的过滤字段：Status（状态，取值 ACTIVE/INACTIVE）、ChargeType（计费方式，取值 FREE/TOKEN）、RequestSource（创建来源，取值 MC/GW）、ModelName（模型名称）、ModelId（模型 ID）、PaymentEnabled（是否已开启后付费，取值 true/false）。</p>
     * @param array $Sorts <p>排序条件列表。支持的排序字段：CreatedTime、UpdatedTime。不传时使用默认排序规则。</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RequestFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sorts",$param) and $param["Sorts"] !== null) {
            $this->Sorts = [];
            foreach ($param["Sorts"] as $key => $value){
                $obj = new RequestSort();
                $obj->deserialize($value);
                array_push($this->Sorts, $obj);
            }
        }
    }
}
