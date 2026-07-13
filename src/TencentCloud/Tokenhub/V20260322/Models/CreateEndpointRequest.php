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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndpoint请求参数结构体
 *
 * @method string getEndpointName() 获取<p>服务名称。最大 64 字符。</p>
 * @method void setEndpointName(string $EndpointName) 设置<p>服务名称。最大 64 字符。</p>
 * @method string getModelId() 获取<p>模型 ID。可通过 DescribeModelList 接口获取。</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID。可通过 DescribeModelList 接口获取。</p>
 * @method string getChargeType() 获取<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）、TPM（TPM 保障）、COMPUTE_UNIT（按算力单元计费）。</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）、TPM（TPM 保障）、COMPUTE_UNIT（按算力单元计费）。</p>
 * @method integer getRPM() 获取<p>RPM（每分钟请求数）限流上限。可选。必须大于 0，且不能超过用户在该模型上的 RPM 上限。不传则使用默认值（60）。</p>
 * @method void setRPM(integer $RPM) 设置<p>RPM（每分钟请求数）限流上限。可选。必须大于 0，且不能超过用户在该模型上的 RPM 上限。不传则使用默认值（60）。</p>
 * @method integer getTPM() 获取<p>TPM（每分钟 Token 数）限流上限，单位为 tokens/min。可选。必须大于 0，且不能超过用户在该模型上的 TPM 上限。设置后会同时作用于输入 TPM 和输出 TPM。不传则使用默认值（0 表示不限流）。</p>
 * @method void setTPM(integer $TPM) 设置<p>TPM（每分钟 Token 数）限流上限，单位为 tokens/min。可选。必须大于 0，且不能超过用户在该模型上的 TPM 上限。设置后会同时作用于输入 TPM 和输出 TPM。不传则使用默认值（0 表示不限流）。</p>
 * @method integer getAutoAdjustQuota() 获取<p>自动调整配额</p>
 * @method void setAutoAdjustQuota(integer $AutoAdjustQuota) 设置<p>自动调整配额</p>
 * @method string getEndpointId() 获取<p>自定义推理服务 id</p>
 * @method void setEndpointId(string $EndpointId) 设置<p>自定义推理服务 id</p>
 */
class CreateEndpointRequest extends AbstractModel
{
    /**
     * @var string <p>服务名称。最大 64 字符。</p>
     */
    public $EndpointName;

    /**
     * @var string <p>模型 ID。可通过 DescribeModelList 接口获取。</p>
     */
    public $ModelId;

    /**
     * @var string <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）、TPM（TPM 保障）、COMPUTE_UNIT（按算力单元计费）。</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>RPM（每分钟请求数）限流上限。可选。必须大于 0，且不能超过用户在该模型上的 RPM 上限。不传则使用默认值（60）。</p>
     */
    public $RPM;

    /**
     * @var integer <p>TPM（每分钟 Token 数）限流上限，单位为 tokens/min。可选。必须大于 0，且不能超过用户在该模型上的 TPM 上限。设置后会同时作用于输入 TPM 和输出 TPM。不传则使用默认值（0 表示不限流）。</p>
     */
    public $TPM;

    /**
     * @var integer <p>自动调整配额</p>
     */
    public $AutoAdjustQuota;

    /**
     * @var string <p>自定义推理服务 id</p>
     */
    public $EndpointId;

    /**
     * @param string $EndpointName <p>服务名称。最大 64 字符。</p>
     * @param string $ModelId <p>模型 ID。可通过 DescribeModelList 接口获取。</p>
     * @param string $ChargeType <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）、TPM（TPM 保障）、COMPUTE_UNIT（按算力单元计费）。</p>
     * @param integer $RPM <p>RPM（每分钟请求数）限流上限。可选。必须大于 0，且不能超过用户在该模型上的 RPM 上限。不传则使用默认值（60）。</p>
     * @param integer $TPM <p>TPM（每分钟 Token 数）限流上限，单位为 tokens/min。可选。必须大于 0，且不能超过用户在该模型上的 TPM 上限。设置后会同时作用于输入 TPM 和输出 TPM。不传则使用默认值（0 表示不限流）。</p>
     * @param integer $AutoAdjustQuota <p>自动调整配额</p>
     * @param string $EndpointId <p>自定义推理服务 id</p>
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
        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("RPM",$param) and $param["RPM"] !== null) {
            $this->RPM = $param["RPM"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }

        if (array_key_exists("AutoAdjustQuota",$param) and $param["AutoAdjustQuota"] !== null) {
            $this->AutoAdjustQuota = $param["AutoAdjustQuota"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }
    }
}
