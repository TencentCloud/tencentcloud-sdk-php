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
 * CreateJobConfig请求参数结构体
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method string getEntrypointClass() 获取主类
 * @method void setEntrypointClass(string $EntrypointClass) 设置主类
 * @method string getProgramArgs() 获取主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值
 * @method void setProgramArgs(string $ProgramArgs) 设置主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getResourceRefs() 获取资源引用数组
 * @method void setResourceRefs(array $ResourceRefs) 设置资源引用数组
 * @method integer getDefaultParallelism() 获取作业默认并行度
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置作业默认并行度
 * @method array getProperties() 获取系统参数
 * @method void setProperties(array $Properties) 设置系统参数
 * @method integer getAutoDelete() 获取1: 作业配置达到上限之后，自动删除可删除的最早版本
 * @method void setAutoDelete(integer $AutoDelete) 设置1: 作业配置达到上限之后，自动删除可删除的最早版本
 * @method string getCOSBucket() 获取作业使用的 COS 存储桶名
 * @method void setCOSBucket(string $COSBucket) 设置作业使用的 COS 存储桶名
 * @method boolean getLogCollect() 获取是否采集作业日志
 * @method void setLogCollect(boolean $LogCollect) 设置是否采集作业日志
 * @method float getJobManagerSpec() 获取JobManager规格
 * @method void setJobManagerSpec(float $JobManagerSpec) 设置JobManager规格
 * @method float getTaskManagerSpec() 获取TaskManager规格
 * @method void setTaskManagerSpec(float $TaskManagerSpec) 设置TaskManager规格
 * @method string getClsLogsetId() 获取CLS日志集ID
 * @method void setClsLogsetId(string $ClsLogsetId) 设置CLS日志集ID
 * @method string getClsTopicId() 获取CLS日志主题ID
 * @method void setClsTopicId(string $ClsTopicId) 设置CLS日志主题ID
 * @method integer getLogCollectType() 获取日志采集类型 2：CLS；3：COS
 * @method void setLogCollectType(integer $LogCollectType) 设置日志采集类型 2：CLS；3：COS
 * @method string getPythonVersion() 获取pyflink作业运行时使用的python版本
 * @method void setPythonVersion(string $PythonVersion) 设置pyflink作业运行时使用的python版本
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 * @method string getLogLevel() 获取日志级别
 * @method void setLogLevel(string $LogLevel) 设置日志级别
 * @method integer getAutoRecover() 获取Oceanus 平台恢复作业开关 1:开启 -1: 关闭
 * @method void setAutoRecover(integer $AutoRecover) 设置Oceanus 平台恢复作业开关 1:开启 -1: 关闭
 * @method array getClazzLevels() 获取类日志级别
 * @method void setClazzLevels(array $ClazzLevels) 设置类日志级别
 * @method boolean getExpertModeOn() 获取是否打开专家模式
 * @method void setExpertModeOn(boolean $ExpertModeOn) 设置是否打开专家模式
 * @method ExpertModeConfiguration getExpertModeConfiguration() 获取专家模式的配置
 * @method void setExpertModeConfiguration(ExpertModeConfiguration $ExpertModeConfiguration) 设置专家模式的配置
 * @method boolean getTraceModeOn() 获取trace链路
 * @method void setTraceModeOn(boolean $TraceModeOn) 设置trace链路
 * @method TraceModeConfiguration getTraceModeConfiguration() 获取trace链路配置
 * @method void setTraceModeConfiguration(TraceModeConfiguration $TraceModeConfiguration) 设置trace链路配置
 * @method integer getCheckpointRetainedNum() 获取checkpoint保留个数
 * @method void setCheckpointRetainedNum(integer $CheckpointRetainedNum) 设置checkpoint保留个数
 * @method JobGraph getJobGraph() 获取算子拓扑图
 * @method void setJobGraph(JobGraph $JobGraph) 设置算子拓扑图
 * @method string getEsServerlessIndex() 获取es索引名称
 * @method void setEsServerlessIndex(string $EsServerlessIndex) 设置es索引名称
 * @method string getEsServerlessSpace() 获取es索引空间
 * @method void setEsServerlessSpace(string $EsServerlessSpace) 设置es索引空间
 * @method string getFlinkVersion() 获取flink版本
 * @method void setFlinkVersion(string $FlinkVersion) 设置flink版本
 * @method float getJobManagerCpu() 获取JobManager cpu
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置JobManager cpu
 * @method float getJobManagerMem() 获取JobManager 内存
 * @method void setJobManagerMem(float $JobManagerMem) 设置JobManager 内存
 * @method float getTaskManagerCpu() 获取TaskManager cpu
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置TaskManager cpu
 * @method float getTaskManagerMem() 获取TaskManager 内存
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置TaskManager 内存
 * @method integer getUseOldSystemConnector() 获取0=默认使用老的 1=使用新的
 * @method void setUseOldSystemConnector(integer $UseOldSystemConnector) 设置0=默认使用老的 1=使用新的
 * @method string getProgramArgsAfterGzip() 获取压缩参数
 * @method void setProgramArgsAfterGzip(string $ProgramArgsAfterGzip) 设置压缩参数
 * @method integer getCheckpointTimeoutSecond() 获取checkpoint 超时时间
 * @method void setCheckpointTimeoutSecond(integer $CheckpointTimeoutSecond) 设置checkpoint 超时时间
 * @method integer getCheckpointIntervalSecond() 获取checkpoint 间隔时间
 * @method void setCheckpointIntervalSecond(integer $CheckpointIntervalSecond) 设置checkpoint 间隔时间
 */
