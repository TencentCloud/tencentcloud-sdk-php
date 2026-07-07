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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelAliases请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件</p><p>支持的过滤键：</p><ul><li>ModelAliasName：按模型别名过滤。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p><p>支持的过滤键：</p><ul><li>ModelAliasName：按模型别名过滤。</li></ul>
 * @method integer getLimit() 获取<p>每页数量，取值范围：[1, 100]，默认值：20。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，取值范围：[1, 100]，默认值：20。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。</p>
 * @method array getSort() 获取<p>排序条件。支持按 InputCoefficient、InputCachedCoefficient 或 OutputCoefficient 排序，Order 支持 ASC、DESC。不传或传空数组时，默认按 OutputCoefficient 降序排列。最多支持 3 个排序条件，排序字段不可重复。</p>
 * @method void setSort(array $Sort) 设置<p>排序条件。支持按 InputCoefficient、InputCachedCoefficient 或 OutputCoefficient 排序，Order 支持 ASC、DESC。不传或传空数组时，默认按 OutputCoefficient 降序排列。最多支持 3 个排序条件，排序字段不可重复。</p>
 */
class DescribeModelAliasesRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件</p><p>支持的过滤键：</p><ul><li>ModelAliasName：按模型别名过滤。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>每页数量，取值范围：[1, 100]，默认值：20。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，默认值：0。</p>
     */
    public $Offset;

    /**
     * @var array <p>排序条件。支持按 InputCoefficient、InputCachedCoefficient 或 OutputCoefficient 排序，Order 支持 ASC、DESC。不传或传空数组时，默认按 OutputCoefficient 降序排列。最多支持 3 个排序条件，排序字段不可重复。</p>
     */
    public $Sort;

    /**
     * @param array $Filters <p>过滤条件</p><p>支持的过滤键：</p><ul><li>ModelAliasName：按模型别名过滤。</li></ul>
     * @param integer $Limit <p>每页数量，取值范围：[1, 100]，默认值：20。</p>
     * @param integer $Offset <p>分页偏移量，默认值：0。</p>
     * @param array $Sort <p>排序条件。支持按 InputCoefficient、InputCachedCoefficient 或 OutputCoefficient 排序，Order 支持 ASC、DESC。不传或传空数组时，默认按 OutputCoefficient 降序排列。最多支持 3 个排序条件，排序字段不可重复。</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new Sort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }
    }
}
