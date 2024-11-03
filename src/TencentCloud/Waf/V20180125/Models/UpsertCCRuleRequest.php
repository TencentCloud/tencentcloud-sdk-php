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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpsertCCRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getAdvance() 获取高级模式（是否使用Session检测），0表示不启用，1表示启用
 * @method void setAdvance(string $Advance) 设置高级模式（是否使用Session检测），0表示不启用，1表示启用
 * @method string getLimit() 获取CC检测阈值
 * @method void setLimit(string $Limit) 设置CC检测阈值
 * @method string getInterval() 获取CC检测周期
 * @method void setInterval(string $Interval) 设置CC检测周期
 * @method string getUrl() 获取检测Url
 * @method void setUrl(string $Url) 设置检测Url
 * @method integer getMatchFunc() 获取匹配方法，0表示等于，1表示前缀匹配，2表示包含
 * @method void setMatchFunc(integer $MatchFunc) 设置匹配方法，0表示等于，1表示前缀匹配，2表示包含
 * @method string getActionType() 获取动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
 * @method void setActionType(string $ActionType) 设置动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method integer getValidTime() 获取动作有效时间
 * @method void setValidTime(integer $ValidTime) 设置动作有效时间
 * @method string getOptionsArr() 获取附加参数
 * @method void setOptionsArr(string $OptionsArr) 设置附加参数
 * @method string getEdition() 获取waf版本，sparta-waf或者clb-waf
 * @method void setEdition(string $Edition) 设置waf版本，sparta-waf或者clb-waf
 * @method integer getType() 获取操作类型
 * @method void setType(integer $Type) 设置操作类型
 * @method string getEventId() 获取添加规则的来源事件id
 * @method void setEventId(string $EventId) 设置添加规则的来源事件id
 * @method array getSessionApplied() 获取规则需要启用的SessionID
 * @method void setSessionApplied(array $SessionApplied) 设置规则需要启用的SessionID
 * @method integer getRuleId() 获取规则ID，新增时填0
 * @method void setRuleId(integer $RuleId) 设置规则ID，新增时填0
 * @method integer getCreateTime() 获取规则创建时间
 * @method void setCreateTime(integer $CreateTime) 设置规则创建时间
 * @method integer getLength() 获取url长度
 * @method void setLength(integer $Length) 设置url长度
 */
class UpsertCCRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 高级模式（是否使用Session检测），0表示不启用，1表示启用
     */
    public $Advance;

    /**
     * @var string CC检测阈值
     */
    public $Limit;

    /**
     * @var string CC检测周期
     */
    public $Interval;

    /**
     * @var string 检测Url
     */
    public $Url;

    /**
     * @var integer 匹配方法，0表示等于，1表示前缀匹配，2表示包含
     */
    public $MatchFunc;

    /**
     * @var string 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
     */
    public $ActionType;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var integer 动作有效时间
     */
    public $ValidTime;

    /**
     * @var string 附加参数
     */
    public $OptionsArr;

    /**
     * @var string waf版本，sparta-waf或者clb-waf
     */
    public $Edition;

    /**
     * @var integer 操作类型
     */
    public $Type;

    /**
     * @var string 添加规则的来源事件id
     */
    public $EventId;

    /**
     * @var array 规则需要启用的SessionID
     */
    public $SessionApplied;

    /**
     * @var integer 规则ID，新增时填0
     */
    public $RuleId;

    /**
     * @var integer 规则创建时间
     */
    public $CreateTime;

    /**
     * @var integer url长度
     */
    public $Length;

    /**
     * @param string $Domain 域名
     * @param string $Name 名称
     * @param integer $Status 状态
     * @param string $Advance 高级模式（是否使用Session检测），0表示不启用，1表示启用
     * @param string $Limit CC检测阈值
     * @param string $Interval CC检测周期
     * @param string $Url 检测Url
     * @param integer $MatchFunc 匹配方法，0表示等于，1表示前缀匹配，2表示包含
     * @param string $ActionType 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
     * @param integer $Priority 优先级
     * @param integer $ValidTime 动作有效时间
     * @param string $OptionsArr 附加参数
     * @param string $Edition waf版本，sparta-waf或者clb-waf
     * @param integer $Type 操作类型
     * @param string $EventId 添加规则的来源事件id
     * @param array $SessionApplied 规则需要启用的SessionID
     * @param integer $RuleId 规则ID，新增时填0
     * @param integer $CreateTime 规则创建时间
     * @param integer $Length url长度
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MatchFunc",$param) and $param["MatchFunc"] !== null) {
            $this->MatchFunc = $param["MatchFunc"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("OptionsArr",$param) and $param["OptionsArr"] !== null) {
            $this->OptionsArr = $param["OptionsArr"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }
    }
}
