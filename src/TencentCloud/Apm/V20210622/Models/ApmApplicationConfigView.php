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
 * @method string getInstanceKey() 获取业务系统 ID
 * @method void setInstanceKey(string $InstanceKey) 设置业务系统 ID
 * @method string getServiceName() 获取应用名	
 * @method void setServiceName(string $ServiceName) 设置应用名	
 * @method string getOperationNameFilter() 获取接口过滤
 * @method void setOperationNameFilter(string $OperationNameFilter) 设置接口过滤
 * @method string getExceptionFilter() 获取错误类型过滤
 * @method void setExceptionFilter(string $ExceptionFilter) 设置错误类型过滤
 * @method string getErrorCodeFilter() 获取HTTP 状态码过滤
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置HTTP 状态码过滤
 * @method boolean getEventEnable() 获取应用诊断开关（已废弃）
 * @method void setEventEnable(boolean $EventEnable) 设置应用诊断开关（已废弃）
 * @method integer getUrlConvergenceSwitch() 获取URL 收敛开关 0 关 1 开
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置URL 收敛开关 0 关 1 开
 * @method integer getUrlConvergenceThreshold() 获取URL 收敛阈值	
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置URL 收敛阈值	
 * @method string getUrlConvergence() 获取URL 收敛规则正则	
 * @method void setUrlConvergence(string $UrlConvergence) 设置URL 收敛规则正则	
 * @method string getUrlExclude() 获取URL 排除规则正则
 * @method void setUrlExclude(string $UrlExclude) 设置URL 排除规则正则
 * @method integer getIsRelatedLog() 获取是否开启日志 0 关 1 开
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置是否开启日志 0 关 1 开
 * @method string getLogSource() 获取日志源	
 * @method void setLogSource(string $LogSource) 设置日志源	
 * @method string getLogSet() 获取日志集 
 * @method void setLogSet(string $LogSet) 设置日志集 
 * @method string getLogTopicID() 获取日志主题
 * @method void setLogTopicID(string $LogTopicID) 设置日志主题
 * @method boolean getSnapshotEnable() 获取方法栈快照开关 true 开启 false 关闭
 * @method void setSnapshotEnable(boolean $SnapshotEnable) 设置方法栈快照开关 true 开启 false 关闭
 * @method integer getSnapshotTimeout() 获取慢调用监听触发阈值
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置慢调用监听触发阈值
 * @method boolean getAgentEnable() 获取探针总开关
 * @method void setAgentEnable(boolean $AgentEnable) 设置探针总开关
 * @method array getInstrumentList() 获取组件列表开关（已废弃）
 * @method void setInstrumentList(array $InstrumentList) 设置组件列表开关（已废弃）
 * @method boolean getTraceSquash() 获取链路压缩开关（已废弃）
 * @method void setTraceSquash(boolean $TraceSquash) 设置链路压缩开关（已废弃）
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
 * @method AutoProfilingConfig getAutoProfilingConfig() 获取自动性能剖析任务配置
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) 设置自动性能剖析任务配置
 */
class ApmApplicationConfigView extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceKey;

    /**
     * @var string 应用名	
     */
    public $ServiceName;

    /**
     * @var string 接口过滤
     */
    public $OperationNameFilter;

    /**
     * @var string 错误类型过滤
     */
    public $ExceptionFilter;

    /**
     * @var string HTTP 状态码过滤
     */
    public $ErrorCodeFilter;

    /**
     * @var boolean 应用诊断开关（已废弃）
     */
    public $EventEnable;

    /**
     * @var integer URL 收敛开关 0 关 1 开
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer URL 收敛阈值	
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string URL 收敛规则正则	
     */
    public $UrlConvergence;

    /**
     * @var string URL 排除规则正则
     */
    public $UrlExclude;

    /**
     * @var integer 是否开启日志 0 关 1 开
     */
    public $IsRelatedLog;

    /**
     * @var string 日志源	
     */
    public $LogSource;

    /**
     * @var string 日志集 
     */
    public $LogSet;

    /**
     * @var string 日志主题
     */
    public $LogTopicID;

    /**
     * @var boolean 方法栈快照开关 true 开启 false 关闭
     */
    public $SnapshotEnable;

    /**
     * @var integer 慢调用监听触发阈值
     */
    public $SnapshotTimeout;

    /**
     * @var boolean 探针总开关
     */
    public $AgentEnable;

    /**
     * @var array 组件列表开关（已废弃）
     */
    public $InstrumentList;

    /**
     * @var boolean 链路压缩开关（已废弃）
     */
    public $TraceSquash;

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
     * @var AutoProfilingConfig 自动性能剖析任务配置
     */
    public $AutoProfilingConfig;

    /**
     * @param string $InstanceKey 业务系统 ID
     * @param string $ServiceName 应用名	
     * @param string $OperationNameFilter 接口过滤
     * @param string $ExceptionFilter 错误类型过滤
     * @param string $ErrorCodeFilter HTTP 状态码过滤
     * @param boolean $EventEnable 应用诊断开关（已废弃）
     * @param integer $UrlConvergenceSwitch URL 收敛开关 0 关 1 开
     * @param integer $UrlConvergenceThreshold URL 收敛阈值	
     * @param string $UrlConvergence URL 收敛规则正则	
     * @param string $UrlExclude URL 排除规则正则
     * @param integer $IsRelatedLog 是否开启日志 0 关 1 开
     * @param string $LogSource 日志源	
     * @param string $LogSet 日志集 
     * @param string $LogTopicID 日志主题
     * @param boolean $SnapshotEnable 方法栈快照开关 true 开启 false 关闭
     * @param integer $SnapshotTimeout 慢调用监听触发阈值
     * @param boolean $AgentEnable 探针总开关
     * @param array $InstrumentList 组件列表开关（已废弃）
     * @param boolean $TraceSquash 链路压缩开关（已废弃）
     * @param integer $DisableMemoryUsed 探针熔断内存阈值
     * @param integer $DisableCpuUsed 探针熔断CPU阈值
     * @param boolean $DbStatementParametersEnabled 是否开启SQL参数获取
     * @param array $SlowSQLThresholds 慢SQL阈值
     * @param integer $EnableDesensitizationRule 是否开启脱敏规则
     * @param string $DesensitizationRule 脱敏规则
     * @param AutoProfilingConfig $AutoProfilingConfig 自动性能剖析任务配置
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
    }
}
