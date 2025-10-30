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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎规则项，Conditions 数组内多个项的关系为 或，内层 Conditions 列表内多个项的关系为 且。
 *
 * @method array getConditions() 获取执行功能判断条件。
注意：满足该数组内任意一项条件，功能即可执行。
 * @method void setConditions(array $Conditions) 设置执行功能判断条件。
注意：满足该数组内任意一项条件，功能即可执行。
 * @method array getActions() 获取执行的功能。注意：Actions 和 SubRules 不可都为空
 * @method void setActions(array $Actions) 设置执行的功能。注意：Actions 和 SubRules 不可都为空
 * @method array getSubRules() 获取嵌套规则。注意：SubRules 和 Actions 不可都为空
 * @method void setSubRules(array $SubRules) 设置嵌套规则。注意：SubRules 和 Actions 不可都为空
 */
class Rule extends AbstractModel
{
    /**
     * @var array 执行功能判断条件。
注意：满足该数组内任意一项条件，功能即可执行。
     */
    public $Conditions;

    /**
     * @var array 执行的功能。注意：Actions 和 SubRules 不可都为空
     */
    public $Actions;

    /**
     * @var array 嵌套规则。注意：SubRules 和 Actions 不可都为空
     */
    public $SubRules;

    /**
     * @param array $Conditions 执行功能判断条件。
注意：满足该数组内任意一项条件，功能即可执行。
     * @param array $Actions 执行的功能。注意：Actions 和 SubRules 不可都为空
     * @param array $SubRules 嵌套规则。注意：SubRules 和 Actions 不可都为空
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleAndConditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("SubRules",$param) and $param["SubRules"] !== null) {
            $this->SubRules = [];
            foreach ($param["SubRules"] as $key => $value){
                $obj = new SubRuleItem();
                $obj->deserialize($value);
                array_push($this->SubRules, $obj);
            }
        }
    }
}
