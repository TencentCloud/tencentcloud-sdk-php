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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceEvent请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
 * @method integer getEventId() 获取事件 ID。请通过 DescribeInstanceEvents 获取需修改的事件 ID。
 * @method void setEventId(integer $EventId) 设置事件 ID。请通过 DescribeInstanceEvents 获取需修改的事件 ID。
 * @method string getStartTime() 获取修改事件执行的计划开始时间。
 * @method void setStartTime(string $StartTime) 设置修改事件执行的计划开始时间。
 * @method string getEndTime() 获取修改事件计划执行的结束时间。开始时间配置之后，结束时间只能选择在开始时间之后的 30 分钟、1 小时、1.5 小时、2 小时和 3 小时之内。
 * @method void setEndTime(string $EndTime) 设置修改事件计划执行的结束时间。开始时间配置之后，结束时间只能选择在开始时间之后的 30 分钟、1 小时、1.5 小时、2 小时和 3 小时之内。
 * @method string getExecutionDate() 获取修改事件执行计划的开始日期。
 * @method void setExecutionDate(string $ExecutionDate) 设置修改事件执行计划的开始日期。
 * @method string getStatus() 获取修改事件的运行状态。该参数当前仅支持设置为 **Canceled**， 即取消执行当前事件。可通过 DescribeInstanceEvents 接口查询当前事件的运行状态与事件级别。
- 事件级别为Critical（关键）或 High（重要）类事件不支持取消。即严重的事件必须执行，不可取消。
- 仅运行状态为 Waiting （待执行的事件）的事件，才能执行取消操作。
 * @method void setStatus(string $Status) 设置修改事件的运行状态。该参数当前仅支持设置为 **Canceled**， 即取消执行当前事件。可通过 DescribeInstanceEvents 接口查询当前事件的运行状态与事件级别。
- 事件级别为Critical（关键）或 High（重要）类事件不支持取消。即严重的事件必须执行，不可取消。
- 仅运行状态为 Waiting （待执行的事件）的事件，才能执行取消操作。
 */
class ModifyInstanceEventRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 事件 ID。请通过 DescribeInstanceEvents 获取需修改的事件 ID。
     */
    public $EventId;

    /**
     * @var string 修改事件执行的计划开始时间。
     */
    public $StartTime;

    /**
     * @var string 修改事件计划执行的结束时间。开始时间配置之后，结束时间只能选择在开始时间之后的 30 分钟、1 小时、1.5 小时、2 小时和 3 小时之内。
     */
    public $EndTime;

    /**
     * @var string 修改事件执行计划的开始日期。
     */
    public $ExecutionDate;

    /**
     * @var string 修改事件的运行状态。该参数当前仅支持设置为 **Canceled**， 即取消执行当前事件。可通过 DescribeInstanceEvents 接口查询当前事件的运行状态与事件级别。
- 事件级别为Critical（关键）或 High（重要）类事件不支持取消。即严重的事件必须执行，不可取消。
- 仅运行状态为 Waiting （待执行的事件）的事件，才能执行取消操作。
     */
    public $Status;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
     * @param integer $EventId 事件 ID。请通过 DescribeInstanceEvents 获取需修改的事件 ID。
     * @param string $StartTime 修改事件执行的计划开始时间。
     * @param string $EndTime 修改事件计划执行的结束时间。开始时间配置之后，结束时间只能选择在开始时间之后的 30 分钟、1 小时、1.5 小时、2 小时和 3 小时之内。
     * @param string $ExecutionDate 修改事件执行计划的开始日期。
     * @param string $Status 修改事件的运行状态。该参数当前仅支持设置为 **Canceled**， 即取消执行当前事件。可通过 DescribeInstanceEvents 接口查询当前事件的运行状态与事件级别。
- 事件级别为Critical（关键）或 High（重要）类事件不支持取消。即严重的事件必须执行，不可取消。
- 仅运行状态为 Waiting （待执行的事件）的事件，才能执行取消操作。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionDate",$param) and $param["ExecutionDate"] !== null) {
            $this->ExecutionDate = $param["ExecutionDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
