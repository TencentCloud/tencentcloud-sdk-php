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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 入侵防御放通封禁规则
 *
 * @method integer getRuleType() 获取规则类型，取值：1 封禁，2外部IP，3域名，4情报，5assets，6自定义策略，7入侵防御规则id （2-7属于白名单类型）
 * @method void setRuleType(integer $RuleType) 设置规则类型，取值：1 封禁，2外部IP，3域名，4情报，5assets，6自定义策略，7入侵防御规则id （2-7属于白名单类型）
 * @method string getIoc() 获取规则ip或白名单内容
 * @method void setIoc(string $Ioc) 设置规则ip或白名单内容
 * @method string getIocName() 获取资产实例名称、自定义策略名称等
 * @method void setIocName(string $IocName) 设置资产实例名称、自定义策略名称等
 * @method string getIocInfo() 获取白名单信息
 * @method void setIocInfo(string $IocInfo) 设置白名单信息
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getIP() 获取IP
 * @method void setIP(string $IP) 设置IP
 * @method string getLevel() 获取危险等级
 * @method void setLevel(string $Level) 设置危险等级
 * @method string getEventName() 获取来源事件名称
 * @method void setEventName(string $EventName) 设置来源事件名称
 * @method integer getDirection() 获取方向：1入站，0出站
 * @method void setDirection(integer $Direction) 设置方向：1入站，0出站
 * @method string getDirectionList() 获取所有方向聚合成字符串
 * @method void setDirectionList(string $DirectionList) 设置所有方向聚合成字符串
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getAddress() 获取地理位置
 * @method void setAddress(string $Address) 设置地理位置
 * @method integer getAction() 获取规则类型：1封禁，2放通
 * @method void setAction(integer $Action) 设置规则类型：1封禁，2放通
 * @method string getStartTime() 获取规则生效开始时间
 * @method void setStartTime(string $StartTime) 设置规则生效开始时间
 * @method string getEndTime() 获取规则生效结束时间
 * @method void setEndTime(string $EndTime) 设置规则生效结束时间
 * @method string getIgnoreReason() 获取忽略原因
 * @method void setIgnoreReason(string $IgnoreReason) 设置忽略原因
 * @method string getSource() 获取安全事件来源
 * @method void setSource(string $Source) 设置安全事件来源
 * @method string getUniqueId() 获取规则id
 * @method void setUniqueId(string $UniqueId) 设置规则id
 * @method integer getMatchTimes() 获取规则命中次数
 * @method void setMatchTimes(integer $MatchTimes) 设置规则命中次数
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method string getLastHitTime() 获取上次命中时间
 * @method void setLastHitTime(string $LastHitTime) 设置上次命中时间
 * @method CustomWhiteRule getCustomRule() 获取自定义规则细节
 * @method void setCustomRule(CustomWhiteRule $CustomRule) 设置自定义规则细节
 * @method integer getFwType() 获取1 border 2 nat 4 vpc 8 border-serial
 * @method void setFwType(integer $FwType) 设置1 border 2 nat 4 vpc 8 border-serial
 */
class BlockIgnoreRule extends AbstractModel
{
    /**
     * @var integer 规则类型，取值：1 封禁，2外部IP，3域名，4情报，5assets，6自定义策略，7入侵防御规则id （2-7属于白名单类型）
     */
    public $RuleType;

    /**
     * @var string 规则ip或白名单内容
     */
    public $Ioc;

    /**
     * @var string 资产实例名称、自定义策略名称等
     */
    public $IocName;

    /**
     * @var string 白名单信息
     */
    public $IocInfo;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string IP
     */
    public $IP;

    /**
     * @var string 危险等级
     */
    public $Level;

    /**
     * @var string 来源事件名称
     */
    public $EventName;

    /**
     * @var integer 方向：1入站，0出站
     */
    public $Direction;

    /**
     * @var string 所有方向聚合成字符串
     */
    public $DirectionList;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 地理位置
     */
    public $Address;

    /**
     * @var integer 规则类型：1封禁，2放通
     */
    public $Action;

    /**
     * @var string 规则生效开始时间
     */
    public $StartTime;

    /**
     * @var string 规则生效结束时间
     */
    public $EndTime;

    /**
     * @var string 忽略原因
     */
    public $IgnoreReason;

    /**
     * @var string 安全事件来源
     */
    public $Source;

    /**
     * @var string 规则id
     */
    public $UniqueId;

    /**
     * @var integer 规则命中次数
     */
    public $MatchTimes;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var string 上次命中时间
     */
    public $LastHitTime;

    /**
     * @var CustomWhiteRule 自定义规则细节
     */
    public $CustomRule;

    /**
     * @var integer 1 border 2 nat 4 vpc 8 border-serial
     */
    public $FwType;

    /**
     * @param integer $RuleType 规则类型，取值：1 封禁，2外部IP，3域名，4情报，5assets，6自定义策略，7入侵防御规则id （2-7属于白名单类型）
     * @param string $Ioc 规则ip或白名单内容
     * @param string $IocName 资产实例名称、自定义策略名称等
     * @param string $IocInfo 白名单信息
     * @param string $Domain 域名
     * @param string $IP IP
     * @param string $Level 危险等级
     * @param string $EventName 来源事件名称
     * @param integer $Direction 方向：1入站，0出站
     * @param string $DirectionList 所有方向聚合成字符串
     * @param string $Protocol 协议
     * @param string $Address 地理位置
     * @param integer $Action 规则类型：1封禁，2放通
     * @param string $StartTime 规则生效开始时间
     * @param string $EndTime 规则生效结束时间
     * @param string $IgnoreReason 忽略原因
     * @param string $Source 安全事件来源
     * @param string $UniqueId 规则id
     * @param integer $MatchTimes 规则命中次数
     * @param string $Country 国家
     * @param string $Comment 备注
     * @param string $LastHitTime 上次命中时间
     * @param CustomWhiteRule $CustomRule 自定义规则细节
     * @param integer $FwType 1 border 2 nat 4 vpc 8 border-serial
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }

        if (array_key_exists("IocName",$param) and $param["IocName"] !== null) {
            $this->IocName = $param["IocName"];
        }

        if (array_key_exists("IocInfo",$param) and $param["IocInfo"] !== null) {
            $this->IocInfo = $param["IocInfo"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("DirectionList",$param) and $param["DirectionList"] !== null) {
            $this->DirectionList = $param["DirectionList"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IgnoreReason",$param) and $param["IgnoreReason"] !== null) {
            $this->IgnoreReason = $param["IgnoreReason"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("MatchTimes",$param) and $param["MatchTimes"] !== null) {
            $this->MatchTimes = $param["MatchTimes"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("LastHitTime",$param) and $param["LastHitTime"] !== null) {
            $this->LastHitTime = $param["LastHitTime"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new CustomWhiteRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }
    }
}
