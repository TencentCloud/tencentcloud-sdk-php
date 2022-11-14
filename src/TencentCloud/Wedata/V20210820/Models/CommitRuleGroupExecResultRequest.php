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
 * @method string getProjectId() 获取preject id
 * @method void setProjectId(string $ProjectId) 设置preject id
 * @method integer getRuleGroupExecId() 获取rule group exec id
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置rule group exec id
 * @method string getRuleGroupState() 获取group exec state
 * @method void setRuleGroupState(string $RuleGroupState) 设置group exec state
 * @method array getRuleExecResults() 获取runner rule exec result list
 * @method void setRuleExecResults(array $RuleExecResults) 设置runner rule exec result list
 */
class CommitRuleGroupExecResultRequest extends AbstractModel
{
    /**
     * @var string preject id
     */
    public $ProjectId;

    /**
     * @var integer rule group exec id
     */
    public $RuleGroupExecId;

    /**
     * @var string group exec state
     */
    public $RuleGroupState;

    /**
     * @var array runner rule exec result list
     */
    public $RuleExecResults;

    /**
     * @param string $ProjectId preject id
     * @param integer $RuleGroupExecId rule group exec id
     * @param string $RuleGroupState group exec state
     * @param array $RuleExecResults runner rule exec result list
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
