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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeYarnScheduleHistory请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getLimit() 获取页码
 * @method void setLimit(integer $Limit) 设置页码
 * @method integer getOffset() 获取页大小
 * @method void setOffset(integer $Offset) 设置页大小
 * @method string getSchedulerType() 获取调度器类型 可选值为“ALL”，"Capacity Scheduler", "Fair Scheduler"
 * @method void setSchedulerType(string $SchedulerType) 设置调度器类型 可选值为“ALL”，"Capacity Scheduler", "Fair Scheduler"
 * @method integer getTaskState() 获取任务类型0:等待执行，1:执行中，2：完成，-1:失败 ，-99:全部
 * @method void setTaskState(integer $TaskState) 设置任务类型0:等待执行，1:执行中，2：完成，-1:失败 ，-99:全部
 */
class DescribeYarnScheduleHistoryRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 页码
     */
    public $Limit;

    /**
     * @var integer 页大小
     */
    public $Offset;

    /**
     * @var string 调度器类型 可选值为“ALL”，"Capacity Scheduler", "Fair Scheduler"
     */
    public $SchedulerType;

    /**
     * @var integer 任务类型0:等待执行，1:执行中，2：完成，-1:失败 ，-99:全部
     */
    public $TaskState;

    /**
     * @param string $InstanceId 集群id
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param integer $Limit 页码
     * @param integer $Offset 页大小
     * @param string $SchedulerType 调度器类型 可选值为“ALL”，"Capacity Scheduler", "Fair Scheduler"
     * @param integer $TaskState 任务类型0:等待执行，1:执行中，2：完成，-1:失败 ，-99:全部
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SchedulerType",$param) and $param["SchedulerType"] !== null) {
            $this->SchedulerType = $param["SchedulerType"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }
    }
}
