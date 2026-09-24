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
 * 入站作业摘要（DescribeJobList.Items[] 元素）.
 *
 * @method string getJobId() 获取<p>作业唯一标识.</p>
 * @method void setJobId(string $JobId) 设置<p>作业唯一标识.</p>
 * @method string getJobName() 获取<p>作业名称.</p>
 * @method void setJobName(string $JobName) 设置<p>作业名称.</p>
 * @method string getCreatorSubUin() 获取<p>创建/提交者子账号 UIN。</p>
 * @method void setCreatorSubUin(string $CreatorSubUin) 设置<p>创建/提交者子账号 UIN。</p>
 * @method string getState() 获取<p>作业状态.</p>
 * @method void setState(string $State) 设置<p>作业状态.</p>
 * @method string getMajorType() 获取<p>引擎大类.</p>
 * @method void setMajorType(string $MajorType) 设置<p>引擎大类.</p>
 * @method string getMinorType() 获取<p>引擎子类型.</p>
 * @method void setMinorType(string $MinorType) 设置<p>引擎子类型.</p>
 * @method string getRunMode() 获取<p>运行模式（WAREHOUSE / JOB）.</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式（WAREHOUSE / JOB）.</p>
 * @method string getWarehouseId() 获取<p>计算仓库 ID，RunMode=WAREHOUSE 时非空.</p>
 * @method void setWarehouseId(string $WarehouseId) 设置<p>计算仓库 ID，RunMode=WAREHOUSE 时非空.</p>
 * @method string getPartitionCode() 获取<p>资源分区编码.</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>资源分区编码.</p>
 * @method string getPartitionName() 获取<p>资源分区展示名（解析不到时为空）.</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>资源分区展示名（解析不到时为空）.</p>
 * @method string getQueueName() 获取<p>队列名称.</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称.</p>
 * @method string getCheckpointLocation() 获取<p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method void setCheckpointLocation(string $CheckpointLocation) 设置<p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method integer getCreateTime() 获取<p>创建时间（Unix 毫秒时间戳）.</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（Unix 毫秒时间戳）.</p>
 * @method integer getSubmitTime() 获取<p>提交时间（Unix 毫秒时间戳）.</p>
 * @method void setSubmitTime(integer $SubmitTime) 设置<p>提交时间（Unix 毫秒时间戳）.</p>
 * @method integer getFinishTime() 获取<p>完成时间（Unix 毫秒时间戳）.</p>
 * @method void setFinishTime(integer $FinishTime) 设置<p>完成时间（Unix 毫秒时间戳）.</p>
 * @method integer getRunningTimeMs() 获取<p>运行时长（毫秒）.</p>
 * @method void setRunningTimeMs(integer $RunningTimeMs) 设置<p>运行时长（毫秒）.</p>
 * @method string getWarehouseName() 获取<p>计算仓库名称（列表整页批量反查填充；warehouse 模式下非空）.</p>
 * @method void setWarehouseName(string $WarehouseName) 设置<p>计算仓库名称（列表整页批量反查填充；warehouse 模式下非空）.</p>
 */
class JobBriefInfo extends AbstractModel
{
    /**
     * @var string <p>作业唯一标识.</p>
     */
    public $JobId;

    /**
     * @var string <p>作业名称.</p>
     */
    public $JobName;

    /**
     * @var string <p>创建/提交者子账号 UIN。</p>
     */
    public $CreatorSubUin;

    /**
     * @var string <p>作业状态.</p>
     */
    public $State;

    /**
     * @var string <p>引擎大类.</p>
     */
    public $MajorType;

    /**
     * @var string <p>引擎子类型.</p>
     */
    public $MinorType;

    /**
     * @var string <p>运行模式（WAREHOUSE / JOB）.</p>
     */
    public $RunMode;

    /**
     * @var string <p>计算仓库 ID，RunMode=WAREHOUSE 时非空.</p>
     */
    public $WarehouseId;

    /**
     * @var string <p>资源分区编码.</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>资源分区展示名（解析不到时为空）.</p>
     */
    public $PartitionName;

    /**
     * @var string <p>队列名称.</p>
     */
    public $QueueName;

    /**
     * @var string <p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     */
    public $CheckpointLocation;

    /**
     * @var integer <p>创建时间（Unix 毫秒时间戳）.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>提交时间（Unix 毫秒时间戳）.</p>
     */
    public $SubmitTime;

    /**
     * @var integer <p>完成时间（Unix 毫秒时间戳）.</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>运行时长（毫秒）.</p>
     */
    public $RunningTimeMs;

    /**
     * @var string <p>计算仓库名称（列表整页批量反查填充；warehouse 模式下非空）.</p>
     */
    public $WarehouseName;

    /**
     * @param string $JobId <p>作业唯一标识.</p>
     * @param string $JobName <p>作业名称.</p>
     * @param string $CreatorSubUin <p>创建/提交者子账号 UIN。</p>
     * @param string $State <p>作业状态.</p>
     * @param string $MajorType <p>引擎大类.</p>
     * @param string $MinorType <p>引擎子类型.</p>
     * @param string $RunMode <p>运行模式（WAREHOUSE / JOB）.</p>
     * @param string $WarehouseId <p>计算仓库 ID，RunMode=WAREHOUSE 时非空.</p>
     * @param string $PartitionCode <p>资源分区编码.</p>
     * @param string $PartitionName <p>资源分区展示名（解析不到时为空）.</p>
     * @param string $QueueName <p>队列名称.</p>
     * @param string $CheckpointLocation <p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     * @param integer $CreateTime <p>创建时间（Unix 毫秒时间戳）.</p>
     * @param integer $SubmitTime <p>提交时间（Unix 毫秒时间戳）.</p>
     * @param integer $FinishTime <p>完成时间（Unix 毫秒时间戳）.</p>
     * @param integer $RunningTimeMs <p>运行时长（毫秒）.</p>
     * @param string $WarehouseName <p>计算仓库名称（列表整页批量反查填充；warehouse 模式下非空）.</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CreatorSubUin",$param) and $param["CreatorSubUin"] !== null) {
            $this->CreatorSubUin = $param["CreatorSubUin"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("MajorType",$param) and $param["MajorType"] !== null) {
            $this->MajorType = $param["MajorType"];
        }

        if (array_key_exists("MinorType",$param) and $param["MinorType"] !== null) {
            $this->MinorType = $param["MinorType"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("WarehouseId",$param) and $param["WarehouseId"] !== null) {
            $this->WarehouseId = $param["WarehouseId"];
        }

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("CheckpointLocation",$param) and $param["CheckpointLocation"] !== null) {
            $this->CheckpointLocation = $param["CheckpointLocation"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("RunningTimeMs",$param) and $param["RunningTimeMs"] !== null) {
            $this->RunningTimeMs = $param["RunningTimeMs"];
        }

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
        }
    }
}
