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
 * CreateJobDefinition请求参数结构体
 *
 * @method string getName() 获取<p>作业定义名称。必填，trim 后非空。</p>
 * @method void setName(string $Name) 设置<p>作业定义名称。必填，trim 后非空。</p>
 * @method string getDescription() 获取<p>作业定义描述。</p>
 * @method void setDescription(string $Description) 设置<p>作业定义描述。</p>
 * @method string getMajorType() 获取<p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
 * @method void setMajorType(string $MajorType) 设置<p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
 * @method string getMinorType() 获取<p>作业子类型，SPARK_SQL / SPARK_BATCH / SPARK_STREAM，必填；决定 Entrypoint 字段的校验规则。</p>
 * @method void setMinorType(string $MinorType) 设置<p>作业子类型，SPARK_SQL / SPARK_BATCH / SPARK_STREAM，必填；决定 Entrypoint 字段的校验规则。</p>
 * @method string getCheckpointLocation() 获取<p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method void setCheckpointLocation(string $CheckpointLocation) 设置<p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method string getPartitionCode() 获取<p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传（被仓库反查值覆盖）。</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传（被仓库反查值覆盖）。</p>
 * @method string getQueueName() 获取<p>队列名称，仅 RunMode=JOB 可传且须与 PartitionCode 成对；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称，仅 RunMode=JOB 可传且须与 PartitionCode 成对；RunMode=WAREHOUSE 时禁止传。</p>
 * @method string getRuntimeCode() 获取<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 新建时必填（无基座继承语义）；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时忽略。</p>
 * @method void setRuntimeCode(string $RuntimeCode) 设置<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 新建时必填（无基座继承语义）；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时忽略。</p>
 * @method string getSysCatalogVersion() 获取<p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 新建时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setSysCatalogVersion(string $SysCatalogVersion) 设置<p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 新建时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时禁止传。</p>
 * @method string getCustomProperties() 获取<p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
 * @method void setCustomProperties(string $CustomProperties) 设置<p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
 * @method array getEnvVars() 获取<p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
 * @method string getRunMode() 获取<p>运行模式，必填。可选值：WAREHOUSE（提交到计算仓库执行）/ JOB（按 Spec 独享资源）。两种模式的参数集严格隔离，详见各字段说明。</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，必填。可选值：WAREHOUSE（提交到计算仓库执行）/ JOB（按 Spec 独享资源）。两种模式的参数集严格隔离，详见各字段说明。</p>
 * @method string getWarehouseId() 获取<p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需可启动）；RunMode=JOB 时禁止传。</p>
 * @method void setWarehouseId(string $WarehouseId) 设置<p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需可启动）；RunMode=JOB 时禁止传。</p>
 */
class CreateJobDefinitionRequest extends AbstractModel
{
    /**
     * @var string <p>作业定义名称。必填，trim 后非空。</p>
     */
    public $Name;

    /**
     * @var string <p>作业定义描述。</p>
     */
    public $Description;

    /**
     * @var string <p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
     */
    public $MajorType;

    /**
     * @var string <p>作业子类型，SPARK_SQL / SPARK_BATCH / SPARK_STREAM，必填；决定 Entrypoint 字段的校验规则。</p>
     */
    public $MinorType;

    /**
     * @var string <p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     */
    public $CheckpointLocation;

    /**
     * @var string <p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传（被仓库反查值覆盖）。</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>队列名称，仅 RunMode=JOB 可传且须与 PartitionCode 成对；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $QueueName;

    /**
     * @var string <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 新建时必填（无基座继承语义）；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时忽略。</p>
     */
    public $RuntimeCode;

    /**
     * @var string <p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 新建时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $SysCatalogVersion;

    /**
     * @var string <p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
     */
    public $CustomProperties;

    /**
     * @var array <p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $EnvVars;

    /**
     * @var string <p>运行模式，必填。可选值：WAREHOUSE（提交到计算仓库执行）/ JOB（按 Spec 独享资源）。两种模式的参数集严格隔离，详见各字段说明。</p>
     */
    public $RunMode;

    /**
     * @var string <p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需可启动）；RunMode=JOB 时禁止传。</p>
     */
    public $WarehouseId;

    /**
     * @param string $Name <p>作业定义名称。必填，trim 后非空。</p>
     * @param string $Description <p>作业定义描述。</p>
     * @param string $MajorType <p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
     * @param string $MinorType <p>作业子类型，SPARK_SQL / SPARK_BATCH / SPARK_STREAM，必填；决定 Entrypoint 字段的校验规则。</p>
     * @param string $CheckpointLocation <p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     * @param string $PartitionCode <p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传（被仓库反查值覆盖）。</p>
     * @param string $QueueName <p>队列名称，仅 RunMode=JOB 可传且须与 PartitionCode 成对；RunMode=WAREHOUSE 时禁止传。</p>
     * @param string $RuntimeCode <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 新建时必填（无基座继承语义）；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时忽略。</p>
     * @param string $SysCatalogVersion <p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 新建时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；克隆场景可省略（继承源定义快照）；RunMode=WAREHOUSE 时禁止传。</p>
     * @param string $CustomProperties <p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
     * @param array $EnvVars <p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
     * @param string $RunMode <p>运行模式，必填。可选值：WAREHOUSE（提交到计算仓库执行）/ JOB（按 Spec 独享资源）。两种模式的参数集严格隔离，详见各字段说明。</p>
     * @param string $WarehouseId <p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需可启动）；RunMode=JOB 时禁止传。</p>
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

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("RuntimeCode",$param) and $param["RuntimeCode"] !== null) {
            $this->RuntimeCode = $param["RuntimeCode"];
        }

        if (array_key_exists("SysCatalogVersion",$param) and $param["SysCatalogVersion"] !== null) {
            $this->SysCatalogVersion = $param["SysCatalogVersion"];
        }

        if (array_key_exists("CustomProperties",$param) and $param["CustomProperties"] !== null) {
            $this->CustomProperties = $param["CustomProperties"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("WarehouseId",$param) and $param["WarehouseId"] !== null) {
            $this->WarehouseId = $param["WarehouseId"];
        }
    }
}
