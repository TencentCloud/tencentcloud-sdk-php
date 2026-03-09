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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询应用配置返回参数
 *
 * @method string getInstanceKey() 获取<p>实例ID</p>
 * @method void setInstanceKey(string $InstanceKey) 设置<p>实例ID</p>
 * @method string getServiceName() 获取<p>服务名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
 * @method integer getUrlConvergenceSwitch() 获取<p>URL收敛开关</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置<p>URL收敛开关</p>
 * @method integer getUrlConvergenceThreshold() 获取<p>URL收敛阈值</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置<p>URL收敛阈值</p>
 * @method string getUrlConvergence() 获取<p>URL收敛正则</p>
 * @method void setUrlConvergence(string $UrlConvergence) 设置<p>URL收敛正则</p>
 * @method string getExceptionFilter() 获取<p>异常过滤正则</p>
 * @method void setExceptionFilter(string $ExceptionFilter) 设置<p>异常过滤正则</p>
 * @method string getErrorCodeFilter() 获取<p>错误码过滤</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置<p>错误码过滤</p>
 * @method string getComponents() 获取<p>服务组件类型</p>
 * @method void setComponents(string $Components) 设置<p>服务组件类型</p>
 * @method string getUrlExclude() 获取<p>URL排除正则</p>
 * @method void setUrlExclude(string $UrlExclude) 设置<p>URL排除正则</p>
 * @method string getLogSource() 获取<p>日志来源</p>
 * @method void setLogSource(string $LogSource) 设置<p>日志来源</p>
 * @method string getLogRegion() 获取<p>日志所在地域</p>
 * @method void setLogRegion(string $LogRegion) 设置<p>日志所在地域</p>
 * @method integer getIsRelatedLog() 获取<p>是否开启日志 0 关 1 开</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置<p>是否开启日志 0 关 1 开</p>
 * @method string getLogTopicID() 获取<p>日志主题ID</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>日志主题ID</p>
 * @method string getIgnoreOperationName() 获取<p>需过滤的接口名</p>
 * @method void setIgnoreOperationName(string $IgnoreOperationName) 设置<p>需过滤的接口名</p>
 * @method string getLogSet() 获取<p>CLS日志集 | ES集群ID</p>
 * @method void setLogSet(string $LogSet) 设置<p>CLS日志集 | ES集群ID</p>
 * @method integer getTraceRateLimit() 获取<p>探针每秒上报trace数</p>
 * @method void setTraceRateLimit(integer $TraceRateLimit) 设置<p>探针每秒上报trace数</p>
 * @method boolean getEnableSnapshot() 获取<p>是否开启线程剖析</p>
 * @method void setEnableSnapshot(boolean $EnableSnapshot) 设置<p>是否开启线程剖析</p>
 * @method integer getSnapshotTimeout() 获取<p>线程剖析超时阈值</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置<p>线程剖析超时阈值</p>
 * @method boolean getAgentEnable() 获取<p>是否开启agent</p>
 * @method void setAgentEnable(boolean $AgentEnable) 设置<p>是否开启agent</p>
 * @method array getInstrumentList() 获取<p>组件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstrumentList(array $InstrumentList) 设置<p>组件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTraceSquash() 获取<p>是否开启链路压缩</p>
 * @method void setTraceSquash(boolean $TraceSquash) 设置<p>是否开启链路压缩</p>
 * @method boolean getEventEnable() 获取<p>是否开启应用诊断开关</p>
 * @method void setEventEnable(boolean $EventEnable) 设置<p>是否开启应用诊断开关</p>
 * @method AgentOperationConfigView getAgentOperationConfigView() 获取<p>探针接口相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) 设置<p>探针接口相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableLogConfig() 获取<p>是否开启应用日志配置</p>
 * @method void setEnableLogConfig(boolean $EnableLogConfig) 设置<p>是否开启应用日志配置</p>
 * @method string getServiceID() 获取<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableDashboardConfig() 获取<p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) 设置<p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRelatedDashboard() 获取<p>是否关联dashboard： 0 关 1 开</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置<p>是否关联dashboard： 0 关 1 开</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDashboardTopicID() 获取<p>dashboard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置<p>dashboard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableSecurityConfig() 获取<p>是否开启应用级别配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) 设置<p>是否开启应用级别配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsInstrumentationVulnerabilityScan() 获取<p>是否开启组件漏洞检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置<p>是否开启组件漏洞检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSqlInjectionAnalysis() 获取<p>是否开启SQL注入分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置<p>是否开启SQL注入分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取<p>是否开启远程命令执行分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置<p>是否开启远程命令执行分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsMemoryHijackingAnalysis() 获取<p>是否开启内存马检测分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置<p>是否开启内存马检测分析</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogIndexType() 获取<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method void setLogIndexType(integer $LogIndexType) 设置<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method string getLogTraceIdKey() 获取<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogTraceIdKey(string $LogTraceIdKey) 设置<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method integer getIsDeleteAnyFileAnalysis() 获取<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsReadAnyFileAnalysis() 获取<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUploadAnyFileAnalysis() 获取<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIncludeAnyFileAnalysis() 获取<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDirectoryTraversalAnalysis() 获取<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsScriptEngineInjectionAnalysis() 获取<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsExpressionInjectionAnalysis() 获取<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsJNDIInjectionAnalysis() 获取<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) 设置<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsJNIInjectionAnalysis() 获取<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) 设置<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsWebshellBackdoorAnalysis() 获取<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDeserializationAnalysis() 获取<p>是否开启反序列化检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置<p>是否开启反序列化检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUrlAutoConvergenceEnable() 获取<p>接口名称自动收敛开关（0-关闭，1-开启）</p>
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) 设置<p>接口名称自动收敛开关（0-关闭，1-开启）</p>
 * @method integer getUrlLongSegmentThreshold() 获取<p>URL长分段收敛阈值</p>
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) 设置<p>URL长分段收敛阈值</p>
 * @method integer getUrlNumberSegmentThreshold() 获取<p>URL数字分段收敛阈值</p>
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) 设置<p>URL数字分段收敛阈值</p>
 * @method integer getDisableMemoryUsed() 获取<p>探针熔断内存阈值</p>
 * @method void setDisableMemoryUsed(integer $DisableMemoryUsed) 设置<p>探针熔断内存阈值</p>
 * @method integer getDisableCpuUsed() 获取<p>探针熔断CPU阈值</p>
 * @method void setDisableCpuUsed(integer $DisableCpuUsed) 设置<p>探针熔断CPU阈值</p>
 * @method boolean getDbStatementParametersEnabled() 获取<p>是否开启SQL参数获取</p>
 * @method void setDbStatementParametersEnabled(boolean $DbStatementParametersEnabled) 设置<p>是否开启SQL参数获取</p>
 * @method array getSlowSQLThresholds() 获取<p>慢SQL阈值</p>
 * @method void setSlowSQLThresholds(array $SlowSQLThresholds) 设置<p>慢SQL阈值</p>
 * @method integer getEnableDesensitizationRule() 获取<p>是否开启脱敏规则</p>
 * @method void setEnableDesensitizationRule(integer $EnableDesensitizationRule) 设置<p>是否开启脱敏规则</p>
 * @method string getDesensitizationRule() 获取<p>脱敏规则</p>
 * @method void setDesensitizationRule(string $DesensitizationRule) 设置<p>脱敏规则</p>
 * @method string getLogSpanIdKey() 获取<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogSpanIdKey(string $LogSpanIdKey) 设置<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method AutoProfilingConfig getAutoProfilingConfig() 获取<p>自动性能剖析配置</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) 设置<p>自动性能剖析配置</p>
 * @method boolean getEnableThresholdConfig() 获取<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) 设置<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
 * @method integer getErrRateThreshold() 获取<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
 */
