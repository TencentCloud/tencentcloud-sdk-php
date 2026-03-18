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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicAlgoVersionList请求参数结构体
 *
 * @method array getFilters() 获取过滤器
 * @method void setFilters(array $Filters) 设置过滤器
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回记录条数，默认10
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认10
 * @method boolean getNeedsAggregate() 获取是否需要聚合
 * @method void setNeedsAggregate(boolean $NeedsAggregate) 设置是否需要聚合
 */
class DescribePublicAlgoVersionListRequest extends AbstractModel
{
    /**
     * @var array 过滤器
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认10
     */
    public $Limit;

    /**
     * @var boolean 是否需要聚合
     */
    public $NeedsAggregate;

    /**
     * @param array $Filters 过滤器
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回记录条数，默认10
     * @param boolean $NeedsAggregate 是否需要聚合
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

        if (array_key_exists("NeedsAggregate",$param) and $param["NeedsAggregate"] !== null) {
            $this->NeedsAggregate = $param["NeedsAggregate"];
        }
    }
}
