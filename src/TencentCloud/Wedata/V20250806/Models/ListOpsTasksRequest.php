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
 * ListOpsTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目Id	
 * @method void setProjectId(string $ProjectId) 设置项目Id	
 * @method string getPageSize() 获取分页大小
 * @method void setPageSize(string $PageSize) 设置分页大小
 * @method string getPageNumber() 获取分页页码
 * @method void setPageNumber(string $PageNumber) 设置分页页码
 * @method string getTaskTypeId() 获取任务类型Id 
 - 20：通用数据同步
 - 25：ETLTaskType
 - 26：ETLTaskType
 - 30：python
 - 31：pyspark
 - 34：HiveSQLTaskType
 - 35：shell
 - 36：SparkSQLTaskType
 - 21：JDBCSQLTaskType
 - 32：DLCTaskType
 - 33：ImpalaTaskType
 - 40：CDWTaskType
 - 41：kettle
 - 46：DLCSparkTaskType
 - 47：TiOne机器学习
 - 48：TrinoTaskType
 - 50：DLCPyspark39：spark
 - 92：mr
 - 38：shell脚本
 - 70：hivesql脚本
 - 1000：自定义业务通用
 * @method void setTaskTypeId(string $TaskTypeId) 设置任务类型Id 
 - 20：通用数据同步
 - 25：ETLTaskType
 - 26：ETLTaskType
 - 30：python
 - 31：pyspark
 - 34：HiveSQLTaskType
 - 35：shell
 - 36：SparkSQLTaskType
 - 21：JDBCSQLTaskType
 - 32：DLCTaskType
 - 33：ImpalaTaskType
 - 40：CDWTaskType
 - 41：kettle
 - 46：DLCSparkTaskType
 - 47：TiOne机器学习
 - 48：TrinoTaskType
 - 50：DLCPyspark39：spark
 - 92：mr
 - 38：shell脚本
 - 70：hivesql脚本
 - 1000：自定义业务通用
 * @method string getWorkflowId() 获取工作流Id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流Id
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getOwnerUin() 获取责任人id
 * @method void setOwnerUin(string $OwnerUin) 设置责任人id
 * @method string getFolderId() 获取文件夹Id
 * @method void setFolderId(string $FolderId) 设置文件夹Id
 * @method string getSourceServiceId() 获取数据源id
 * @method void setSourceServiceId(string $SourceServiceId) 设置数据源id
 * @method string getTargetServiceId() 获取目标数据源id
 * @method void setTargetServiceId(string $TargetServiceId) 设置目标数据源id
 * @method string getExecutorGroupId() 获取资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置资源组id
 * @method string getCycleType() 获取任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
 * @method void setCycleType(string $CycleType) 设置任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
 * @method string getStatus() 获取任务状态:
- Y: 运行
- F: 停止
- O: 冻结
- T: 停止中
- INVALID: 已失效
 * @method void setStatus(string $Status) 设置任务状态:
- Y: 运行
- F: 停止
- O: 冻结
- T: 停止中
- INVALID: 已失效
 * @method string getTimeZone() 获取时区, 默认默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置时区, 默认默认UTC+8
 */
class ListOpsTasksRequest extends AbstractModel
{
    /**
     * @var string 项目Id	
     */
    public $ProjectId;

    /**
     * @var string 分页大小
     */
    public $PageSize;

    /**
     * @var string 分页页码
     */
    public $PageNumber;

    /**
     * @var string 任务类型Id 
 - 20：通用数据同步
 - 25：ETLTaskType
 - 26：ETLTaskType
 - 30：python
 - 31：pyspark
 - 34：HiveSQLTaskType
 - 35：shell
 - 36：SparkSQLTaskType
 - 21：JDBCSQLTaskType
 - 32：DLCTaskType
 - 33：ImpalaTaskType
 - 40：CDWTaskType
 - 41：kettle
 - 46：DLCSparkTaskType
 - 47：TiOne机器学习
 - 48：TrinoTaskType
 - 50：DLCPyspark39：spark
 - 92：mr
 - 38：shell脚本
 - 70：hivesql脚本
 - 1000：自定义业务通用
     */
    public $TaskTypeId;

    /**
     * @var string 工作流Id
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 责任人id
     */
    public $OwnerUin;

    /**
     * @var string 文件夹Id
     */
    public $FolderId;

    /**
     * @var string 数据源id
     */
    public $SourceServiceId;

    /**
     * @var string 目标数据源id
     */
    public $TargetServiceId;

    /**
     * @var string 资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var string 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
     */
    public $CycleType;

    /**
     * @var string 任务状态:
- Y: 运行
- F: 停止
- O: 冻结
- T: 停止中
- INVALID: 已失效
     */
    public $Status;

    /**
     * @var string 时区, 默认默认UTC+8
     */
    public $TimeZone;

    /**
     * @param string $ProjectId 项目Id	
     * @param string $PageSize 分页大小
     * @param string $PageNumber 分页页码
     * @param string $TaskTypeId 任务类型Id 
 - 20：通用数据同步
 - 25：ETLTaskType
 - 26：ETLTaskType
 - 30：python
 - 31：pyspark
 - 34：HiveSQLTaskType
 - 35：shell
 - 36：SparkSQLTaskType
 - 21：JDBCSQLTaskType
 - 32：DLCTaskType
 - 33：ImpalaTaskType
 - 40：CDWTaskType
 - 41：kettle
 - 46：DLCSparkTaskType
 - 47：TiOne机器学习
 - 48：TrinoTaskType
 - 50：DLCPyspark39：spark
 - 92：mr
 - 38：shell脚本
 - 70：hivesql脚本
 - 1000：自定义业务通用
     * @param string $WorkflowId 工作流Id
     * @param string $WorkflowName 工作流名称
     * @param string $OwnerUin 责任人id
     * @param string $FolderId 文件夹Id
     * @param string $SourceServiceId 数据源id
     * @param string $TargetServiceId 目标数据源id
     * @param string $ExecutorGroupId 资源组id
     * @param string $CycleType 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
     * @param string $Status 任务状态:
- Y: 运行
- F: 停止
- O: 冻结
- T: 停止中
- INVALID: 已失效
     * @param string $TimeZone 时区, 默认默认UTC+8
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
