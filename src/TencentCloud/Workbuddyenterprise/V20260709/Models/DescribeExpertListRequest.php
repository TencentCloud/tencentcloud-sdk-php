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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExpertList请求参数结构体
 *
 * @method string getSource() 获取<p>专家来源，必填：BUILTIN（内置）/ CUSTOM（自建）</p>
 * @method void setSource(string $Source) 设置<p>专家来源，必填：BUILTIN（内置）/ CUSTOM（自建）</p>
 * @method array getFilters() 获取<p>标准过滤条件：ExpertId（精确，多值 OR，携带即按 ID 批量查询，忽略分页）/ Keyword（模糊）</p>
 * @method void setFilters(array $Filters) 设置<p>标准过滤条件：ExpertId（精确，多值 OR，携带即按 ID 批量查询，忽略分页）/ Keyword（模糊）</p>
 * @method integer getOffset() 获取<p>偏移量，从 0 开始，默认 0（按 ID 批量查询时忽略）</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，从 0 开始，默认 0（按 ID 批量查询时忽略）</p>
 * @method integer getLimit() 获取<p>每页数量，默认 20，最大 200（按 ID 批量查询时忽略）</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 20，最大 200（按 ID 批量查询时忽略）</p>
 */
class DescribeExpertListRequest extends AbstractModel
{
    /**
     * @var string <p>专家来源，必填：BUILTIN（内置）/ CUSTOM（自建）</p>
     */
    public $Source;

    /**
     * @var array <p>标准过滤条件：ExpertId（精确，多值 OR，携带即按 ID 批量查询，忽略分页）/ Keyword（模糊）</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，从 0 开始，默认 0（按 ID 批量查询时忽略）</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 20，最大 200（按 ID 批量查询时忽略）</p>
     */
    public $Limit;

    /**
     * @param string $Source <p>专家来源，必填：BUILTIN（内置）/ CUSTOM（自建）</p>
     * @param array $Filters <p>标准过滤条件：ExpertId（精确，多值 OR，携带即按 ID 批量查询，忽略分页）/ Keyword（模糊）</p>
     * @param integer $Offset <p>偏移量，从 0 开始，默认 0（按 ID 批量查询时忽略）</p>
     * @param integer $Limit <p>每页数量，默认 20，最大 200（按 ID 批量查询时忽略）</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
