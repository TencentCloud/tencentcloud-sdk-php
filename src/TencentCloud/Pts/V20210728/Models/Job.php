<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务
 *
 * @method string getJobId() 获取任务的JobID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置任务的JobID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioId() 获取任务的场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioId(string $ScenarioId) 设置任务的场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method Load getLoad() 获取任务的施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoad(Load $Load) 设置任务的施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigs() 获取此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigs(array $Configs) 设置此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasets() 获取任务的数据集文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasets(array $Datasets) 设置任务的数据集文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtensions() 获取此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensions(array $Extensions) 设置此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务的运行状态, JobUnknown: 0,JobCreated:1,JobPending:2, JobPreparing:3,JobSelectClustering:4,JobCreateTasking:5,JobSyncTasking:6
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务的运行状态, JobUnknown: 0,JobCreated:1,JobPending:2, JobPreparing:3,JobSelectClustering:4,JobCreateTasking:5,JobSyncTasking:6
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取任务的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxVirtualUserCount() 获取任务的最大VU数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxVirtualUserCount(integer $MaxVirtualUserCount) 设置任务的最大VU数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNote() 获取任务的备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置任务的备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getErrorRate() 获取错误率百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorRate(float $ErrorRate) 设置错误率百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobOwner() 获取任务发起人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobOwner(string $JobOwner) 设置任务发起人
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadSource getLoadSources() 获取此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadSources(LoadSource $LoadSources) 设置此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取任务时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置任务时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestsPerSecond() 获取最大每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) 设置最大每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestTotal() 获取总请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestTotal(float $RequestTotal) 设置总请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestsPerSecond() 获取平均每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置平均每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeAverage() 获取平均响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeAverage(float $ResponseTimeAverage) 设置平均响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeP99() 获取响应时间第99百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeP99(float $ResponseTimeP99) 设置响应时间第99百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeP95() 获取响应时间第95百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeP95(float $ResponseTimeP95) 设置响应时间第95百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeP90() 获取响应时间第90百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeP90(float $ResponseTimeP90) 设置响应时间第90百分位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScripts() 获取此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScripts(array $Scripts) 设置此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeMax() 获取最大响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeMax(float $ResponseTimeMax) 设置最大响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseTimeMin() 获取最小响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTimeMin(float $ResponseTimeMin) 设置最小响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadSourceInfos() 获取发压host信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadSourceInfos(array $LoadSourceInfos) 设置发压host信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTestScripts() 获取测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestScripts(array $TestScripts) 设置测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocols() 获取协议脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocols(array $Protocols) 设置协议脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestFiles() 获取请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestFiles(array $RequestFiles) 设置请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlugins() 获取拓展包文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlugins(array $Plugins) 设置拓展包文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronId() 获取定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronId(string $CronId) 设置定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取场景类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置场景类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method DomainNameConfig getDomainNameConfig() 获取域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) 设置域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDebug() 获取false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDebug(boolean $Debug) 设置false
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbortReason() 获取中断原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbortReason(integer $AbortReason) 设置中断原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取任务的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置任务的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotificationHooks() 获取通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotificationHooks(array $NotificationHooks) 设置通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getNetworkReceiveRate() 获取每秒接收字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkReceiveRate(float $NetworkReceiveRate) 设置每秒接收字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getNetworkSendRate() 获取每秒发送字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkSendRate(float $NetworkSendRate) 设置每秒发送字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取任务状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置任务状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取test-project
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置test-project
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioName() 获取test-scenario
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioName(string $ScenarioName) 设置test-scenario
注意：此字段可能返回 null，表示取不到有效值。
 */
