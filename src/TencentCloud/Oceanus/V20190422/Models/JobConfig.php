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
 * @method string getJobId() 获取<p>作业Id</p>
 * @method void setJobId(string $JobId) 设置<p>作业Id</p>
 * @method string getEntrypointClass() 获取<p>主类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrypointClass(string $EntrypointClass) 设置<p>主类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramArgs() 获取<p>主类入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramArgs(string $ProgramArgs) 设置<p>主类入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>作业配置创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>作业配置创建时间</p>
 * @method integer getVersion() 获取<p>作业配置的版本号</p>
 * @method void setVersion(integer $Version) 设置<p>作业配置的版本号</p>
 * @method integer getDefaultParallelism() 获取<p>作业默认并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置<p>作业默认并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取<p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置<p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefDetails() 获取<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefDetails(array $ResourceRefDetails) 设置<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建者uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>作业配置上次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>作业配置上次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCOSBucket() 获取<p>作业绑定的存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSBucket(string $COSBucket) 设置<p>作业绑定的存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogCollect() 获取<p>是否启用日志收集，0-未启用，1-采集到cls，4-采集到cos，5-采集到es</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogCollect(integer $LogCollect) 设置<p>是否启用日志收集，0-未启用，1-采集到cls，4-采集到cos，5-采集到es</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxParallelism() 获取<p>作业的最大并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxParallelism(integer $MaxParallelism) 设置<p>作业的最大并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerSpec() 获取<p>JobManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerSpec(float $JobManagerSpec) 设置<p>JobManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerSpec() 获取<p>TaskManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerSpec(float $TaskManagerSpec) 设置<p>TaskManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsLogsetId() 获取<p>CLS日志集ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsLogsetId(string $ClsLogsetId) 设置<p>CLS日志集ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsTopicId() 获取<p>CLS日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>CLS日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPythonVersion() 获取<p>pyflink作业运行的python版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPythonVersion(string $PythonVersion) 设置<p>pyflink作业运行的python版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRecover() 获取<p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRecover(integer $AutoRecover) 设置<p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogLevel() 获取<p>日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogLevel(string $LogLevel) 设置<p>日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClazzLevels() 获取<p>类日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClazzLevels(array $ClazzLevels) 设置<p>类日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpertModeOn() 获取<p>是否开启专家模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertModeOn(boolean $ExpertModeOn) 设置<p>是否开启专家模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExpertModeConfiguration getExpertModeConfiguration() 获取<p>专家模式的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertModeConfiguration(ExpertModeConfiguration $ExpertModeConfiguration) 设置<p>专家模式的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTraceModeOn() 获取<p>trace链路</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceModeOn(boolean $TraceModeOn) 设置<p>trace链路</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TraceModeConfiguration getTraceModeConfiguration() 获取<p>trace链路配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceModeConfiguration(TraceModeConfiguration $TraceModeConfiguration) 设置<p>trace链路配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckpointRetainedNum() 获取<p>checkpoint保留个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckpointRetainedNum(integer $CheckpointRetainedNum) 设置<p>checkpoint保留个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobGraph getJobGraph() 获取<p>算子拓扑图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobGraph(JobGraph $JobGraph) 设置<p>算子拓扑图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsServerlessIndex() 获取<p>es索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsServerlessIndex(string $EsServerlessIndex) 设置<p>es索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsServerlessSpace() 获取<p>es空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsServerlessSpace(string $EsServerlessSpace) 设置<p>es空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexName() 获取<p>es索引中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置<p>es索引中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceName() 获取<p>es空间中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceName(string $WorkspaceName) 设置<p>es空间中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取<p>flink 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>flink 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJdkVersion() 获取<p>jdk版本</p>
 * @method void setJdkVersion(string $JdkVersion) 设置<p>jdk版本</p>
 * @method float getJobManagerCpu() 获取<p>jm使用cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置<p>jm使用cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerMem() 获取<p>jm使用内存数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobManagerMem(float $JobManagerMem) 设置<p>jm使用内存数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerCpu() 获取<p>tm使用cpu数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置<p>tm使用cpu数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaskManagerMem() 获取<p>tm使用mem数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置<p>tm使用mem数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobConfig getJobConfigItem() 获取<p>运行中配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobConfigItem(JobConfig $JobConfigItem) 设置<p>运行中配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckpointTimeoutSecond() 获取<p>checkpoint 超时时间</p>
 * @method void setCheckpointTimeoutSecond(integer $CheckpointTimeoutSecond) 设置<p>checkpoint 超时时间</p>
 * @method integer getCheckpointIntervalSecond() 获取<p>checkpoint 间隔时间</p>
 * @method void setCheckpointIntervalSecond(integer $CheckpointIntervalSecond) 设置<p>checkpoint 间隔时间</p>
 * @method integer getVariableReplaceMode() 获取<p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： 全局SQL变量替换</li></ul><p>默认值：0</p>
 * @method void setVariableReplaceMode(integer $VariableReplaceMode) 设置<p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： 全局SQL变量替换</li></ul><p>默认值：0</p>
 */
class JobConfig extends AbstractModel
{
    /**
     * @var string <p>作业Id</p>
     */
    public $JobId;

