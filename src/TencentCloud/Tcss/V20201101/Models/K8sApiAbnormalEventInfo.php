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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8sApi异常事件详情
 *
 * @method string getMatchRuleName() 获取命中规则名称
 * @method void setMatchRuleName(string $MatchRuleName) 设置命中规则名称
 * @method string getMatchRuleType() 获取命中规则类型
 * @method void setMatchRuleType(string $MatchRuleType) 设置命中规则类型
 * @method string getRiskLevel() 获取告警等级
 * @method void setRiskLevel(string $RiskLevel) 设置告警等级
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterRunningStatus() 获取集群运行状态
 * @method void setClusterRunningStatus(string $ClusterRunningStatus) 设置集群运行状态
 * @method string getFirstCreateTime() 获取初次生成时间
 * @method void setFirstCreateTime(string $FirstCreateTime) 设置初次生成时间
 * @method string getLastCreateTime() 获取最近一次生成时间
 * @method void setLastCreateTime(string $LastCreateTime) 设置最近一次生成时间
 * @method integer getAlarmCount() 获取告警数量
 * @method void setAlarmCount(integer $AlarmCount) 设置告警数量
 * @method string getStatus() 获取状态
"EVENT_UNDEAL":未处理
"EVENT_DEALED": 已处理
"EVENT_IGNORE": 忽略
"EVENT_DEL": 删除
"EVENT_ADD_WHITE": 加白
 * @method void setStatus(string $Status) 设置状态
"EVENT_UNDEAL":未处理
"EVENT_DEALED": 已处理
"EVENT_IGNORE": 忽略
"EVENT_DEL": 删除
"EVENT_ADD_WHITE": 加白
 * @method string getClusterMasterIP() 获取集群masterIP
 * @method void setClusterMasterIP(string $ClusterMasterIP) 设置集群masterIP
 * @method string getK8sVersion() 获取k8s版本
 * @method void setK8sVersion(string $K8sVersion) 设置k8s版本
 * @method array getRunningComponent() 获取运行时组件
 * @method void setRunningComponent(array $RunningComponent) 设置运行时组件
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method string getInfo() 获取请求信息
 * @method void setInfo(string $Info) 设置请求信息
 * @method string getMatchRuleID() 获取规则ID
 * @method void setMatchRuleID(string $MatchRuleID) 设置规则ID
 * @method array getHighLightFields() 获取高亮字段数组
 * @method void setHighLightFields(array $HighLightFields) 设置高亮字段数组
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() 获取命中规则
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) 设置命中规则
 */
class K8sApiAbnormalEventInfo extends AbstractModel
{
    /**
     * @var string 命中规则名称
     */
    public $MatchRuleName;

    /**
     * @var string 命中规则类型
     */
    public $MatchRuleType;

    /**
     * @var string 告警等级
     */
    public $RiskLevel;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群运行状态
     */
    public $ClusterRunningStatus;

    /**
     * @var string 初次生成时间
     */
    public $FirstCreateTime;

    /**
     * @var string 最近一次生成时间
     */
    public $LastCreateTime;

    /**
     * @var integer 告警数量
     */
    public $AlarmCount;

    /**
     * @var string 状态
"EVENT_UNDEAL":未处理
"EVENT_DEALED": 已处理
"EVENT_IGNORE": 忽略
"EVENT_DEL": 删除
"EVENT_ADD_WHITE": 加白
     */
    public $Status;

    /**
     * @var string 集群masterIP
     */
    public $ClusterMasterIP;

    /**
     * @var string k8s版本
     */
    public $K8sVersion;

    /**
     * @var array 运行时组件
     */
    public $RunningComponent;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var string 请求信息
     */
    public $Info;

    /**
     * @var string 规则ID
     */
    public $MatchRuleID;

    /**
     * @var array 高亮字段数组
     */
    public $HighLightFields;

    /**
     * @var K8sApiAbnormalRuleScopeInfo 命中规则
     */
    public $MatchRule;

    /**
     * @param string $MatchRuleName 命中规则名称
     * @param string $MatchRuleType 命中规则类型
     * @param string $RiskLevel 告警等级
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterRunningStatus 集群运行状态
     * @param string $FirstCreateTime 初次生成时间
     * @param string $LastCreateTime 最近一次生成时间
     * @param integer $AlarmCount 告警数量
     * @param string $Status 状态
"EVENT_UNDEAL":未处理
"EVENT_DEALED": 已处理
"EVENT_IGNORE": 忽略
"EVENT_DEL": 删除
"EVENT_ADD_WHITE": 加白
     * @param string $ClusterMasterIP 集群masterIP
     * @param string $K8sVersion k8s版本
     * @param array $RunningComponent 运行时组件
     * @param string $Desc 描述
     * @param string $Suggestion 建议
     * @param string $Info 请求信息
     * @param string $MatchRuleID 规则ID
     * @param array $HighLightFields 高亮字段数组
     * @param K8sApiAbnormalRuleScopeInfo $MatchRule 命中规则
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
    }
}
