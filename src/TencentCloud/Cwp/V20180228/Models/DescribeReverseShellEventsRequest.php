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
 * DescribeReverseShellEvents请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>ProcName - String - 是否必填：否 - 进程名(模糊匹配进程名或父进程名)</li>
<li>MachineName - String - 是否必填：否 - 主机名称(模糊匹配)</li>
<li>InstanceID - String - 是否必填：否 - 实例ID(模糊匹配)</li>
<li>IP - String - 是否必填：否 - 主机IP(内网IP或公网IP,模糊匹配)</li>
<li>Quuid - String - 是否必填：否 - 主机QUUID(支持多个)</li>
<li>Uuid - String - 是否必填：否 - 主机UUID</li>
<li>Status - String - 是否必填：否 - 处理状态(0:待处理 2:已加入白名单 3:已处理 4:已忽略)</li>
<li>DetectBy - String - 是否必填：否 - 检测方式(0:行为分析 1:命令特征检测)</li>
<li>ID - String - 是否必填：否 - 事件ID(支持多个)</li>
<li>CreateBeginTime - String - 是否必填：否 - 发生开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 发生结束时间</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>ProcName - String - 是否必填：否 - 进程名(模糊匹配进程名或父进程名)</li>
<li>MachineName - String - 是否必填：否 - 主机名称(模糊匹配)</li>
<li>InstanceID - String - 是否必填：否 - 实例ID(模糊匹配)</li>
<li>IP - String - 是否必填：否 - 主机IP(内网IP或公网IP,模糊匹配)</li>
<li>Quuid - String - 是否必填：否 - 主机QUUID(支持多个)</li>
<li>Uuid - String - 是否必填：否 - 主机UUID</li>
<li>Status - String - 是否必填：否 - 处理状态(0:待处理 2:已加入白名单 3:已处理 4:已忽略)</li>
<li>DetectBy - String - 是否必填：否 - 检测方式(0:行为分析 1:命令特征检测)</li>
<li>ID - String - 是否必填：否 - 事件ID(支持多个)</li>
<li>CreateBeginTime - String - 是否必填：否 - 发生开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 发生结束时间</li>
 * @method string getOrder() 获取排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method void setOrder(string $Order) 设置排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method string getBy() 获取排序字段：CreateTime-发生时间
 * @method void setBy(string $By) 设置排序字段：CreateTime-发生时间
 */
class DescribeReverseShellEventsRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>ProcName - String - 是否必填：否 - 进程名(模糊匹配进程名或父进程名)</li>
<li>MachineName - String - 是否必填：否 - 主机名称(模糊匹配)</li>
<li>InstanceID - String - 是否必填：否 - 实例ID(模糊匹配)</li>
<li>IP - String - 是否必填：否 - 主机IP(内网IP或公网IP,模糊匹配)</li>
<li>Quuid - String - 是否必填：否 - 主机QUUID(支持多个)</li>
<li>Uuid - String - 是否必填：否 - 主机UUID</li>
<li>Status - String - 是否必填：否 - 处理状态(0:待处理 2:已加入白名单 3:已处理 4:已忽略)</li>
<li>DetectBy - String - 是否必填：否 - 检测方式(0:行为分析 1:命令特征检测)</li>
<li>ID - String - 是否必填：否 - 事件ID(支持多个)</li>
<li>CreateBeginTime - String - 是否必填：否 - 发生开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 发生结束时间</li>
     */
    public $Filters;

    /**
     * @var string 排序方式：根据请求次数排序：asc-升序/desc-降序
     */
    public $Order;

    /**
     * @var string 排序字段：CreateTime-发生时间
     */
    public $By;

    /**
     * @param integer $Limit 返回数量，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>ProcName - String - 是否必填：否 - 进程名(模糊匹配进程名或父进程名)</li>
<li>MachineName - String - 是否必填：否 - 主机名称(模糊匹配)</li>
<li>InstanceID - String - 是否必填：否 - 实例ID(模糊匹配)</li>
<li>IP - String - 是否必填：否 - 主机IP(内网IP或公网IP,模糊匹配)</li>
<li>Quuid - String - 是否必填：否 - 主机QUUID(支持多个)</li>
<li>Uuid - String - 是否必填：否 - 主机UUID</li>
<li>Status - String - 是否必填：否 - 处理状态(0:待处理 2:已加入白名单 3:已处理 4:已忽略)</li>
<li>DetectBy - String - 是否必填：否 - 检测方式(0:行为分析 1:命令特征检测)</li>
<li>ID - String - 是否必填：否 - 事件ID(支持多个)</li>
<li>CreateBeginTime - String - 是否必填：否 - 发生开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 发生结束时间</li>
     * @param string $Order 排序方式：根据请求次数排序：asc-升序/desc-降序
     * @param string $By 排序字段：CreateTime-发生时间
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
