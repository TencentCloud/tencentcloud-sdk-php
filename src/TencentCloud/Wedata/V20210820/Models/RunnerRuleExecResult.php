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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则执行结果
 *
 * @method integer getRuleId() 获取rule id
 * @method void setRuleId(integer $RuleId) 设置rule id
 * @method integer getRuleExecId() 获取rule exec id
 * @method void setRuleExecId(integer $RuleExecId) 设置rule exec id
 * @method string getState() 获取exec state
 * @method void setState(string $State) 设置exec state
 * @method array getData() 获取结果
 * @method void setData(array $Data) 设置结果
 */
class RunnerRuleExecResult extends AbstractModel
{
    /**
     * @var integer rule id
     */
    public $RuleId;

    /**
     * @var integer rule exec id
     */
    public $RuleExecId;

    /**
     * @var string exec state
     */
    public $State;

    /**
     * @var array 结果
     */
    public $Data;

    /**
     * @param integer $RuleId rule id
     * @param integer $RuleExecId rule exec id
     * @param string $State exec state
     * @param array $Data 结果
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

        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
