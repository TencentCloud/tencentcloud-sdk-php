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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetPortInfoList请求参数结构体
 *
 * @method string getQuuid() 获取查询指定Quuid主机的信息
 * @method void setQuuid(string $Quuid) 设置查询指定Quuid主机的信息
 * @method array getFilters() 获取过滤条件。
<li>Port - uint64 - 是否必填：否 - 端口</li>
<li>Ip - String - 是否必填：否 - 绑定IP</li>
<li>ProcessName - String - 是否必填：否 - 监听进程</li>
<li>Pid - uint64 - 是否必填：否 - PID</li>
<li>User - String - 是否必填：否 - 运行用户</li>
<li>Group - String - 是否必填：否 - 所属用户组</li>
<li>Ppid - uint64 - 是否必填：否 - PPID</li>
<li>Proto - string - 是否必填：否 - tcp/udp或“”(空字符串筛选未知状态)</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Port - uint64 - 是否必填：否 - 端口</li>
<li>Ip - String - 是否必填：否 - 绑定IP</li>
<li>ProcessName - String - 是否必填：否 - 监听进程</li>
<li>Pid - uint64 - 是否必填：否 - PID</li>
<li>User - String - 是否必填：否 - 运行用户</li>
<li>Group - String - 是否必填：否 - 所属用户组</li>
<li>Ppid - uint64 - 是否必填：否 - PPID</li>
<li>Proto - string - 是否必填：否 - tcp/udp或“”(空字符串筛选未知状态)</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式，asc升序 或 desc降序
 * @method void setOrder(string $Order) 设置排序方式，asc升序 或 desc降序
 * @method string getBy() 获取排序方式：[FirstTime|StartTime]
 * @method void setBy(string $By) 设置排序方式：[FirstTime|StartTime]
 */
class DescribeAssetPortInfoListRequest extends AbstractModel
{
    /**
     * @var string 查询指定Quuid主机的信息
     */
    public $Quuid;

    /**
     * @var array 过滤条件。
<li>Port - uint64 - 是否必填：否 - 端口</li>
<li>Ip - String - 是否必填：否 - 绑定IP</li>
<li>ProcessName - String - 是否必填：否 - 监听进程</li>
<li>Pid - uint64 - 是否必填：否 - PID</li>
<li>User - String - 是否必填：否 - 运行用户</li>
<li>Group - String - 是否必填：否 - 所属用户组</li>
<li>Ppid - uint64 - 是否必填：否 - PPID</li>
<li>Proto - string - 是否必填：否 - tcp/udp或“”(空字符串筛选未知状态)</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式，asc升序 或 desc降序
     */
    public $Order;

    /**
     * @var string 排序方式：[FirstTime|StartTime]
     */
    public $By;

    /**
     * @param string $Quuid 查询指定Quuid主机的信息
     * @param array $Filters 过滤条件。
<li>Port - uint64 - 是否必填：否 - 端口</li>
<li>Ip - String - 是否必填：否 - 绑定IP</li>
<li>ProcessName - String - 是否必填：否 - 监听进程</li>
<li>Pid - uint64 - 是否必填：否 - PID</li>
<li>User - String - 是否必填：否 - 运行用户</li>
<li>Group - String - 是否必填：否 - 所属用户组</li>
<li>Ppid - uint64 - 是否必填：否 - PPID</li>
<li>Proto - string - 是否必填：否 - tcp/udp或“”(空字符串筛选未知状态)</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式，asc升序 或 desc降序
     * @param string $By 排序方式：[FirstTime|StartTime]
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
