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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * web攻击日志
 *
 * @method string getEventId() 获取请求（事件）ID。
 * @method void setEventId(string $EventId) 设置请求（事件）ID。
 * @method string getHttpLog() 获取http 日志内容。
 * @method void setHttpLog(string $HttpLog) 设置http 日志内容。
 * @method string getDomain() 获取受攻击子域名。
 * @method void setDomain(string $Domain) 设置受攻击子域名。
 * @method string getAttackIp() 获取攻击源（客户端）Ip。
 * @method void setAttackIp(string $AttackIp) 设置攻击源（客户端）Ip。
 * @method string getSipCountryCode() 获取IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
 * @method void setSipCountryCode(string $SipCountryCode) 设置IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
 * @method string getRealClientIp() 获取真实客户端Ip。
 * @method void setRealClientIp(string $RealClientIp) 设置真实客户端Ip。
 * @method string getRealClientIpCountryCode() 获取真实客户端Ip所在国家iso-3166中alpha-2编码。
 * @method void setRealClientIpCountryCode(string $RealClientIpCountryCode) 设置真实客户端Ip所在国家iso-3166中alpha-2编码。
 * @method integer getAttackTime() 获取攻击时间，采用unix秒级时间戳。
 * @method void setAttackTime(integer $AttackTime) 设置攻击时间，采用unix秒级时间戳。
 * @method string getRequestUri() 获取请求地址。
 * @method void setRequestUri(string $RequestUri) 设置请求地址。
 * @method string getReqMethod() 获取请求类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqMethod(string $ReqMethod) 设置请求类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleDetailList() 获取规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDetailList(array $RuleDetailList) 设置规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackContent() 获取攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackContent(string $AttackContent) 设置攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取日志所属区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置日志所属区域。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebLogs extends AbstractModel
{
    /**
     * @var string 请求（事件）ID。
     */
    public $EventId;

    /**
     * @var string http 日志内容。
     */
    public $HttpLog;

    /**
     * @var string 受攻击子域名。
     */
    public $Domain;

    /**
     * @var string 攻击源（客户端）Ip。
     */
    public $AttackIp;

    /**
     * @var string IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
     */
    public $SipCountryCode;

    /**
     * @var string 真实客户端Ip。
     */
    public $RealClientIp;

    /**
     * @var string 真实客户端Ip所在国家iso-3166中alpha-2编码。
     */
    public $RealClientIpCountryCode;

    /**
     * @var integer 攻击时间，采用unix秒级时间戳。
     */
    public $AttackTime;

    /**
     * @var string 请求地址。
     */
    public $RequestUri;

    /**
     * @var string 请求类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqMethod;

    /**
     * @var array 规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDetailList;

    /**
     * @var string 攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackContent;

    /**
     * @var string 日志所属区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @param string $EventId 请求（事件）ID。
     * @param string $HttpLog http 日志内容。
     * @param string $Domain 受攻击子域名。
     * @param string $AttackIp 攻击源（客户端）Ip。
     * @param string $SipCountryCode IP所在国家iso-3166中alpha-2编码，编码信息请参考[ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json)
     * @param string $RealClientIp 真实客户端Ip。
     * @param string $RealClientIpCountryCode 真实客户端Ip所在国家iso-3166中alpha-2编码。
     * @param integer $AttackTime 攻击时间，采用unix秒级时间戳。
     * @param string $RequestUri 请求地址。
     * @param string $ReqMethod 请求类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleDetailList 规则相关信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackContent 攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 日志所属区域。
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("SipCountryCode",$param) and $param["SipCountryCode"] !== null) {
            $this->SipCountryCode = $param["SipCountryCode"];
        }

        if (array_key_exists("RealClientIp",$param) and $param["RealClientIp"] !== null) {
            $this->RealClientIp = $param["RealClientIp"];
        }

        if (array_key_exists("RealClientIpCountryCode",$param) and $param["RealClientIpCountryCode"] !== null) {
            $this->RealClientIpCountryCode = $param["RealClientIpCountryCode"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("ReqMethod",$param) and $param["ReqMethod"] !== null) {
            $this->ReqMethod = $param["ReqMethod"];
        }

        if (array_key_exists("RuleDetailList",$param) and $param["RuleDetailList"] !== null) {
            $this->RuleDetailList = [];
            foreach ($param["RuleDetailList"] as $key => $value){
                $obj = new SecRuleRelatedInfo();
                $obj->deserialize($value);
                array_push($this->RuleDetailList, $obj);
            }
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
