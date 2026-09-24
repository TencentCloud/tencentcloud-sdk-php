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
 * CreateJob请求参数结构体
 *
 * @method string getJobName() 获取<p>作业名称，长度 ≤256；可省略，省略时服务端回退为 JobId。</p>
 * @method void setJobName(string $JobName) 设置<p>作业名称，长度 ≤256；可省略，省略时服务端回退为 JobId。</p>
 * @method string getCheckpointLocation() 获取<p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method void setCheckpointLocation(string $CheckpointLocation) 设置<p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
 * @method string getMajorType() 获取<p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
 * @method void setMajorType(string $MajorType) 设置<p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
 * @method string getMinorType() 获取<p>作业子类型，决定入口形态：SPARK_SQL（SQL 作业，Entrypoint.Statement 必填）/ SPARK_BATCH（批处理作业，Entrypoint.EntryFile 必填）/ SPARK_STREAM（流作业，EntryFile 与 CheckpointLocation 必填）。</p>
 * @method void setMinorType(string $MinorType) 设置<p>作业子类型，决定入口形态：SPARK_SQL（SQL 作业，Entrypoint.Statement 必填）/ SPARK_BATCH（批处理作业，Entrypoint.EntryFile 必填）/ SPARK_STREAM（流作业，EntryFile 与 CheckpointLocation 必填）。</p>
 * @method string getFlowId() 获取<p>工作流实例关联 ID（长度 ≤64）：同一工作流/会话的多条 SQL 作业传相同 FlowId，可共享同一 Spark 会话、复用已就绪引擎。MinorType=SPARK_SQL 时必填；FlowId 非空时必须同时传 ExecutionId。WAREHOUSE 模式下 FlowId 即会话句柄（一个 FlowId 只对应一个会话）：会话过期或已销毁后须换新 FlowId，否则返回 FailedOperation.FlowIdNotExists。</p>
 * @method void setFlowId(string $FlowId) 设置<p>工作流实例关联 ID（长度 ≤64）：同一工作流/会话的多条 SQL 作业传相同 FlowId，可共享同一 Spark 会话、复用已就绪引擎。MinorType=SPARK_SQL 时必填；FlowId 非空时必须同时传 ExecutionId。WAREHOUSE 模式下 FlowId 即会话句柄（一个 FlowId 只对应一个会话）：会话过期或已销毁后须换新 FlowId，否则返回 FailedOperation.FlowIdNotExists。</p>
 * @method string getExecutionId() 获取<p>工作流内部执行标识（长度 ≤64），同一 FlowId 下每次提交须唯一（如自增序号/UUID）。用于重复提交防重：同一账号下命中未删除的同 (FlowId, ExecutionId) 作业时返回 FailedOperation.FlowExecutionConflict。FlowId 非空时必填（SPARK_SQL 因 FlowId 必填而必填）。</p>
 * @method void setExecutionId(string $ExecutionId) 设置<p>工作流内部执行标识（长度 ≤64），同一 FlowId 下每次提交须唯一（如自增序号/UUID）。用于重复提交防重：同一账号下命中未删除的同 (FlowId, ExecutionId) 作业时返回 FailedOperation.FlowExecutionConflict。FlowId 非空时必填（SPARK_SQL 因 FlowId 必填而必填）。</p>
 * @method string getRunMode() 获取<p>运行模式，必填。WAREHOUSE / JOB.</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，必填。WAREHOUSE / JOB.</p>
 * @method string getWarehouseId() 获取<p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需处于 RUNNING，或 STOPPED 且 AutoStart 开启（提交后冷启动拉起））；RunMode=JOB 时必须为空。</p>
 * @method void setWarehouseId(string $WarehouseId) 设置<p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需处于 RUNNING，或 STOPPED 且 AutoStart 开启（提交后冷启动拉起））；RunMode=JOB 时必须为空。</p>
 * @method string getRuntimeCode() 获取<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 时必填；RunMode=WAREHOUSE 时忽略。</p>
 * @method void setRuntimeCode(string $RuntimeCode) 设置<p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 时必填；RunMode=WAREHOUSE 时忽略。</p>
 * @method string getSysCatalogVersion() 获取<p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setSysCatalogVersion(string $SysCatalogVersion) 设置<p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；RunMode=WAREHOUSE 时禁止传。</p>
 * @method string getPartitionCode() 获取<p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传。</p>
 * @method string getQueueName() 获取<p>队列名称，必须与 PartitionCode 成对使用（RunMode=JOB 下可选）；RunMode=WAREHOUSE 下被仓库反查值覆盖，无需传。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称，必须与 PartitionCode 成对使用（RunMode=JOB 下可选）；RunMode=WAREHOUSE 下被仓库反查值覆盖，无需传。</p>
 * @method string getCustomProperties() 获取<p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
 * @method void setCustomProperties(string $CustomProperties) 设置<p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
 * @method array getEnvVars() 获取<p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
 */