class ApmAppConfig extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceKey;

    /**
     * @var string <p>服务名</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>URL收敛开关</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL收敛阈值</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>URL收敛正则</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>异常过滤正则</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>错误码过滤</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var string <p>服务组件类型</p>
     */
    public $Components;

    /**
     * @var string <p>URL排除正则</p>
     */
    public $UrlExclude;

    /**
     * @var string <p>日志来源</p>
     */
    public $LogSource;

    /**
     * @var string <p>日志所在地域</p>
     */
    public $LogRegion;

    /**
     * @var integer <p>是否开启日志 0 关 1 开</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $LogTopicID;

    /**
     * @var string <p>需过滤的接口名</p>
     */
    public $IgnoreOperationName;

    /**
     * @var string <p>CLS日志集 | ES集群ID</p>
     */
    public $LogSet;

    /**
     * @var integer <p>探针每秒上报trace数</p>
     */
    public $TraceRateLimit;

    /**
     * @var boolean <p>是否开启线程剖析</p>
     */
    public $EnableSnapshot;

    /**
     * @var integer <p>线程剖析超时阈值</p>
     */
    public $SnapshotTimeout;

    /**
     * @var boolean <p>是否开启agent</p>
     */
    public $AgentEnable;

    /**
     * @var array <p>组件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstrumentList;

    /**
     * @var boolean <p>是否开启链路压缩</p>
     */
    public $TraceSquash;

    /**
     * @var boolean <p>是否开启应用诊断开关</p>
     */
    public $EventEnable;

    /**
     * @var AgentOperationConfigView <p>探针接口相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean <p>是否开启应用日志配置</p>
     */
    public $EnableLogConfig;

    /**
     * @var string <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var boolean <p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>是否关联dashboard： 0 关 1 开</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>dashboard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardTopicID;

    /**
     * @var boolean <p>是否开启应用级别配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>是否开启组件漏洞检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>是否开启SQL注入分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>是否开启远程命令执行分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>是否开启内存马检测分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     */
    public $LogIndexType;

    /**
     * @var string <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     */
    public $LogTraceIdKey;

    /**
     * @var integer <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>是否开启反序列化检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>接口名称自动收敛开关（0-关闭，1-开启）</p>
     */
    public $UrlAutoConvergenceEnable;

    /**
     * @var integer <p>URL长分段收敛阈值</p>
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer <p>URL数字分段收敛阈值</p>
     */
    public $UrlNumberSegmentThreshold;

    /**
     * @var integer <p>探针熔断内存阈值</p>
     */
    public $DisableMemoryUsed;

    /**
     * @var integer <p>探针熔断CPU阈值</p>
     */
    public $DisableCpuUsed;

    /**
     * @var boolean <p>是否开启SQL参数获取</p>
     */
    public $DbStatementParametersEnabled;

    /**
     * @var array <p>慢SQL阈值</p>
     */
    public $SlowSQLThresholds;

    /**
     * @var integer <p>是否开启脱敏规则</p>
     */
    public $EnableDesensitizationRule;

    /**
     * @var string <p>脱敏规则</p>
     */
    public $DesensitizationRule;

    /**
     * @var string <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
     */
    public $LogSpanIdKey;

    /**
     * @var AutoProfilingConfig <p>自动性能剖析配置</p>
     */
    public $AutoProfilingConfig;

    /**
     * @var boolean <p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @param string $InstanceKey <p>实例ID</p>
     * @param string $ServiceName <p>服务名</p>
     * @param integer $UrlConvergenceSwitch <p>URL收敛开关</p>
     * @param integer $UrlConvergenceThreshold <p>URL收敛阈值</p>
     * @param string $UrlConvergence <p>URL收敛正则</p>
     * @param string $ExceptionFilter <p>异常过滤正则</p>
     * @param string $ErrorCodeFilter <p>错误码过滤</p>
     * @param string $Components <p>服务组件类型</p>
     * @param string $UrlExclude <p>URL排除正则</p>
     * @param string $LogSource <p>日志来源</p>
     * @param string $LogRegion <p>日志所在地域</p>
     * @param integer $IsRelatedLog <p>是否开启日志 0 关 1 开</p>
     * @param string $LogTopicID <p>日志主题ID</p>
     * @param string $IgnoreOperationName <p>需过滤的接口名</p>
     * @param string $LogSet <p>CLS日志集 | ES集群ID</p>
     * @param integer $TraceRateLimit <p>探针每秒上报trace数</p>
     * @param boolean $EnableSnapshot <p>是否开启线程剖析</p>
     * @param integer $SnapshotTimeout <p>线程剖析超时阈值</p>
     * @param boolean $AgentEnable <p>是否开启agent</p>
     * @param array $InstrumentList <p>组件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TraceSquash <p>是否开启链路压缩</p>
     * @param boolean $EventEnable <p>是否开启应用诊断开关</p>
     * @param AgentOperationConfigView $AgentOperationConfigView <p>探针接口相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableLogConfig <p>是否开启应用日志配置</p>
     * @param string $ServiceID <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableDashboardConfig <p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRelatedDashboard <p>是否关联dashboard： 0 关 1 开</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DashboardTopicID <p>dashboard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableSecurityConfig <p>是否开启应用级别配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsInstrumentationVulnerabilityScan <p>是否开启组件漏洞检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSqlInjectionAnalysis <p>是否开启SQL注入分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRemoteCommandExecutionAnalysis <p>是否开启远程命令执行分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsMemoryHijackingAnalysis <p>是否开启内存马检测分析</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogIndexType <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     * @param string $LogTraceIdKey <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsReadAnyFileAnalysis <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUploadAnyFileAnalysis <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIncludeAnyFileAnalysis <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDirectoryTraversalAnalysis <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsTemplateEngineInjectionAnalysis <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsScriptEngineInjectionAnalysis <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsExpressionInjectionAnalysis <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsJNDIInjectionAnalysis <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsJNIInjectionAnalysis <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsWebshellBackdoorAnalysis <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDeserializationAnalysis <p>是否开启反序列化检测（0-关闭，1-开启）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UrlAutoConvergenceEnable <p>接口名称自动收敛开关（0-关闭，1-开启）</p>
     * @param integer $UrlLongSegmentThreshold <p>URL长分段收敛阈值</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL数字分段收敛阈值</p>
     * @param integer $DisableMemoryUsed <p>探针熔断内存阈值</p>
     * @param integer $DisableCpuUsed <p>探针熔断CPU阈值</p>
     * @param boolean $DbStatementParametersEnabled <p>是否开启SQL参数获取</p>
     * @param array $SlowSQLThresholds <p>慢SQL阈值</p>
     * @param integer $EnableDesensitizationRule <p>是否开启脱敏规则</p>
     * @param string $DesensitizationRule <p>脱敏规则</p>
     * @param string $LogSpanIdKey <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>自动性能剖析配置</p>
     * @param boolean $EnableThresholdConfig <p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
     * @param integer $ErrRateThreshold <p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
     * @param integer $ResponseDurationWarningThreshold <p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UrlConvergenceSwitch",$param) and $param["UrlConvergenceSwitch"] !== null) {
            $this->UrlConvergenceSwitch = $param["UrlConvergenceSwitch"];
        }

        if (array_key_exists("UrlConvergenceThreshold",$param) and $param["UrlConvergenceThreshold"] !== null) {
            $this->UrlConvergenceThreshold = $param["UrlConvergenceThreshold"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("IgnoreOperationName",$param) and $param["IgnoreOperationName"] !== null) {
            $this->IgnoreOperationName = $param["IgnoreOperationName"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("TraceRateLimit",$param) and $param["TraceRateLimit"] !== null) {
            $this->TraceRateLimit = $param["TraceRateLimit"];
        }

        if (array_key_exists("EnableSnapshot",$param) and $param["EnableSnapshot"] !== null) {
            $this->EnableSnapshot = $param["EnableSnapshot"];
        }

        if (array_key_exists("SnapshotTimeout",$param) and $param["SnapshotTimeout"] !== null) {
            $this->SnapshotTimeout = $param["SnapshotTimeout"];
        }

        if (array_key_exists("AgentEnable",$param) and $param["AgentEnable"] !== null) {
            $this->AgentEnable = $param["AgentEnable"];
        }

        if (array_key_exists("InstrumentList",$param) and $param["InstrumentList"] !== null) {
            $this->InstrumentList = [];
            foreach ($param["InstrumentList"] as $key => $value){
                $obj = new Instrument();
                $obj->deserialize($value);
                array_push($this->InstrumentList, $obj);
            }
        }

        if (array_key_exists("TraceSquash",$param) and $param["TraceSquash"] !== null) {
            $this->TraceSquash = $param["TraceSquash"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("AgentOperationConfigView",$param) and $param["AgentOperationConfigView"] !== null) {
            $this->AgentOperationConfigView = new AgentOperationConfigView();
            $this->AgentOperationConfigView->deserialize($param["AgentOperationConfigView"]);
        }

        if (array_key_exists("EnableLogConfig",$param) and $param["EnableLogConfig"] !== null) {
            $this->EnableLogConfig = $param["EnableLogConfig"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("EnableDashboardConfig",$param) and $param["EnableDashboardConfig"] !== null) {
            $this->EnableDashboardConfig = $param["EnableDashboardConfig"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("EnableSecurityConfig",$param) and $param["EnableSecurityConfig"] !== null) {
            $this->EnableSecurityConfig = $param["EnableSecurityConfig"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("IsRemoteCommandExecutionAnalysis",$param) and $param["IsRemoteCommandExecutionAnalysis"] !== null) {
            $this->IsRemoteCommandExecutionAnalysis = $param["IsRemoteCommandExecutionAnalysis"];
        }

        if (array_key_exists("IsMemoryHijackingAnalysis",$param) and $param["IsMemoryHijackingAnalysis"] !== null) {
            $this->IsMemoryHijackingAnalysis = $param["IsMemoryHijackingAnalysis"];
        }

        if (array_key_exists("LogIndexType",$param) and $param["LogIndexType"] !== null) {
            $this->LogIndexType = $param["LogIndexType"];
        }

        if (array_key_exists("LogTraceIdKey",$param) and $param["LogTraceIdKey"] !== null) {
            $this->LogTraceIdKey = $param["LogTraceIdKey"];
        }

        if (array_key_exists("IsDeleteAnyFileAnalysis",$param) and $param["IsDeleteAnyFileAnalysis"] !== null) {
            $this->IsDeleteAnyFileAnalysis = $param["IsDeleteAnyFileAnalysis"];
        }

        if (array_key_exists("IsReadAnyFileAnalysis",$param) and $param["IsReadAnyFileAnalysis"] !== null) {
            $this->IsReadAnyFileAnalysis = $param["IsReadAnyFileAnalysis"];
        }

        if (array_key_exists("IsUploadAnyFileAnalysis",$param) and $param["IsUploadAnyFileAnalysis"] !== null) {
            $this->IsUploadAnyFileAnalysis = $param["IsUploadAnyFileAnalysis"];
        }

        if (array_key_exists("IsIncludeAnyFileAnalysis",$param) and $param["IsIncludeAnyFileAnalysis"] !== null) {
            $this->IsIncludeAnyFileAnalysis = $param["IsIncludeAnyFileAnalysis"];
        }

        if (array_key_exists("IsDirectoryTraversalAnalysis",$param) and $param["IsDirectoryTraversalAnalysis"] !== null) {
            $this->IsDirectoryTraversalAnalysis = $param["IsDirectoryTraversalAnalysis"];
        }

        if (array_key_exists("IsTemplateEngineInjectionAnalysis",$param) and $param["IsTemplateEngineInjectionAnalysis"] !== null) {
            $this->IsTemplateEngineInjectionAnalysis = $param["IsTemplateEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsScriptEngineInjectionAnalysis",$param) and $param["IsScriptEngineInjectionAnalysis"] !== null) {
            $this->IsScriptEngineInjectionAnalysis = $param["IsScriptEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsExpressionInjectionAnalysis",$param) and $param["IsExpressionInjectionAnalysis"] !== null) {
            $this->IsExpressionInjectionAnalysis = $param["IsExpressionInjectionAnalysis"];
        }

        if (array_key_exists("IsJNDIInjectionAnalysis",$param) and $param["IsJNDIInjectionAnalysis"] !== null) {
            $this->IsJNDIInjectionAnalysis = $param["IsJNDIInjectionAnalysis"];
        }

        if (array_key_exists("IsJNIInjectionAnalysis",$param) and $param["IsJNIInjectionAnalysis"] !== null) {
            $this->IsJNIInjectionAnalysis = $param["IsJNIInjectionAnalysis"];
        }

        if (array_key_exists("IsWebshellBackdoorAnalysis",$param) and $param["IsWebshellBackdoorAnalysis"] !== null) {
            $this->IsWebshellBackdoorAnalysis = $param["IsWebshellBackdoorAnalysis"];
        }

        if (array_key_exists("IsDeserializationAnalysis",$param) and $param["IsDeserializationAnalysis"] !== null) {
            $this->IsDeserializationAnalysis = $param["IsDeserializationAnalysis"];
        }

        if (array_key_exists("UrlAutoConvergenceEnable",$param) and $param["UrlAutoConvergenceEnable"] !== null) {
            $this->UrlAutoConvergenceEnable = $param["UrlAutoConvergenceEnable"];
        }

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }

        if (array_key_exists("DisableMemoryUsed",$param) and $param["DisableMemoryUsed"] !== null) {
            $this->DisableMemoryUsed = $param["DisableMemoryUsed"];
        }

        if (array_key_exists("DisableCpuUsed",$param) and $param["DisableCpuUsed"] !== null) {
            $this->DisableCpuUsed = $param["DisableCpuUsed"];
        }

        if (array_key_exists("DbStatementParametersEnabled",$param) and $param["DbStatementParametersEnabled"] !== null) {
            $this->DbStatementParametersEnabled = $param["DbStatementParametersEnabled"];
        }

        if (array_key_exists("SlowSQLThresholds",$param) and $param["SlowSQLThresholds"] !== null) {
            $this->SlowSQLThresholds = [];
            foreach ($param["SlowSQLThresholds"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->SlowSQLThresholds, $obj);
            }
        }

        if (array_key_exists("EnableDesensitizationRule",$param) and $param["EnableDesensitizationRule"] !== null) {
            $this->EnableDesensitizationRule = $param["EnableDesensitizationRule"];
        }

        if (array_key_exists("DesensitizationRule",$param) and $param["DesensitizationRule"] !== null) {
            $this->DesensitizationRule = $param["DesensitizationRule"];
        }

        if (array_key_exists("LogSpanIdKey",$param) and $param["LogSpanIdKey"] !== null) {
            $this->LogSpanIdKey = $param["LogSpanIdKey"];
        }

        if (array_key_exists("AutoProfilingConfig",$param) and $param["AutoProfilingConfig"] !== null) {
            $this->AutoProfilingConfig = new AutoProfilingConfig();
            $this->AutoProfilingConfig->deserialize($param["AutoProfilingConfig"]);
        }

        if (array_key_exists("EnableThresholdConfig",$param) and $param["EnableThresholdConfig"] !== null) {
            $this->EnableThresholdConfig = $param["EnableThresholdConfig"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }
    }
}
