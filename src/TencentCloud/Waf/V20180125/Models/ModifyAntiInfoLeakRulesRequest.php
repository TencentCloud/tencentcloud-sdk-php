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
 * ModifyAntiInfoLeakRules请求参数结构体
 *
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getActionType() 获取Action 值
 * @method void setActionType(integer $ActionType) 设置Action 值
 * @method array getStrategies() 获取策略数组
 * @method void setStrategies(array $Strategies) 设置策略数组
 */
class ModifyAntiInfoLeakRulesRequest extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer Action 值
     */
    public $ActionType;

    /**
     * @var array 策略数组
     */
    public $Strategies;

    /**
     * @param integer $RuleId 规则ID
     * @param string $Name 规则名称
     * @param string $Domain 域名
     * @param integer $ActionType Action 值
     * @param array $Strategies 策略数组
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new StrategyForAntiInfoLeak();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }
    }
}
