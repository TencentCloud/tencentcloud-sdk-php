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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportJavaMemShells请求参数结构体
 *
 * @method array getFilters() 获取过滤条件：InstanceID、IP、

MachineName主机名模糊查询, Type，Status精确匹配，CreateBeginTime，CreateEndTime时间段
 * @method void setFilters(array $Filters) 设置过滤条件：InstanceID、IP、

MachineName主机名模糊查询, Type，Status精确匹配，CreateBeginTime，CreateEndTime时间段
 * @method array getWhere() 获取导出字段
 * @method void setWhere(array $Where) 设置导出字段
 * @method string getOrder() 获取排序，大小写无关：asc 升序，desc降序
 * @method void setOrder(string $Order) 设置排序，大小写无关：asc 升序，desc降序
 * @method string getBy() 获取排序列，严格相等：最近检测时间RecentFoundTime
 * @method void setBy(string $By) 设置排序列，严格相等：最近检测时间RecentFoundTime
 */
class ExportJavaMemShellsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件：InstanceID、IP、

MachineName主机名模糊查询, Type，Status精确匹配，CreateBeginTime，CreateEndTime时间段
     */
    public $Filters;

    /**
     * @var array 导出字段
     */
    public $Where;

    /**
     * @var string 排序，大小写无关：asc 升序，desc降序
     */
    public $Order;

    /**
     * @var string 排序列，严格相等：最近检测时间RecentFoundTime
     */
    public $By;

    /**
     * @param array $Filters 过滤条件：InstanceID、IP、

MachineName主机名模糊查询, Type，Status精确匹配，CreateBeginTime，CreateEndTime时间段
     * @param array $Where 导出字段
     * @param string $Order 排序，大小写无关：asc 升序，desc降序
     * @param string $By 排序列，严格相等：最近检测时间RecentFoundTime
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

        if (array_key_exists("Where",$param) and $param["Where"] !== null) {
            $this->Where = $param["Where"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
