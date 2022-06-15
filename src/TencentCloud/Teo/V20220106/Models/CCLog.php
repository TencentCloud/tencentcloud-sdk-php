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
 * 限速拦截日志
 *
 * @method integer getAttackTime() 获取攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackTime(integer $AttackTime) 设置攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackSip() 获取攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackSip(string $AttackSip) 设置攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackDomain() 获取攻击域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackDomain(string $AttackDomain) 设置攻击域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestUri() 获取请求uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestUri(string $RequestUri) 设置请求uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHitCount() 获取命中次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitCount(integer $HitCount) 设置命中次数
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
 * @method integer getRuleId() 获取规则编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 */
class CCLog extends AbstractModel
{
    /**
     * @var integer 攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackTime;

    /**
     * @var string 攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackSip;

    /**
     * @var string 攻击域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackDomain;

    /**
     * @var string 请求uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestUri;

    /**
     * @var integer 命中次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitCount;

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
     * @var integer 规则编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @param integer $AttackTime 攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackSip 攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackDomain 攻击域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestUri 请求uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HitCount 命中次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipCountryCode IP所在国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisposalMethod 处置方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpLog http_log
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级
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

        if (array_key_exists("AttackSip",$param) and $param["AttackSip"] !== null) {
            $this->AttackSip = $param["AttackSip"];
        }

        if (array_key_exists("AttackDomain",$param) and $param["AttackDomain"] !== null) {
            $this->AttackDomain = $param["AttackDomain"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
