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
 * @method string getInstanceKey() 获取实例ID
 * @method void setInstanceKey(string $InstanceKey) 设置实例ID
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method integer getUrlConvergenceSwitch() 获取URL收敛开关
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置URL收敛开关
 * @method integer getUrlConvergenceThreshold() 获取URL收敛阈值
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置URL收敛阈值
 * @method string getUrlConvergence() 获取URL收敛正则
 * @method void setUrlConvergence(string $UrlConvergence) 设置URL收敛正则
 * @method string getExceptionFilter() 获取异常过滤正则
 * @method void setExceptionFilter(string $ExceptionFilter) 设置异常过滤正则
 * @method string getErrorCodeFilter() 获取错误码过滤
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置错误码过滤
 * @method string getComponents() 获取服务组件类型
 * @method void setComponents(string $Components) 设置服务组件类型
 * @method string getUrlExclude() 获取URL排除正则
 * @method void setUrlExclude(string $UrlExclude) 设置URL排除正则
 * @method string getLogSource() 获取日志来源
 * @method void setLogSource(string $LogSource) 设置日志来源
 * @method string getLogRegion() 获取日志所在地域
 * @method void setLogRegion(string $LogRegion) 设置日志所在地域
 * @method integer getIsRelatedLog() 获取是否开启日志 0 关 1 开
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置是否开启日志 0 关 1 开
 * @method string getLogTopicID() 获取日志主题ID
 * @method void setLogTopicID(string $LogTopicID) 设置日志主题ID
 * @method string getIgnoreOperationName() 获取需过滤的接口名
 * @method void setIgnoreOperationName(string $IgnoreOperationName) 设置需过滤的接口名
 * @method string getLogSet() 获取CLS日志集 | ES集群ID
 * @method void setLogSet(string $LogSet) 设置CLS日志集 | ES集群ID
 * @method integer getTraceRateLimit() 获取探针每秒上报trace数
 * @method void setTraceRateLimit(integer $TraceRateLimit) 设置探针每秒上报trace数
 * @method boolean getEnableSnapshot() 获取是否开启线程剖析
 * @method void setEnableSnapshot(boolean $EnableSnapshot) 设置是否开启线程剖析
 * @method integer getSnapshotTimeout() 获取线程剖析超时阈值
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置线程剖析超时阈值
 * @method boolean getAgentEnable() 获取是否开启agent
 * @method void setAgentEnable(boolean $AgentEnable) 设置是否开启agent
 * @method array getInstrumentList() 获取组件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstrumentList(array $InstrumentList) 设置组件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTraceSquash() 获取是否开启链路压缩
 * @method void setTraceSquash(boolean $TraceSquash) 设置是否开启链路压缩
 * @method boolean getEventEnable() 获取是否开启应用诊断开关
 * @method void setEventEnable(boolean $EventEnable) 设置是否开启应用诊断开关
 * @method AgentOperationConfigView getAgentOperationConfigView() 获取探针接口相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) 设置探针接口相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableLogConfig() 获取是否开启应用日志配置
 * @method void setEnableLogConfig(boolean $EnableLogConfig) 设置是否开启应用日志配置
 * @method string getServiceID() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableDashboardConfig() 获取应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) 设置应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRelatedDashboard() 获取是否关联dashboard： 0 关 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置是否关联dashboard： 0 关 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDashboardTopicID() 获取dashboard ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置dashboard ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableSecurityConfig() 获取是否开启应用级别配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) 设置是否开启应用级别配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsInstrumentationVulnerabilityScan() 获取是否开启组件漏洞检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置是否开启组件漏洞检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSqlInjectionAnalysis() 获取是否开启SQL注入分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置是否开启SQL注入分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取是否开启远程命令执行分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置是否开启远程命令执行分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsMemoryHijackingAnalysis() 获取是否开启内存马检测分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置是否开启内存马检测分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogIndexType() 获取CLS索引类型(0=全文索引，1=键值索引)
 * @method void setLogIndexType(integer $LogIndexType) 设置CLS索引类型(0=全文索引，1=键值索引)
 * @method string getLogTraceIdKey() 获取traceId的索引key: 当CLS索引类型为键值索引时生效
 * @method void setLogTraceIdKey(string $LogTraceIdKey) 设置traceId的索引key: 当CLS索引类型为键值索引时生效
 * @method integer getIsDeleteAnyFileAnalysis() 获取是否开启删除任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置是否开启删除任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsReadAnyFileAnalysis() 获取是否开启读取任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置是否开启读取任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUploadAnyFileAnalysis() 获取是否开启上传任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置是否开启上传任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIncludeAnyFileAnalysis() 获取是否开启包含任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置是否开启包含任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDirectoryTraversalAnalysis() 获取是否开启目录遍历检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置是否开启目录遍历检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取是否开启模板引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置是否开启模板引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsScriptEngineInjectionAnalysis() 获取是否开启脚本引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置是否开启脚本引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsExpressionInjectionAnalysis() 获取是否开启表达式注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置是否开启表达式注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsJNDIInjectionAnalysis() 获取是否开启JNDI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) 设置是否开启JNDI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsJNIInjectionAnalysis() 获取是否开启JNI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) 设置是否开启JNI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsWebshellBackdoorAnalysis() 获取是否开启Webshell后门检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置是否开启Webshell后门检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDeserializationAnalysis() 获取是否开启反序列化检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置是否开启反序列化检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUrlAutoConvergenceEnable() 获取接口名称自动收敛开关（0-关闭，1-开启）
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) 设置接口名称自动收敛开关（0-关闭，1-开启）
 * @method integer getUrlLongSegmentThreshold() 获取URL长分段收敛阈值
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) 设置URL长分段收敛阈值
 * @method integer getUrlNumberSegmentThreshold() 获取URL数字分段收敛阈值
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) 设置URL数字分段收敛阈值
 * @method integer getDisableMemoryUsed() 获取探针熔断内存阈值
 * @method void setDisableMemoryUsed(integer $DisableMemoryUsed) 设置探针熔断内存阈值
 * @method integer getDisableCpuUsed() 获取探针熔断CPU阈值
 * @method void setDisableCpuUsed(integer $DisableCpuUsed) 设置探针熔断CPU阈值
 * @method boolean getDbStatementParametersEnabled() 获取是否开启SQL参数获取
 * @method void setDbStatementParametersEnabled(boolean $DbStatementParametersEnabled) 设置是否开启SQL参数获取
 * @method array getSlowSQLThresholds() 获取慢SQL阈值
 * @method void setSlowSQLThresholds(array $SlowSQLThresholds) 设置慢SQL阈值
 * @method integer getEnableDesensitizationRule() 获取是否开启脱敏规则
 * @method void setEnableDesensitizationRule(integer $EnableDesensitizationRule) 设置是否开启脱敏规则
 * @method string getDesensitizationRule() 获取脱敏规则
 * @method void setDesensitizationRule(string $DesensitizationRule) 设置脱敏规则
 * @method string getLogSpanIdKey() 获取spanId的索引key: 当CLS索引类型为键值索引时生效
 * @method void setLogSpanIdKey(string $LogSpanIdKey) 设置spanId的索引key: 当CLS索引类型为键值索引时生效
 * @method AutoProfilingConfig getAutoProfilingConfig() 获取自动性能剖析配置
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) 设置自动性能剖析配置
 */
