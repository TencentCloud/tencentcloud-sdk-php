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
namespace TencentCloud\Securitylake\V20240117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警列表
 *
 * @method string getTimestamp() 获取时间
 * @method void setTimestamp(string $Timestamp) 设置时间
 * @method string getAlarmName() 获取告警名称
 * @method void setAlarmName(string $AlarmName) 设置告警名称
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getAlarmId() 获取告警id
 * @method void setAlarmId(integer $AlarmId) 设置告警id
 * @method integer getSeverity() 获取安全性
 * @method void setSeverity(integer $Severity) 设置安全性
 * @method integer getScore() 获取评分
 * @method void setScore(integer $Score) 设置评分
 * @method string getCategory() 获取分类
 * @method void setCategory(string $Category) 设置分类
 * @method string getSubCategory() 获取子分类
 * @method void setSubCategory(string $SubCategory) 设置子分类
 * @method string getTags() 获取标签
 * @method void setTags(string $Tags) 设置标签
 * @method string getPayload() 获取有效载荷
 * @method void setPayload(string $Payload) 设置有效载荷
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method integer getConfidence() 获取可信度
 * @method void setConfidence(integer $Confidence) 设置可信度
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getRuleTopic() 获取规则主题
 * @method void setRuleTopic(string $RuleTopic) 设置规则主题
 * @method string getHandleTime() 获取处理时间
 * @method void setHandleTime(string $HandleTime) 设置处理时间
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getSourceName() 获取来源名称
 * @method void setSourceName(string $SourceName) 设置来源名称
 * @method integer getAppId() 获取APPID
 * @method void setAppId(integer $AppId) 设置APPID
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getEventTime() 获取事件时间
 * @method void setEventTime(string $EventTime) 设置事件时间
 * @method string getRuleType() 获取规则类型
 * @method void setRuleType(string $RuleType) 设置规则类型
 * @method integer getAttackNum() 获取攻击次数
 * @method void setAttackNum(integer $AttackNum) 设置攻击次数
 * @method integer getAlarmCount() 获取告警数量
 * @method void setAlarmCount(integer $AlarmCount) 设置告警数量
 * @method string getAttackSubTechnique() 获取ATT&CK子技术
 * @method void setAttackSubTechnique(string $AttackSubTechnique) 设置ATT&CK子技术
 * @method string getAttackTechnique() 获取ATT&CK技术
 * @method void setAttackTechnique(string $AttackTechnique) 设置ATT&CK技术
 * @method string getAttackTactic() 获取ATT&CK战术
 * @method void setAttackTactic(string $AttackTactic) 设置ATT&CK战术
 * @method string getAttackSubTechniqueName() 获取ATT&CK子技术名称
 * @method void setAttackSubTechniqueName(string $AttackSubTechniqueName) 设置ATT&CK子技术名称
 * @method string getAttackTechniqueName() 获取ATT&CK技术名称
 * @method void setAttackTechniqueName(string $AttackTechniqueName) 设置ATT&CK技术名称
 * @method string getAttackTacticName() 获取凭证访问
 * @method void setAttackTacticName(string $AttackTacticName) 设置凭证访问
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getRuleExpression() 获取规则表达式
 * @method void setRuleExpression(string $RuleExpression) 设置规则表达式
 * @method string getExpressionType() 获取表达式类型
 * @method void setExpressionType(string $ExpressionType) 设置表达式类型
 * @method string getDrillDownExpression() 获取下钻表达式
 * @method void setDrillDownExpression(string $DrillDownExpression) 设置下钻表达式
 * @method string getSrcIp() 获取源IP
 * @method void setSrcIp(string $SrcIp) 设置源IP
 * @method integer getSrcPort() 获取源端口
 * @method void setSrcPort(integer $SrcPort) 设置源端口
 * @method string getDstIp() 获取目的IP
 * @method void setDstIp(string $DstIp) 设置目的IP
 * @method integer getDstPort() 获取目的端口
 * @method void setDstPort(integer $DstPort) 设置目的端口
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getHostAsset() 获取主机资产
 * @method void setHostAsset(string $HostAsset) 设置主机资产
 * @method string getSdlId() 获取实例id
 * @method void setSdlId(string $SdlId) 设置实例id
 * @method array getRichCustomInfos() 获取自定义富化字段信息
 * @method void setRichCustomInfos(array $RichCustomInfos) 设置自定义富化字段信息
 * @method string getAttackerIp() 获取攻击者ip
 * @method void setAttackerIp(string $AttackerIp) 设置攻击者ip
 * @method string getAttackerAsset() 获取攻击者资产ID
 * @method void setAttackerAsset(string $AttackerAsset) 设置攻击者资产ID
 * @method string getVictimIp() 获取受害者ip
 * @method void setVictimIp(string $VictimIp) 设置受害者ip
 * @method string getVictimAsset() 获取受害者资产ID
 * @method void setVictimAsset(string $VictimAsset) 设置受害者资产ID
 * @method string getAttackDirection() 获取攻击方向
 * @method void setAttackDirection(string $AttackDirection) 设置攻击方向
 * @method string getTrafficDirection() 获取流量方向
 * @method void setTrafficDirection(string $TrafficDirection) 设置流量方向
 * @method array getSecurityGroupAlertInfos() 获取测试
 * @method void setSecurityGroupAlertInfos(array $SecurityGroupAlertInfos) 设置测试
 */
