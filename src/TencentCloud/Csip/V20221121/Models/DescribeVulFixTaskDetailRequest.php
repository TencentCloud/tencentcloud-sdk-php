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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixTaskDetail请求参数结构体
 *
 * @method integer getTaskId() 获取<p>修复任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>修复任务ID</p>
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method array getFilters() 获取<p>过滤条件<br>支持的Filter.Name：<br>InstanceId - 精确匹配，按主机实例ID筛选<br>VulId - 精确匹配，按漏洞ID筛选，过滤出某个漏洞下的主机<br>KBId - 精确匹配，按KB补丁ID筛选，过滤出某个KB补丁下的主机<br>Status - 精确匹配，按执行状态筛选：0-初始状态 1-已下发 11-客户端已确认 2-修复完成 3-客户端离线 4-超时 5-失败 6-不支持 9-等待快照创建完成中 10-快照创建失败<br>FixStatus - 精确匹配，按修复结果筛选：0-初始状态 1-修复成功 2-修复失败<br>SnapshotStatus - 精确匹配，按快照状态筛选：-1-无需创建快照 0-未开始 1-进行中 2-已完成 3-创建失败</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>支持的Filter.Name：<br>InstanceId - 精确匹配，按主机实例ID筛选<br>VulId - 精确匹配，按漏洞ID筛选，过滤出某个漏洞下的主机<br>KBId - 精确匹配，按KB补丁ID筛选，过滤出某个KB补丁下的主机<br>Status - 精确匹配，按执行状态筛选：0-初始状态 1-已下发 11-客户端已确认 2-修复完成 3-客户端离线 4-超时 5-失败 6-不支持 9-等待快照创建完成中 10-快照创建失败<br>FixStatus - 精确匹配，按修复结果筛选：0-初始状态 1-修复成功 2-修复失败<br>SnapshotStatus - 精确匹配，按快照状态筛选：-1-无需创建快照 0-未开始 1-进行中 2-已完成 3-创建失败</p>
 * @method string getOrder() 获取<p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序</p>
 * @method void setOrder(string $Order) 设置<p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序</p>
 * @method string getBy() 获取<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method void setBy(string $By) 设置<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class DescribeVulFixTaskDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>修复任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件<br>支持的Filter.Name：<br>InstanceId - 精确匹配，按主机实例ID筛选<br>VulId - 精确匹配，按漏洞ID筛选，过滤出某个漏洞下的主机<br>KBId - 精确匹配，按KB补丁ID筛选，过滤出某个KB补丁下的主机<br>Status - 精确匹配，按执行状态筛选：0-初始状态 1-已下发 11-客户端已确认 2-修复完成 3-客户端离线 4-超时 5-失败 6-不支持 9-等待快照创建完成中 10-快照创建失败<br>FixStatus - 精确匹配，按修复结果筛选：0-初始状态 1-修复成功 2-修复失败<br>SnapshotStatus - 精确匹配，按快照状态筛选：-1-无需创建快照 0-未开始 1-进行中 2-已完成 3-创建失败</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序</p>
     */
    public $Order;

    /**
     * @var string <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     */
    public $By;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param integer $TaskId <p>修复任务ID</p>
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param array $Filters <p>过滤条件<br>支持的Filter.Name：<br>InstanceId - 精确匹配，按主机实例ID筛选<br>VulId - 精确匹配，按漏洞ID筛选，过滤出某个漏洞下的主机<br>KBId - 精确匹配，按KB补丁ID筛选，过滤出某个KB补丁下的主机<br>Status - 精确匹配，按执行状态筛选：0-初始状态 1-已下发 11-客户端已确认 2-修复完成 3-客户端离线 4-超时 5-失败 6-不支持 9-等待快照创建完成中 10-快照创建失败<br>FixStatus - 精确匹配，按修复结果筛选：0-初始状态 1-修复成功 2-修复失败<br>SnapshotStatus - 精确匹配，按快照状态筛选：-1-无需创建快照 0-未开始 1-进行中 2-已完成 3-创建失败</p>
     * @param string $Order <p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序</p>
     * @param string $By <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
