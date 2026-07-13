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
 * 推理服务详情
 *
 * @method string getEndpointId() 获取<p>推理服务 ID。</p>
 * @method void setEndpointId(string $EndpointId) 设置<p>推理服务 ID。</p>
 * @method string getEndpointName() 获取<p>服务名称。</p>
 * @method void setEndpointName(string $EndpointName) 设置<p>服务名称。</p>
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelId() 获取<p>模型 ID。</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID。</p>
 * @method string getStatus() 获取<p>状态。取值：ACTIVE（使用中）、INACTIVE（停止中）。</p>
 * @method void setStatus(string $Status) 设置<p>状态。取值：ACTIVE（使用中）、INACTIVE（停止中）。</p>
 * @method string getServiceType() 获取<p>服务类型。取值：TEXT_GENERATION（文本生成）、IMAGE_GENERATION（图片生成）、VIDEO_GENERATION（视频生成）。</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型。取值：TEXT_GENERATION（文本生成）、IMAGE_GENERATION（图片生成）、VIDEO_GENERATION（视频生成）。</p>
 * @method string getChargeType() 获取<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）</p><p>枚举值：</p><ul><li>FREE： 免费体验</li><li>TOKEN： 按 Token 计费</li></ul>
 * @method void setChargeType(string $ChargeType) 设置<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）</p><p>枚举值：</p><ul><li>FREE： 免费体验</li><li>TOKEN： 按 Token 计费</li></ul>
 * @method boolean getPaymentEnabled() 获取<p>是否开启付费计费。true 表示已开启付费资源包，false 表示仅使用免费额度。</p>
 * @method void setPaymentEnabled(boolean $PaymentEnabled) 设置<p>是否开启付费计费。true 表示已开启付费资源包，false 表示仅使用免费额度。</p>
 * @method string getChargeDetail() 获取<p>计费详情信息，JSON 格式字符串。不同 ChargeType 对应不同的 JSON 结构：</p><ul><li>免费额度信息（所有类型均可能包含）：{&quot;FreeQuota&quot;: {&quot;TotalQuota&quot;: 200, &quot;UsedQuota&quot;: 56, &quot;UsagePercent&quot;: 28, &quot;ExpireTime&quot;: &quot;2026-06-15T00:00:00Z&quot;}}</li><li>TPM 类型额外包含：{&quot;Tpm&quot;: {&quot;TpmInputLimit&quot;: 1000, &quot;TpmOutputLimit&quot;: 1000}}</li><li>其他类型：预留扩展。</li></ul>
 * @method void setChargeDetail(string $ChargeDetail) 设置<p>计费详情信息，JSON 格式字符串。不同 ChargeType 对应不同的 JSON 结构：</p><ul><li>免费额度信息（所有类型均可能包含）：{&quot;FreeQuota&quot;: {&quot;TotalQuota&quot;: 200, &quot;UsedQuota&quot;: 56, &quot;UsagePercent&quot;: 28, &quot;ExpireTime&quot;: &quot;2026-06-15T00:00:00Z&quot;}}</li><li>TPM 类型额外包含：{&quot;Tpm&quot;: {&quot;TpmInputLimit&quot;: 1000, &quot;TpmOutputLimit&quot;: 1000}}</li><li>其他类型：预留扩展。</li></ul>
 * @method string getStopReason() 获取<p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足，格式为 INSUFFICIENT_BALANCE:&lt;待支付资源ID&gt;）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。当值为 INSUFFICIENT_BALANCE 时，冒号后附带待支付的 TPM 包资源 ID，前端可据此引导用户前往对应订单页完成支付。</p>
 * @method void setStopReason(string $StopReason) 设置<p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足，格式为 INSUFFICIENT_BALANCE:&lt;待支付资源ID&gt;）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。当值为 INSUFFICIENT_BALANCE 时，冒号后附带待支付的 TPM 包资源 ID，前端可据此引导用户前往对应订单页完成支付。</p>
 * @method integer getTPM() 获取<p>TPM（每分钟 Token 限流）。当推理服务未单独设置时，回退为关联模型的默认 TPM 值。</p>
 * @method void setTPM(integer $TPM) 设置<p>TPM（每分钟 Token 限流）。当推理服务未单独设置时，回退为关联模型的默认 TPM 值。</p>
 * @method integer getAutoAdjustQuota() 获取<p>自动调整配额</p>
 * @method void setAutoAdjustQuota(integer $AutoAdjustQuota) 设置<p>自动调整配额</p>
 * @method integer getRPM() 获取<p>RPM（每分钟请求数限流）。当推理服务未单独设置时，回退为关联模型的默认 RPM 值。</p>
 * @method void setRPM(integer $RPM) 设置<p>RPM（每分钟请求数限流）。当推理服务未单独设置时，回退为关联模型的默认 RPM 值。</p>
 */
class EndpointDetail extends AbstractModel
{
    /**
     * @var string <p>推理服务 ID。</p>
     */
    public $EndpointId;

    /**
     * @var string <p>服务名称。</p>
     */
    public $EndpointName;

    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型 ID。</p>
     */
    public $ModelId;

