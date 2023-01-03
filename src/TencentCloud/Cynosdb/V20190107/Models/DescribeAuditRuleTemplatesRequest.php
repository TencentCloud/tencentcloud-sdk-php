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
 * DescribeAuditRuleTemplates请求参数结构体
 *
 * @method array getRuleTemplateIds() 获取规则模版ID。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置规则模版ID。
 * @method array getRuleTemplateNames() 获取规则模版名称
 * @method void setRuleTemplateNames(array $RuleTemplateNames) 设置规则模版名称
 * @method integer getLimit() 获取单次请求返回的数量。默认值20。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量。默认值20。
 * @method integer getOffset() 获取偏移量，默认值为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为 0。
 */
class DescribeAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array 规则模版ID。
     */
    public $RuleTemplateIds;

    /**
     * @var array 规则模版名称
     */
    public $RuleTemplateNames;

    /**
     * @var integer 单次请求返回的数量。默认值20。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为 0。
     */
    public $Offset;

    /**
     * @param array $RuleTemplateIds 规则模版ID。
     * @param array $RuleTemplateNames 规则模版名称
     * @param integer $Limit 单次请求返回的数量。默认值20。
     * @param integer $Offset 偏移量，默认值为 0。
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
        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("RuleTemplateNames",$param) and $param["RuleTemplateNames"] !== null) {
            $this->RuleTemplateNames = $param["RuleTemplateNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
