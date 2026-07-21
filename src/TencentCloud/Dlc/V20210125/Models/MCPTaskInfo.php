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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mcp 请求任务详情的返回
 *
 * @method string getId() 获取<p>任务 ID</p>
 * @method void setId(string $Id) 设置<p>任务 ID</p>
 * @method string getBatchId() 获取<p>BatchId</p>
 * @method void setBatchId(string $BatchId) 设置<p>BatchId</p>
 * @method integer getState() 获取<p>状态</p>
 * @method void setState(integer $State) 设置<p>状态</p>
 * @method string getTaskType() 获取<p>任务类型</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p>
 * @method string getTaskKind() 获取<p>任务类型</p>
 * @method void setTaskKind(string $TaskKind) 设置<p>任务类型</p>
 * @method string getEngineTypeDetail() 获取<p>引擎详情</p>
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置<p>引擎详情</p>
 * @method string getSQLType() 获取<p>SQL 类型</p>
 * @method void setSQLType(string $SQLType) 设置<p>SQL 类型</p>
 * @method string getSQL() 获取<p>SQL</p>
 * @method void setSQL(string $SQL) 设置<p>SQL</p>
 * @method boolean getIsSQLCutOff() 获取<p>是否截断</p>
 * @method void setIsSQLCutOff(boolean $IsSQLCutOff) 设置<p>是否截断</p>
 * @method string getDatabaseName() 获取<p>数据库名称</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名称</p>
 * @method string getDataEngineId() 获取<p>引擎 ID</p>
 * @method void setDataEngineId(string $DataEngineId) 设置<p>引擎 ID</p>
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
 * @method string getSparkJobId() 获取<p>JobId</p>
 * @method void setSparkJobId(string $SparkJobId) 设置<p>JobId</p>
 * @method string getSparkJobName() 获取<p>Job 名称</p>
 * @method void setSparkJobName(string $SparkJobName) 设置<p>Job 名称</p>
 * @method string getOperateUin() 获取<p>操作人 Uin</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作人 Uin</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getUsedTime() 获取<p>引擎耗时</p><p>单位：毫秒</p>
 * @method void setUsedTime(integer $UsedTime) 设置<p>引擎耗时</p><p>单位：毫秒</p>
 * @method integer getTotalTime() 获取<p>执行总耗时</p><p>单位：毫秒</p>
 * @method void setTotalTime(integer $TotalTime) 设置<p>执行总耗时</p><p>单位：毫秒</p>
 * @method integer getProgress() 获取<p>进度</p>
 * @method void setProgress(integer $Progress) 设置<p>进度</p>
 * @method string getOutputMessage() 获取<p>输出信息</p>
 * @method void setOutputMessage(string $OutputMessage) 设置<p>输出信息</p>
 * @method string getDataSet() 获取<p>结果集</p>
 * @method void setDataSet(string $DataSet) 设置<p>结果集</p>
 */
class MCPTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $Id;

    /**
     * @var string <p>BatchId</p>
     */
    public $BatchId;

    /**
     * @var integer <p>状态</p>
     */
    public $State;

    /**
     * @var string <p>任务类型</p>
     */
    public $TaskType;

    /**
     * @var string <p>任务类型</p>
     */
    public $TaskKind;

    /**
     * @var string <p>引擎详情</p>
     */
    public $EngineTypeDetail;

    /**
     * @var string <p>SQL 类型</p>
     */
    public $SQLType;

    /**
     * @var string <p>SQL</p>
     */
    public $SQL;

    /**
     * @var boolean <p>是否截断</p>
     */
    public $IsSQLCutOff;

    /**
     * @var string <p>数据库名称</p>
     */
    public $DatabaseName;

    /**
     * @var string <p>引擎 ID</p>
     */
    public $DataEngineId;

    /**
     * @var string <p>资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @var string <p>JobId</p>
     */
    public $SparkJobId;

    /**
     * @var string <p>Job 名称</p>
     */
    public $SparkJobName;

    /**
     * @var string <p>操作人 Uin</p>
     */
    public $OperateUin;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>引擎耗时</p><p>单位：毫秒</p>
     */
    public $UsedTime;

    /**
     * @var integer <p>执行总耗时</p><p>单位：毫秒</p>
     */
    public $TotalTime;

    /**
     * @var integer <p>进度</p>
     */
    public $Progress;

    /**
     * @var string <p>输出信息</p>
     */
    public $OutputMessage;

    /**
     * @var string <p>结果集</p>
     */
    public $DataSet;

    /**
     * @param string $Id <p>任务 ID</p>
     * @param string $BatchId <p>BatchId</p>
     * @param integer $State <p>状态</p>
     * @param string $TaskType <p>任务类型</p>
     * @param string $TaskKind <p>任务类型</p>
     * @param string $EngineTypeDetail <p>引擎详情</p>
     * @param string $SQLType <p>SQL 类型</p>
     * @param string $SQL <p>SQL</p>
     * @param boolean $IsSQLCutOff <p>是否截断</p>
     * @param string $DatabaseName <p>数据库名称</p>
     * @param string $DataEngineId <p>引擎 ID</p>
     * @param string $ResourceGroupName <p>资源组名称</p>
     * @param string $SparkJobId <p>JobId</p>
     * @param string $SparkJobName <p>Job 名称</p>
     * @param string $OperateUin <p>操作人 Uin</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $UsedTime <p>引擎耗时</p><p>单位：毫秒</p>
     * @param integer $TotalTime <p>执行总耗时</p><p>单位：毫秒</p>
     * @param integer $Progress <p>进度</p>
     * @param string $OutputMessage <p>输出信息</p>
     * @param string $DataSet <p>结果集</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskKind",$param) and $param["TaskKind"] !== null) {
            $this->TaskKind = $param["TaskKind"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("IsSQLCutOff",$param) and $param["IsSQLCutOff"] !== null) {
            $this->IsSQLCutOff = $param["IsSQLCutOff"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("SparkJobId",$param) and $param["SparkJobId"] !== null) {
            $this->SparkJobId = $param["SparkJobId"];
        }

        if (array_key_exists("SparkJobName",$param) and $param["SparkJobName"] !== null) {
            $this->SparkJobName = $param["SparkJobName"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = $param["DataSet"];
        }
    }
}