class CreateJobRequest extends AbstractModel
{
    /**
     * @var string <p>作业名称，长度 ≤256；可省略，省略时服务端回退为 JobId。</p>
     */
    public $JobName;

    /**
     * @var string <p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     */
    public $CheckpointLocation;

    /**
     * @var string <p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
     */
    public $MajorType;

    /**
     * @var string <p>作业子类型，决定入口形态：SPARK_SQL（SQL 作业，Entrypoint.Statement 必填）/ SPARK_BATCH（批处理作业，Entrypoint.EntryFile 必填）/ SPARK_STREAM（流作业，EntryFile 与 CheckpointLocation 必填）。</p>
     */
    public $MinorType;

    /**
     * @var string <p>工作流实例关联 ID（长度 ≤64）：同一工作流/会话的多条 SQL 作业传相同 FlowId，可共享同一 Spark 会话、复用已就绪引擎。MinorType=SPARK_SQL 时必填；FlowId 非空时必须同时传 ExecutionId。WAREHOUSE 模式下 FlowId 即会话句柄（一个 FlowId 只对应一个会话）：会话过期或已销毁后须换新 FlowId，否则返回 FailedOperation.FlowIdNotExists。</p>
     */
    public $FlowId;

    /**
     * @var string <p>工作流内部执行标识（长度 ≤64），同一 FlowId 下每次提交须唯一（如自增序号/UUID）。用于重复提交防重：同一账号下命中未删除的同 (FlowId, ExecutionId) 作业时返回 FailedOperation.FlowExecutionConflict。FlowId 非空时必填（SPARK_SQL 因 FlowId 必填而必填）。</p>
     */
    public $ExecutionId;

    /**
     * @var string <p>运行模式，必填。WAREHOUSE / JOB.</p>
     */
    public $RunMode;

    /**
     * @var string <p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需处于 RUNNING，或 STOPPED 且 AutoStart 开启（提交后冷启动拉起））；RunMode=JOB 时必须为空。</p>
     */
    public $WarehouseId;

    /**
     * @var string <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 时必填；RunMode=WAREHOUSE 时忽略。</p>
     */
    public $RuntimeCode;

    /**
     * @var string <p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $SysCatalogVersion;

    /**
     * @var string <p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>队列名称，必须与 PartitionCode 成对使用（RunMode=JOB 下可选）；RunMode=WAREHOUSE 下被仓库反查值覆盖，无需传。</p>
     */
    public $QueueName;

    /**
     * @var string <p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
     */
    public $CustomProperties;

    /**
     * @var array <p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
     */
    public $EnvVars;

