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
 * @method string getJobId() 获取<p>作业Id</p>
 * @method void setJobId(string $JobId) 设置<p>作业Id</p>
 * @method string getEntrypointClass() 获取<p>主类</p>
 * @method void setEntrypointClass(string $EntrypointClass) 设置<p>主类</p>
 * @method string getProgramArgs() 获取<p>主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值</p>
 * @method void setProgramArgs(string $ProgramArgs) 设置<p>主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method array getResourceRefs() 获取<p>资源引用数组</p>
 * @method void setResourceRefs(array $ResourceRefs) 设置<p>资源引用数组</p>
 * @method integer getDefaultParallelism() 获取<p>作业默认并行度</p>
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置<p>作业默认并行度</p>
 * @method array getProperties() 获取<p>系统参数</p>
 * @method void setProperties(array $Properties) 设置<p>系统参数</p>
 * @method integer getAutoDelete() 获取<p>1: 作业配置达到上限之后，自动删除可删除的最早版本</p>
 * @method void setAutoDelete(integer $AutoDelete) 设置<p>1: 作业配置达到上限之后，自动删除可删除的最早版本</p>
 * @method string getCOSBucket() 获取<p>作业使用的 COS 存储桶名</p>
 * @method void setCOSBucket(string $COSBucket) 设置<p>作业使用的 COS 存储桶名</p>
 * @method boolean getLogCollect() 获取<p>是否采集作业日志</p>
 * @method void setLogCollect(boolean $LogCollect) 设置<p>是否采集作业日志</p>
 * @method float getJobManagerSpec() 获取<p>JobManager规格</p>
 * @method void setJobManagerSpec(float $JobManagerSpec) 设置<p>JobManager规格</p>
 * @method float getTaskManagerSpec() 获取<p>TaskManager规格</p>
 * @method void setTaskManagerSpec(float $TaskManagerSpec) 设置<p>TaskManager规格</p>
 * @method string getClsLogsetId() 获取<p>CLS日志集ID</p>
 * @method void setClsLogsetId(string $ClsLogsetId) 设置<p>CLS日志集ID</p>
 * @method string getClsTopicId() 获取<p>CLS日志主题ID</p>
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>CLS日志主题ID</p>
 * @method integer getLogCollectType() 获取<p>日志采集类型 2：CLS；3：COS</p>
 * @method void setLogCollectType(integer $LogCollectType) 设置<p>日志采集类型 2：CLS；3：COS</p>
 * @method string getPythonVersion() 获取<p>pyflink作业运行时使用的python版本</p>
 * @method void setPythonVersion(string $PythonVersion) 设置<p>pyflink作业运行时使用的python版本</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method string getLogLevel() 获取<p>日志级别</p>
 * @method void setLogLevel(string $LogLevel) 设置<p>日志级别</p>
 * @method integer getAutoRecover() 获取<p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
 * @method void setAutoRecover(integer $AutoRecover) 设置<p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
 * @method array getClazzLevels() 获取<p>类日志级别</p>
 * @method void setClazzLevels(array $ClazzLevels) 设置<p>类日志级别</p>
 * @method boolean getExpertModeOn() 获取<p>是否打开专家模式</p>
 * @method void setExpertModeOn(boolean $ExpertModeOn) 设置<p>是否打开专家模式</p>
 * @method ExpertModeConfiguration getExpertModeConfiguration() 获取<p>专家模式的配置</p>
 * @method void setExpertModeConfiguration(ExpertModeConfiguration $ExpertModeConfiguration) 设置<p>专家模式的配置</p>
 * @method boolean getTraceModeOn() 获取<p>trace链路</p>
 * @method void setTraceModeOn(boolean $TraceModeOn) 设置<p>trace链路</p>
 * @method TraceModeConfiguration getTraceModeConfiguration() 获取<p>trace链路配置</p>
 * @method void setTraceModeConfiguration(TraceModeConfiguration $TraceModeConfiguration) 设置<p>trace链路配置</p>
 * @method integer getCheckpointRetainedNum() 获取<p>checkpoint保留个数</p>
 * @method void setCheckpointRetainedNum(integer $CheckpointRetainedNum) 设置<p>checkpoint保留个数</p>
 * @method JobGraph getJobGraph() 获取<p>算子拓扑图</p>
 * @method void setJobGraph(JobGraph $JobGraph) 设置<p>算子拓扑图</p>
 * @method string getEsServerlessIndex() 获取<p>es索引名称</p>
 * @method void setEsServerlessIndex(string $EsServerlessIndex) 设置<p>es索引名称</p>
 * @method string getEsServerlessSpace() 获取<p>es索引空间</p>
 * @method void setEsServerlessSpace(string $EsServerlessSpace) 设置<p>es索引空间</p>
 * @method string getFlinkVersion() 获取<p>flink版本</p>
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>flink版本</p>
 * @method float getJobManagerCpu() 获取<p>JobManager cpu</p>
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置<p>JobManager cpu</p>
 * @method float getJobManagerMem() 获取<p>JobManager 内存</p>
 * @method void setJobManagerMem(float $JobManagerMem) 设置<p>JobManager 内存</p>
 * @method string getJdkVersion() 获取<p>jdk版本</p>
 * @method void setJdkVersion(string $JdkVersion) 设置<p>jdk版本</p>
 * @method float getTaskManagerCpu() 获取<p>TaskManager cpu</p>
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置<p>TaskManager cpu</p>
 * @method float getTaskManagerMem() 获取<p>TaskManager 内存</p>
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置<p>TaskManager 内存</p>
 * @method integer getUseOldSystemConnector() 获取<p>0=默认使用老的 1=使用新的</p>
 * @method void setUseOldSystemConnector(integer $UseOldSystemConnector) 设置<p>0=默认使用老的 1=使用新的</p>
 * @method string getProgramArgsAfterGzip() 获取<p>压缩参数</p>
 * @method void setProgramArgsAfterGzip(string $ProgramArgsAfterGzip) 设置<p>压缩参数</p>
 * @method integer getCheckpointTimeoutSecond() 获取<p>checkpoint 超时时间</p>
 * @method void setCheckpointTimeoutSecond(integer $CheckpointTimeoutSecond) 设置<p>checkpoint 超时时间</p>
 * @method integer getCheckpointIntervalSecond() 获取<p>checkpoint 间隔时间</p>
 * @method void setCheckpointIntervalSecond(integer $CheckpointIntervalSecond) 设置<p>checkpoint 间隔时间</p>
 * @method integer getVariableReplaceMode() 获取<p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： SQL全局变量替换</li></ul><p>默认值：1</p>
 * @method void setVariableReplaceMode(integer $VariableReplaceMode) 设置<p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： SQL全局变量替换</li></ul><p>默认值：1</p>
 */
