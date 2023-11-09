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
 * CommitRuleGroupExecResult请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getRuleGroupExecId() 获取规则组执行ID
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置规则组执行ID
 * @method string getRuleGroupState() 获取规则组执行状态
 * @method void setRuleGroupState(string $RuleGroupState) 设置规则组执行状态
 * @method array getRuleExecResults() 获取规则执行结果集合
 * @method void setRuleExecResults(array $RuleExecResults) 设置规则执行结果集合
 */
class CommitRuleGroupExecResultRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 规则组执行ID
     */
    public $RuleGroupExecId;

    /**
     * @var string 规则组执行状态
     */
    public $RuleGroupState;

    /**
     * @var array 规则执行结果集合
     */
    public $RuleExecResults;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $RuleGroupExecId 规则组执行ID
     * @param string $RuleGroupState 规则组执行状态
     * @param array $RuleExecResults 规则执行结果集合
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }

        if (array_key_exists("RuleGroupState",$param) and $param["RuleGroupState"] !== null) {
            $this->RuleGroupState = $param["RuleGroupState"];
        }

        if (array_key_exists("RuleExecResults",$param) and $param["RuleExecResults"] !== null) {
            $this->RuleExecResults = [];
            foreach ($param["RuleExecResults"] as $key => $value){
                $obj = new RunnerRuleExecResult();
                $obj->deserialize($value);
                array_push($this->RuleExecResults, $obj);
            }
        }
    }
}