    /**
     * @var string <p>主类</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntrypointClass;

    /**
     * @var string <p>主类入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramArgs;

    /**
     * @var string <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>作业配置创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>作业配置的版本号</p>
     */
    public $Version;

    /**
     * @var integer <p>作业默认并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultParallelism;

    /**
     * @var array <p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefDetails;

    /**
     * @var string <p>创建者uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string <p>作业配置上次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>作业绑定的存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSBucket;

    /**
     * @var integer <p>是否启用日志收集，0-未启用，1-采集到cls，4-采集到cos，5-采集到es</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogCollect;

    /**
     * @var integer <p>作业的最大并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxParallelism;

    /**
     * @var float <p>JobManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerSpec;

    /**
     * @var float <p>TaskManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerSpec;

    /**
     * @var string <p>CLS日志集ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsLogsetId;

    /**
     * @var string <p>CLS日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsTopicId;

    /**
     * @var string <p>pyflink作业运行的python版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PythonVersion;

    /**
     * @var integer <p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRecover;

    /**
     * @var string <p>日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogLevel;

    /**
     * @var array <p>类日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClazzLevels;

    /**
     * @var boolean <p>是否开启专家模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertModeOn;

    /**
     * @var ExpertModeConfiguration <p>专家模式的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertModeConfiguration;

    /**
     * @var boolean <p>trace链路</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceModeOn;

    /**
     * @var TraceModeConfiguration <p>trace链路配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceModeConfiguration;

    /**
     * @var integer <p>checkpoint保留个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckpointRetainedNum;

    /**
     * @var JobGraph <p>算子拓扑图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobGraph;

    /**
     * @var string <p>es索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsServerlessIndex;

    /**
     * @var string <p>es空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsServerlessSpace;

    /**
     * @var string <p>es索引中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string <p>es空间中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceName;

    /**
     * @var string <p>flink 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var string <p>jdk版本</p>
     */
    public $JdkVersion;

    /**
     * @var float <p>jm使用cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerCpu;

    /**
     * @var float <p>jm使用内存数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobManagerMem;

    /**
     * @var float <p>tm使用cpu数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerCpu;

    /**
     * @var float <p>tm使用mem数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskManagerMem;

    /**
     * @var JobConfig <p>运行中配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobConfigItem;

    /**
     * @var integer <p>checkpoint 超时时间</p>
     */
    public $CheckpointTimeoutSecond;

    /**
     * @var integer <p>checkpoint 间隔时间</p>
     */
    public $CheckpointIntervalSecond;

    /**
     * @var integer <p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： 全局SQL变量替换</li></ul><p>默认值：0</p>
     */
    public $VariableReplaceMode;

    /**
     * @param string $JobId <p>作业Id</p>
     * @param string $EntrypointClass <p>主类</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramArgs <p>主类入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>作业配置创建时间</p>
     * @param integer $Version <p>作业配置的版本号</p>
     * @param integer $DefaultParallelism <p>作业默认并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties <p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefDetails <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建者uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>作业配置上次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $COSBucket <p>作业绑定的存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogCollect <p>是否启用日志收集，0-未启用，1-采集到cls，4-采集到cos，5-采集到es</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxParallelism <p>作业的最大并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerSpec <p>JobManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerSpec <p>TaskManager规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsLogsetId <p>CLS日志集ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsTopicId <p>CLS日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PythonVersion <p>pyflink作业运行的python版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRecover <p>Oceanus 平台恢复作业开关 1:开启 -1: 关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogLevel <p>日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClazzLevels <p>类日志级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExpertModeOn <p>是否开启专家模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExpertModeConfiguration $ExpertModeConfiguration <p>专家模式的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TraceModeOn <p>trace链路</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TraceModeConfiguration $TraceModeConfiguration <p>trace链路配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckpointRetainedNum <p>checkpoint保留个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobGraph $JobGraph <p>算子拓扑图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsServerlessIndex <p>es索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsServerlessSpace <p>es空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexName <p>es索引中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceName <p>es空间中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion <p>flink 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JdkVersion <p>jdk版本</p>
     * @param float $JobManagerCpu <p>jm使用cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerMem <p>jm使用内存数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerCpu <p>tm使用cpu数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaskManagerMem <p>tm使用mem数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobConfig $JobConfigItem <p>运行中配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckpointTimeoutSecond <p>checkpoint 超时时间</p>
     * @param integer $CheckpointIntervalSecond <p>checkpoint 间隔时间</p>
     * @param integer $VariableReplaceMode <p>变量替换模式</p><p>枚举值：</p><ul><li>0： 表变量替换</li><li>1： 全局SQL变量替换</li></ul><p>默认值：0</p>
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

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
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

        if (array_key_exists("CheckpointIntervalSecond",$param) and $param["CheckpointIntervalSecond"] !== null) {
            $this->CheckpointIntervalSecond = $param["CheckpointIntervalSecond"];
        }

        if (array_key_exists("VariableReplaceMode",$param) and $param["VariableReplaceMode"] !== null) {
            $this->VariableReplaceMode = $param["VariableReplaceMode"];
        }
    }
}
