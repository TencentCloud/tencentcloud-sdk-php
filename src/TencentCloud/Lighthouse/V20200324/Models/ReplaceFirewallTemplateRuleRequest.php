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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceFirewallTemplateRule请求参数结构体
 *
 * @method string getTemplateId() 获取防火墙模板ID。可通过 [DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874) 接口返回值中的 TemplateId 获取。
 * @method void setTemplateId(string $TemplateId) 设置防火墙模板ID。可通过 [DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874) 接口返回值中的 TemplateId 获取。
 * @method string getTemplateRuleId() 获取防火墙模板规则ID。可通过 [DescribeFirewallTemplateRules](https://cloud.tencent.com/document/product/1207/96875) 接口返回值中的 TemplateRuleId 获取。
 * @method void setTemplateRuleId(string $TemplateRuleId) 设置防火墙模板规则ID。可通过 [DescribeFirewallTemplateRules](https://cloud.tencent.com/document/product/1207/96875) 接口返回值中的 TemplateRuleId 获取。
 * @method FirewallRule getTemplateRule() 获取替换后的防火墙模板规则。
 * @method void setTemplateRule(FirewallRule $TemplateRule) 设置替换后的防火墙模板规则。
 */
class ReplaceFirewallTemplateRuleRequest extends AbstractModel
{
    /**
     * @var string 防火墙模板ID。可通过 [DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874) 接口返回值中的 TemplateId 获取。
     */
    public $TemplateId;

    /**
     * @var string 防火墙模板规则ID。可通过 [DescribeFirewallTemplateRules](https://cloud.tencent.com/document/product/1207/96875) 接口返回值中的 TemplateRuleId 获取。
     */
    public $TemplateRuleId;

    /**
     * @var FirewallRule 替换后的防火墙模板规则。
     */
    public $TemplateRule;

    /**
     * @param string $TemplateId 防火墙模板ID。可通过 [DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874) 接口返回值中的 TemplateId 获取。
     * @param string $TemplateRuleId 防火墙模板规则ID。可通过 [DescribeFirewallTemplateRules](https://cloud.tencent.com/document/product/1207/96875) 接口返回值中的 TemplateRuleId 获取。
     * @param FirewallRule $TemplateRule 替换后的防火墙模板规则。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateRuleId",$param) and $param["TemplateRuleId"] !== null) {
            $this->TemplateRuleId = $param["TemplateRuleId"];
        }

        if (array_key_exists("TemplateRule",$param) and $param["TemplateRule"] !== null) {
            $this->TemplateRule = new FirewallRule();
            $this->TemplateRule->deserialize($param["TemplateRule"]);
        }
    }
}
