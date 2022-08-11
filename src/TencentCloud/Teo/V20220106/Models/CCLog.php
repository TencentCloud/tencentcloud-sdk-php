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
 * CC日志
 *
 * @method integer getAttackTime() 获取攻击请求时间，采用unix秒级时间戳。
 * @method void setAttackTime(integer $AttackTime) 设置攻击请求时间，采用unix秒级时间戳。
 * @method string getAttackSip() 获取客户端ip。
 * @method void setAttackSip(string $AttackSip) 设置客户端ip。
 * @method string getAttackDomain() 获取受攻击域名。
 * @method void setAttackDomain(string $AttackDomain) 设置受攻击域名。
 * @method string getRequestUri() 获取URI。
 * @method void setRequestUri(string $RequestUri) 设置URI。
 * @method integer getHitCount() 获取命中次数。
 * @method void setHitCount(integer $HitCount) 设置命中次数。
 * @method string getSipCountryCode() 获取IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)。
 * @method void setSipCountryCode(string $SipCountryCode) 设置IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)。
 * @method string getEventId() 获取请求（事件）ID。
 * @method void setEventId(string $EventId) 设置请求（事件）ID。
 * @method string getDisposalMethod() 获取当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalMethod(string $DisposalMethod) 设置当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpLog() 获取当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpLog(string $HttpLog) 设置当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUa() 获取User Agent，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUa(string $Ua) 设置User Agent，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestMethod() 获取请求方法，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(string $RequestMethod) 设置请求方法，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleDetailList() 获取规则信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDetailList(array $RuleDetailList) 设置规则信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CCLog extends AbstractModel
{
    /**
     * @var integer 攻击请求时间，采用unix秒级时间戳。
     */
    public $AttackTime;

    /**
     * @var string 客户端ip。
     */
    public $AttackSip;

    /**
     * @var string 受攻击域名。
     */
    public $AttackDomain;

    /**
     * @var string URI。
     */
    public $RequestUri;

    /**
     * @var integer 命中次数。
     */
    public $HitCount;

    /**
     * @var string IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)。
     */
    public $SipCountryCode;

    /**
     * @var string 请求（事件）ID。
     */
    public $EventId;

    /**
     * @var string 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalMethod;

    /**
     * @var string 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpLog;

    /**
     * @var integer 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string User Agent，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ua;

    /**
     * @var string 请求方法，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var array 规则信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDetailList;

    /**
     * @param integer $AttackTime 攻击请求时间，采用unix秒级时间戳。
     * @param string $AttackSip 客户端ip。
     * @param string $AttackDomain 受攻击域名。
     * @param string $RequestUri URI。
     * @param integer $HitCount 命中次数。
     * @param string $SipCountryCode IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)。
     * @param string $EventId 请求（事件）ID。
     * @param string $DisposalMethod 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpLog 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 当前该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ua User Agent，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestMethod 请求方法，仅自定义规则日志中存在。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleDetailList 规则信息列表。
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

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
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
