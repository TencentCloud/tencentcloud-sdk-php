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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditRuleTemplate请求参数结构体
 *
 * @method array getRuleFilters() 获取审计规则。
 * @method void setRuleFilters(array $RuleFilters) 设置审计规则。
 * @method string getRuleTemplateName() 获取规则模版名称。
 * @method void setRuleTemplateName(string $RuleTemplateName) 设置规则模版名称。
 * @method string getDescription() 获取规则模版描述。
 * @method void setDescription(string $Description) 设置规则模版描述。
 */
class CreateAuditRuleTemplateRequest extends AbstractModel
{
    /**
     * @var array 审计规则。
     */
    public $RuleFilters;

    /**
     * @var string 规则模版名称。
     */
    public $RuleTemplateName;

    /**
     * @var string 规则模版描述。
     */
    public $Description;

    /**
     * @param array $RuleFilters 审计规则。
     * @param string $RuleTemplateName 规则模版名称。
     * @param string $Description 规则模版描述。
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
        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
