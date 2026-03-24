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
 * 应用相关的配置列表项
 *
 * @method string getInstanceKey() 获取<p>业务系统 ID</p>
 * @method void setInstanceKey(string $InstanceKey) 设置<p>业务系统 ID</p>
 * @method string getServiceName() 获取<p>应用名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>应用名</p>
 * @method string getOperationNameFilter() 获取<p>接口过滤</p>
 * @method void setOperationNameFilter(string $OperationNameFilter) 设置<p>接口过滤</p>
 * @method string getExceptionFilter() 获取<p>错误类型过滤</p>
 * @method void setExceptionFilter(string $ExceptionFilter) 设置<p>错误类型过滤</p>
 * @method string getErrorCodeFilter() 获取<p>HTTP 状态码过滤</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置<p>HTTP 状态码过滤</p>
 * @method boolean getEventEnable() 获取<p>应用诊断开关（已废弃）</p>
 * @method void setEventEnable(boolean $EventEnable) 设置<p>应用诊断开关（已废弃）</p>
 * @method integer getUrlConvergenceSwitch() 获取<p>URL 收敛开关 0 关 1 开</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置<p>URL 收敛开关 0 关 1 开</p>
 * @method integer getUrlConvergenceThreshold() 获取<p>URL 收敛阈值</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置<p>URL 收敛阈值</p>
 * @method string getUrlConvergence() 获取<p>URL 收敛规则正则</p>
 * @method void setUrlConvergence(string $UrlConvergence) 设置<p>URL 收敛规则正则</p>
 * @method string getUrlExclude() 获取<p>URL 排除规则正则</p>
 * @method void setUrlExclude(string $UrlExclude) 设置<p>URL 排除规则正则</p>
 * @method integer getIsRelatedLog() 获取<p>是否开启日志 0 关 1 开</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置<p>是否开启日志 0 关 1 开</p>
 * @method string getLogSource() 获取<p>日志源</p>
 * @method void setLogSource(string $LogSource) 设置<p>日志源</p>
 * @method string getLogSet() 获取<p>日志集</p>
 * @method void setLogSet(string $LogSet) 设置<p>日志集</p>
 * @method string getLogTopicID() 获取<p>日志主题</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>日志主题</p>
 * @method boolean getSnapshotEnable() 获取<p>方法栈快照开关 true 开启 false 关闭</p>
 * @method void setSnapshotEnable(boolean $SnapshotEnable) 设置<p>方法栈快照开关 true 开启 false 关闭</p>
 * @method integer getSnapshotTimeout() 获取<p>慢调用监听触发阈值</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置<p>慢调用监听触发阈值</p>
 * @method boolean getAgentEnable() 获取<p>探针总开关</p>
 * @method void setAgentEnable(boolean $AgentEnable) 设置<p>探针总开关</p>
 * @method array getInstrumentList() 获取<p>组件列表开关（已废弃）</p>
 * @method void setInstrumentList(array $InstrumentList) 设置<p>组件列表开关（已废弃）</p>
 * @method boolean getTraceSquash() 获取<p>链路压缩开关（已废弃）</p>
 * @method void setTraceSquash(boolean $TraceSquash) 设置<p>链路压缩开关（已废弃）</p>
 * @method string getAgentIgnoreOperation() 获取<p>链路过滤配置</p>
 * @method void setAgentIgnoreOperation(string $AgentIgnoreOperation) 设置<p>链路过滤配置</p>
 * @method boolean getEnableSecurityConfig() 获取<p>开启应用安全开关</p>
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) 设置<p>开启应用安全开关</p>
 * @method integer getIsSqlInjectionAnalysis() 获取<p>是否开启SQL注入检测</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置<p>是否开启SQL注入检测</p>
 * @method integer getIsInstrumentationVulnerabilityScan() 获取<p>是否开启组件漏洞检测</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置<p>是否开启组件漏洞检测</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取<p>是否开启远程命令执行检测</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置<p>是否开启远程命令执行检测</p>
 * @method integer getIsMemoryHijackingAnalysis() 获取<p>是否开启内存泄漏检测</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置<p>是否开启内存泄漏检测</p>
 * @method integer getIsDeleteAnyFileAnalysis() 获取<p>是否开启删除任意文件检测</p>
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置<p>是否开启删除任意文件检测</p>
 * @method integer getIsReadAnyFileAnalysis() 获取<p>是否开启读取任意文件检测</p>
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置<p>是否开启读取任意文件检测</p>
 * @method integer getIsUploadAnyFileAnalysis() 获取<p>是否开启上传任意文件检测</p>
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置<p>是否开启上传任意文件检测</p>
 * @method integer getIsIncludeAnyFileAnalysis() 获取<p>是否开启包含任意文件检测</p>
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置<p>是否开启包含任意文件检测</p>
 * @method integer getIsDirectoryTraversalAnalysis() 获取<p>是否开启目录遍历检测</p>
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置<p>是否开启目录遍历检测</p>
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取<p>是否开启模板引擎注入检测</p>
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置<p>是否开启模板引擎注入检测</p>
 * @method integer getIsScriptEngineInjectionAnalysis() 获取<p>是否开启脚本引擎注入检测</p>
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置<p>是否开启脚本引擎注入检测</p>
 * @method integer getIsExpressionInjectionAnalysis() 获取<p>是否开启表达式注入检测</p>
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置<p>是否开启表达式注入检测</p>
 * @method integer getIsJndiInjectionAnalysis() 获取<p>是否开启JNDI注入检测</p>
 * @method void setIsJndiInjectionAnalysis(integer $IsJndiInjectionAnalysis) 设置<p>是否开启JNDI注入检测</p>
 * @method integer getIsJniInjectionAnalysis() 获取<p>是否开启JNI注入检测</p>
 * @method void setIsJniInjectionAnalysis(integer $IsJniInjectionAnalysis) 设置<p>是否开启JNI注入检测</p>
 * @method integer getIsWebshellBackdoorAnalysis() 获取<p>是否开启Webshell后门检测</p>
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置<p>是否开启Webshell后门检测</p>
 * @method integer getIsDeserializationAnalysis() 获取<p>是否开启反序列化检测</p>
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置<p>是否开启反序列化检测</p>
 * @method boolean getEnableDashboardConfig() 获取<p>是否开启控制台开关</p>
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) 设置<p>是否开启控制台开关</p>
 * @method integer getIsRelatedDashboard() 获取<p>是否关联Dashboard</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置<p>是否关联Dashboard</p>
 * @method string getDashboardTopicID() 获取<p>Dashboard topic</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置<p>Dashboard topic</p>
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
 * @method AutoProfilingConfig getAutoProfilingConfig() 获取<p>自动性能剖析任务配置</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) 设置<p>自动性能剖析任务配置</p>
 * @method boolean getEnableThresholdConfig() 获取<p>阈值配置开关</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) 设置<p>阈值配置开关</p>
 * @method integer getErrRateThreshold() 获取<p>错误率阈值</p><p>单位：%</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误率阈值</p><p>单位：%</p>
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间预警阈值</p><p>单位：ms</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间预警阈值</p><p>单位：ms</p>
 * @method boolean getUseDefaultFuseConfig() 获取<p>是否使用探针默认熔断阈值</p>
 * @method void setUseDefaultFuseConfig(boolean $UseDefaultFuseConfig) 设置<p>是否使用探针默认熔断阈值</p>
 */
