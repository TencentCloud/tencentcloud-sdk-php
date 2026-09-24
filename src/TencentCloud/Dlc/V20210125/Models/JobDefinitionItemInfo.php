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
 * 作业定义列表项 POJO（精简版）.
 *
 * @method string getJobDefinitionId() 获取<p>作业定义唯一标识符（ID）。</p>
 * @method void setJobDefinitionId(string $JobDefinitionId) 设置<p>作业定义唯一标识符（ID）。</p>
 * @method string getName() 获取<p>作业定义名称。</p>
 * @method void setName(string $Name) 设置<p>作业定义名称。</p>
 * @method string getDescription() 获取<p>作业定义描述。</p>
 * @method void setDescription(string $Description) 设置<p>作业定义描述。</p>
 * @method string getMajorType() 获取<p>作业主类型。</p>
 * @method void setMajorType(string $MajorType) 设置<p>作业主类型。</p>
 * @method string getMinorType() 获取<p>作业子类型。</p>
 * @method void setMinorType(string $MinorType) 设置<p>作业子类型。</p>
 * @method string getCheckpointLocation() 获取<p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method void setCheckpointLocation(string $CheckpointLocation) 设置<p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method string getCreatorSubUin() 获取<p>创建者（子账号 UIN）。</p>
 * @method void setCreatorSubUin(string $CreatorSubUin) 设置<p>创建者（子账号 UIN）。</p>
 * @method integer getCreateTime() 获取<p>创建时间（Unix 毫秒时间戳）。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（Unix 毫秒时间戳）。</p>
 * @method integer getUpdateTime() 获取<p>更新时间（Unix 毫秒时间戳）。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（Unix 毫秒时间戳）。</p>
 * @method string getPartitionCode() 获取<p>分区编码。</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码。</p>
 * @method string getPartitionName() 获取<p>分区展示名（解析不到时为空）。</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>分区展示名（解析不到时为空）。</p>
 * @method string getQueueName() 获取<p>队列名称。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。</p>
 * @method string getRunMode() 获取<p>运行模式: JOB | WAREHOUSE.</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式: JOB | WAREHOUSE.</p>
 * @method string getWarehouseId() 获取<p>计算仓库 ID, RunMode=WAREHOUSE 时非空.</p>
 * @method void setWarehouseId(string $WarehouseId) 设置<p>计算仓库 ID, RunMode=WAREHOUSE 时非空.</p>
 * @method integer getInstanceCount() 获取<p>请求时间窗口（InstanceTimeRange，默认 7 天）内的作业实例数。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>请求时间窗口（InstanceTimeRange，默认 7 天）内的作业实例数。</p>
 * @method string getRuntimeCode() 获取<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。JOB 模式取定义自身配置，WAREHOUSE 模式取所属计算仓库运行时；解析不到时为空。</p>
 * @method void setRuntimeCode(string $RuntimeCode) 设置<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。JOB 模式取定义自身配置，WAREHOUSE 模式取所属计算仓库运行时；解析不到时为空。</p>
 * @method string getRuntimeName() 获取<p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空。</p>
 * @method void setRuntimeName(string $RuntimeName) 设置<p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空。</p>
 * @method string getWarehouseName() 获取<p>计算仓库名称（列表整页按去重后的仓库反查填充；warehouse 模式下非空，仓库已销毁时仍回填历史名称）。</p>
 * @method void setWarehouseName(string $WarehouseName) 设置<p>计算仓库名称（列表整页按去重后的仓库反查填充；warehouse 模式下非空，仓库已销毁时仍回填历史名称）。</p>
 */
class JobDefinitionItemInfo extends AbstractModel
{
    /**
     * @var string <p>作业定义唯一标识符（ID）。</p>
     */
    public $JobDefinitionId;

    /**
     * @var string <p>作业定义名称。</p>
     */
    public $Name;

    /**
     * @var string <p>作业定义描述。</p>
     */
    public $Description;

    /**
     * @var string <p>作业主类型。</p>
     */
    public $MajorType;

    /**
     * @var string <p>作业子类型。</p>
     */
    public $MinorType;

    /**
     * @var string <p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     */
    public $CheckpointLocation;

