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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQualityRuleGroup请求参数结构体
 *
 * @method array getRuleGroupExecStrategyBOList() 获取任务参数
 * @method void setRuleGroupExecStrategyBOList(array $RuleGroupExecStrategyBOList) 设置任务参数
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class CreateQualityRuleGroupRequest extends AbstractModel
{
    /**
     * @var array 任务参数
     */
    public $RuleGroupExecStrategyBOList;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param array $RuleGroupExecStrategyBOList 任务参数
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("RuleGroupExecStrategyBOList",$param) and $param["RuleGroupExecStrategyBOList"] !== null) {
            $this->RuleGroupExecStrategyBOList = [];
            foreach ($param["RuleGroupExecStrategyBOList"] as $key => $value){
                $obj = new QualityRuleGroupExecStrategy();
                $obj->deserialize($value);
                array_push($this->RuleGroupExecStrategyBOList, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