class SecurityAlarmTable extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Timestamp;

    /**
     * @var string 告警名称
     */
    public $AlarmName;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 告警id
     */
    public $AlarmId;

    /**
     * @var integer 安全性
     */
    public $Severity;

    /**
     * @var integer 评分
     */
    public $Score;

    /**
     * @var string 分类
     */
    public $Category;

    /**
     * @var string 子分类
     */
    public $SubCategory;

    /**
     * @var string 标签
     */
    public $Tags;

    /**
     * @var string 有效载荷
     */
    public $Payload;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var integer 可信度
     */
    public $Confidence;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 规则主题
     */
    public $RuleTopic;

    /**
     * @var string 处理时间
     */
    public $HandleTime;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 来源名称
     */
    public $SourceName;

    /**
     * @var integer APPID
     */
    public $AppId;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 事件时间
     */
    public $EventTime;

    /**
     * @var string 规则类型
     */
    public $RuleType;

    /**
     * @var integer 攻击次数
     */
    public $AttackNum;

    /**
     * @var integer 告警数量
     */
    public $AlarmCount;

    /**
     * @var string ATT&CK子技术
     */
    public $AttackSubTechnique;

    /**
     * @var string ATT&CK技术
     */
    public $AttackTechnique;

    /**
     * @var string ATT&CK战术
     */
    public $AttackTactic;

    /**
     * @var string ATT&CK子技术名称
     */
    public $AttackSubTechniqueName;

    /**
     * @var string ATT&CK技术名称
     */
    public $AttackTechniqueName;

    /**
     * @var string 凭证访问
     */
    public $AttackTacticName;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 规则表达式
     */
    public $RuleExpression;

    /**
     * @var string 表达式类型
     */
    public $ExpressionType;

    /**
     * @var string 下钻表达式
     */
    public $DrillDownExpression;

    /**
     * @var string 源IP
     */
    public $SrcIp;

    /**
     * @var integer 源端口
     */
    public $SrcPort;

    /**
     * @var string 目的IP
     */
    public $DstIp;

    /**
     * @var integer 目的端口
     */
    public $DstPort;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 主机资产
     */
    public $HostAsset;

    /**
     * @var string 实例id
     */
    public $SdlId;

    /**
     * @var array 自定义富化字段信息
     */
    public $RichCustomInfos;

    /**
     * @var string 攻击者ip
     */
    public $AttackerIp;

    /**
     * @var string 攻击者资产ID
     */
    public $AttackerAsset;

    /**
     * @var string 受害者ip
     */
    public $VictimIp;

    /**
     * @var string 受害者资产ID
     */
    public $VictimAsset;

    /**
     * @var string 攻击方向
     */
    public $AttackDirection;

    /**
     * @var string 流量方向
     */
    public $TrafficDirection;

    /**
     * @var array 测试
     */
    public $SecurityGroupAlertInfos;

    /**
     * @param string $Timestamp 时间
     * @param string $AlarmName 告警名称
     * @param string $RuleName 规则名称
     * @param integer $AlarmId 告警id
     * @param integer $Severity 安全性
     * @param integer $Score 评分
     * @param string $Category 分类
     * @param string $SubCategory 子分类
     * @param string $Tags 标签
     * @param string $Payload 有效载荷
     * @param string $Result 结果
     * @param integer $Confidence 可信度
     * @param string $Status 状态
     * @param string $RuleTopic 规则主题
     * @param string $HandleTime 处理时间
     * @param string $Suggestion 建议
     * @param string $Description 描述
     * @param string $SourceName 来源名称
     * @param integer $AppId APPID
     * @param integer $RuleId 规则ID
     * @param string $EventTime 事件时间
     * @param string $RuleType 规则类型
     * @param integer $AttackNum 攻击次数
     * @param integer $AlarmCount 告警数量
     * @param string $AttackSubTechnique ATT&CK子技术
     * @param string $AttackTechnique ATT&CK技术
     * @param string $AttackTactic ATT&CK战术
     * @param string $AttackSubTechniqueName ATT&CK子技术名称
     * @param string $AttackTechniqueName ATT&CK技术名称
     * @param string $AttackTacticName 凭证访问
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $RuleExpression 规则表达式
     * @param string $ExpressionType 表达式类型
     * @param string $DrillDownExpression 下钻表达式
     * @param string $SrcIp 源IP
     * @param integer $SrcPort 源端口
     * @param string $DstIp 目的IP
     * @param integer $DstPort 目的端口
     * @param string $HostIp 主机IP
     * @param string $HostAsset 主机资产
     * @param string $SdlId 实例id
     * @param array $RichCustomInfos 自定义富化字段信息
     * @param string $AttackerIp 攻击者ip
     * @param string $AttackerAsset 攻击者资产ID
     * @param string $VictimIp 受害者ip
     * @param string $VictimAsset 受害者资产ID
     * @param string $AttackDirection 攻击方向
     * @param string $TrafficDirection 流量方向
     * @param array $SecurityGroupAlertInfos 测试
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("AlarmName",$param) and $param["AlarmName"] !== null) {
            $this->AlarmName = $param["AlarmName"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("SubCategory",$param) and $param["SubCategory"] !== null) {
            $this->SubCategory = $param["SubCategory"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleTopic",$param) and $param["RuleTopic"] !== null) {
            $this->RuleTopic = $param["RuleTopic"];
        }

        if (array_key_exists("HandleTime",$param) and $param["HandleTime"] !== null) {
            $this->HandleTime = $param["HandleTime"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("AttackNum",$param) and $param["AttackNum"] !== null) {
            $this->AttackNum = $param["AttackNum"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AttackSubTechnique",$param) and $param["AttackSubTechnique"] !== null) {
            $this->AttackSubTechnique = $param["AttackSubTechnique"];
        }

        if (array_key_exists("AttackTechnique",$param) and $param["AttackTechnique"] !== null) {
            $this->AttackTechnique = $param["AttackTechnique"];
        }

        if (array_key_exists("AttackTactic",$param) and $param["AttackTactic"] !== null) {
            $this->AttackTactic = $param["AttackTactic"];
        }

        if (array_key_exists("AttackSubTechniqueName",$param) and $param["AttackSubTechniqueName"] !== null) {
            $this->AttackSubTechniqueName = $param["AttackSubTechniqueName"];
        }

        if (array_key_exists("AttackTechniqueName",$param) and $param["AttackTechniqueName"] !== null) {
            $this->AttackTechniqueName = $param["AttackTechniqueName"];
        }

        if (array_key_exists("AttackTacticName",$param) and $param["AttackTacticName"] !== null) {
            $this->AttackTacticName = $param["AttackTacticName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RuleExpression",$param) and $param["RuleExpression"] !== null) {
            $this->RuleExpression = $param["RuleExpression"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("DrillDownExpression",$param) and $param["DrillDownExpression"] !== null) {
            $this->DrillDownExpression = $param["DrillDownExpression"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostAsset",$param) and $param["HostAsset"] !== null) {
            $this->HostAsset = $param["HostAsset"];
        }

        if (array_key_exists("SdlId",$param) and $param["SdlId"] !== null) {
            $this->SdlId = $param["SdlId"];
        }

        if (array_key_exists("RichCustomInfos",$param) and $param["RichCustomInfos"] !== null) {
            $this->RichCustomInfos = $param["RichCustomInfos"];
        }

        if (array_key_exists("AttackerIp",$param) and $param["AttackerIp"] !== null) {
            $this->AttackerIp = $param["AttackerIp"];
        }

        if (array_key_exists("AttackerAsset",$param) and $param["AttackerAsset"] !== null) {
            $this->AttackerAsset = $param["AttackerAsset"];
        }

        if (array_key_exists("VictimIp",$param) and $param["VictimIp"] !== null) {
            $this->VictimIp = $param["VictimIp"];
        }

        if (array_key_exists("VictimAsset",$param) and $param["VictimAsset"] !== null) {
            $this->VictimAsset = $param["VictimAsset"];
        }

        if (array_key_exists("AttackDirection",$param) and $param["AttackDirection"] !== null) {
            $this->AttackDirection = $param["AttackDirection"];
        }

        if (array_key_exists("TrafficDirection",$param) and $param["TrafficDirection"] !== null) {
            $this->TrafficDirection = $param["TrafficDirection"];
        }

        if (array_key_exists("SecurityGroupAlertInfos",$param) and $param["SecurityGroupAlertInfos"] !== null) {
            $this->SecurityGroupAlertInfos = [];
            foreach ($param["SecurityGroupAlertInfos"] as $key => $value){
                $obj = new SecurityGroupAlertInfo();
                $obj->deserialize($value);
                array_push($this->SecurityGroupAlertInfos, $obj);
            }
        }
    }
}
