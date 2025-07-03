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
 * CC规则详情
 *
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method integer getAdvance() 获取模式
 * @method void setAdvance(integer $Advance) 设置模式
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method integer getInterval() 获取范围
 * @method void setInterval(integer $Interval) 设置范围
 * @method string getUrl() 获取网址
 * @method void setUrl(string $Url) 设置网址
 * @method integer getMatchFunc() 获取匹配类型
 * @method void setMatchFunc(integer $MatchFunc) 设置匹配类型
 * @method integer getActionType() 获取动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
 * @method void setActionType(integer $ActionType) 设置动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method integer getValidTime() 获取有效时间
 * @method void setValidTime(integer $ValidTime) 设置有效时间
 * @method integer getTsVersion() 获取版本
 * @method void setTsVersion(integer $TsVersion) 设置版本
 * @method string getOptions() 获取规则详情
 * @method void setOptions(string $Options) 设置规则详情
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getEventId() 获取事件id
 * @method void setEventId(string $EventId) 设置事件id
 * @method array getSessionApplied() 获取关联的Session规则
 * @method void setSessionApplied(array $SessionApplied) 设置关联的Session规则
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getLimitMethod() 获取限频方式
 * @method void setLimitMethod(string $LimitMethod) 设置限频方式
 * @method string getCelRule() 获取cel表达式
 * @method void setCelRule(string $CelRule) 设置cel表达式
 * @method string getLogicalOp() 获取逻辑操作符
 * @method void setLogicalOp(string $LogicalOp) 设置逻辑操作符
 */
class CCRuleItems extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var integer 模式
     */
    public $Advance;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var integer 范围
     */
    public $Interval;

    /**
     * @var string 网址
     */
    public $Url;

    /**
     * @var integer 匹配类型
     */
    public $MatchFunc;

    /**
     * @var integer 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
     */
    public $ActionType;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var integer 有效时间
     */
    public $ValidTime;

    /**
     * @var integer 版本
     */
    public $TsVersion;

    /**
     * @var string 规则详情
     */
    public $Options;

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
     * @var string 限频方式
     */
    public $LimitMethod;

    /**
     * @var string cel表达式
     */
    public $CelRule;

    /**
     * @var string 逻辑操作符
     */
    public $LogicalOp;

    /**
     * @param string $Name 名字
     * @param integer $Status 状态
     * @param integer $Advance 模式
     * @param integer $Limit 限制
     * @param integer $Interval 范围
     * @param string $Url 网址
     * @param integer $MatchFunc 匹配类型
     * @param integer $ActionType 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，24表示JS校验
     * @param integer $Priority 优先级
     * @param integer $ValidTime 有效时间
     * @param integer $TsVersion 版本
     * @param string $Options 规则详情
     * @param integer $RuleId 规则ID
     * @param string $EventId 事件id
     * @param array $SessionApplied 关联的Session规则
     * @param integer $CreateTime 创建时间
     * @param string $LimitMethod 限频方式
     * @param string $CelRule cel表达式
     * @param string $LogicalOp 逻辑操作符
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

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
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

        if (array_key_exists("LimitMethod",$param) and $param["LimitMethod"] !== null) {
            $this->LimitMethod = $param["LimitMethod"];
        }

        if (array_key_exists("CelRule",$param) and $param["CelRule"] !== null) {
            $this->CelRule = $param["CelRule"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }
    }
}
