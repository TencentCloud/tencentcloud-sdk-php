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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业配置详情
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method string getEntrypointClass() 获取主类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrypointClass(string $EntrypointClass) 设置主类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramArgs() 获取主类入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramArgs(string $ProgramArgs) 设置主类入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取作业配置创建时间
 * @method void setCreateTime(string $CreateTime) 设置作业配置创建时间
 * @method integer getVersion() 获取作业配置的版本号
 * @method void setVersion(integer $Version) 设置作业配置的版本号
 * @method integer getDefaultParallelism() 获取作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取系统参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置系统参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefDetails() 获取引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefDetails(array $ResourceRefDetails) 设置引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCOSBucket() 获取作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSBucket(string $COSBucket) 设置作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogCollect() 获取是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogCollect(integer $LogCollect) 设置是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxParallelism() 获取作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxParallelism(integer $MaxParallelism) 设置作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerSpec() 获取JobManager规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerSpec(float $JobManagerSpec) 设置JobManager规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerSpec() 获取TaskManager规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerSpec(float $TaskManagerSpec) 设置TaskManager规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsLogsetId() 获取CLS日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsLogsetId(string $ClsLogsetId) 设置CLS日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsTopicId() 获取CLS日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsTopicId(string $ClsTopicId) 设置CLS日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPythonVersion() 获取pyflink作业运行的python版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPythonVersion(string $PythonVersion) 设置pyflink作业运行的python版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRecover() 获取Oceanus 平台恢复作业开关 1:开启 -1: 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRecover(integer $AutoRecover) 设置Oceanus 平台恢复作业开关 1:开启 -1: 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogLevel() 获取日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogLevel(string $LogLevel) 设置日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClazzLevels() 获取类日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClazzLevels(array $ClazzLevels) 设置类日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpertModeOn() 获取是否开启专家模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertModeOn(boolean $ExpertModeOn) 设置是否开启专家模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExpertModeConfiguration getExpertModeConfiguration() 获取专家模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertModeConfiguration(ExpertModeConfiguration $ExpertModeConfiguration) 设置专家模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTraceModeOn() 获取trace链路
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceModeOn(boolean $TraceModeOn) 设置trace链路
注意：此字段可能返回 null，表示取不到有效值。
 * @method TraceModeConfiguration getTraceModeConfiguration() 获取trace链路配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceModeConfiguration(TraceModeConfiguration $TraceModeConfiguration) 设置trace链路配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckpointRetainedNum() 获取checkpoint保留个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckpointRetainedNum(integer $CheckpointRetainedNum) 设置checkpoint保留个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobGraph getJobGraph() 获取算子拓扑图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobGraph(JobGraph $JobGraph) 设置算子拓扑图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsServerlessIndex() 获取es索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsServerlessIndex(string $EsServerlessIndex) 设置es索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsServerlessSpace() 获取es空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsServerlessSpace(string $EsServerlessSpace) 设置es空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexName() 获取es索引中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置es索引中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceName() 获取es空间中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceName(string $WorkspaceName) 设置es空间中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取flink 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置flink 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerCpu() 获取jm使用cpu数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置jm使用cpu数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerMem() 获取jm使用内存数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerMem(float $JobManagerMem) 设置jm使用内存数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerCpu() 获取tm使用cpu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置tm使用cpu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerMem() 获取tm使用mem数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置tm使用mem数
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobConfig getJobConfigItem() 获取运行中配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobConfigItem(JobConfig $JobConfigItem) 设置运行中配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckpointTimeoutSecond() 获取checkpoint 超时时间
 * @method void setCheckpointTimeoutSecond(integer $CheckpointTimeoutSecond) 设置checkpoint 超时时间
 */