class Job extends AbstractModel
{
    /**
     * @var string 任务的JobID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 任务的场景ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioId;

    /**
     * @var Load 任务的施压配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Load;

    /**
     * @var array 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configs;

    /**
     * @var array 任务的数据集文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Datasets;

    /**
     * @var array 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extensions;

    /**
     * @var integer 任务的运行状态, JobUnknown: 0,JobCreated:1,JobPending:2, JobPreparing:3,JobSelectClustering:4,JobCreateTasking:5,JobSyncTasking:6
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 任务的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 任务的最大VU数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxVirtualUserCount;

    /**
     * @var string 任务的备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var float 错误率百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorRate;

    /**
     * @var string 任务发起人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobOwner;

    /**
     * @var LoadSource 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadSources;

    /**
     * @var integer 任务时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 最大每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestsPerSecond;

    /**
     * @var float 总请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestTotal;

    /**
     * @var float 平均每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestsPerSecond;

    /**
     * @var float 平均响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeAverage;

    /**
     * @var float 响应时间第99百分位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeP99;

    /**
     * @var float 响应时间第95百分位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeP95;

    /**
     * @var float 响应时间第90百分位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeP90;

    /**
     * @var array 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scripts;

    /**
     * @var float 最大响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeMax;

    /**
     * @var float 最小响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTimeMin;

    /**
     * @var array 发压host信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadSourceInfos;

    /**
     * @var array 测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestScripts;

    /**
     * @var array 协议脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocols;

    /**
     * @var array 请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestFiles;

    /**
     * @var array 拓展包文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Plugins;

    /**
     * @var string 定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronId;

    /**
     * @var string 场景类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var DomainNameConfig 域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainNameConfig;

    /**
     * @var boolean false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Debug;

    /**
     * @var integer 中断原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbortReason;

    /**
     * @var string 任务的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var array 通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotificationHooks;

    /**
     * @var float 每秒接收字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkReceiveRate;

    /**
     * @var float 每秒发送字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkSendRate;

    /**
     * @var string 任务状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string test-project
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string test-scenario
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioName;

    /**
     * @param string $JobId 任务的JobID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioId 任务的场景ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param Load $Load 任务的施压配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Configs 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Datasets 任务的数据集文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Extensions 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务的运行状态, JobUnknown: 0,JobCreated:1,JobPending:2, JobPreparing:3,JobSelectClustering:4,JobCreateTasking:5,JobSyncTasking:6
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 任务的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxVirtualUserCount 任务的最大VU数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Note 任务的备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ErrorRate 错误率百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobOwner 任务发起人
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadSource $LoadSources 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 任务时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestsPerSecond 最大每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestTotal 总请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestsPerSecond 平均每秒请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeAverage 平均响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeP99 响应时间第99百分位
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeP95 响应时间第95百分位
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeP90 响应时间第90百分位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Scripts 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeMax 最大响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseTimeMin 最小响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadSourceInfos 发压host信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TestScripts 测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Protocols 协议脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestFiles 请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Plugins 拓展包文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronId 定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 场景类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param DomainNameConfig $DomainNameConfig 域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Debug false
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AbortReason 中断原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 任务的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NotificationHooks 通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $NetworkReceiveRate 每秒接收字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $NetworkSendRate 每秒发送字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 任务状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName test-project
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioName test-scenario
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxVirtualUserCount",$param) and $param["MaxVirtualUserCount"] !== null) {
            $this->MaxVirtualUserCount = $param["MaxVirtualUserCount"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("LoadSources",$param) and $param["LoadSources"] !== null) {
            $this->LoadSources = new LoadSource();
            $this->LoadSources->deserialize($param["LoadSources"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("RequestTotal",$param) and $param["RequestTotal"] !== null) {
            $this->RequestTotal = $param["RequestTotal"];
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = $param["RequestsPerSecond"];
        }

        if (array_key_exists("ResponseTimeAverage",$param) and $param["ResponseTimeAverage"] !== null) {
            $this->ResponseTimeAverage = $param["ResponseTimeAverage"];
        }

        if (array_key_exists("ResponseTimeP99",$param) and $param["ResponseTimeP99"] !== null) {
            $this->ResponseTimeP99 = $param["ResponseTimeP99"];
        }

        if (array_key_exists("ResponseTimeP95",$param) and $param["ResponseTimeP95"] !== null) {
            $this->ResponseTimeP95 = $param["ResponseTimeP95"];
        }

        if (array_key_exists("ResponseTimeP90",$param) and $param["ResponseTimeP90"] !== null) {
            $this->ResponseTimeP90 = $param["ResponseTimeP90"];
        }

        if (array_key_exists("Scripts",$param) and $param["Scripts"] !== null) {
            $this->Scripts = $param["Scripts"];
        }

        if (array_key_exists("ResponseTimeMax",$param) and $param["ResponseTimeMax"] !== null) {
            $this->ResponseTimeMax = $param["ResponseTimeMax"];
        }

        if (array_key_exists("ResponseTimeMin",$param) and $param["ResponseTimeMin"] !== null) {
            $this->ResponseTimeMin = $param["ResponseTimeMin"];
        }

        if (array_key_exists("LoadSourceInfos",$param) and $param["LoadSourceInfos"] !== null) {
            $this->LoadSourceInfos = [];
            foreach ($param["LoadSourceInfos"] as $key => $value){
                $obj = new LoadSource();
                $obj->deserialize($value);
                array_push($this->LoadSourceInfos, $obj);
            }
        }

        if (array_key_exists("TestScripts",$param) and $param["TestScripts"] !== null) {
            $this->TestScripts = [];
            foreach ($param["TestScripts"] as $key => $value){
                $obj = new ScriptInfo();
                $obj->deserialize($value);
                array_push($this->TestScripts, $obj);
            }
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new ProtocolInfo();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("RequestFiles",$param) and $param["RequestFiles"] !== null) {
            $this->RequestFiles = [];
            foreach ($param["RequestFiles"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->RequestFiles, $obj);
            }
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DomainNameConfig",$param) and $param["DomainNameConfig"] !== null) {
            $this->DomainNameConfig = new DomainNameConfig();
            $this->DomainNameConfig->deserialize($param["DomainNameConfig"]);
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("NotificationHooks",$param) and $param["NotificationHooks"] !== null) {
            $this->NotificationHooks = [];
            foreach ($param["NotificationHooks"] as $key => $value){
                $obj = new NotificationHook();
                $obj->deserialize($value);
                array_push($this->NotificationHooks, $obj);
            }
        }

        if (array_key_exists("NetworkReceiveRate",$param) and $param["NetworkReceiveRate"] !== null) {
            $this->NetworkReceiveRate = $param["NetworkReceiveRate"];
        }

        if (array_key_exists("NetworkSendRate",$param) and $param["NetworkSendRate"] !== null) {
            $this->NetworkSendRate = $param["NetworkSendRate"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }
    }
}
