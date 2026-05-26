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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 * @method integer getLimit() 获取最大返回个数，默认为20，上限为100
 * @method void setLimit(integer $Limit) 设置最大返回个数，默认为20，上限为100
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @var integer 最大返回个数，默认为20，上限为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @param array $Filters 过滤参数
     * @param integer $Limit 最大返回个数，默认为20，上限为100
     * @param integer $Offset 偏移量，取Limit整数倍
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
                $obj = new InstanceFilter();
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
    }
}
