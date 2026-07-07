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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由待解除关联 Guardrail 防护配置
 *
 * @method string getGuardrailId() 获取<p>Guardrail 防护配置 ID。</p><p>可通过 DescribeModelRouterGuardrails 获取；DisassociateModelRouterGuardrails 使用该字段定位要解除关联的防护配置。</p>
 * @method void setGuardrailId(string $GuardrailId) 设置<p>Guardrail 防护配置 ID。</p><p>可通过 DescribeModelRouterGuardrails 获取；DisassociateModelRouterGuardrails 使用该字段定位要解除关联的防护配置。</p>
 */
class DisassociateGuardrailConfig extends AbstractModel
{
    /**
     * @var string <p>Guardrail 防护配置 ID。</p><p>可通过 DescribeModelRouterGuardrails 获取；DisassociateModelRouterGuardrails 使用该字段定位要解除关联的防护配置。</p>
     */
    public $GuardrailId;

    /**
     * @param string $GuardrailId <p>Guardrail 防护配置 ID。</p><p>可通过 DescribeModelRouterGuardrails 获取；DisassociateModelRouterGuardrails 使用该字段定位要解除关联的防护配置。</p>
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
        if (array_key_exists("GuardrailId",$param) and $param["GuardrailId"] !== null) {
            $this->GuardrailId = $param["GuardrailId"];
        }
    }
}
