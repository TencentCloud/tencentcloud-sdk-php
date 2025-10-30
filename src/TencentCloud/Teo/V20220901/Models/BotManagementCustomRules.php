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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot 自定义规则的配置。
 *
 * @method array getRules() 获取Bot 自定义规则的列表。使用 ModifySecurityPolicy 修改 Web 防护配置时： <br> <li>  若未指定 SecurityPolicy.BotManagement.CustomRules 中的 Rules 参数，或 Rules 参数长度为零：清空所有 Bot 自定义规则配置。</li> <li> 若 SecurityPolicy.BotManagement 参数中，未指定 CustomRules 参数值：保持已有 Bot 自定义规则配置，不做修改。</li>
 * @method void setRules(array $Rules) 设置Bot 自定义规则的列表。使用 ModifySecurityPolicy 修改 Web 防护配置时： <br> <li>  若未指定 SecurityPolicy.BotManagement.CustomRules 中的 Rules 参数，或 Rules 参数长度为零：清空所有 Bot 自定义规则配置。</li> <li> 若 SecurityPolicy.BotManagement 参数中，未指定 CustomRules 参数值：保持已有 Bot 自定义规则配置，不做修改。</li>
 */
class BotManagementCustomRules extends AbstractModel
{
    /**
     * @var array Bot 自定义规则的列表。使用 ModifySecurityPolicy 修改 Web 防护配置时： <br> <li>  若未指定 SecurityPolicy.BotManagement.CustomRules 中的 Rules 参数，或 Rules 参数长度为零：清空所有 Bot 自定义规则配置。</li> <li> 若 SecurityPolicy.BotManagement 参数中，未指定 CustomRules 参数值：保持已有 Bot 自定义规则配置，不做修改。</li>
     */
    public $Rules;

    /**
     * @param array $Rules Bot 自定义规则的列表。使用 ModifySecurityPolicy 修改 Web 防护配置时： <br> <li>  若未指定 SecurityPolicy.BotManagement.CustomRules 中的 Rules 参数，或 Rules 参数长度为零：清空所有 Bot 自定义规则配置。</li> <li> 若 SecurityPolicy.BotManagement 参数中，未指定 CustomRules 参数值：保持已有 Bot 自定义规则配置，不做修改。</li>
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BotManagementCustomRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
