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
 * 模型路由 Guardrail 防护配置
 *
 * @method string getGuardrailId() 获取<p>Guardrail 防护配置 ID。</p><p>DescribeModelRouterGuardrails 会返回该字段；DisassociateModelRouterGuardrails 和 ModifyModelRouterGuardrails 需要使用该字段定位要操作的防护配置。</p>
 * @method void setGuardrailId(string $GuardrailId) 设置<p>Guardrail 防护配置 ID。</p><p>DescribeModelRouterGuardrails 会返回该字段；DisassociateModelRouterGuardrails 和 ModifyModelRouterGuardrails 需要使用该字段定位要操作的防护配置。</p>
 * @method string getType() 获取<p>Guardrail 防护类型。</p><p>枚举值：</p><ul><li>WAF：使用腾讯云 WAF LLM SDK 接入配置对模型路由请求进行安全防护。</li></ul><p>当前仅支持 WAF；AssociateModelRouterGuardrails 不传时默认为 WAF，ModifyModelRouterGuardrails 不传时沿用当前已关联 Guardrail 的 Type。</p>
 * @method void setType(string $Type) 设置<p>Guardrail 防护类型。</p><p>枚举值：</p><ul><li>WAF：使用腾讯云 WAF LLM SDK 接入配置对模型路由请求进行安全防护。</li></ul><p>当前仅支持 WAF；AssociateModelRouterGuardrails 不传时默认为 WAF，ModifyModelRouterGuardrails 不传时沿用当前已关联 Guardrail 的 Type。</p>
 * @method string getInstanceId() 获取<p>关联的腾讯云 WAF 实例 ID。</p><p>ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该 WAF 实例存在且属于当前账号。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>关联的腾讯云 WAF 实例 ID。</p><p>ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该 WAF 实例存在且属于当前账号。</p>
 * @method string getServiceId() 获取<p>WAF LLM SDK 接入服务 ID。</p><p>该字段对应 WAF LLM SDK 接入配置中的服务标识，用于指定模型路由请求要绑定的 WAF 防护配置。ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该服务配置存在于指定的 WAF 实例下。</p>
 * @method void setServiceId(string $ServiceId) 设置<p>WAF LLM SDK 接入服务 ID。</p><p>该字段对应 WAF LLM SDK 接入配置中的服务标识，用于指定模型路由请求要绑定的 WAF 防护配置。ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该服务配置存在于指定的 WAF 实例下。</p>
 * @method integer getInputCheckDepth() 获取<p>最大检测对话轮数。</p><p>ModifyModelRouterGuardrails 选填；未传时沿用当前已关联 Guardrail 的 InputCheckDepth。DescribeModelRouterGuardrails 返回。若传入，取值必须为正整数。</p>
 * @method void setInputCheckDepth(integer $InputCheckDepth) 设置<p>最大检测对话轮数。</p><p>ModifyModelRouterGuardrails 选填；未传时沿用当前已关联 Guardrail 的 InputCheckDepth。DescribeModelRouterGuardrails 返回。若传入，取值必须为正整数。</p>
 */
class GuardrailConfig extends AbstractModel
{
    /**
     * @var string <p>Guardrail 防护配置 ID。</p><p>DescribeModelRouterGuardrails 会返回该字段；DisassociateModelRouterGuardrails 和 ModifyModelRouterGuardrails 需要使用该字段定位要操作的防护配置。</p>
     */
    public $GuardrailId;

    /**
     * @var string <p>Guardrail 防护类型。</p><p>枚举值：</p><ul><li>WAF：使用腾讯云 WAF LLM SDK 接入配置对模型路由请求进行安全防护。</li></ul><p>当前仅支持 WAF；AssociateModelRouterGuardrails 不传时默认为 WAF，ModifyModelRouterGuardrails 不传时沿用当前已关联 Guardrail 的 Type。</p>
     */
    public $Type;

    /**
     * @var string <p>关联的腾讯云 WAF 实例 ID。</p><p>ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该 WAF 实例存在且属于当前账号。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>WAF LLM SDK 接入服务 ID。</p><p>该字段对应 WAF LLM SDK 接入配置中的服务标识，用于指定模型路由请求要绑定的 WAF 防护配置。ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该服务配置存在于指定的 WAF 实例下。</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>最大检测对话轮数。</p><p>ModifyModelRouterGuardrails 选填；未传时沿用当前已关联 Guardrail 的 InputCheckDepth。DescribeModelRouterGuardrails 返回。若传入，取值必须为正整数。</p>
     */
    public $InputCheckDepth;

    /**
     * @param string $GuardrailId <p>Guardrail 防护配置 ID。</p><p>DescribeModelRouterGuardrails 会返回该字段；DisassociateModelRouterGuardrails 和 ModifyModelRouterGuardrails 需要使用该字段定位要操作的防护配置。</p>
     * @param string $Type <p>Guardrail 防护类型。</p><p>枚举值：</p><ul><li>WAF：使用腾讯云 WAF LLM SDK 接入配置对模型路由请求进行安全防护。</li></ul><p>当前仅支持 WAF；AssociateModelRouterGuardrails 不传时默认为 WAF，ModifyModelRouterGuardrails 不传时沿用当前已关联 Guardrail 的 Type。</p>
     * @param string $InstanceId <p>关联的腾讯云 WAF 实例 ID。</p><p>ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该 WAF 实例存在且属于当前账号。</p>
     * @param string $ServiceId <p>WAF LLM SDK 接入服务 ID。</p><p>该字段对应 WAF LLM SDK 接入配置中的服务标识，用于指定模型路由请求要绑定的 WAF 防护配置。ModifyModelRouterGuardrails 在 Type 为 WAF 时必填。DescribeModelRouterGuardrails 返回。接口会校验该服务配置存在于指定的 WAF 实例下。</p>
     * @param integer $InputCheckDepth <p>最大检测对话轮数。</p><p>ModifyModelRouterGuardrails 选填；未传时沿用当前已关联 Guardrail 的 InputCheckDepth。DescribeModelRouterGuardrails 返回。若传入，取值必须为正整数。</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("InputCheckDepth",$param) and $param["InputCheckDepth"] !== null) {
            $this->InputCheckDepth = $param["InputCheckDepth"];
        }
    }
}
