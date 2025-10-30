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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListInstances请求参数结构体
 *
 * @method string getProjectId() 获取**项目ID**
 * @method void setProjectId(string $ProjectId) 设置**项目ID**
 * @method string getScheduleTimeFrom() 获取**实例计划调度时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setScheduleTimeFrom(string $ScheduleTimeFrom) 设置**实例计划调度时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getScheduleTimeTo() 获取**实例计划调度时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setScheduleTimeTo(string $ScheduleTimeTo) 设置**实例计划调度时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method integer getPageNumber() 获取**页码，整型**
配合pageSize使用且不能小于1， 默认值1
 * @method void setPageNumber(integer $PageNumber) 设置**页码，整型**
配合pageSize使用且不能小于1， 默认值1
 * @method integer getPageSize() 获取**每页数目，整型**
配合pageNumber使用且不能大于200, 默认值 10
 * @method void setPageSize(integer $PageSize) 设置**每页数目，整型**
配合pageNumber使用且不能大于200, 默认值 10
 * @method string getSortColumn() 获取**查询结果排序字段**

- SCHEDULE_DATE 表示 根据计划调度时间排序
- START_TIME 表示 根据实例开始执行时间排序
- END_TIME 表示 根据实例结束执行时间排序
- COST_TIME 表示 根据实例执行时长排序
 * @method void setSortColumn(string $SortColumn) 设置**查询结果排序字段**

- SCHEDULE_DATE 表示 根据计划调度时间排序
- START_TIME 表示 根据实例开始执行时间排序
- END_TIME 表示 根据实例结束执行时间排序
- COST_TIME 表示 根据实例执行时长排序
 * @method string getSortType() 获取**实例排序方式**

- ASC 
- DESC
 * @method void setSortType(string $SortType) 设置**实例排序方式**

- ASC 
- DESC
 * @method integer getInstanceType() 获取**实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
 * @method void setInstanceType(integer $InstanceType) 设置**实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
 * @method array getInstanceStateList() 获取**实例执行状态**
支持过滤多个，条件间为 或 的过滤关系

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
 * @method void setInstanceStateList(array $InstanceStateList) 设置**实例执行状态**
支持过滤多个，条件间为 或 的过滤关系

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
 * @method array getTaskTypeIdList() 获取**任务类型Id**

- 支持过滤多个，条件间为 或 的过滤关系
- 可以通过接口 DescribeAllTaskType 获取项目支持的全部任务类型
 * @method void setTaskTypeIdList(array $TaskTypeIdList) 设置**任务类型Id**

- 支持过滤多个，条件间为 或 的过滤关系
- 可以通过接口 DescribeAllTaskType 获取项目支持的全部任务类型
 * @method array getTaskCycleList() 获取**任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
 * @method void setTaskCycleList(array $TaskCycleList) 设置**任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
 * @method string getKeyword() 获取**任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
 * @method void setKeyword(string $Keyword) 设置**任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
 * @method array getInChargeList() 获取**任务负责人**
支持过滤多个，条件间为 或 的过滤关系
 * @method void setInChargeList(array $InChargeList) 设置**任务负责人**
支持过滤多个，条件间为 或 的过滤关系
 * @method array getTaskFolderIdList() 获取**任务所属文件件**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 FindAllFolder 获取项目下的所有文件夹列表
 * @method void setTaskFolderIdList(array $TaskFolderIdList) 设置**任务所属文件件**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 FindAllFolder 获取项目下的所有文件夹列表
 * @method array getWorkflowIdList() 获取**任务所属工作流**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeOpsWorkflows 获取项目下的所有工作流列表
 * @method void setWorkflowIdList(array $WorkflowIdList) 设置**任务所属工作流**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeOpsWorkflows 获取项目下的所有工作流列表
 * @method array getExecutorGroupIdList() 获取**执行资源组Id**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeNormalSchedulerExecutorGroups 获取项目下的所有调度资源组列表
可以通过接口 DescribeNormalIntegrationExecutorGroups 获取项目下的所有集成资源组列表
 * @method void setExecutorGroupIdList(array $ExecutorGroupIdList) 设置**执行资源组Id**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeNormalSchedulerExecutorGroups 获取项目下的所有调度资源组列表
可以通过接口 DescribeNormalIntegrationExecutorGroups 获取项目下的所有集成资源组列表
 * @method string getStartTimeFrom() 获取**实例执行开始时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setStartTimeFrom(string $StartTimeFrom) 设置**实例执行开始时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getStartTimeTo() 获取**实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setStartTimeTo(string $StartTimeTo) 设置**实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getScheduleTimeZone() 获取**时区**
timeZone, 默认UTC+8
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置**时区**
timeZone, 默认UTC+8
 * @method string getLastUpdateTimeFrom() 获取**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setLastUpdateTimeFrom(string $LastUpdateTimeFrom) 设置**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method string getLastUpdateTimeTo() 获取**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 * @method void setLastUpdateTimeTo(string $LastUpdateTimeTo) 设置**实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
 */
class ListInstancesRequest extends AbstractModel
{
    /**
     * @var string **项目ID**
     */
    public $ProjectId;

    /**
     * @var string **实例计划调度时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $ScheduleTimeFrom;

    /**
     * @var string **实例计划调度时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $ScheduleTimeTo;

    /**
     * @var integer **页码，整型**
配合pageSize使用且不能小于1， 默认值1
     */
    public $PageNumber;

    /**
     * @var integer **每页数目，整型**
配合pageNumber使用且不能大于200, 默认值 10
     */
    public $PageSize;