class ApmAppConfig extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceKey;

    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var integer URL收敛开关
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer URL收敛阈值
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string URL收敛正则
     */
    public $UrlConvergence;

    /**
     * @var string 异常过滤正则
     */
    public $ExceptionFilter;

    /**
     * @var string 错误码过滤
     */
    public $ErrorCodeFilter;

    /**
     * @var string 服务组件类型
     */
    public $Components;

    /**
     * @var string URL排除正则
     */
    public $UrlExclude;

    /**
     * @var string 日志来源
     */
    public $LogSource;

    /**
     * @var string 日志所在地域
     */
    public $LogRegion;

    /**
     * @var integer 是否开启日志 0 关 1 开
     */
    public $IsRelatedLog;

    /**
     * @var string 日志主题ID
     */
    public $LogTopicID;

    /**
     * @var string 需过滤的接口名
     */
    public $IgnoreOperationName;

    /**
     * @var string CLS日志集 | ES集群ID
     */
    public $LogSet;

    /**
     * @var integer 探针每秒上报trace数
     */
    public $TraceRateLimit;

    /**
     * @var boolean 是否开启线程剖析
     */
    public $EnableSnapshot;

    /**
     * @var integer 线程剖析超时阈值
     */
    public $SnapshotTimeout;

    /**
     * @var boolean 是否开启agent
     */
    public $AgentEnable;

    /**
     * @var array 组件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstrumentList;

    /**
     * @var boolean 是否开启链路压缩
     */
    public $TraceSquash;

    /**
     * @var boolean 是否开启应用诊断开关
     */
    public $EventEnable;

    /**
     * @var AgentOperationConfigView 探针接口相关配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean 是否开启应用日志配置
     */
    public $EnableLogConfig;

    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var boolean 应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDashboardConfig;

    /**
     * @var integer 是否关联dashboard： 0 关 1 开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRelatedDashboard;

    /**
     * @var string dashboard ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardTopicID;

    /**
     * @var boolean 是否开启应用级别配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableSecurityConfig;

    /**
     * @var integer 是否开启组件漏洞检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer 是否开启SQL注入分析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer 是否开启远程命令执行分析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer 是否开启内存马检测分析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer CLS索引类型(0=全文索引，1=键值索引)
     */
    public $LogIndexType;

    /**
     * @var string traceId的索引key: 当CLS索引类型为键值索引时生效
     */
    public $LogTraceIdKey;

    /**
     * @var integer 是否开启删除任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer 是否开启读取任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer 是否开启上传任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer 是否开启包含任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer 是否开启目录遍历检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer 是否开启模板引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer 是否开启脚本引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer 是否开启表达式注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer 是否开启JNDI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer 是否开启JNI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer 是否开启Webshell后门检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer 是否开启反序列化检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean 接口名称自动收敛开关（0-关闭，1-开启）
     */
    public $UrlAutoConvergenceEnable;

    /**
     * @var integer URL长分段收敛阈值
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer URL数字分段收敛阈值
     */
    public $UrlNumberSegmentThreshold;

    /**
     * @var integer 探针熔断内存阈值
     */
    public $DisableMemoryUsed;

    /**
     * @var integer 探针熔断CPU阈值
     */
    public $DisableCpuUsed;

    /**
     * @var boolean 是否开启SQL参数获取
     */
    public $DbStatementParametersEnabled;

    /**
     * @var array 慢SQL阈值
     */
    public $SlowSQLThresholds;

    /**
     * @var integer 是否开启脱敏规则
     */
    public $EnableDesensitizationRule;

    /**
     * @var string 脱敏规则
     */
    public $DesensitizationRule;

    /**
     * @var string spanId的索引key: 当CLS索引类型为键值索引时生效
     */
    public $LogSpanIdKey;

    /**
     * @var AutoProfilingConfig 自动性能剖析配置
     */
    public $AutoProfilingConfig;

    /**
     * @param string $InstanceKey 实例ID
     * @param string $ServiceName 服务名
     * @param integer $UrlConvergenceSwitch URL收敛开关
     * @param integer $UrlConvergenceThreshold URL收敛阈值
     * @param string $UrlConvergence URL收敛正则
     * @param string $ExceptionFilter 异常过滤正则
     * @param string $ErrorCodeFilter 错误码过滤
     * @param string $Components 服务组件类型
     * @param string $UrlExclude URL排除正则
     * @param string $LogSource 日志来源
     * @param string $LogRegion 日志所在地域
     * @param integer $IsRelatedLog 是否开启日志 0 关 1 开
     * @param string $LogTopicID 日志主题ID
     * @param string $IgnoreOperationName 需过滤的接口名
     * @param string $LogSet CLS日志集 | ES集群ID
     * @param integer $TraceRateLimit 探针每秒上报trace数
     * @param boolean $EnableSnapshot 是否开启线程剖析
     * @param integer $SnapshotTimeout 线程剖析超时阈值
     * @param boolean $AgentEnable 是否开启agent
     * @param array $InstrumentList 组件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TraceSquash 是否开启链路压缩
     * @param boolean $EventEnable 是否开启应用诊断开关
     * @param AgentOperationConfigView $AgentOperationConfigView 探针接口相关配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableLogConfig 是否开启应用日志配置
     * @param string $ServiceID 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableDashboardConfig 应用是否开启dashboard配置： false 关（与业务系统保持一致）/true 开（应用级配置）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRelatedDashboard 是否关联dashboard： 0 关 1 开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DashboardTopicID dashboard ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableSecurityConfig 是否开启应用级别配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsInstrumentationVulnerabilityScan 是否开启组件漏洞检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSqlInjectionAnalysis 是否开启SQL注入分析
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRemoteCommandExecutionAnalysis 是否开启远程命令执行分析
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsMemoryHijackingAnalysis 是否开启内存马检测分析
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogIndexType CLS索引类型(0=全文索引，1=键值索引)
     * @param string $LogTraceIdKey traceId的索引key: 当CLS索引类型为键值索引时生效
     * @param integer $IsDeleteAnyFileAnalysis 是否开启删除任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsReadAnyFileAnalysis 是否开启读取任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUploadAnyFileAnalysis 是否开启上传任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIncludeAnyFileAnalysis 是否开启包含任意文件检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDirectoryTraversalAnalysis 是否开启目录遍历检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsTemplateEngineInjectionAnalysis 是否开启模板引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsScriptEngineInjectionAnalysis 是否开启脚本引擎注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsExpressionInjectionAnalysis 是否开启表达式注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsJNDIInjectionAnalysis 是否开启JNDI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsJNIInjectionAnalysis 是否开启JNI注入检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsWebshellBackdoorAnalysis 是否开启Webshell后门检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDeserializationAnalysis 是否开启反序列化检测（0-关闭，1-开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UrlAutoConvergenceEnable 接口名称自动收敛开关（0-关闭，1-开启）
     * @param integer $UrlLongSegmentThreshold URL长分段收敛阈值
     * @param integer $UrlNumberSegmentThreshold URL数字分段收敛阈值
     * @param integer $DisableMemoryUsed 探针熔断内存阈值
     * @param integer $DisableCpuUsed 探针熔断CPU阈值
     * @param boolean $DbStatementParametersEnabled 是否开启SQL参数获取
     * @param array $SlowSQLThresholds 慢SQL阈值
     * @param integer $EnableDesensitizationRule 是否开启脱敏规则
     * @param string $DesensitizationRule 脱敏规则
     * @param string $LogSpanIdKey spanId的索引key: 当CLS索引类型为键值索引时生效
     * @param AutoProfilingConfig $AutoProfilingConfig 自动性能剖析配置
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
    }
}