    /**
     * @var string <p>状态。取值：ACTIVE（使用中）、INACTIVE（停止中）。</p>
     */
    public $Status;

    /**
     * @var string <p>服务类型。取值：TEXT_GENERATION（文本生成）、IMAGE_GENERATION（图片生成）、VIDEO_GENERATION（视频生成）。</p>
     */
    public $ServiceType;

    /**
     * @var string <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）</p><p>枚举值：</p><ul><li>FREE： 免费体验</li><li>TOKEN： 按 Token 计费</li></ul>
     */
    public $ChargeType;

    /**
     * @var boolean <p>是否开启付费计费。true 表示已开启付费资源包，false 表示仅使用免费额度。</p>
     */
    public $PaymentEnabled;

    /**
     * @var string <p>计费详情信息，JSON 格式字符串。不同 ChargeType 对应不同的 JSON 结构：</p><ul><li>免费额度信息（所有类型均可能包含）：{&quot;FreeQuota&quot;: {&quot;TotalQuota&quot;: 200, &quot;UsedQuota&quot;: 56, &quot;UsagePercent&quot;: 28, &quot;ExpireTime&quot;: &quot;2026-06-15T00:00:00Z&quot;}}</li><li>TPM 类型额外包含：{&quot;Tpm&quot;: {&quot;TpmInputLimit&quot;: 1000, &quot;TpmOutputLimit&quot;: 1000}}</li><li>其他类型：预留扩展。</li></ul>
     */
    public $ChargeDetail;

    /**
     * @var string <p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足，格式为 INSUFFICIENT_BALANCE:&lt;待支付资源ID&gt;）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。当值为 INSUFFICIENT_BALANCE 时，冒号后附带待支付的 TPM 包资源 ID，前端可据此引导用户前往对应订单页完成支付。</p>
     */
    public $StopReason;

    /**
     * @var integer <p>TPM（每分钟 Token 限流）。当推理服务未单独设置时，回退为关联模型的默认 TPM 值。</p>
     */
    public $TPM;

    /**
     * @var integer <p>自动调整配额</p>
     */
    public $AutoAdjustQuota;

    /**
     * @var integer <p>RPM（每分钟请求数限流）。当推理服务未单独设置时，回退为关联模型的默认 RPM 值。</p>
     */
    public $RPM;

    /**
     * @param string $EndpointId <p>推理服务 ID。</p>
     * @param string $EndpointName <p>服务名称。</p>
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelId <p>模型 ID。</p>
     * @param string $Status <p>状态。取值：ACTIVE（使用中）、INACTIVE（停止中）。</p>
     * @param string $ServiceType <p>服务类型。取值：TEXT_GENERATION（文本生成）、IMAGE_GENERATION（图片生成）、VIDEO_GENERATION（视频生成）。</p>
     * @param string $ChargeType <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）</p><p>枚举值：</p><ul><li>FREE： 免费体验</li><li>TOKEN： 按 Token 计费</li></ul>
     * @param boolean $PaymentEnabled <p>是否开启付费计费。true 表示已开启付费资源包，false 表示仅使用免费额度。</p>
     * @param string $ChargeDetail <p>计费详情信息，JSON 格式字符串。不同 ChargeType 对应不同的 JSON 结构：</p><ul><li>免费额度信息（所有类型均可能包含）：{&quot;FreeQuota&quot;: {&quot;TotalQuota&quot;: 200, &quot;UsedQuota&quot;: 56, &quot;UsagePercent&quot;: 28, &quot;ExpireTime&quot;: &quot;2026-06-15T00:00:00Z&quot;}}</li><li>TPM 类型额外包含：{&quot;Tpm&quot;: {&quot;TpmInputLimit&quot;: 1000, &quot;TpmOutputLimit&quot;: 1000}}</li><li>其他类型：预留扩展。</li></ul>
     * @param string $StopReason <p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足，格式为 INSUFFICIENT_BALANCE:&lt;待支付资源ID&gt;）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。当值为 INSUFFICIENT_BALANCE 时，冒号后附带待支付的 TPM 包资源 ID，前端可据此引导用户前往对应订单页完成支付。</p>
     * @param integer $TPM <p>TPM（每分钟 Token 限流）。当推理服务未单独设置时，回退为关联模型的默认 TPM 值。</p>
     * @param integer $AutoAdjustQuota <p>自动调整配额</p>
     * @param integer $RPM <p>RPM（每分钟请求数限流）。当推理服务未单独设置时，回退为关联模型的默认 RPM 值。</p>
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("PaymentEnabled",$param) and $param["PaymentEnabled"] !== null) {
            $this->PaymentEnabled = $param["PaymentEnabled"];
        }

        if (array_key_exists("ChargeDetail",$param) and $param["ChargeDetail"] !== null) {
            $this->ChargeDetail = $param["ChargeDetail"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }

        if (array_key_exists("AutoAdjustQuota",$param) and $param["AutoAdjustQuota"] !== null) {
            $this->AutoAdjustQuota = $param["AutoAdjustQuota"];
        }

        if (array_key_exists("RPM",$param) and $param["RPM"] !== null) {
            $this->RPM = $param["RPM"];
        }
    }
}
