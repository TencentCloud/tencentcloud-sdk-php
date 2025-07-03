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
 * 获取场景动作策略列表时的动作策略实体
 *
 * @method string getRuleId() 获取动作策略ID
 * @method void setRuleId(string $RuleId) 设置动作策略ID
 * @method string getRuleName() 获取动作策略名称
 * @method void setRuleName(string $RuleName) 设置动作策略名称
 * @method integer getPriority() 获取策略优先级
 * @method void setPriority(integer $Priority) 设置策略优先级
 * @method boolean getStatus() 获取策略生效状态
 * @method void setStatus(boolean $Status) 设置策略生效状态
 * @method array getScore() 获取分数范围
 * @method void setScore(array $Score) 设置分数范围
 * @method string getLevel() 获取100-宽松、200-中等、300-严格、0-自定义
 * @method void setLevel(string $Level) 设置100-宽松、200-中等、300-严格、0-自定义
 * @method array getScope() 获取生效范围，为空表示全部范围
 * @method void setScope(array $Scope) 设置生效范围，为空表示全部范围
 * @method string getType() 获取default：默认创建 custom：自定义创建
 * @method void setType(string $Type) 设置default：默认创建 custom：自定义创建
 * @method string getScopeType() 获取匹配范围类型：全局匹配 or 自定义匹配范围
 * @method void setScopeType(string $ScopeType) 设置匹配范围类型：全局匹配 or 自定义匹配范围
 * @method string getActionMatchType() 获取匹配条件间的与或关系
 * @method void setActionMatchType(string $ActionMatchType) 设置匹配条件间的与或关系
 */
class BotSceneActionRule extends AbstractModel
{
    /**
     * @var string 动作策略ID
     */
    public $RuleId;

    /**
     * @var string 动作策略名称
     */
    public $RuleName;

    /**
     * @var integer 策略优先级
     */
    public $Priority;

    /**
     * @var boolean 策略生效状态
     */
    public $Status;

    /**
     * @var array 分数范围
     */
    public $Score;

    /**
     * @var string 100-宽松、200-中等、300-严格、0-自定义
     */
    public $Level;

    /**
     * @var array 生效范围，为空表示全部范围
     */
    public $Scope;

    /**
     * @var string default：默认创建 custom：自定义创建
     */
    public $Type;

    /**
     * @var string 匹配范围类型：全局匹配 or 自定义匹配范围
     */
    public $ScopeType;

    /**
     * @var string 匹配条件间的与或关系
     */
    public $ActionMatchType;

    /**
     * @param string $RuleId 动作策略ID
     * @param string $RuleName 动作策略名称
     * @param integer $Priority 策略优先级
     * @param boolean $Status 策略生效状态
     * @param array $Score 分数范围
     * @param string $Level 100-宽松、200-中等、300-严格、0-自定义
     * @param array $Scope 生效范围，为空表示全部范围
     * @param string $Type default：默认创建 custom：自定义创建
     * @param string $ScopeType 匹配范围类型：全局匹配 or 自定义匹配范围
     * @param string $ActionMatchType 匹配条件间的与或关系
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = [];
            foreach ($param["Score"] as $key => $value){
                $obj = new BotScoreRuleEntry();
                $obj->deserialize($value);
                array_push($this->Score, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = [];
            foreach ($param["Scope"] as $key => $value){
                $obj = new BotActionScopeRuleEntry();
                $obj->deserialize($value);
                array_push($this->Scope, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ActionMatchType",$param) and $param["ActionMatchType"] !== null) {
            $this->ActionMatchType = $param["ActionMatchType"];
        }
    }
}
