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
 * DisassociateModelRouterGuardrails请求参数结构体
 *
 * @method array getGuardrails() 获取<p>待解除关联的 Guardrail 防护配置列表。</p><p>每个元素只需要填写 GuardrailId。</p>
 * @method void setGuardrails(array $Guardrails) 设置<p>待解除关联的 Guardrail 防护配置列表。</p><p>每个元素只需要填写 GuardrailId。</p>
 * @method string getModelRouterId() 获取<p>模型路由实例 ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例 ID。</p>
 */
class DisassociateModelRouterGuardrailsRequest extends AbstractModel
{
    /**
     * @var array <p>待解除关联的 Guardrail 防护配置列表。</p><p>每个元素只需要填写 GuardrailId。</p>
     */
    public $Guardrails;

    /**
     * @var string <p>模型路由实例 ID。</p>
     */
    public $ModelRouterId;

    /**
     * @param array $Guardrails <p>待解除关联的 Guardrail 防护配置列表。</p><p>每个元素只需要填写 GuardrailId。</p>
     * @param string $ModelRouterId <p>模型路由实例 ID。</p>
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
        if (array_key_exists("Guardrails",$param) and $param["Guardrails"] !== null) {
            $this->Guardrails = [];
            foreach ($param["Guardrails"] as $key => $value){
                $obj = new DisassociateGuardrailConfig();
                $obj->deserialize($value);
                array_push($this->Guardrails, $obj);
            }
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }
    }
}
