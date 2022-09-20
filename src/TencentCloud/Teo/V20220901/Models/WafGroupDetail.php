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
 * 托管规则组详情
 *
 * @method integer getRuleTypeId() 获取规则类型ID。
 * @method void setRuleTypeId(integer $RuleTypeId) 设置规则类型ID。
 * @method string getRuleTypeName() 获取规则类型名称。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名称。
 * @method string getRuleTypeDesc() 获取规则类型描述。
 * @method void setRuleTypeDesc(string $RuleTypeDesc) 设置规则类型描述。
 * @method array getWafGroupRules() 获取规则列表。
 * @method void setWafGroupRules(array $WafGroupRules) 设置规则列表。
 * @method string getLevel() 获取规则等级。
 * @method void setLevel(string $Level) 设置规则等级。
 * @method string getAction() 获取动作。
 * @method void setAction(string $Action) 设置动作。
 */
class WafGroupDetail extends AbstractModel
{
    /**
     * @var integer 规则类型ID。
     */
    public $RuleTypeId;

    /**
     * @var string 规则类型名称。
     */
    public $RuleTypeName;

    /**
     * @var string 规则类型描述。
     */
    public $RuleTypeDesc;

    /**
     * @var array 规则列表。
     */
    public $WafGroupRules;

    /**
     * @var string 规则等级。
     */
    public $Level;

    /**
     * @var string 动作。
     */
    public $Action;

    /**
     * @param integer $RuleTypeId 规则类型ID。
     * @param string $RuleTypeName 规则类型名称。
     * @param string $RuleTypeDesc 规则类型描述。
     * @param array $WafGroupRules 规则列表。
     * @param string $Level 规则等级。
     * @param string $Action 动作。
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
        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }

        if (array_key_exists("WafGroupRules",$param) and $param["WafGroupRules"] !== null) {
            $this->WafGroupRules = [];
            foreach ($param["WafGroupRules"] as $key => $value){
                $obj = new WafGroupRule();
                $obj->deserialize($value);
                array_push($this->WafGroupRules, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
