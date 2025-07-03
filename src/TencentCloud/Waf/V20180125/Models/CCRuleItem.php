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
 * cc规则
 *
 * @method integer getActionType() 获取动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
 * @method void setActionType(integer $ActionType) 设置动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
 * @method integer getAdvance() 获取高级模式
 * @method void setAdvance(integer $Advance) 设置高级模式
 * @method integer getInterval() 获取时间周期
 * @method void setInterval(integer $Interval) 设置时间周期
 * @method integer getLimit() 获取限制次数
 * @method void setLimit(integer $Limit) 设置限制次数
 * @method integer getMatchFunc() 获取匹配方法
 * @method void setMatchFunc(integer $MatchFunc) 设置匹配方法
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method integer getTsVersion() 获取更新时间戳
 * @method void setTsVersion(integer $TsVersion) 设置更新时间戳
 * @method string getUrl() 获取匹配url
 * @method void setUrl(string $Url) 设置匹配url
 * @method integer getValidTime() 获取策略动作有效时间
 * @method void setValidTime(integer $ValidTime) 设置策略动作有效时间
 * @method string getOptionsArr() 获取高级参数
 * @method void setOptionsArr(string $OptionsArr) 设置高级参数
 * @method integer getLength() 获取url长度
 * @method void setLength(integer $Length) 设置url长度
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getEventId() 获取事件id
 * @method void setEventId(string $EventId) 设置事件id
 * @method array getSessionApplied() 获取关联的Session规则
 * @method void setSessionApplied(array $SessionApplied) 设置关联的Session规则
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 */
class CCRuleItem extends AbstractModel
{
    /**
     * @var integer 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
     */
    public $ActionType;

    /**
     * @var integer 高级模式
     */
    public $Advance;

    /**
     * @var integer 时间周期
     */
    public $Interval;

    /**
     * @var integer 限制次数
     */
    public $Limit;

    /**
     * @var integer 匹配方法
     */
    public $MatchFunc;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var integer 更新时间戳
     */
    public $TsVersion;

    /**
     * @var string 匹配url
     */
    public $Url;

    /**
     * @var integer 策略动作有效时间
     */
    public $ValidTime;

    /**
     * @var string 高级参数
     */
    public $OptionsArr;

    /**
     * @var integer url长度
     */
    public $Length;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 事件id
     */
    public $EventId;

    /**
     * @var array 关联的Session规则
     */
    public $SessionApplied;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $ActionType 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
     * @param integer $Advance 高级模式
     * @param integer $Interval 时间周期
     * @param integer $Limit 限制次数
     * @param integer $MatchFunc 匹配方法
     * @param string $Name 名称
     * @param integer $Priority 优先级
     * @param integer $Status 状态
     * @param integer $TsVersion 更新时间戳
     * @param string $Url 匹配url
     * @param integer $ValidTime 策略动作有效时间
     * @param string $OptionsArr 高级参数
     * @param integer $Length url长度
     * @param integer $RuleId 规则ID
     * @param string $EventId 事件id
     * @param array $SessionApplied 关联的Session规则
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MatchFunc",$param) and $param["MatchFunc"] !== null) {
            $this->MatchFunc = $param["MatchFunc"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("OptionsArr",$param) and $param["OptionsArr"] !== null) {
            $this->OptionsArr = $param["OptionsArr"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