class CreateJobConfigRequest extends AbstractModel
{
    /**
     * @var string <p>作业Id</p>
     */
    public $JobId;

    /**
     * @var string <p>主类</p>
     */
    public $EntrypointClass;

    /**
     * @var string <p>主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值</p>
     */
    public $ProgramArgs;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var array <p>资源引用数组</p>
     */
    public $ResourceRefs;

    /**
     * @var integer <p>作业默认并行度</p>
     */
    public $DefaultParallelism;

    /**
     * @var array <p>系统参数</p>
     */
    public $Properties;

    /**
     * @var integer <p>1: 作业配置达到上限之后，自动删除可删除的最早版本</p>
     */
    public $AutoDelete;

    /**
     * @var string <p>作业使用的 COS 存储桶名</p>
     */
    public $COSBucket;

    /**
     * @var boolean <p>是否采集作业日志</p>
     */
    public $LogCollect;

    /**
     * @var float <p>JobManager规格</p>
     */
    public $JobManagerSpec;

    /**
     * @var float <p>TaskManager规格</p>
     */
    public $TaskManagerSpec;

    /**
     * @var string <p>CLS日志集ID</p>
     */
    public $ClsLogsetId;

    /**
     * @var string <p>CLS日志主题ID</p>
     */
    public $ClsTopicId;

    /**
     * @var integer <p>日志采集类型 2：CLS；3：COS</p>
     */
    public $LogCollectType;

    /**
     * @var string <p>pyflink作业运行时使用的python版本</p>
     */
    public $PythonVersion;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var string <p>日志级别</p>
     */
    public $LogLevel;

    /**
     * @var integer <p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
     */
    public $AutoRecover;

    /**
     * @var array <p>类日志级别</p>
     */
    public $ClazzLevels;

    /**
     * @var boolean <p>是否打开专家模式</p>
     */
    public $ExpertModeOn;

    /**
     * @var ExpertModeConfiguration <p>专家模式的配置</p>
     */
    public $ExpertModeConfiguration;

    /**
     * @var boolean <p>trace链路</p>
     */
    public $TraceModeOn;

    /**
     * @var TraceModeConfiguration <p>trace链路配置</p>
     */
    public $TraceModeConfiguration;

    /**
     * @var integer <p>checkpoint保留个数</p>
     */
    public $CheckpointRetainedNum;

