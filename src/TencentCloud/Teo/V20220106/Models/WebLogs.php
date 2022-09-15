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
 * web攻击日志
 *
 * @method string getAttackContent() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackContent(string $AttackContent) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackIp() 获取攻击源（客户端）Ip。
 * @method void setAttackIp(string $AttackIp) 设置攻击源（客户端）Ip。
 * @method string getAttackType() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackType(string $AttackType) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取受攻击子域名。
 * @method void setDomain(string $Domain) 设置受攻击子域名。
 * @method string getMsuuid() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsuuid(string $Msuuid) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestMethod() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(string $RequestMethod) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestUri() 获取URI
 * @method void setRequestUri(string $RequestUri) 设置URI
 * @method string getRiskLevel() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSipCountryCode() 获取IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
 * @method void setSipCountryCode(string $SipCountryCode) 设置IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
 * @method string getEventId() 获取请求（事件）ID。
 * @method void setEventId(string $EventId) 设置请求（事件）ID。
 * @method string getDisposalMethod() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalMethod(string $DisposalMethod) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpLog() 获取http log。
 * @method void setHttpLog(string $HttpLog) 设置http log。
 * @method string getUa() 获取该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUa(string $Ua) 设置该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackTime() 获取攻击时间，采用unix秒级时间戳。
 * @method void setAttackTime(integer $AttackTime) 设置攻击时间，采用unix秒级时间戳。
 * @method array getRuleDetailList() 获取规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDetailList(array $RuleDetailList) 设置规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebLogs extends AbstractModel
{
    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackContent;

    /**
     * @var string 攻击源（客户端）Ip。
     */
    public $AttackIp;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackType;

    /**
     * @var string 受攻击子域名。
     */
    public $Domain;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msuuid;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var string URI
     */
    public $RequestUri;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var integer 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
     */
    public $SipCountryCode;

    /**
     * @var string 请求（事件）ID。
     */
    public $EventId;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalMethod;

    /**
     * @var string http log。
     */
    public $HttpLog;

    /**
     * @var string 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ua;

    /**
     * @var integer 攻击时间，采用unix秒级时间戳。
     */
    public $AttackTime;

    /**
     * @var array 规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDetailList;

    /**
     * @param string $AttackContent 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackIp 攻击源（客户端）Ip。
     * @param string $AttackType 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 受攻击子域名。
     * @param string $Msuuid 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestMethod 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestUri URI
     * @param string $RiskLevel 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipCountryCode IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
     * @param string $EventId 请求（事件）ID。
     * @param string $DisposalMethod 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpLog http log。
     * @param string $Ua 该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackTime 攻击时间，采用unix秒级时间戳。
     * @param array $RuleDetailList 规则相关信息列表。
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
        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Msuuid",$param) and $param["Msuuid"] !== null) {
            $this->Msuuid = $param["Msuuid"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
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

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }

        if (array_key_exists("RuleDetailList",$param) and $param["RuleDetailList"] !== null) {
            $this->RuleDetailList = [];
            foreach ($param["RuleDetailList"] as $key => $value){
                $obj = new SecRuleRelatedInfo();
                $obj->deserialize($value);
                array_push($this->RuleDetailList, $obj);
            }
        }
    }
}