class JobConfig extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var string 主类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntrypointClass;

    /**
     * @var string 主类入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramArgs;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 作业配置创建时间
     */
    public $CreateTime;

    /**
     * @var integer 作业配置的版本号
     */
    public $Version;

    /**
     * @var integer 作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultParallelism;

    /**
     * @var array 系统参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefDetails;

    /**
     * @var string 创建者uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSBucket;

    /**
     * @var integer 是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogCollect;

    /**
     * @var integer 作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxParallelism;

    /**
     * @var float JobManager规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerSpec;

    /**
     * @var float TaskManager规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerSpec;

    /**
     * @var string CLS日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsLogsetId;

    /**
     * @var string CLS日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsTopicId;

    /**
     * @var string pyflink作业运行的python版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PythonVersion;

    /**
     * @var integer Oceanus 平台恢复作业开关 1:开启 -1: 关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRecover;

    /**
     * @var string 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogLevel;

    /**
     * @var array 类日志级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClazzLevels;

    /**
     * @var boolean 是否开启专家模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertModeOn;

    /**
     * @var ExpertModeConfiguration 专家模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertModeConfiguration;

    /**
     * @var boolean trace链路
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceModeOn;

    /**
     * @var TraceModeConfiguration trace链路配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceModeConfiguration;

    /**
     * @var integer checkpoint保留个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckpointRetainedNum;

    /**
     * @var JobGraph 算子拓扑图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobGraph;

    /**
     * @var string es索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsServerlessIndex;

    /**
     * @var string es空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsServerlessSpace;

    /**
     * @var string es索引中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string es空间中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceName;

    /**
     * @var string flink 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var float jm使用cpu数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerCpu;

    /**
     * @var float jm使用内存数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerMem;

    /**
     * @var float tm使用cpu数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerCpu;

    /**
     * @var float tm使用mem数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerMem;

    /**
     * @var JobConfig 运行中配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobConfigItem;

    /**
     * @var integer checkpoint 超时时间
     */
    public $CheckpointTimeoutSecond;

    /**
     * @param string $JobId 作业Id
     * @param string $EntrypointClass 主类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramArgs 主类入参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 作业配置创建时间
     * @param integer $Version 作业配置的版本号
     * @param integer $DefaultParallelism 作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 系统参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefDetails 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建者uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $COSBucket 作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogCollect 是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxParallelism 作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerSpec JobManager规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerSpec TaskManager规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsLogsetId CLS日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsTopicId CLS日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PythonVersion pyflink作业运行的python版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRecover Oceanus 平台恢复作业开关 1:开启 -1: 关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogLevel 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClazzLevels 类日志级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExpertModeOn 是否开启专家模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExpertModeConfiguration $ExpertModeConfiguration 专家模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TraceModeOn trace链路
注意：此字段可能返回 null，表示取不到有效值。
     * @param TraceModeConfiguration $TraceModeConfiguration trace链路配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckpointRetainedNum checkpoint保留个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobGraph $JobGraph 算子拓扑图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsServerlessIndex es索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsServerlessSpace es空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexName es索引中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceName es空间中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion flink 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerCpu jm使用cpu数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerMem jm使用内存数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerCpu tm使用cpu数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerMem tm使用mem数
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobConfig $JobConfigItem 运行中配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckpointTimeoutSecond checkpoint 超时时间
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

        if (array_key_exists("EntrypointClass",$param) and $param["EntrypointClass"] !== null) {
            $this->EntrypointClass = $param["EntrypointClass"];
        }

        if (array_key_exists("ProgramArgs",$param) and $param["ProgramArgs"] !== null) {
            $this->ProgramArgs = $param["ProgramArgs"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("DefaultParallelism",$param) and $param["DefaultParallelism"] !== null) {
            $this->DefaultParallelism = $param["DefaultParallelism"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ResourceRefDetails",$param) and $param["ResourceRefDetails"] !== null) {
            $this->ResourceRefDetails = [];
            foreach ($param["ResourceRefDetails"] as $key => $value){
                $obj = new ResourceRefDetail();
                $obj->deserialize($value);
                array_push($this->ResourceRefDetails, $obj);
            }
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("LogCollect",$param) and $param["LogCollect"] !== null) {
            $this->LogCollect = $param["LogCollect"];
        }

        if (array_key_exists("MaxParallelism",$param) and $param["MaxParallelism"] !== null) {
            $this->MaxParallelism = $param["MaxParallelism"];
        }

        if (array_key_exists("JobManagerSpec",$param) and $param["JobManagerSpec"] !== null) {
            $this->JobManagerSpec = $param["JobManagerSpec"];
        }

        if (array_key_exists("TaskManagerSpec",$param) and $param["TaskManagerSpec"] !== null) {
            $this->TaskManagerSpec = $param["TaskManagerSpec"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("PythonVersion",$param) and $param["PythonVersion"] !== null) {
            $this->PythonVersion = $param["PythonVersion"];
        }

        if (array_key_exists("AutoRecover",$param) and $param["AutoRecover"] !== null) {
            $this->AutoRecover = $param["AutoRecover"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("ClazzLevels",$param) and $param["ClazzLevels"] !== null) {
            $this->ClazzLevels = [];
            foreach ($param["ClazzLevels"] as $key => $value){
                $obj = new ClazzLevel();
                $obj->deserialize($value);
                array_push($this->ClazzLevels, $obj);
            }
        }

        if (array_key_exists("ExpertModeOn",$param) and $param["ExpertModeOn"] !== null) {
            $this->ExpertModeOn = $param["ExpertModeOn"];
        }

        if (array_key_exists("ExpertModeConfiguration",$param) and $param["ExpertModeConfiguration"] !== null) {
            $this->ExpertModeConfiguration = new ExpertModeConfiguration();
            $this->ExpertModeConfiguration->deserialize($param["ExpertModeConfiguration"]);
        }

        if (array_key_exists("TraceModeOn",$param) and $param["TraceModeOn"] !== null) {
            $this->TraceModeOn = $param["TraceModeOn"];
        }

        if (array_key_exists("TraceModeConfiguration",$param) and $param["TraceModeConfiguration"] !== null) {
            $this->TraceModeConfiguration = new TraceModeConfiguration();
            $this->TraceModeConfiguration->deserialize($param["TraceModeConfiguration"]);
        }

        if (array_key_exists("CheckpointRetainedNum",$param) and $param["CheckpointRetainedNum"] !== null) {
            $this->CheckpointRetainedNum = $param["CheckpointRetainedNum"];
        }

        if (array_key_exists("JobGraph",$param) and $param["JobGraph"] !== null) {
            $this->JobGraph = new JobGraph();
            $this->JobGraph->deserialize($param["JobGraph"]);
        }

        if (array_key_exists("EsServerlessIndex",$param) and $param["EsServerlessIndex"] !== null) {
            $this->EsServerlessIndex = $param["EsServerlessIndex"];
        }

        if (array_key_exists("EsServerlessSpace",$param) and $param["EsServerlessSpace"] !== null) {
            $this->EsServerlessSpace = $param["EsServerlessSpace"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("WorkspaceName",$param) and $param["WorkspaceName"] !== null) {
            $this->WorkspaceName = $param["WorkspaceName"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("JobManagerCpu",$param) and $param["JobManagerCpu"] !== null) {
            $this->JobManagerCpu = $param["JobManagerCpu"];
        }

        if (array_key_exists("JobManagerMem",$param) and $param["JobManagerMem"] !== null) {
            $this->JobManagerMem = $param["JobManagerMem"];
        }

        if (array_key_exists("TaskManagerCpu",$param) and $param["TaskManagerCpu"] !== null) {
            $this->TaskManagerCpu = $param["TaskManagerCpu"];
        }

        if (array_key_exists("TaskManagerMem",$param) and $param["TaskManagerMem"] !== null) {
            $this->TaskManagerMem = $param["TaskManagerMem"];
        }

        if (array_key_exists("JobConfigItem",$param) and $param["JobConfigItem"] !== null) {
            $this->JobConfigItem = new JobConfig();
            $this->JobConfigItem->deserialize($param["JobConfigItem"]);
        }

        if (array_key_exists("CheckpointTimeoutSecond",$param) and $param["CheckpointTimeoutSecond"] !== null) {
            $this->CheckpointTimeoutSecond = $param["CheckpointTimeoutSecond"];
        }
    }
}
