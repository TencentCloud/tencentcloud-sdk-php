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
 * k8sapi异常事件列表Item
 *
 * @method integer getID() 获取事件ID
 * @method void setID(integer $ID) 设置事件ID
 * @method string getMatchRuleType() 获取命中规则类型
 * @method void setMatchRuleType(string $MatchRuleType) 设置命中规则类型
 * @method string getRiskLevel() 获取威胁等级
 * @method void setRiskLevel(string $RiskLevel) 设置威胁等级
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
 * @method void setStatus(string $Status) 设置状态
 * @method string getRuleType() 获取规则类型
 * @method void setRuleType(string $RuleType) 设置规则类型
 * @method string getDesc() 获取描述信息
 * @method void setDesc(string $Desc) 设置描述信息
 * @method string getSuggestion() 获取解决方案
 * @method void setSuggestion(string $Suggestion) 设置解决方案
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() 获取命中规则
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) 设置命中规则
 */
class K8sApiAbnormalEventListItem extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $ID;

    /**
     * @var string 命中规则类型
     */
    public $MatchRuleType;

    /**
     * @var string 威胁等级
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
     */
    public $Status;

    /**
     * @var string 规则类型
     */
    public $RuleType;

    /**
     * @var string 描述信息
     */
    public $Desc;

    /**
     * @var string 解决方案
     */
    public $Suggestion;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var K8sApiAbnormalRuleScopeInfo 命中规则
     */
    public $MatchRule;

    /**
     * @param integer $ID 事件ID
     * @param string $MatchRuleType 命中规则类型
     * @param string $RiskLevel 威胁等级
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterRunningStatus 集群运行状态
     * @param string $FirstCreateTime 初次生成时间
     * @param string $LastCreateTime 最近一次生成时间
     * @param integer $AlarmCount 告警数量
     * @param string $Status 状态
     * @param string $RuleType 规则类型
     * @param string $Desc 描述信息
     * @param string $Suggestion 解决方案
     * @param string $RuleName 规则名称
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new K8sApiAbnormalRuleScopeInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }
    }
}
