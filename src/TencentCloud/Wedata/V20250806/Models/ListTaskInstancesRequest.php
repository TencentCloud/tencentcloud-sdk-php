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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTaskInstances请求参数结构体
 *
 * @method string getProjectId() 获取**项目ID**
 * @method void setProjectId(string $ProjectId) 设置**项目ID**
 * @method integer getPageNumber() 获取**页码，整型**
配合pageSize使用且不能小于1， 默认值1
 * @method void setPageNumber(integer $PageNumber) 设置**页码，整型**
配合pageSize使用且不能小于1， 默认值1
 * @method integer getPageSize() 获取**每页显示的条数，默认为10，最小值为1、最大值为100
 * @method void setPageSize(integer $PageSize) 设置**每页显示的条数，默认为10，最小值为1、最大值为100
 * @method string getKeyword() 获取**任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
 * @method void setKeyword(string $Keyword) 设置**任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
 * @method string getTimeZone() 获取**时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置**时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
 * @method integer getInstanceType() 获取**实例类型** 
- 0 表示补录类型 
- 1 表示周期实例 
- 2 表示非周期实例
 * @method void setInstanceType(integer $InstanceType) 设置**实例类型** 
- 0 表示补录类型 
- 1 表示周期实例 
- 2 表示非周期实例
 * @method string getInstanceState() 获取**实例状态** - WAIT_EVENT: 等待事件 - WAIT_UPSTREAM: 等待上游 - WAIT_RUN: 等待运行 - RUNNING: 运行中 - SKIP_RUNNING: 跳过运行 - FAILED_RETRY: 失败重试 - EXPIRED: 失败 - COMPLETED: 成功
 * @method void setInstanceState(string $InstanceState) 设置**实例状态** - WAIT_EVENT: 等待事件 - WAIT_UPSTREAM: 等待上游 - WAIT_RUN: 等待运行 - RUNNING: 运行中 - SKIP_RUNNING: 跳过运行 - FAILED_RETRY: 失败重试 - EXPIRED: 失败 - COMPLETED: 成功
 * @method integer getTaskTypeId() 获取**任务类型Id**
 * @method void setTaskTypeId(integer $TaskTypeId) 设置**任务类型Id**
 * @method string getCycleType() 获取**任务周期类型** * ONEOFF_CYCLE: 一次性 * YEAR_CYCLE: 年 * MONTH_CYCLE: 月 * WEEK_CYCLE: 周 * DAY_CYCLE: 天 * HOUR_CYCLE: 小时 * MINUTE_CYCLE: 分钟 * CRONTAB_CYCLE: crontab表达式类型
 * @method void setCycleType(string $CycleType) 设置**任务周期类型** * ONEOFF_CYCLE: 一次性 * YEAR_CYCLE: 年 * MONTH_CYCLE: 月 * WEEK_CYCLE: 周 * DAY_CYCLE: 天 * HOUR_CYCLE: 小时 * MINUTE_CYCLE: 分钟 * CRONTAB_CYCLE: crontab表达式类型
 * @method string getOwnerUin() 获取**任务负责人id**
 * @method void setOwnerUin(string $OwnerUin) 设置**任务负责人id**
 * @method string getFolderId() 获取**任务所属文件id**
 * @method void setFolderId(string $FolderId) 设置**任务所属文件id**
 * @method string getWorkflowId() 获取**任务所属工作流id**
 * @method void setWorkflowId(string $WorkflowId) 设置**任务所属工作流id**
 * @method string getExecutorGroupId() 获取**执行资源组Id**
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置**执行资源组Id**
 * @method string getScheduleTimeFrom() 获取**实例计划调度时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setScheduleTimeFrom(string $ScheduleTimeFrom) 设置**实例计划调度时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getScheduleTimeTo() 获取**实例计划调度时间过滤条件**过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setScheduleTimeTo(string $ScheduleTimeTo) 设置**实例计划调度时间过滤条件**过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getStartTimeFrom() 获取**实例执行开始时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setStartTimeFrom(string $StartTimeFrom) 设置**实例执行开始时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getStartTimeTo() 获取**实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setStartTimeTo(string $StartTimeTo) 设置**实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getLastUpdateTimeFrom() 获取**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setLastUpdateTimeFrom(string $LastUpdateTimeFrom) 设置**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getLastUpdateTimeTo() 获取**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setLastUpdateTimeTo(string $LastUpdateTimeTo) 设置**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getSortColumn() 获取**查询结果排序字段**- SCHEDULE_DATE 表示 根据计划调度时间排序- START_TIME 表示 根据实例开始执行时间排序- END_TIME 表示 根据实例结束执行时间排序- COST_TIME 表示 根据实例执行时长排序
 * @method void setSortColumn(string $SortColumn) 设置**查询结果排序字段**- SCHEDULE_DATE 表示 根据计划调度时间排序- START_TIME 表示 根据实例开始执行时间排序- END_TIME 表示 根据实例结束执行时间排序- COST_TIME 表示 根据实例执行时长排序
 * @method string getSortType() 获取**实例排序方式**

- ASC 
- DESC
 * @method void setSortType(string $SortType) 设置**实例排序方式**

- ASC 
- DESC
 */
class ListTaskInstancesRequest extends AbstractModel
{
    /**
     * @var string **项目ID**
     */
    public $ProjectId;

    /**
     * @var integer **页码，整型**
配合pageSize使用且不能小于1， 默认值1
     */
    public $PageNumber;