    /**
     * @var string **查询结果排序字段**

- SCHEDULE_DATE 表示 根据计划调度时间排序
- START_TIME 表示 根据实例开始执行时间排序
- END_TIME 表示 根据实例结束执行时间排序
- COST_TIME 表示 根据实例执行时长排序
     */
    public $SortColumn;

    /**
     * @var string **实例排序方式**

- ASC 
- DESC
     */
    public $SortType;

    /**
     * @var integer **实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
     */
    public $InstanceType;

    /**
     * @var array **实例执行状态**
支持过滤多个，条件间为 或 的过滤关系

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
     */
    public $InstanceStateList;

    /**
     * @var array **任务类型Id**

- 支持过滤多个，条件间为 或 的过滤关系
- 可以通过接口 DescribeAllTaskType 获取项目支持的全部任务类型
     */
    public $TaskTypeIdList;

    /**
     * @var array **任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
     */
    public $TaskCycleList;

    /**
     * @var string **任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
     */
    public $Keyword;

    /**
     * @var array **任务负责人**
支持过滤多个，条件间为 或 的过滤关系
     */
    public $InChargeList;

    /**
     * @var array **任务所属文件件**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 FindAllFolder 获取项目下的所有文件夹列表
     */
    public $TaskFolderIdList;

    /**
     * @var array **任务所属工作流**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeOpsWorkflows 获取项目下的所有工作流列表
     */
    public $WorkflowIdList;

    /**
     * @var array **执行资源组Id**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeNormalSchedulerExecutorGroups 获取项目下的所有调度资源组列表
可以通过接口 DescribeNormalIntegrationExecutorGroups 获取项目下的所有集成资源组列表
     */
    public $ExecutorGroupIdList;

    /**
     * @var string **实例执行开始时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $StartTimeFrom;

    /**
     * @var string **实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     */
    public $StartTimeTo;

    /**
     * @var string **时区**
timeZone, 默认UTC+8
     */
    public $ScheduleTimeZone;

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
     * @param string $ProjectId **项目ID**
     * @param string $ScheduleTimeFrom **实例计划调度时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $ScheduleTimeTo **实例计划调度时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param integer $PageNumber **页码，整型**
配合pageSize使用且不能小于1， 默认值1
     * @param integer $PageSize **每页数目，整型**
配合pageNumber使用且不能大于200, 默认值 10
     * @param string $SortColumn **查询结果排序字段**

- SCHEDULE_DATE 表示 根据计划调度时间排序
- START_TIME 表示 根据实例开始执行时间排序
- END_TIME 表示 根据实例结束执行时间排序
- COST_TIME 表示 根据实例执行时长排序
     * @param string $SortType **实例排序方式**

- ASC 
- DESC
     * @param integer $InstanceType **实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
     * @param array $InstanceStateList **实例执行状态**
支持过滤多个，条件间为 或 的过滤关系

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
     * @param array $TaskTypeIdList **任务类型Id**

- 支持过滤多个，条件间为 或 的过滤关系
- 可以通过接口 DescribeAllTaskType 获取项目支持的全部任务类型
     * @param array $TaskCycleList **任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
     * @param string $Keyword **任务名称 或 任务ID**
支持模糊搜索过滤, 多个用 英文逗号, 分割
     * @param array $InChargeList **任务负责人**
支持过滤多个，条件间为 或 的过滤关系
     * @param array $TaskFolderIdList **任务所属文件件**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 FindAllFolder 获取项目下的所有文件夹列表
     * @param array $WorkflowIdList **任务所属工作流**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeOpsWorkflows 获取项目下的所有工作流列表
     * @param array $ExecutorGroupIdList **执行资源组Id**
支持过滤多个，条件间为 或 的过滤关系
可以通过接口 DescribeNormalSchedulerExecutorGroups 获取项目下的所有调度资源组列表
可以通过接口 DescribeNormalIntegrationExecutorGroups 获取项目下的所有集成资源组列表
     * @param string $StartTimeFrom **实例执行开始时间过滤条件**
过滤起始时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $StartTimeTo **实例执行开始时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $ScheduleTimeZone **时区**
timeZone, 默认UTC+8
     * @param string $LastUpdateTimeFrom **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
     * @param string $LastUpdateTimeTo **实例最近更新时间过滤条件**
过滤截止时间，时间格式为 yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("ScheduleTimeFrom",$param) and $param["ScheduleTimeFrom"] !== null) {
            $this->ScheduleTimeFrom = $param["ScheduleTimeFrom"];
        }

        if (array_key_exists("ScheduleTimeTo",$param) and $param["ScheduleTimeTo"] !== null) {
            $this->ScheduleTimeTo = $param["ScheduleTimeTo"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortColumn",$param) and $param["SortColumn"] !== null) {
            $this->SortColumn = $param["SortColumn"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStateList",$param) and $param["InstanceStateList"] !== null) {
            $this->InstanceStateList = $param["InstanceStateList"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("TaskCycleList",$param) and $param["TaskCycleList"] !== null) {
            $this->TaskCycleList = $param["TaskCycleList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskFolderIdList",$param) and $param["TaskFolderIdList"] !== null) {
            $this->TaskFolderIdList = $param["TaskFolderIdList"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("LastUpdateTimeFrom",$param) and $param["LastUpdateTimeFrom"] !== null) {
            $this->LastUpdateTimeFrom = $param["LastUpdateTimeFrom"];
        }

        if (array_key_exists("LastUpdateTimeTo",$param) and $param["LastUpdateTimeTo"] !== null) {
            $this->LastUpdateTimeTo = $param["LastUpdateTimeTo"];
        }
    }
}
