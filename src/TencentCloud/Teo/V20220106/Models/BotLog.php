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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot攻击日志
 *
 * @method integer getAttackTime() 获取攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackTime(integer $AttackTime) 设置攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackIp() 获取攻击ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackIp(string $AttackIp) 设置攻击ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestUri() 获取请求uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestUri(string $RequestUri) 设置请求uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackType() 获取攻击类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackType(string $AttackType) 设置攻击类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestMethod() 获取请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(string $RequestMethod) 设置请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackContent() 获取攻击内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackContent(string $AttackContent) 设置攻击内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSipCountryCode() 获取IP所在国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSipCountryCode(string $SipCountryCode) 设置IP所在国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisposalMethod() 获取处置方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalMethod(string $DisposalMethod) 设置处置方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpLog() 获取http_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpLog(string $HttpLog) 设置http_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUa() 获取user agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUa(string $Ua) 设置user agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectionMethod() 获取检出方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionMethod(string $DetectionMethod) 设置检出方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfidence() 获取置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(string $Confidence) 设置置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousness() 获取恶意度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousness(string $Maliciousness) 设置恶意度
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotLog extends AbstractModel
{
    /**
     * @var integer 攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackTime;

    /**
     * @var string 攻击ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackIp;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 请求uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestUri;

    /**
     * @var string 攻击类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackType;

    /**
     * @var string 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var string 攻击内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackContent;

    /**
     * @var string 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var integer 规则编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string IP所在国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SipCountryCode;

    /**
     * @var string 事件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string 处置方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalMethod;

    /**
     * @var string http_log
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpLog;

    /**
     * @var string user agent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ua;

    /**
     * @var string 检出方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionMethod;

    /**
     * @var string 置信度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var string 恶意度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Maliciousness;

    /**
     * @param integer $AttackTime 攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackIp 攻击ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestUri 请求uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackType 攻击类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestMethod 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackContent 攻击内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipCountryCode IP所在国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisposalMethod 处置方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpLog http_log
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ua user agent
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectionMethod 检出方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Confidence 置信度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Maliciousness 恶意度
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
        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SipCountryCode",$param) and $param["SipCountryCode"] !== null) {
            $this->SipCountryCode = $param["SipCountryCode"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DisposalMethod",$param) and $param["DisposalMethod"] !== null) {
            $this->DisposalMethod = $param["DisposalMethod"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("DetectionMethod",$param) and $param["DetectionMethod"] !== null) {
            $this->DetectionMethod = $param["DetectionMethod"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Maliciousness",$param) and $param["Maliciousness"] !== null) {
            $this->Maliciousness = $param["Maliciousness"];
        }
    }
}
