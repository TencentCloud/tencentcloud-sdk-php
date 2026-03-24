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
 * ModifyApmApplicationConfig请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getServiceName() 获取<p>应用名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>应用名</p>
 * @method integer getUrlConvergenceSwitch() 获取<p>URL收敛开关,0 关 | 1 开</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置<p>URL收敛开关,0 关 | 1 开</p>
 * @method integer getUrlConvergenceThreshold() 获取<p>URL收敛阈值</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置<p>URL收敛阈值</p>
 * @method string getExceptionFilter() 获取<p>异常过滤正则规则，逗号分隔</p>
 * @method void setExceptionFilter(string $ExceptionFilter) 设置<p>异常过滤正则规则，逗号分隔</p>
 * @method string getUrlConvergence() 获取<p>URL收敛正则规则，逗号分隔</p>
 * @method void setUrlConvergence(string $UrlConvergence) 设置<p>URL收敛正则规则，逗号分隔</p>
 * @method string getErrorCodeFilter() 获取<p>错误码过滤，逗号分隔</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置<p>错误码过滤，逗号分隔</p>
 * @method string getUrlExclude() 获取<p>URL排除正则规则，逗号分隔</p>
 * @method void setUrlExclude(string $UrlExclude) 设置<p>URL排除正则规则，逗号分隔</p>
 * @method integer getIsRelatedLog() 获取<p>日志开关 0 关 1 开</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置<p>日志开关 0 关 1 开</p>
 * @method string getLogRegion() 获取<p>日志地域</p>
 * @method void setLogRegion(string $LogRegion) 设置<p>日志地域</p>
 * @method string getLogTopicID() 获取<p>日志主题ID</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>日志主题ID</p>
 * @method string getLogSet() 获取<p>CLS 日志集 | ES 集群ID</p>
 * @method void setLogSet(string $LogSet) 设置<p>CLS 日志集 | ES 集群ID</p>
 * @method string getLogSource() 获取<p>日志来源 CLS | ES</p>
 * @method void setLogSource(string $LogSource) 设置<p>日志来源 CLS | ES</p>
 * @method string getIgnoreOperationName() 获取<p>需过滤的接口</p>
 * @method void setIgnoreOperationName(string $IgnoreOperationName) 设置<p>需过滤的接口</p>
 * @method boolean getEnableSnapshot() 获取<p>是否开启线程剖析</p>
 * @method void setEnableSnapshot(boolean $EnableSnapshot) 设置<p>是否开启线程剖析</p>
 * @method integer getSnapshotTimeout() 获取<p>线程剖析超时阈值</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置<p>线程剖析超时阈值</p>
 * @method boolean getAgentEnable() 获取<p>是否开启agent</p>
 * @method void setAgentEnable(boolean $AgentEnable) 设置<p>是否开启agent</p>
 * @method boolean getTraceSquash() 获取<p>是否开启链路压缩</p>
 * @method void setTraceSquash(boolean $TraceSquash) 设置<p>是否开启链路压缩</p>
 * @method boolean getEventEnable() 获取<p>是否开启应用诊断的开关</p>
 * @method void setEventEnable(boolean $EventEnable) 设置<p>是否开启应用诊断的开关</p>
 * @method array getInstrumentList() 获取<p>组件列表</p>
 * @method void setInstrumentList(array $InstrumentList) 设置<p>组件列表</p>
 * @method AgentOperationConfigView getAgentOperationConfigView() 获取<p>探针接口相关配置</p>
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) 设置<p>探针接口相关配置</p>
 * @method boolean getEnableLogConfig() 获取<p>是否开启应用日志配置</p>
 * @method void setEnableLogConfig(boolean $EnableLogConfig) 设置<p>是否开启应用日志配置</p>
 * @method boolean getEnableDashboardConfig() 获取<p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) 设置<p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
 * @method integer getIsRelatedDashboard() 获取<p>是否关联dashboard： 0 关 1 开</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置<p>是否关联dashboard： 0 关 1 开</p>
 * @method string getDashboardTopicID() 获取<p>dashboard ID</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置<p>dashboard ID</p>
 * @method integer getLogIndexType() 获取<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method void setLogIndexType(integer $LogIndexType) 设置<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method string getLogTraceIdKey() 获取<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogTraceIdKey(string $LogTraceIdKey) 设置<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method boolean getEnableSecurityConfig() 获取<p>是否开启应用安全配置</p>
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) 设置<p>是否开启应用安全配置</p>
 * @method integer getIsSqlInjectionAnalysis() 获取<p>是否开启SQL注入分析</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置<p>是否开启SQL注入分析</p>
 * @method integer getIsInstrumentationVulnerabilityScan() 获取<p>是否开启组件漏洞检测</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置<p>是否开启组件漏洞检测</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取<p>是否开启远程命令检测</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置<p>是否开启远程命令检测</p>
 * @method integer getIsMemoryHijackingAnalysis() 获取<p>是否开启内存马检测</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置<p>是否开启内存马检测</p>
 * @method integer getIsDeleteAnyFileAnalysis() 获取<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsReadAnyFileAnalysis() 获取<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsUploadAnyFileAnalysis() 获取<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsIncludeAnyFileAnalysis() 获取<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsDirectoryTraversalAnalysis() 获取<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
 * @method integer getIsScriptEngineInjectionAnalysis() 获取<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
 * @method integer getIsExpressionInjectionAnalysis() 获取<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
 * @method integer getIsJNDIInjectionAnalysis() 获取<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) 设置<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
 * @method integer getIsJNIInjectionAnalysis() 获取<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) 设置<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
 * @method integer getIsWebshellBackdoorAnalysis() 获取<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
 * @method integer getIsDeserializationAnalysis() 获取<p>是否开启反序列化检测（0-关闭，1-开启）</p>
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置<p>是否开启反序列化检测（0-关闭，1-开启）</p>
 * @method boolean getUrlAutoConvergenceEnable() 获取<p>接口自动收敛开关,0 关 | 1 开</p>
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) 设置<p>接口自动收敛开关,0 关 | 1 开</p>
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
 * @method AutoProfilingConfig getAutoProfilingConfig() 获取<p>自动性能剖析任务配置</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) 设置<p>自动性能剖析任务配置</p>
 * @method boolean getEnableThresholdConfig() 获取<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) 设置<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
 * @method integer getErrRateThreshold() 获取<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
 * @method boolean getUseDefaultFuseConfig() 获取<p>是否使用探针默认熔断阈值</p>
 * @method void setUseDefaultFuseConfig(boolean $UseDefaultFuseConfig) 设置<p>是否使用探针默认熔断阈值</p>
 */
class ModifyApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>应用名</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>URL收敛开关,0 关 | 1 开</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL收敛阈值</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>异常过滤正则规则，逗号分隔</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>URL收敛正则规则，逗号分隔</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>错误码过滤，逗号分隔</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var string <p>URL排除正则规则，逗号分隔</p>
     */
    public $UrlExclude;

    /**
     * @var integer <p>日志开关 0 关 1 开</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>日志地域</p>
     */
    public $LogRegion;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $LogTopicID;

    /**
     * @var string <p>CLS 日志集 | ES 集群ID</p>
     */
    public $LogSet;

    /**
     * @var string <p>日志来源 CLS | ES</p>
     */
    public $LogSource;

    /**
     * @var string <p>需过滤的接口</p>
     */
    public $IgnoreOperationName;

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
     * @var boolean <p>是否开启链路压缩</p>
     */
    public $TraceSquash;

    /**
     * @var boolean <p>是否开启应用诊断的开关</p>
     */
    public $EventEnable;

    /**
     * @var array <p>组件列表</p>
     */
    public $InstrumentList;

    /**
     * @var AgentOperationConfigView <p>探针接口相关配置</p>
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean <p>是否开启应用日志配置</p>
     */
    public $EnableLogConfig;

    /**
     * @var boolean <p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>是否关联dashboard： 0 关 1 开</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>dashboard ID</p>
     */
    public $DashboardTopicID;

    /**
     * @var integer <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     */
    public $LogIndexType;

    /**
     * @var string <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     */
    public $LogTraceIdKey;

    /**
     * @var boolean <p>是否开启应用安全配置</p>
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>是否开启SQL注入分析</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>是否开启组件漏洞检测</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>是否开启远程命令检测</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>是否开启内存马检测</p>
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>是否开启反序列化检测（0-关闭，1-开启）</p>
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>接口自动收敛开关,0 关 | 1 开</p>
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
     * @var AutoProfilingConfig <p>自动性能剖析任务配置</p>
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
     * @var boolean <p>是否使用探针默认熔断阈值</p>
     */
    public $UseDefaultFuseConfig;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $ServiceName <p>应用名</p>
     * @param integer $UrlConvergenceSwitch <p>URL收敛开关,0 关 | 1 开</p>
     * @param integer $UrlConvergenceThreshold <p>URL收敛阈值</p>
     * @param string $ExceptionFilter <p>异常过滤正则规则，逗号分隔</p>
     * @param string $UrlConvergence <p>URL收敛正则规则，逗号分隔</p>
     * @param string $ErrorCodeFilter <p>错误码过滤，逗号分隔</p>
     * @param string $UrlExclude <p>URL排除正则规则，逗号分隔</p>
     * @param integer $IsRelatedLog <p>日志开关 0 关 1 开</p>
     * @param string $LogRegion <p>日志地域</p>
     * @param string $LogTopicID <p>日志主题ID</p>
     * @param string $LogSet <p>CLS 日志集 | ES 集群ID</p>
     * @param string $LogSource <p>日志来源 CLS | ES</p>
     * @param string $IgnoreOperationName <p>需过滤的接口</p>
     * @param boolean $EnableSnapshot <p>是否开启线程剖析</p>
     * @param integer $SnapshotTimeout <p>线程剖析超时阈值</p>
     * @param boolean $AgentEnable <p>是否开启agent</p>
     * @param boolean $TraceSquash <p>是否开启链路压缩</p>
     * @param boolean $EventEnable <p>是否开启应用诊断的开关</p>
     * @param array $InstrumentList <p>组件列表</p>
     * @param AgentOperationConfigView $AgentOperationConfigView <p>探针接口相关配置</p>
     * @param boolean $EnableLogConfig <p>是否开启应用日志配置</p>
     * @param boolean $EnableDashboardConfig <p>应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）</p>
     * @param integer $IsRelatedDashboard <p>是否关联dashboard： 0 关 1 开</p>
     * @param string $DashboardTopicID <p>dashboard ID</p>
     * @param integer $LogIndexType <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     * @param string $LogTraceIdKey <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param boolean $EnableSecurityConfig <p>是否开启应用安全配置</p>
     * @param integer $IsSqlInjectionAnalysis <p>是否开启SQL注入分析</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>是否开启组件漏洞检测</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>是否开启远程命令检测</p>
     * @param integer $IsMemoryHijackingAnalysis <p>是否开启内存马检测</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsReadAnyFileAnalysis <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsUploadAnyFileAnalysis <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsIncludeAnyFileAnalysis <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsDirectoryTraversalAnalysis <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
     * @param integer $IsTemplateEngineInjectionAnalysis <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
     * @param integer $IsScriptEngineInjectionAnalysis <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
     * @param integer $IsExpressionInjectionAnalysis <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
     * @param integer $IsJNDIInjectionAnalysis <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
     * @param integer $IsJNIInjectionAnalysis <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
     * @param integer $IsWebshellBackdoorAnalysis <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
     * @param integer $IsDeserializationAnalysis <p>是否开启反序列化检测（0-关闭，1-开启）</p>
     * @param boolean $UrlAutoConvergenceEnable <p>接口自动收敛开关,0 关 | 1 开</p>
     * @param integer $UrlLongSegmentThreshold <p>URL长分段收敛阈值</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL数字分段收敛阈值</p>
     * @param integer $DisableMemoryUsed <p>探针熔断内存阈值</p>
     * @param integer $DisableCpuUsed <p>探针熔断CPU阈值</p>
     * @param boolean $DbStatementParametersEnabled <p>是否开启SQL参数获取</p>
     * @param array $SlowSQLThresholds <p>慢SQL阈值</p>
     * @param integer $EnableDesensitizationRule <p>是否开启脱敏规则</p>
     * @param string $DesensitizationRule <p>脱敏规则</p>
     * @param string $LogSpanIdKey <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>自动性能剖析任务配置</p>
     * @param boolean $EnableThresholdConfig <p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
     * @param integer $ErrRateThreshold <p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p>
     * @param integer $ResponseDurationWarningThreshold <p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p>
     * @param boolean $UseDefaultFuseConfig <p>是否使用探针默认熔断阈值</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("IgnoreOperationName",$param) and $param["IgnoreOperationName"] !== null) {
            $this->IgnoreOperationName = $param["IgnoreOperationName"];
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

        if (array_key_exists("TraceSquash",$param) and $param["TraceSquash"] !== null) {
            $this->TraceSquash = $param["TraceSquash"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("InstrumentList",$param) and $param["InstrumentList"] !== null) {
            $this->InstrumentList = [];
            foreach ($param["InstrumentList"] as $key => $value){
                $obj = new Instrument();
                $obj->deserialize($value);
                array_push($this->InstrumentList, $obj);
            }
        }

        if (array_key_exists("AgentOperationConfigView",$param) and $param["AgentOperationConfigView"] !== null) {
            $this->AgentOperationConfigView = new AgentOperationConfigView();
            $this->AgentOperationConfigView->deserialize($param["AgentOperationConfigView"]);
        }

        if (array_key_exists("EnableLogConfig",$param) and $param["EnableLogConfig"] !== null) {
            $this->EnableLogConfig = $param["EnableLogConfig"];
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

        if (array_key_exists("LogIndexType",$param) and $param["LogIndexType"] !== null) {
            $this->LogIndexType = $param["LogIndexType"];
        }

        if (array_key_exists("LogTraceIdKey",$param) and $param["LogTraceIdKey"] !== null) {
            $this->LogTraceIdKey = $param["LogTraceIdKey"];
        }

        if (array_key_exists("EnableSecurityConfig",$param) and $param["EnableSecurityConfig"] !== null) {
            $this->EnableSecurityConfig = $param["EnableSecurityConfig"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }

        if (array_key_exists("IsRemoteCommandExecutionAnalysis",$param) and $param["IsRemoteCommandExecutionAnalysis"] !== null) {
            $this->IsRemoteCommandExecutionAnalysis = $param["IsRemoteCommandExecutionAnalysis"];
        }

        if (array_key_exists("IsMemoryHijackingAnalysis",$param) and $param["IsMemoryHijackingAnalysis"] !== null) {
            $this->IsMemoryHijackingAnalysis = $param["IsMemoryHijackingAnalysis"];
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

        if (array_key_exists("UseDefaultFuseConfig",$param) and $param["UseDefaultFuseConfig"] !== null) {
            $this->UseDefaultFuseConfig = $param["UseDefaultFuseConfig"];
        }
    }
}
