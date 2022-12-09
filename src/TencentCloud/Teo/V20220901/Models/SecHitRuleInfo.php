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
 * 命中规则信息
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method integer getRuleId() 获取规则ID。
 * @method void setRuleId(integer $RuleId) 设置规则ID。
 * @method string getRuleTypeName() 获取规则类型名称。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名称。
 * @method integer getHitTime() 获取命中时间，采用unix秒级时间戳。
 * @method void setHitTime(integer $HitTime) 设置命中时间，采用unix秒级时间戳。
 * @method integer getRequestNum() 获取请求数。
 * @method void setRequestNum(integer $RequestNum) 设置请求数。
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 * @method string getDomain() 获取子域名。
 * @method void setDomain(string $Domain) 设置子域名。
 * @method string getAction() 获取执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method void setAction(string $Action) 设置执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method string getBotLabel() 获取Bot标签，取值有:
<li>evil_bot：恶意Bot；</li>
<li>suspect_bot：疑似Bot；</li>
<li>good_bot：正常Bot；</li>
<li>normal：正常请求；</li>
<li>none：未分类。</li>
 * @method void setBotLabel(string $BotLabel) 设置Bot标签，取值有:
<li>evil_bot：恶意Bot；</li>
<li>suspect_bot：疑似Bot；</li>
<li>good_bot：正常Bot；</li>
<li>normal：正常请求；</li>
<li>none：未分类。</li>
 * @method boolean getRuleEnabled() 获取规则是否启用。
 * @method void setRuleEnabled(boolean $RuleEnabled) 设置规则是否启用。
 * @method boolean getAlarmEnabled() 获取规则是否启用监控告警。
 * @method void setAlarmEnabled(boolean $AlarmEnabled) 设置规则是否启用监控告警。
 * @method boolean getRuleDeleted() 获取规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
 * @method void setRuleDeleted(boolean $RuleDeleted) 设置规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
 */
class SecHitRuleInfo extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var integer 规则ID。
     */
    public $RuleId;

    /**
     * @var string 规则类型名称。
     */
    public $RuleTypeName;

    /**
     * @var integer 命中时间，采用unix秒级时间戳。
     */
    public $HitTime;

    /**
     * @var integer 请求数。
     */
    public $RequestNum;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @var string 子域名。
     */
    public $Domain;

    /**
     * @var string 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     */
    public $Action;

    /**
     * @var string Bot标签，取值有:
<li>evil_bot：恶意Bot；</li>
<li>suspect_bot：疑似Bot；</li>
<li>good_bot：正常Bot；</li>
<li>normal：正常请求；</li>
<li>none：未分类。</li>
     */
    public $BotLabel;

    /**
     * @var boolean 规则是否启用。
     */
    public $RuleEnabled;

    /**
     * @var boolean 规则是否启用监控告警。
     */
    public $AlarmEnabled;

    /**
     * @var boolean 规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
     */
    public $RuleDeleted;

    /**
     * @param string $ZoneId 站点ID。
     * @param integer $RuleId 规则ID。
     * @param string $RuleTypeName 规则类型名称。
     * @param integer $HitTime 命中时间，采用unix秒级时间戳。
     * @param integer $RequestNum 请求数。
     * @param string $Description 规则描述。
     * @param string $Domain 子域名。
     * @param string $Action 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     * @param string $BotLabel Bot标签，取值有:
<li>evil_bot：恶意Bot；</li>
<li>suspect_bot：疑似Bot；</li>
<li>good_bot：正常Bot；</li>
<li>normal：正常请求；</li>
<li>none：未分类。</li>
     * @param boolean $RuleEnabled 规则是否启用。
     * @param boolean $AlarmEnabled 规则是否启用监控告警。
     * @param boolean $RuleDeleted 规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("HitTime",$param) and $param["HitTime"] !== null) {
            $this->HitTime = $param["HitTime"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("BotLabel",$param) and $param["BotLabel"] !== null) {
            $this->BotLabel = $param["BotLabel"];
        }

        if (array_key_exists("RuleEnabled",$param) and $param["RuleEnabled"] !== null) {
            $this->RuleEnabled = $param["RuleEnabled"];
        }

        if (array_key_exists("AlarmEnabled",$param) and $param["AlarmEnabled"] !== null) {
            $this->AlarmEnabled = $param["AlarmEnabled"];
        }

        if (array_key_exists("RuleDeleted",$param) and $param["RuleDeleted"] !== null) {
            $this->RuleDeleted = $param["RuleDeleted"];
        }
    }
}
