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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGPUResourceGroups请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，最多 10 项，Name 不可重复，每项 Values 为 1–10 个值。不同 Name 为 AND、同一 Values 为 OR。支持 resource-group-id（精确 ID）、resource-group-name（精确名称）、resource-group-name-like（普通文本子串，% 和 _ 不作为通配符）、gpu-type、gpu-num、cpu、memory。ID/GPUType 最多 64 字节，名称最多 128 字节；gpu-num 为正整数字符串，cpu/memory 为正数字符串，单位核/GiB。
 * @method void setFilters(array $Filters) 设置过滤条件，最多 10 项，Name 不可重复，每项 Values 为 1–10 个值。不同 Name 为 AND、同一 Values 为 OR。支持 resource-group-id（精确 ID）、resource-group-name（精确名称）、resource-group-name-like（普通文本子串，% 和 _ 不作为通配符）、gpu-type、gpu-num、cpu、memory。ID/GPUType 最多 64 字节，名称最多 128 字节；gpu-num 为正整数字符串，cpu/memory 为正数字符串，单位核/GiB。
 * @method integer getOffset() 获取分页偏移量，默认为 0，必须大于等于 0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为 0，必须大于等于 0。
 * @method integer getLimit() 获取每页条数，省略或传 0 时取 100；非零取值范围 1–500。
 * @method void setLimit(integer $Limit) 设置每页条数，省略或传 0 时取 100；非零取值范围 1–500。
 */
class DescribeGPUResourceGroupsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，最多 10 项，Name 不可重复，每项 Values 为 1–10 个值。不同 Name 为 AND、同一 Values 为 OR。支持 resource-group-id（精确 ID）、resource-group-name（精确名称）、resource-group-name-like（普通文本子串，% 和 _ 不作为通配符）、gpu-type、gpu-num、cpu、memory。ID/GPUType 最多 64 字节，名称最多 128 字节；gpu-num 为正整数字符串，cpu/memory 为正数字符串，单位核/GiB。
     */
    public $Filters;

    /**
     * @var integer 分页偏移量，默认为 0，必须大于等于 0。
     */
    public $Offset;

    /**
     * @var integer 每页条数，省略或传 0 时取 100；非零取值范围 1–500。
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件，最多 10 项，Name 不可重复，每项 Values 为 1–10 个值。不同 Name 为 AND、同一 Values 为 OR。支持 resource-group-id（精确 ID）、resource-group-name（精确名称）、resource-group-name-like（普通文本子串，% 和 _ 不作为通配符）、gpu-type、gpu-num、cpu、memory。ID/GPUType 最多 64 字节，名称最多 128 字节；gpu-num 为正整数字符串，cpu/memory 为正数字符串，单位核/GiB。
     * @param integer $Offset 分页偏移量，默认为 0，必须大于等于 0。
     * @param integer $Limit 每页条数，省略或传 0 时取 100；非零取值范围 1–500。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
