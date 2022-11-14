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
 * DescribeRuleExecLog请求参数结构体
 *
 * @method integer getRuleExecId() 获取规则执行Id
 * @method void setRuleExecId(integer $RuleExecId) 设置规则执行Id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getRuleGroupExecId() 获取规则组执行id
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置规则组执行id
 */
class DescribeRuleExecLogRequest extends AbstractModel
{
    /**
     * @var integer 规则执行Id
     */
    public $RuleExecId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 规则组执行id
     */
    public $RuleGroupExecId;

    /**
     * @param integer $RuleExecId 规则执行Id
     * @param string $ProjectId 项目id
     * @param integer $RuleGroupExecId 规则组执行id
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
        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }
    }
}
