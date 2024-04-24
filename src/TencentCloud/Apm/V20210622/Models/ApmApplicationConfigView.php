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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用相关的配置列表项
 *
 * @method string getInstanceKey() 获取实例ID	
 * @method void setInstanceKey(string $InstanceKey) 设置实例ID	
 * @method string getServiceName() 获取服务名	
 * @method void setServiceName(string $ServiceName) 设置服务名	
 * @method string getOperationNameFilter() 获取接口过滤
 * @method void setOperationNameFilter(string $OperationNameFilter) 设置接口过滤
 * @method string getExceptionFilter() 获取异常过滤
 * @method void setExceptionFilter(string $ExceptionFilter) 设置异常过滤
 * @method string getErrorCodeFilter() 获取错误码过滤	
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) 设置错误码过滤	
 * @method boolean getEventEnable() 获取应用诊断开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventEnable(boolean $EventEnable) 设置应用诊断开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUrlConvergenceSwitch() 获取URL收敛开关 0 关 1 开
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) 设置URL收敛开关 0 关 1 开
 * @method integer getUrlConvergenceThreshold() 获取URL收敛阈值	
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) 设置URL收敛阈值	
 * @method string getUrlConvergence() 获取URL收敛规则正则	
 * @method void setUrlConvergence(string $UrlConvergence) 设置URL收敛规则正则	
 * @method string getUrlExclude() 获取URL排除规则正则
 * @method void setUrlExclude(string $UrlExclude) 设置URL排除规则正则
 * @method integer getIsRelatedLog() 获取是否开启日志 0 关 1 开
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置是否开启日志 0 关 1 开
 * @method string getLogSource() 获取日志来源	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSource(string $LogSource) 设置日志来源	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogSet() 获取CLS日志集 
 * @method void setLogSet(string $LogSet) 设置CLS日志集 
 * @method string getLogTopicID() 获取日志主题ID
 * @method void setLogTopicID(string $LogTopicID) 设置日志主题ID
 * @method boolean getSnapshotEnable() 获取线程剖析开关
 * @method void setSnapshotEnable(boolean $SnapshotEnable) 设置线程剖析开关
 * @method integer getSnapshotTimeout() 获取线程剖析超时阈值	
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) 设置线程剖析超时阈值	
 * @method boolean getAgentEnable() 获取探针开启开关
 * @method void setAgentEnable(boolean $AgentEnable) 设置探针开启开关
 * @method array getInstrumentList() 获取组件列表开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstrumentList(array $InstrumentList) 设置组件列表开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTraceSquash() 获取链路压缩开关
 * @method void setTraceSquash(boolean $TraceSquash) 设置链路压缩开关
 */
class ApmApplicationConfigView extends AbstractModel
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
     * @var string 接口过滤
     */
    public $OperationNameFilter;

    /**
     * @var string 异常过滤
     */
    public $ExceptionFilter;

    /**
     * @var string 错误码过滤	
     */
    public $ErrorCodeFilter;

    /**
     * @var boolean 应用诊断开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventEnable;

    /**
     * @var integer URL收敛开关 0 关 1 开
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer URL收敛阈值	
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string URL收敛规则正则	
     */
    public $UrlConvergence;

    /**
     * @var string URL排除规则正则
     */
    public $UrlExclude;

    /**
     * @var integer 是否开启日志 0 关 1 开
     */
    public $IsRelatedLog;

    /**
     * @var string 日志来源	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSource;

    /**
     * @var string CLS日志集 
     */
    public $LogSet;

    /**
     * @var string 日志主题ID
     */
    public $LogTopicID;

    /**
     * @var boolean 线程剖析开关
     */
    public $SnapshotEnable;

    /**
     * @var integer 线程剖析超时阈值	
     */
    public $SnapshotTimeout;

    /**
     * @var boolean 探针开启开关
     */
    public $AgentEnable;

    /**
     * @var array 组件列表开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstrumentList;

    /**
     * @var boolean 链路压缩开关
     */
    public $TraceSquash;

    /**
     * @param string $InstanceKey 实例ID	
     * @param string $ServiceName 服务名	
     * @param string $OperationNameFilter 接口过滤
     * @param string $ExceptionFilter 异常过滤
     * @param string $ErrorCodeFilter 错误码过滤	
     * @param boolean $EventEnable 应用诊断开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UrlConvergenceSwitch URL收敛开关 0 关 1 开
     * @param integer $UrlConvergenceThreshold URL收敛阈值	
     * @param string $UrlConvergence URL收敛规则正则	
     * @param string $UrlExclude URL排除规则正则
     * @param integer $IsRelatedLog 是否开启日志 0 关 1 开
     * @param string $LogSource 日志来源	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogSet CLS日志集 
     * @param string $LogTopicID 日志主题ID
     * @param boolean $SnapshotEnable 线程剖析开关
     * @param integer $SnapshotTimeout 线程剖析超时阈值	
     * @param boolean $AgentEnable 探针开启开关
     * @param array $InstrumentList 组件列表开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TraceSquash 链路压缩开关
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
    }
}
