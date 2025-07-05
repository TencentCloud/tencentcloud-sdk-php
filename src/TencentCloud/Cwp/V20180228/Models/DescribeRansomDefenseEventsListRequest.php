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
 * DescribeRansomDefenseEventsList请求参数结构体
 *
 * @method integer getLimit() 获取分页参数 最大100条
 * @method void setLimit(integer $Limit) 设置分页参数 最大100条
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method array getFilters() 获取过滤条件。
<li>HostName- string- 主机名称</li>
<li>Status - Uint64 - 0待处理，1已处理，2已信任</li>
<li>HostIp- String - 主机ip</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>HostName- string- 主机名称</li>
<li>Status - Uint64 - 0待处理，1已处理，2已信任</li>
<li>HostIp- String - 主机ip</li>
 * @method string getOrder() 获取排序方法 ASC DESC
 * @method void setOrder(string $Order) 设置排序方法 ASC DESC
 * @method string getBy() 获取排序字段支持CreateTime
 * @method void setBy(string $By) 设置排序字段支持CreateTime
 * @method string getCreateBeginTime() 获取事件创建起始时间
 * @method void setCreateBeginTime(string $CreateBeginTime) 设置事件创建起始时间
 * @method string getCreateEndTime() 获取事件创建结束时间
 * @method void setCreateEndTime(string $CreateEndTime) 设置事件创建结束时间
 */
class DescribeRansomDefenseEventsListRequest extends AbstractModel
{
    /**
     * @var integer 分页参数 最大100条
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>HostName- string- 主机名称</li>
<li>Status - Uint64 - 0待处理，1已处理，2已信任</li>
<li>HostIp- String - 主机ip</li>
     */
    public $Filters;

    /**
     * @var string 排序方法 ASC DESC
     */
    public $Order;

    /**
     * @var string 排序字段支持CreateTime
     */
    public $By;

    /**
     * @var string 事件创建起始时间
     */
    public $CreateBeginTime;

    /**
     * @var string 事件创建结束时间
     */
    public $CreateEndTime;

    /**
     * @param integer $Limit 分页参数 最大100条
     * @param integer $Offset 分页参数
     * @param array $Filters 过滤条件。
<li>HostName- string- 主机名称</li>
<li>Status - Uint64 - 0待处理，1已处理，2已信任</li>
<li>HostIp- String - 主机ip</li>
     * @param string $Order 排序方法 ASC DESC
     * @param string $By 排序字段支持CreateTime
     * @param string $CreateBeginTime 事件创建起始时间
     * @param string $CreateEndTime 事件创建结束时间
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("CreateBeginTime",$param) and $param["CreateBeginTime"] !== null) {
            $this->CreateBeginTime = $param["CreateBeginTime"];
        }

        if (array_key_exists("CreateEndTime",$param) and $param["CreateEndTime"] !== null) {
            $this->CreateEndTime = $param["CreateEndTime"];
        }
    }
}
