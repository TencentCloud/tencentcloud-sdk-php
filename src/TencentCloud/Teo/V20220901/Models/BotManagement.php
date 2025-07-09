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
 * Web 安全的 BOT 规则结构。
 *
 * @method ClientAttestationRules getClientAttestationRules() 获取客户端认证规则的定义列表。该功能内测中，如需使用，请提工单或联系智能客服。
 * @method void setClientAttestationRules(ClientAttestationRules $ClientAttestationRules) 设置客户端认证规则的定义列表。该功能内测中，如需使用，请提工单或联系智能客服。
 */
class BotManagement extends AbstractModel
{
    /**
     * @var ClientAttestationRules 客户端认证规则的定义列表。该功能内测中，如需使用，请提工单或联系智能客服。
     */
    public $ClientAttestationRules;

    /**
     * @param ClientAttestationRules $ClientAttestationRules 客户端认证规则的定义列表。该功能内测中，如需使用，请提工单或联系智能客服。
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
        if (array_key_exists("ClientAttestationRules",$param) and $param["ClientAttestationRules"] !== null) {
            $this->ClientAttestationRules = new ClientAttestationRules();
            $this->ClientAttestationRules->deserialize($param["ClientAttestationRules"]);
        }
    }
}