class ApmApplicationConfigView extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceKey;

    /**
     * @var string <p>应用名</p>
     */
    public $ServiceName;

    /**
     * @var string <p>接口过滤</p>
     */
    public $OperationNameFilter;

    /**
     * @var string <p>错误类型过滤</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>HTTP 状态码过滤</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var boolean <p>应用诊断开关（已废弃）</p>
     */
    public $EventEnable;

    /**
     * @var integer <p>URL 收敛开关 0 关 1 开</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL 收敛阈值</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>URL 收敛规则正则</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>URL 排除规则正则</p>
     */
    public $UrlExclude;

    /**
     * @var integer <p>是否开启日志 0 关 1 开</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>日志源</p>
     */
    public $LogSource;

    /**
     * @var string <p>日志集</p>
     */
    public $LogSet;

    /**
     * @var string <p>日志主题</p>
     */
    public $LogTopicID;

    /**
     * @var boolean <p>方法栈快照开关 true 开启 false 关闭</p>
     */
    public $SnapshotEnable;

    /**
     * @var integer <p>慢调用监听触发阈值</p>
     */
    public $SnapshotTimeout;

    /**
     * @var boolean <p>探针总开关</p>
     */
    public $AgentEnable;

    /**
     * @var array <p>组件列表开关（已废弃）</p>
     */
    public $InstrumentList;

    /**
     * @var boolean <p>链路压缩开关（已废弃）</p>
     */
    public $TraceSquash;

    /**
     * @var string <p>链路过滤配置</p>
     */
    public $AgentIgnoreOperation;

    /**
     * @var boolean <p>开启应用安全开关</p>
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>是否开启SQL注入检测</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>是否开启组件漏洞检测</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>是否开启远程命令执行检测</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>是否开启内存泄漏检测</p>
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>是否开启删除任意文件检测</p>
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>是否开启读取任意文件检测</p>
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启上传任意文件检测</p>
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启包含任意文件检测</p>
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>是否开启目录遍历检测</p>
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>是否开启模板引擎注入检测</p>
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启脚本引擎注入检测</p>
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启表达式注入检测</p>
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNDI注入检测</p>
     */
    public $IsJndiInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNI注入检测</p>
     */
    public $IsJniInjectionAnalysis;

    /**
     * @var integer <p>是否开启Webshell后门检测</p>
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>是否开启反序列化检测</p>
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>是否开启控制台开关</p>
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>是否关联Dashboard</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>Dashboard topic</p>
     */
    public $DashboardTopicID;

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
     * @var AutoProfilingConfig <p>自动性能剖析任务配置</p>
     */
    public $AutoProfilingConfig;

    /**
     * @var boolean <p>阈值配置开关</p>
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>错误率阈值</p><p>单位：%</p>
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>响应时间预警阈值</p><p>单位：ms</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var boolean <p>是否使用探针默认熔断阈值</p>
     */
    public $UseDefaultFuseConfig;

    /**
     * @param string $InstanceKey <p>业务系统 ID</p>
     * @param string $ServiceName <p>应用名</p>
     * @param string $OperationNameFilter <p>接口过滤</p>
     * @param string $ExceptionFilter <p>错误类型过滤</p>
     * @param string $ErrorCodeFilter <p>HTTP 状态码过滤</p>
     * @param boolean $EventEnable <p>应用诊断开关（已废弃）</p>
     * @param integer $UrlConvergenceSwitch <p>URL 收敛开关 0 关 1 开</p>
     * @param integer $UrlConvergenceThreshold <p>URL 收敛阈值</p>
     * @param string $UrlConvergence <p>URL 收敛规则正则</p>
     * @param string $UrlExclude <p>URL 排除规则正则</p>
     * @param integer $IsRelatedLog <p>是否开启日志 0 关 1 开</p>
     * @param string $LogSource <p>日志源</p>
     * @param string $LogSet <p>日志集</p>
     * @param string $LogTopicID <p>日志主题</p>
     * @param boolean $SnapshotEnable <p>方法栈快照开关 true 开启 false 关闭</p>
     * @param integer $SnapshotTimeout <p>慢调用监听触发阈值</p>
     * @param boolean $AgentEnable <p>探针总开关</p>
     * @param array $InstrumentList <p>组件列表开关（已废弃）</p>
     * @param boolean $TraceSquash <p>链路压缩开关（已废弃）</p>
     * @param string $AgentIgnoreOperation <p>链路过滤配置</p>
     * @param boolean $EnableSecurityConfig <p>开启应用安全开关</p>
     * @param integer $IsSqlInjectionAnalysis <p>是否开启SQL注入检测</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>是否开启组件漏洞检测</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>是否开启远程命令执行检测</p>
     * @param integer $IsMemoryHijackingAnalysis <p>是否开启内存泄漏检测</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>是否开启删除任意文件检测</p>
     * @param integer $IsReadAnyFileAnalysis <p>是否开启读取任意文件检测</p>
     * @param integer $IsUploadAnyFileAnalysis <p>是否开启上传任意文件检测</p>
     * @param integer $IsIncludeAnyFileAnalysis <p>是否开启包含任意文件检测</p>
     * @param integer $IsDirectoryTraversalAnalysis <p>是否开启目录遍历检测</p>
     * @param integer $IsTemplateEngineInjectionAnalysis <p>是否开启模板引擎注入检测</p>
     * @param integer $IsScriptEngineInjectionAnalysis <p>是否开启脚本引擎注入检测</p>
     * @param integer $IsExpressionInjectionAnalysis <p>是否开启表达式注入检测</p>
     * @param integer $IsJndiInjectionAnalysis <p>是否开启JNDI注入检测</p>
     * @param integer $IsJniInjectionAnalysis <p>是否开启JNI注入检测</p>
     * @param integer $IsWebshellBackdoorAnalysis <p>是否开启Webshell后门检测</p>
     * @param integer $IsDeserializationAnalysis <p>是否开启反序列化检测</p>
     * @param boolean $EnableDashboardConfig <p>是否开启控制台开关</p>
     * @param integer $IsRelatedDashboard <p>是否关联Dashboard</p>
     * @param string $DashboardTopicID <p>Dashboard topic</p>
     * @param integer $DisableMemoryUsed <p>探针熔断内存阈值</p>
     * @param integer $DisableCpuUsed <p>探针熔断CPU阈值</p>
     * @param boolean $DbStatementParametersEnabled <p>是否开启SQL参数获取</p>
     * @param array $SlowSQLThresholds <p>慢SQL阈值</p>
     * @param integer $EnableDesensitizationRule <p>是否开启脱敏规则</p>
     * @param string $DesensitizationRule <p>脱敏规则</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>自动性能剖析任务配置</p>
     * @param boolean $EnableThresholdConfig <p>阈值配置开关</p>
     * @param integer $ErrRateThreshold <p>错误率阈值</p><p>单位：%</p>
     * @param integer $ResponseDurationWarningThreshold <p>响应时间预警阈值</p><p>单位：ms</p>
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OperationNameFilter",$param) and $param["OperationNameFilter"] !== null) {
            $this->OperationNameFilter = $param["OperationNameFilter"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
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

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("SnapshotEnable",$param) and $param["SnapshotEnable"] !== null) {
            $this->SnapshotEnable = $param["SnapshotEnable"];
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

        if (array_key_exists("AgentIgnoreOperation",$param) and $param["AgentIgnoreOperation"] !== null) {
            $this->AgentIgnoreOperation = $param["AgentIgnoreOperation"];
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

        if (array_key_exists("IsJndiInjectionAnalysis",$param) and $param["IsJndiInjectionAnalysis"] !== null) {
            $this->IsJndiInjectionAnalysis = $param["IsJndiInjectionAnalysis"];
        }

        if (array_key_exists("IsJniInjectionAnalysis",$param) and $param["IsJniInjectionAnalysis"] !== null) {
            $this->IsJniInjectionAnalysis = $param["IsJniInjectionAnalysis"];
        }

        if (array_key_exists("IsWebshellBackdoorAnalysis",$param) and $param["IsWebshellBackdoorAnalysis"] !== null) {
            $this->IsWebshellBackdoorAnalysis = $param["IsWebshellBackdoorAnalysis"];
        }

        if (array_key_exists("IsDeserializationAnalysis",$param) and $param["IsDeserializationAnalysis"] !== null) {
            $this->IsDeserializationAnalysis = $param["IsDeserializationAnalysis"];
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
