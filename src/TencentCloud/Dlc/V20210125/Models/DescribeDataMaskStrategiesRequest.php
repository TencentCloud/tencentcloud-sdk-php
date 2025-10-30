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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataMaskStrategies请求参数结构体
 *
 * @method integer getLimit() 获取分页参数，单页返回数据量，默认10
 * @method void setLimit(integer $Limit) 设置分页参数，单页返回数据量，默认10
 * @method integer getOffset() 获取分页参数，数据便偏移量，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，数据便偏移量，默认0
 * @method array getFilters() 获取过滤字段，strategy-name: 按策略名称搜索
 * @method void setFilters(array $Filters) 设置过滤字段，strategy-name: 按策略名称搜索
 */
class DescribeDataMaskStrategiesRequest extends AbstractModel
{
    /**
     * @var integer 分页参数，单页返回数据量，默认10
     */
    public $Limit;

    /**
     * @var integer 分页参数，数据便偏移量，默认0
     */
    public $Offset;

    /**
     * @var array 过滤字段，strategy-name: 按策略名称搜索
     */
    public $Filters;

    /**
     * @param integer $Limit 分页参数，单页返回数据量，默认10
     * @param integer $Offset 分页参数，数据便偏移量，默认0
     * @param array $Filters 过滤字段，strategy-name: 按策略名称搜索
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
