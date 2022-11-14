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
 * CheckDuplicateRuleName请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getRuleGroupId() 获取规则组Id
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 */
class CheckDuplicateRuleNameRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 规则组Id
     */
    public $RuleGroupId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @param string $ProjectId 项目Id
     * @param integer $RuleGroupId 规则组Id
     * @param string $Name 规则名称
     * @param integer $RuleId 规则Id
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

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