class CreateJobConfigRequest extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var string 主类
     */
    public $EntrypointClass;

    /**
     * @var string 主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值
     */
    public $ProgramArgs;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 资源引用数组
     */
    public $ResourceRefs;

    /**
     * @var integer 作业默认并行度
     */
    public $DefaultParallelism;

    /**
     * @var array 系统参数
     */
    public $Properties;

    /**
     * @var integer 1: 作业配置达到上限之后，自动删除可删除的最早版本
     */
    public $AutoDelete;

    /**
     * @var string 作业使用的 COS 存储桶名
     */
    public $COSBucket;

    /**
     * @var boolean 是否采集作业日志
     */
    public $LogCollect;

    /**
     * @var float JobManager规格
     */
    public $JobManagerSpec;

    /**
     * @var float TaskManager规格
     */
    public $TaskManagerSpec;

    /**
     * @var string CLS日志集ID
     */
    public $ClsLogsetId;

    /**
     * @var string CLS日志主题ID
     */
    public $ClsTopicId;

    /**
     * @var integer 日志采集类型 2：CLS；3：COS
     */
    public $LogCollectType;

    /**
     * @var string pyflink作业运行时使用的python版本
     */
    public $PythonVersion;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @var string 日志级别
     */
    public $LogLevel;

    /**
     * @var integer Oceanus 平台恢复作业开关 1:开启 -1: 关闭
     */
    public $AutoRecover;

    /**
     * @var array 类日志级别
     */
    public $ClazzLevels;

    /**
     * @var boolean 是否打开专家模式
     */
    public $ExpertModeOn;

    /**
     * @var ExpertModeConfiguration 专家模式的配置
     */
    public $ExpertModeConfiguration;

    /**
     * @var boolean trace链路
     */
    public $TraceModeOn;

    /**
     * @var TraceModeConfiguration trace链路配置
     */
    public $TraceModeConfiguration;

    /**
     * @var integer checkpoint保留个数
     */
    public $CheckpointRetainedNum;

    /**
     * @var JobGraph 算子拓扑图
     */
    public $JobGraph;

    /**
     * @var string es索引名称
     */
    public $EsServerlessIndex;

    /**
     * @var string es索引空间
     */
    public $EsServerlessSpace;

    /**
     * @var string flink版本
     */
    public $FlinkVersion;

    /**
     * @var float JobManager cpu
     */
    public $JobManagerCpu;

    /**
     * @var float JobManager 内存
     */
    public $JobManagerMem;

    /**
     * @var float TaskManager cpu
     */
    public $TaskManagerCpu;

    /**
     * @var float TaskManager 内存
     */
    public $TaskManagerMem;

    /**
     * @var integer 0=默认使用老的 1=使用新的
     */
    public $UseOldSystemConnector;

    /**
     * @var string 压缩参数
     */
    public $ProgramArgsAfterGzip;

    /**
     * @var integer checkpoint 超时时间
     */
    public $CheckpointTimeoutSecond;

    /**
     * @var integer checkpoint 间隔时间
     */
    public $CheckpointIntervalSecond;

    /**
     * @param string $JobId 作业Id
     * @param string $EntrypointClass 主类
     * @param string $ProgramArgs 主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值
     * @param string $Remark 备注
     * @param array $ResourceRefs 资源引用数组
     * @param integer $DefaultParallelism 作业默认并行度
     * @param array $Properties 系统参数
     * @param integer $AutoDelete 1: 作业配置达到上限之后，自动删除可删除的最早版本
     * @param string $COSBucket 作业使用的 COS 存储桶名
     * @param boolean $LogCollect 是否采集作业日志
     * @param float $JobManagerSpec JobManager规格
     * @param float $TaskManagerSpec TaskManager规格
     * @param string $ClsLogsetId CLS日志集ID
     * @param string $ClsTopicId CLS日志主题ID
     * @param integer $LogCollectType 日志采集类型 2：CLS；3：COS
     * @param string $PythonVersion pyflink作业运行时使用的python版本
     * @param string $WorkSpaceId 工作空间 SerialId
     * @param string $LogLevel 日志级别
     * @param integer $AutoRecover Oceanus 平台恢复作业开关 1:开启 -1: 关闭
     * @param array $ClazzLevels 类日志级别
     * @param boolean $ExpertModeOn 是否打开专家模式
     * @param ExpertModeConfiguration $ExpertModeConfiguration 专家模式的配置
     * @param boolean $TraceModeOn trace链路
     * @param TraceModeConfiguration $TraceModeConfiguration trace链路配置
     * @param integer $CheckpointRetainedNum checkpoint保留个数
     * @param JobGraph $JobGraph 算子拓扑图
     * @param string $EsServerlessIndex es索引名称
     * @param string $EsServerlessSpace es索引空间
     * @param string $FlinkVersion flink版本
     * @param float $JobManagerCpu JobManager cpu
     * @param float $JobManagerMem JobManager 内存
     * @param float $TaskManagerCpu TaskManager cpu
     * @param float $TaskManagerMem TaskManager 内存
     * @param integer $UseOldSystemConnector 0=默认使用老的 1=使用新的
     * @param string $ProgramArgsAfterGzip 压缩参数
     * @param integer $CheckpointTimeoutSecond checkpoint 超时时间
     * @param integer $CheckpointIntervalSecond checkpoint 间隔时间
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

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new ResourceRef();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
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

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("LogCollect",$param) and $param["LogCollect"] !== null) {
            $this->LogCollect = $param["LogCollect"];
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

        if (array_key_exists("LogCollectType",$param) and $param["LogCollectType"] !== null) {
            $this->LogCollectType = $param["LogCollectType"];
        }

        if (array_key_exists("PythonVersion",$param) and $param["PythonVersion"] !== null) {
            $this->PythonVersion = $param["PythonVersion"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("AutoRecover",$param) and $param["AutoRecover"] !== null) {
            $this->AutoRecover = $param["AutoRecover"];
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

        if (array_key_exists("UseOldSystemConnector",$param) and $param["UseOldSystemConnector"] !== null) {
            $this->UseOldSystemConnector = $param["UseOldSystemConnector"];
        }

        if (array_key_exists("ProgramArgsAfterGzip",$param) and $param["ProgramArgsAfterGzip"] !== null) {
            $this->ProgramArgsAfterGzip = $param["ProgramArgsAfterGzip"];
        }

        if (array_key_exists("CheckpointTimeoutSecond",$param) and $param["CheckpointTimeoutSecond"] !== null) {
            $this->CheckpointTimeoutSecond = $param["CheckpointTimeoutSecond"];
        }

        if (array_key_exists("CheckpointIntervalSecond",$param) and $param["CheckpointIntervalSecond"] !== null) {
            $this->CheckpointIntervalSecond = $param["CheckpointIntervalSecond"];
        }
    }
}
