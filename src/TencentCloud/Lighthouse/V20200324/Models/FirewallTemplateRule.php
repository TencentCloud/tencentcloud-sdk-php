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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙模板规则信息
 *
 * @method string getTemplateRuleId() 获取防火墙模板规则ID。
 * @method void setTemplateRuleId(string $TemplateRuleId) 设置防火墙模板规则ID。
 * @method FirewallRule getFirewallRule() 获取防火墙规则。
 * @method void setFirewallRule(FirewallRule $FirewallRule) 设置防火墙规则。
 */
class FirewallTemplateRule extends AbstractModel
{
    /**
     * @var string 防火墙模板规则ID。
     */
    public $TemplateRuleId;

    /**
     * @var FirewallRule 防火墙规则。
     */
    public $FirewallRule;

    /**
     * @param string $TemplateRuleId 防火墙模板规则ID。
     * @param FirewallRule $FirewallRule 防火墙规则。
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
        if (array_key_exists("TemplateRuleId",$param) and $param["TemplateRuleId"] !== null) {
            $this->TemplateRuleId = $param["TemplateRuleId"];
        }

        if (array_key_exists("FirewallRule",$param) and $param["FirewallRule"] !== null) {
            $this->FirewallRule = new FirewallRule();
            $this->FirewallRule->deserialize($param["FirewallRule"]);
        }
    }
}