    /**
     * @var string <p>创建者（子账号 UIN）。</p>
     */
    public $CreatorSubUin;

    /**
     * @var integer <p>创建时间（Unix 毫秒时间戳）。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（Unix 毫秒时间戳）。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>分区编码。</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>分区展示名（解析不到时为空）。</p>
     */
    public $PartitionName;

    /**
     * @var string <p>队列名称。</p>
     */
    public $QueueName;

    /**
     * @var string <p>运行模式: JOB | WAREHOUSE.</p>
     */
    public $RunMode;

    /**
     * @var string <p>计算仓库 ID, RunMode=WAREHOUSE 时非空.</p>
     */
    public $WarehouseId;

    /**
     * @var integer <p>请求时间窗口（InstanceTimeRange，默认 7 天）内的作业实例数。</p>
     */
    public $InstanceCount;

    /**
     * @var string <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。JOB 模式取定义自身配置，WAREHOUSE 模式取所属计算仓库运行时；解析不到时为空。</p>
     */
    public $RuntimeCode;

    /**
     * @var string <p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空。</p>
     */
    public $RuntimeName;

    /**
     * @var string <p>计算仓库名称（列表整页按去重后的仓库反查填充；warehouse 模式下非空，仓库已销毁时仍回填历史名称）。</p>
     */
    public $WarehouseName;

    /**
     * @param string $JobDefinitionId <p>作业定义唯一标识符（ID）。</p>
     * @param string $Name <p>作业定义名称。</p>
     * @param string $Description <p>作业定义描述。</p>
     * @param string $MajorType <p>作业主类型。</p>
     * @param string $MinorType <p>作业子类型。</p>
     * @param string $CheckpointLocation <p>流作业 checkpoint 路径（MinorType=SPARK_STREAM 时非空）。同一流作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     * @param string $CreatorSubUin <p>创建者（子账号 UIN）。</p>
     * @param integer $CreateTime <p>创建时间（Unix 毫秒时间戳）。</p>
     * @param integer $UpdateTime <p>更新时间（Unix 毫秒时间戳）。</p>
     * @param string $PartitionCode <p>分区编码。</p>
     * @param string $PartitionName <p>分区展示名（解析不到时为空）。</p>
     * @param string $QueueName <p>队列名称。</p>
     * @param string $RunMode <p>运行模式: JOB | WAREHOUSE.</p>
     * @param string $WarehouseId <p>计算仓库 ID, RunMode=WAREHOUSE 时非空.</p>
     * @param integer $InstanceCount <p>请求时间窗口（InstanceTimeRange，默认 7 天）内的作业实例数。</p>
     * @param string $RuntimeCode <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。JOB 模式取定义自身配置，WAREHOUSE 模式取所属计算仓库运行时；解析不到时为空。</p>
     * @param string $RuntimeName <p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空。</p>
     * @param string $WarehouseName <p>计算仓库名称（列表整页按去重后的仓库反查填充；warehouse 模式下非空，仓库已销毁时仍回填历史名称）。</p>
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
        if (array_key_exists("JobDefinitionId",$param) and $param["JobDefinitionId"] !== null) {
            $this->JobDefinitionId = $param["JobDefinitionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MajorType",$param) and $param["MajorType"] !== null) {
            $this->MajorType = $param["MajorType"];
        }

        if (array_key_exists("MinorType",$param) and $param["MinorType"] !== null) {
            $this->MinorType = $param["MinorType"];
        }

        if (array_key_exists("CheckpointLocation",$param) and $param["CheckpointLocation"] !== null) {
            $this->CheckpointLocation = $param["CheckpointLocation"];
        }

        if (array_key_exists("CreatorSubUin",$param) and $param["CreatorSubUin"] !== null) {
            $this->CreatorSubUin = $param["CreatorSubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("WarehouseId",$param) and $param["WarehouseId"] !== null) {
            $this->WarehouseId = $param["WarehouseId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RuntimeCode",$param) and $param["RuntimeCode"] !== null) {
            $this->RuntimeCode = $param["RuntimeCode"];
        }

        if (array_key_exists("RuntimeName",$param) and $param["RuntimeName"] !== null) {
            $this->RuntimeName = $param["RuntimeName"];
        }

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
        }
    }
}
