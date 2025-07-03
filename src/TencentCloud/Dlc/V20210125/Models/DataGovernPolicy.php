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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据治理规则
 *
 * @method string getRuleType() 获取治理规则类型，Customize: 自定义；Intelligence: 智能治理
 * @method void setRuleType(string $RuleType) 设置治理规则类型，Customize: 自定义；Intelligence: 智能治理
 * @method string getGovernEngine() 获取治理引擎
 * @method void setGovernEngine(string $GovernEngine) 设置治理引擎
 */
class DataGovernPolicy extends AbstractModel
{
    /**
     * @var string 治理规则类型，Customize: 自定义；Intelligence: 智能治理
     */
    public $RuleType;

    /**
     * @var string 治理引擎
     */
    public $GovernEngine;

    /**
     * @param string $RuleType 治理规则类型，Customize: 自定义；Intelligence: 智能治理
     * @param string $GovernEngine 治理引擎
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

        if (array_key_exists("GovernEngine",$param) and $param["GovernEngine"] !== null) {
            $this->GovernEngine = $param["GovernEngine"];
        }
    }
}