    /**
     * @param string $JobName <p>作业名称，长度 ≤256；可省略，省略时服务端回退为 JobId。</p>
     * @param string $CheckpointLocation <p>流作业 checkpoint 路径（如 cosn://bucket/path/checkpoint）。MinorType=SPARK_STREAM 时必填；同一作业的多次运行必须复用同一路径，变更等于重置消费进度。</p>
     * @param string $MajorType <p>引擎大类，非必传，缺省 SPARK；当前仅支持 SPARK。</p>
     * @param string $MinorType <p>作业子类型，决定入口形态：SPARK_SQL（SQL 作业，Entrypoint.Statement 必填）/ SPARK_BATCH（批处理作业，Entrypoint.EntryFile 必填）/ SPARK_STREAM（流作业，EntryFile 与 CheckpointLocation 必填）。</p>
     * @param string $FlowId <p>工作流实例关联 ID（长度 ≤64）：同一工作流/会话的多条 SQL 作业传相同 FlowId，可共享同一 Spark 会话、复用已就绪引擎。MinorType=SPARK_SQL 时必填；FlowId 非空时必须同时传 ExecutionId。WAREHOUSE 模式下 FlowId 即会话句柄（一个 FlowId 只对应一个会话）：会话过期或已销毁后须换新 FlowId，否则返回 FailedOperation.FlowIdNotExists。</p>
     * @param string $ExecutionId <p>工作流内部执行标识（长度 ≤64），同一 FlowId 下每次提交须唯一（如自增序号/UUID）。用于重复提交防重：同一账号下命中未删除的同 (FlowId, ExecutionId) 作业时返回 FailedOperation.FlowExecutionConflict。FlowId 非空时必填（SPARK_SQL 因 FlowId 必填而必填）。</p>
     * @param string $RunMode <p>运行模式，必填。WAREHOUSE / JOB.</p>
     * @param string $WarehouseId <p>计算仓库 ID。RunMode=WAREHOUSE 时必填（仓库需处于 RUNNING，或 STOPPED 且 AutoStart 开启（提交后冷启动拉起））；RunMode=JOB 时必须为空。</p>
     * @param string $RuntimeCode <p>运行时/镜像编码（可选值见 DescribeSparkRuntimes）。RunMode=JOB 时必填；RunMode=WAREHOUSE 时忽略。</p>
     * @param string $SysCatalogVersion <p>内置 Catalog 版本码（取值为 DescribeSysCatalogList 返回的目录子类型）。RunMode=JOB 时条件必填：未传时若可用（enabled）SysCatalog 唯一则自动选中，多个/零个报错；RunMode=WAREHOUSE 时禁止传。</p>
     * @param string $PartitionCode <p>资源分区代码，仅 RunMode=JOB 可传（QueueName 非空时必填）；RunMode=WAREHOUSE 时禁止传。</p>
     * @param string $QueueName <p>队列名称，必须与 PartitionCode 成对使用（RunMode=JOB 下可选）；RunMode=WAREHOUSE 下被仓库反查值覆盖，无需传。</p>
     * @param string $CustomProperties <p>自定义 Spark conf（JSON 字符串，亦接受多行 key=value 文本，归一化为 JSON 存储、出参恒为 JSON），作为 SPARK_CUSTOM 配置通道落库，两种运行模式均生效。</p>
     * @param array $EnvVars <p>环境变量（KEY=VALUE）列表。仅 RunMode=JOB 可传；RunMode=WAREHOUSE 时禁止传。</p>
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CheckpointLocation",$param) and $param["CheckpointLocation"] !== null) {
            $this->CheckpointLocation = $param["CheckpointLocation"];
        }

        if (array_key_exists("MajorType",$param) and $param["MajorType"] !== null) {
            $this->MajorType = $param["MajorType"];
        }

        if (array_key_exists("MinorType",$param) and $param["MinorType"] !== null) {
            $this->MinorType = $param["MinorType"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("WarehouseId",$param) and $param["WarehouseId"] !== null) {
            $this->WarehouseId = $param["WarehouseId"];
        }

        if (array_key_exists("RuntimeCode",$param) and $param["RuntimeCode"] !== null) {
            $this->RuntimeCode = $param["RuntimeCode"];
        }

        if (array_key_exists("SysCatalogVersion",$param) and $param["SysCatalogVersion"] !== null) {
            $this->SysCatalogVersion = $param["SysCatalogVersion"];
        }

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
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
    }
}
