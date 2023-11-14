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
 * @method integer getActionType() 获取动作
 * @method void setActionType(integer $ActionType) 设置动作
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSessionApplied() 获取关联的Session规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionApplied(array $SessionApplied) 设置关联的Session规则
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var integer 动作
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var array 关联的Session规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionApplied;

    /**
     * @param string $Name 名字
     * @param integer $Status 状态
     * @param integer $Advance 模式
     * @param integer $Limit 限制
     * @param integer $Interval 范围
     * @param string $Url 网址
     * @param integer $MatchFunc 匹配类型
     * @param integer $ActionType 动作
     * @param integer $Priority 优先级
     * @param integer $ValidTime 有效时间
     * @param integer $TsVersion 版本
     * @param string $Options 规则详情
     * @param integer $RuleId 规则ID
     * @param string $EventId 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SessionApplied 关联的Session规则
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
    }
}