    /**
     * @var integer **每页显示的条数，默认为10，最小值为1、最大值为100
     */
    public $PageSize;

    /**
     * @var string **任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
     */
    public $Keyword;

    /**
     * @var string **时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
     */
    public $TimeZone;

    /**
     * @var integer **实例类型** 
- 0 表示补录类型 
- 1 表示周期实例 
- 2 表示非周期实例
     */
    public $InstanceType;

    /**
     * @var string **实例状态** - WAIT_EVENT: 等待事件 - WAIT_UPSTREAM: 等待上游 - WAIT_RUN: 等待运行 - RUNNING: 运行中 - SKIP_RUNNING: 跳过运行 - FAILED_RETRY: 失败重试 - EXPIRED: 失败 - COMPLETED: 成功
     */
    public $InstanceState;

    /**
     * @var integer **任务类型Id**
     */
    public $TaskTypeId;

    /**
     * @var string **任务周期类型** * ONEOFF_CYCLE: 一次性 * YEAR_CYCLE: 年 * MONTH_CYCLE: 月 * WEEK_CYCLE: 周 * DAY_CYCLE: 天 * HOUR_CYCLE: 小时 * MINUTE_CYCLE: 分钟 * CRONTAB_CYCLE: crontab表达式类型
     */
    public $CycleType;

    /**
     * @var string **任务负责人id**
     */
    public $OwnerUin;

    /**
     * @var string **任务所属文件id**
     */
    public $FolderId;

    /**
     * @var string **任务所属工作流id**
     */
    public $WorkflowId;

    /**
     * @var string **执行资源组Id**
     */
    public $ExecutorGroupId;

    /**
     * @var string **实例计划调度时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $ScheduleTimeFrom;

    /**
     * @var string **实例计划调度时间过滤条件**过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $ScheduleTimeTo;

    /**
     * @var string **实例执行开始时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $StartTimeFrom;

    /**
     * @var string **实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $StartTimeTo;

    /**
     * @var string **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $LastUpdateTimeFrom;

    /**
     * @var string **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $LastUpdateTimeTo;

    /**
     * @var string **查询结果排序字段**- SCHEDULE_DATE 表示 根据计划调度时间排序- START_TIME 表示 根据实例开始执行时间排序- END_TIME 表示 根据实例结束执行时间排序- COST_TIME 表示 根据实例执行时长排序
     */
    public $SortColumn;

    /**
     * @var string **实例排序方式**

- ASC 
- DESC
     */
    public $SortType;

    /**
     * @param string $ProjectId **项目ID**
     * @param integer $PageNumber **页码，整型**
配合pageSize使用且不能小于1， 默认值1
     * @param integer $PageSize **每页显示的条数，默认为10，最小值为1、最大值为100
     * @param string $Keyword **任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
     * @param string $TimeZone **时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
     * @param integer $InstanceType **实例类型** 
- 0 表示补录类型 
- 1 表示周期实例 
- 2 表示非周期实例
     * @param string $InstanceState **实例状态** - WAIT_EVENT: 等待事件 - WAIT_UPSTREAM: 等待上游 - WAIT_RUN: 等待运行 - RUNNING: 运行中 - SKIP_RUNNING: 跳过运行 - FAILED_RETRY: 失败重试 - EXPIRED: 失败 - COMPLETED: 成功
     * @param integer $TaskTypeId **任务类型Id**
     * @param string $CycleType **任务周期类型** * ONEOFF_CYCLE: 一次性 * YEAR_CYCLE: 年 * MONTH_CYCLE: 月 * WEEK_CYCLE: 周 * DAY_CYCLE: 天 * HOUR_CYCLE: 小时 * MINUTE_CYCLE: 分钟 * CRONTAB_CYCLE: crontab表达式类型
     * @param string $OwnerUin **任务负责人id**
     * @param string $FolderId **任务所属文件id**
     * @param string $WorkflowId **任务所属工作流id**
     * @param string $ExecutorGroupId **执行资源组Id**
     * @param string $ScheduleTimeFrom **实例计划调度时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $ScheduleTimeTo **实例计划调度时间过滤条件**过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $StartTimeFrom **实例执行开始时间过滤条件**过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $StartTimeTo **实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $LastUpdateTimeFrom **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $LastUpdateTimeTo **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $SortColumn **查询结果排序字段**- SCHEDULE_DATE 表示 根据计划调度时间排序- START_TIME 表示 根据实例开始执行时间排序- END_TIME 表示 根据实例结束执行时间排序- COST_TIME 表示 根据实例执行时长排序
     * @param string $SortType **实例排序方式**

- ASC 
- DESC
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ScheduleTimeFrom",$param) and $param["ScheduleTimeFrom"] !== null) {
            $this->ScheduleTimeFrom = $param["ScheduleTimeFrom"];
        }

        if (array_key_exists("ScheduleTimeTo",$param) and $param["ScheduleTimeTo"] !== null) {
            $this->ScheduleTimeTo = $param["ScheduleTimeTo"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("LastUpdateTimeFrom",$param) and $param["LastUpdateTimeFrom"] !== null) {
            $this->LastUpdateTimeFrom = $param["LastUpdateTimeFrom"];
        }

        if (array_key_exists("LastUpdateTimeTo",$param) and $param["LastUpdateTimeTo"] !== null) {
            $this->LastUpdateTimeTo = $param["LastUpdateTimeTo"];
        }

        if (array_key_exists("SortColumn",$param) and $param["SortColumn"] !== null) {
            $this->SortColumn = $param["SortColumn"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
