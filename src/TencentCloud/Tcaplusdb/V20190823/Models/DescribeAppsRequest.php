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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getApplicationIds() 获取指定查询的应用ID
 * @method void setApplicationIds(array $ApplicationIds) 设置指定查询的应用ID
 * @method array getFilters() 获取查询过滤条件
 * @method void setFilters(array $Filters) 设置查询过滤条件
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取应用列表的大小，默认值20
 * @method void setLimit(integer $Limit) 设置应用列表的大小，默认值20
 */

/**
 *DescribeApps请求参数结构体
 */
class DescribeAppsRequest extends AbstractModel
{
    /**
     * @var array 指定查询的应用ID
     */
    public $ApplicationIds;

    /**
     * @var array 查询过滤条件
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 应用列表的大小，默认值20
     */
    public $Limit;
    /**
     * @param array $ApplicationIds 指定查询的应用ID
     * @param array $Filters 查询过滤条件
     * @param integer $Offset 偏移量
     * @param integer $Limit 应用列表的大小，默认值20
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationIds",$param) and $param["ApplicationIds"] !== null) {
            $this->ApplicationIds = $param["ApplicationIds"];
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
