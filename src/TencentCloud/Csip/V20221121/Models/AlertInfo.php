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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警中心全量告警列表数据
 *
 * @method string getID() 获取告警ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置告警ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取告警名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置告警名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取告警来源
CFW:云防火墙
WAF:Web应用防火墙
CWP:主机安全
CSIP:云安全中心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置告警来源
CFW:云防火墙
WAF:Web应用防火墙
CWP:主机安全
CSIP:云安全中心
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取告警等级
1:提示
2:低危
3:中危
4:高危
5:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置告警等级
1:提示
2:低危
3:中危
4:高危
5:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoleInfo getAttacker() 获取攻击者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttacker(RoleInfo $Attacker) 设置攻击者
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoleInfo getVictim() 获取受害者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictim(RoleInfo $Victim) 设置受害者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvidenceData() 获取证据数据(例如攻击内容等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvidenceData(string $EvidenceData) 设置证据数据(例如攻击内容等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvidenceLocation() 获取证据位置(例如协议端口)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvidenceLocation(string $EvidenceLocation) 设置证据位置(例如协议端口)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvidencePath() 获取证据路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvidencePath(string $EvidencePath) 设置证据路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取首次告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置首次告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取告警次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置告警次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrgentSuggestion() 获取紧急缓解建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrgentSuggestion(string $UrgentSuggestion) 设置紧急缓解建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemediationSuggestion() 获取根治建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemediationSuggestion(string $RemediationSuggestion) 设置根治建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取处理状态
0：未处置，1：已忽略，2：已处置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置处理状态
0：未处置，1：已忽略，2：已处置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessType() 获取告警处理类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessType(string $ProcessType) 设置告警处理类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取告警大类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置告警大类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubType() 获取告警小类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubType(string $SubType) 设置告警小类
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlertExtraInfo getExtraInfo() 获取下拉字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(AlertExtraInfo $ExtraInfo) 设置下拉字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取聚合字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置聚合字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取告警日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置告警日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppID() 获取appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(string $AppID) 设置appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAction() 获取行为
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(integer $Action) 设置行为
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskInvestigation() 获取风险排查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInvestigation(string $RiskInvestigation) 设置风险排查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskTreatment() 获取风险处置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskTreatment(string $RiskTreatment) 设置风险处置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertInfo extends AbstractModel
{
    /**
     * @var string 告警ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 告警名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 告警来源
CFW:云防火墙
WAF:Web应用防火墙
CWP:主机安全
CSIP:云安全中心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var integer 告警等级
1:提示
2:低危
3:中危
4:高危
5:严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var RoleInfo 攻击者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attacker;

    /**
     * @var RoleInfo 受害者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Victim;

    /**
     * @var string 证据数据(例如攻击内容等)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvidenceData;

    /**
     * @var string 证据位置(例如协议端口)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvidenceLocation;

    /**
     * @var string 证据路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvidencePath;

    /**
     * @var string 首次告警时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近告警时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 告警次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string 紧急缓解建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrgentSuggestion;

    /**
     * @var string 根治建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemediationSuggestion;

    /**
     * @var integer 处理状态
0：未处置，1：已忽略，2：已处置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 告警处理类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessType;

    /**
     * @var string 告警大类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 告警小类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubType;

    /**
     * @var AlertExtraInfo 下拉字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 聚合字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 告警日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 账户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 行为
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 风险排查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInvestigation;

    /**
     * @var string 风险处置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskTreatment;

    /**
     * @param string $ID 告警ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 告警名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 告警来源
CFW:云防火墙
WAF:Web应用防火墙
CWP:主机安全
CSIP:云安全中心
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 告警等级
1:提示
2:低危
3:中危
4:高危
5:严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoleInfo $Attacker 攻击者
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoleInfo $Victim 受害者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvidenceData 证据数据(例如攻击内容等)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvidenceLocation 证据位置(例如协议端口)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvidencePath 证据路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 首次告警时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近告警时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 告警次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UrgentSuggestion 紧急缓解建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemediationSuggestion 根治建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 处理状态
0：未处置，1：已忽略，2：已处置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessType 告警处理类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 告警大类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubType 告警小类
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlertExtraInfo $ExtraInfo 下拉字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 聚合字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 告警日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppID appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 账户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Action 行为
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskInvestigation 风险排查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskTreatment 风险处置
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Attacker",$param) and $param["Attacker"] !== null) {
            $this->Attacker = new RoleInfo();
            $this->Attacker->deserialize($param["Attacker"]);
        }

        if (array_key_exists("Victim",$param) and $param["Victim"] !== null) {
            $this->Victim = new RoleInfo();
            $this->Victim->deserialize($param["Victim"]);
        }

        if (array_key_exists("EvidenceData",$param) and $param["EvidenceData"] !== null) {
            $this->EvidenceData = $param["EvidenceData"];
        }

        if (array_key_exists("EvidenceLocation",$param) and $param["EvidenceLocation"] !== null) {
            $this->EvidenceLocation = $param["EvidenceLocation"];
        }

        if (array_key_exists("EvidencePath",$param) and $param["EvidencePath"] !== null) {
            $this->EvidencePath = $param["EvidencePath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("UrgentSuggestion",$param) and $param["UrgentSuggestion"] !== null) {
            $this->UrgentSuggestion = $param["UrgentSuggestion"];
        }

        if (array_key_exists("RemediationSuggestion",$param) and $param["RemediationSuggestion"] !== null) {
            $this->RemediationSuggestion = $param["RemediationSuggestion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new AlertExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskInvestigation",$param) and $param["RiskInvestigation"] !== null) {
            $this->RiskInvestigation = $param["RiskInvestigation"];
        }

        if (array_key_exists("RiskTreatment",$param) and $param["RiskTreatment"] !== null) {
            $this->RiskTreatment = $param["RiskTreatment"];
        }
    }
}