    /**
     * @var JobGraph <p>算子拓扑图</p>
     */
    public $JobGraph;

    /**
     * @var string <p>es索引名称</p>
     */
    public $EsServerlessIndex;

    /**
     * @var string <p>es索引空间</p>
     */
    public $EsServerlessSpace;

    /**
     * @var string <p>flink版本</p>
     */
    public $FlinkVersion;

    /**
     * @var float <p>JobManager cpu</p>
     */
    public $JobManagerCpu;

    /**
     * @var float <p>JobManager 内存</p>
     */
    public $JobManagerMem;

    /**
     * @var string <p>jdk版本</p>
     */
    public $JdkVersion;

    /**
     * @var float <p>TaskManager cpu</p>
     */
    public $TaskManagerCpu;

    /**
     * @var float <p>TaskManager 内存</p>
     */
    public $TaskManagerMem;

    /**
     * @var integer <p>0=默认使用老的 1=使用新的</p>
     */
    public $UseOldSystemConnector;

    /**
     * @var string <p>压缩参数</p>
     */
    public $ProgramArgsAfterGzip;

    /**
     * @var integer <p>checkpoint 超时时间</p>
     */
    public $CheckpointTimeoutSecond;

    /**
     * @var integer <p>checkpoint 间隔时间</p>
     */
    public $CheckpointIntervalSecond;

    /**
     * @var integer <p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： SQL全局变量替换</li></ul><p>默认值：1</p>
     */
    public $VariableReplaceMode;

    /**
     * @param string $JobId <p>作业Id</p>
     * @param string $EntrypointClass <p>主类</p>
     * @param string $ProgramArgs <p>主类入参，需要区分下Sql作业配置，Jar作业配置，Python作业配置，具体参考下面的示例值</p>
     * @param string $Remark <p>备注</p>
     * @param array $ResourceRefs <p>资源引用数组</p>
     * @param integer $DefaultParallelism <p>作业默认并行度</p>
     * @param array $Properties <p>系统参数</p>
     * @param integer $AutoDelete <p>1: 作业配置达到上限之后，自动删除可删除的最早版本</p>
     * @param string $COSBucket <p>作业使用的 COS 存储桶名</p>
     * @param boolean $LogCollect <p>是否采集作业日志</p>
     * @param float $JobManagerSpec <p>JobManager规格</p>
     * @param float $TaskManagerSpec <p>TaskManager规格</p>
     * @param string $ClsLogsetId <p>CLS日志集ID</p>
     * @param string $ClsTopicId <p>CLS日志主题ID</p>
     * @param integer $LogCollectType <p>日志采集类型 2：CLS；3：COS</p>
     * @param string $PythonVersion <p>pyflink作业运行时使用的python版本</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param string $LogLevel <p>日志级别</p>
     * @param integer $AutoRecover <p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
     * @param array $ClazzLevels <p>类日志级别</p>
     * @param boolean $ExpertModeOn <p>是否打开专家模式</p>
     * @param ExpertModeConfiguration $ExpertModeConfiguration <p>专家模式的配置</p>
     * @param boolean $TraceModeOn <p>trace链路</p>
     * @param TraceModeConfiguration $TraceModeConfiguration <p>trace链路配置</p>
     * @param integer $CheckpointRetainedNum <p>checkpoint保留个数</p>
     * @param JobGraph $JobGraph <p>算子拓扑图</p>
     * @param string $EsServerlessIndex <p>es索引名称</p>
     * @param string $EsServerlessSpace <p>es索引空间</p>
     * @param string $FlinkVersion <p>flink版本</p>
     * @param float $JobManagerCpu <p>JobManager cpu</p>
     * @param float $JobManagerMem <p>JobManager 内存</p>
     * @param string $JdkVersion <p>jdk版本</p>
     * @param float $TaskManagerCpu <p>TaskManager cpu</p>
     * @param float $TaskManagerMem <p>TaskManager 内存</p>
     * @param integer $UseOldSystemConnector <p>0=默认使用老的 1=使用新的</p>
     * @param string $ProgramArgsAfterGzip <p>压缩参数</p>
     * @param integer $CheckpointTimeoutSecond <p>checkpoint 超时时间</p>
     * @param integer $CheckpointIntervalSecond <p>checkpoint 间隔时间</p>
     * @param integer $VariableReplaceMode <p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： SQL全局变量替换</li></ul><p>默认值：1</p>
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

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
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

        if (array_key_exists("VariableReplaceMode",$param) and $param["VariableReplaceMode"] !== null) {
            $this->VariableReplaceMode = $param["VariableReplaceMode"];
        }
    }
}
