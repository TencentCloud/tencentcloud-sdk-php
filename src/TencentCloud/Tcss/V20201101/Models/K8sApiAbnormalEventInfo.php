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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8sApi异常事件详情
 *
 * @method string getMatchRuleName() 获取<p>命中规则名称</p>
 * @method void setMatchRuleName(string $MatchRuleName) 设置<p>命中规则名称</p>
 * @method string getMatchRuleType() 获取<p>命中规则类型</p>
 * @method void setMatchRuleType(string $MatchRuleType) 设置<p>命中规则类型</p>
 * @method string getRiskLevel() 获取<p>告警等级</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>告警等级</p>
 * @method string getClusterID() 获取<p>集群ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterRunningStatus() 获取<p>集群运行状态，CSR_RUNNING-运行中，CSR_EXCEPTION-异常，CSR_CREATING-创建中</p>
 * @method void setClusterRunningStatus(string $ClusterRunningStatus) 设置<p>集群运行状态，CSR_RUNNING-运行中，CSR_EXCEPTION-异常，CSR_CREATING-创建中</p>
 * @method string getFirstCreateTime() 获取<p>初次生成时间</p>
 * @method void setFirstCreateTime(string $FirstCreateTime) 设置<p>初次生成时间</p>
 * @method string getLastCreateTime() 获取<p>最近一次生成时间</p>
 * @method void setLastCreateTime(string $LastCreateTime) 设置<p>最近一次生成时间</p>
 * @method integer getAlarmCount() 获取<p>告警数量</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>告警数量</p>
 * @method string getStatus() 获取<p>状态<br>&quot;EVENT_UNDEAL&quot;:未处理<br>&quot;EVENT_DEALED&quot;: 已处理<br>&quot;EVENT_IGNORE&quot;: 忽略<br>&quot;EVENT_DEL&quot;: 删除<br>&quot;EVENT_ADD_WHITE&quot;: 加白</p>
 * @method void setStatus(string $Status) 设置<p>状态<br>&quot;EVENT_UNDEAL&quot;:未处理<br>&quot;EVENT_DEALED&quot;: 已处理<br>&quot;EVENT_IGNORE&quot;: 忽略<br>&quot;EVENT_DEL&quot;: 删除<br>&quot;EVENT_ADD_WHITE&quot;: 加白</p>
 * @method string getClusterMasterIP() 获取<p>集群masterIP</p>
 * @method void setClusterMasterIP(string $ClusterMasterIP) 设置<p>集群masterIP</p>
 * @method string getK8sVersion() 获取<p>k8s版本</p>
 * @method void setK8sVersion(string $K8sVersion) 设置<p>k8s版本</p>
 * @method array getRunningComponent() 获取<p>运行时组件</p>
 * @method void setRunningComponent(array $RunningComponent) 设置<p>运行时组件</p>
 * @method string getDesc() 获取<p>描述</p>
 * @method void setDesc(string $Desc) 设置<p>描述</p>
 * @method string getSuggestion() 获取<p>建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>建议</p>
 * @method string getInfo() 获取<p>请求信息</p>
 * @method void setInfo(string $Info) 设置<p>请求信息</p>
 * @method string getMatchRuleID() 获取<p>规则ID</p>
 * @method void setMatchRuleID(string $MatchRuleID) 设置<p>规则ID</p>
 * @method array getHighLightFields() 获取<p>高亮字段数组</p>
 * @method void setHighLightFields(array $HighLightFields) 设置<p>高亮字段数组</p>
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() 获取<p>命中规则</p>
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) 设置<p>命中规则</p>
 * @method string getHighLightFieldsVal() 获取<p>高亮字段对应的命中规则内容(JSON字符串, 如: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>参数格式：{&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
 * @method void setHighLightFieldsVal(string $HighLightFieldsVal) 设置<p>高亮字段对应的命中规则内容(JSON字符串, 如: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>参数格式：{&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
 * @method string getRuleTypeZH() 获取<p>规则中文</p>
 * @method void setRuleTypeZH(string $RuleTypeZH) 设置<p>规则中文</p>
 */
class K8sApiAbnormalEventInfo extends AbstractModel
{
    /**
     * @var string <p>命中规则名称</p>
     */
    public $MatchRuleName;

    /**
     * @var string <p>命中规则类型</p>
     */
    public $MatchRuleType;

    /**
     * @var string <p>告警等级</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群运行状态，CSR_RUNNING-运行中，CSR_EXCEPTION-异常，CSR_CREATING-创建中</p>
     */
    public $ClusterRunningStatus;

    /**
     * @var string <p>初次生成时间</p>
     */
    public $FirstCreateTime;

    /**
     * @var string <p>最近一次生成时间</p>
     */
    public $LastCreateTime;

    /**
     * @var integer <p>告警数量</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>状态<br>&quot;EVENT_UNDEAL&quot;:未处理<br>&quot;EVENT_DEALED&quot;: 已处理<br>&quot;EVENT_IGNORE&quot;: 忽略<br>&quot;EVENT_DEL&quot;: 删除<br>&quot;EVENT_ADD_WHITE&quot;: 加白</p>
     */
    public $Status;

    /**
     * @var string <p>集群masterIP</p>
     */
    public $ClusterMasterIP;

    /**
     * @var string <p>k8s版本</p>
     */
    public $K8sVersion;

    /**
     * @var array <p>运行时组件</p>
     */
    public $RunningComponent;

    /**
     * @var string <p>描述</p>
     */
    public $Desc;

    /**
     * @var string <p>建议</p>
     */
    public $Suggestion;

    /**
     * @var string <p>请求信息</p>
     */
    public $Info;

    /**
     * @var string <p>规则ID</p>
     */
    public $MatchRuleID;

    /**
     * @var array <p>高亮字段数组</p>
     */
    public $HighLightFields;

    /**
     * @var K8sApiAbnormalRuleScopeInfo <p>命中规则</p>
     */
    public $MatchRule;

    /**
     * @var string <p>高亮字段对应的命中规则内容(JSON字符串, 如: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>参数格式：{&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
     */
    public $HighLightFieldsVal;

    /**
     * @var string <p>规则中文</p>
     */
    public $RuleTypeZH;

    /**
     * @param string $MatchRuleName <p>命中规则名称</p>
     * @param string $MatchRuleType <p>命中规则类型</p>
     * @param string $RiskLevel <p>告警等级</p>
     * @param string $ClusterID <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterRunningStatus <p>集群运行状态，CSR_RUNNING-运行中，CSR_EXCEPTION-异常，CSR_CREATING-创建中</p>
     * @param string $FirstCreateTime <p>初次生成时间</p>
     * @param string $LastCreateTime <p>最近一次生成时间</p>
     * @param integer $AlarmCount <p>告警数量</p>
     * @param string $Status <p>状态<br>&quot;EVENT_UNDEAL&quot;:未处理<br>&quot;EVENT_DEALED&quot;: 已处理<br>&quot;EVENT_IGNORE&quot;: 忽略<br>&quot;EVENT_DEL&quot;: 删除<br>&quot;EVENT_ADD_WHITE&quot;: 加白</p>
     * @param string $ClusterMasterIP <p>集群masterIP</p>
     * @param string $K8sVersion <p>k8s版本</p>
     * @param array $RunningComponent <p>运行时组件</p>
     * @param string $Desc <p>描述</p>
     * @param string $Suggestion <p>建议</p>
     * @param string $Info <p>请求信息</p>
     * @param string $MatchRuleID <p>规则ID</p>
     * @param array $HighLightFields <p>高亮字段数组</p>
     * @param K8sApiAbnormalRuleScopeInfo $MatchRule <p>命中规则</p>
     * @param string $HighLightFieldsVal <p>高亮字段对应的命中规则内容(JSON字符串, 如: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>参数格式：{&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
     * @param string $RuleTypeZH <p>规则中文</p>
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
        if (array_key_exists("MatchRuleName",$param) and $param["MatchRuleName"] !== null) {
            $this->MatchRuleName = $param["MatchRuleName"];
        }

        if (array_key_exists("MatchRuleType",$param) and $param["MatchRuleType"] !== null) {
            $this->MatchRuleType = $param["MatchRuleType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterRunningStatus",$param) and $param["ClusterRunningStatus"] !== null) {
            $this->ClusterRunningStatus = $param["ClusterRunningStatus"];
        }

        if (array_key_exists("FirstCreateTime",$param) and $param["FirstCreateTime"] !== null) {
            $this->FirstCreateTime = $param["FirstCreateTime"];
        }

        if (array_key_exists("LastCreateTime",$param) and $param["LastCreateTime"] !== null) {
            $this->LastCreateTime = $param["LastCreateTime"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterMasterIP",$param) and $param["ClusterMasterIP"] !== null) {
            $this->ClusterMasterIP = $param["ClusterMasterIP"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("RunningComponent",$param) and $param["RunningComponent"] !== null) {
            $this->RunningComponent = $param["RunningComponent"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("MatchRuleID",$param) and $param["MatchRuleID"] !== null) {
            $this->MatchRuleID = $param["MatchRuleID"];
        }

        if (array_key_exists("HighLightFields",$param) and $param["HighLightFields"] !== null) {
            $this->HighLightFields = $param["HighLightFields"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new K8sApiAbnormalRuleScopeInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }

        if (array_key_exists("HighLightFieldsVal",$param) and $param["HighLightFieldsVal"] !== null) {
            $this->HighLightFieldsVal = $param["HighLightFieldsVal"];
        }

        if (array_key_exists("RuleTypeZH",$param) and $param["RuleTypeZH"] !== null) {
            $this->RuleTypeZH = $param["RuleTypeZH"];
        }
    }
}
