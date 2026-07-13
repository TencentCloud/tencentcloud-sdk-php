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
 * 模型接入点概览信息
 *
 * @method string getEndpointId() 获取<p>推理服务 ID。网关默认创建的 id 与模型 id 相同；控制台自定义推理服务以 ep- 开头。</p>
 * @method void setEndpointId(string $EndpointId) 设置<p>推理服务 ID。网关默认创建的 id 与模型 id 相同；控制台自定义推理服务以 ep- 开头。</p>
 * @method string getEndpointName() 获取<p>推理服务名称。未激活时与 ModelId 相同。</p>
 * @method void setEndpointName(string $EndpointName) 设置<p>推理服务名称。未激活时与 ModelId 相同。</p>
 * @method string getModelId() 获取<p>模型 ID。</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID。</p>
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getStatus() 获取<p>状态。取值：ACTIVE（运行中）、INACTIVE（已停止）。</p>
 * @method void setStatus(string $Status) 设置<p>状态。取值：ACTIVE（运行中）、INACTIVE（已停止）。</p>
 * @method string getServiceType() 获取<p>服务类型。固定为 TEXT_GENERATION（文本生成）。</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型。固定为 TEXT_GENERATION（文本生成）。</p>
 * @method string getChargeType() 获取<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）。未激活时为空。</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）。未激活时为空。</p>
 * @method boolean getPaymentEnabled() 获取<p>是否已开启后付费。true 表示已开启，false 表示未开启。未激活时为 false。</p>
 * @method void setPaymentEnabled(boolean $PaymentEnabled) 设置<p>是否已开启后付费。true 表示已开启，false 表示未开启。未激活时为 false。</p>
 * @method string getChargeDetail() 获取<p>计费详情信息，JSON 格式字符串，包含免费额度用量等信息。未激活时为空。</p>
 * @method void setChargeDetail(string $ChargeDetail) 设置<p>计费详情信息，JSON 格式字符串，包含免费额度用量等信息。未激活时为空。</p>
 * @method string getStopReason() 获取<p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。</p>
 * @method void setStopReason(string $StopReason) 设置<p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。</p>
 * @method integer getRPM() 获取<p>推理服务的 rpm 限制，没设置就按模型维度 rpm 限制展示</p>
 * @method void setRPM(integer $RPM) 设置<p>推理服务的 rpm 限制，没设置就按模型维度 rpm 限制展示</p>
 * @method integer getTPM() 获取<p>推理服务的tpm 限制，没设置就按模型维度 tpm 限制展示</p>
 * @method void setTPM(integer $TPM) 设置<p>推理服务的tpm 限制，没设置就按模型维度 tpm 限制展示</p>
 */
class ModelEndpointView extends AbstractModel
{
    /**
     * @var string <p>推理服务 ID。网关默认创建的 id 与模型 id 相同；控制台自定义推理服务以 ep- 开头。</p>
     */
    public $EndpointId;

    /**
     * @var string <p>推理服务名称。未激活时与 ModelId 相同。</p>
     */
    public $EndpointName;

    /**
     * @var string <p>模型 ID。</p>
     */
    public $ModelId;

    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var string <p>状态。取值：ACTIVE（运行中）、INACTIVE（已停止）。</p>
     */
    public $Status;

    /**
     * @var string <p>服务类型。固定为 TEXT_GENERATION（文本生成）。</p>
     */
    public $ServiceType;

    /**
     * @var string <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）。未激活时为空。</p>
     */
    public $ChargeType;

    /**
     * @var boolean <p>是否已开启后付费。true 表示已开启，false 表示未开启。未激活时为 false。</p>
     */
    public $PaymentEnabled;

    /**
     * @var string <p>计费详情信息，JSON 格式字符串，包含免费额度用量等信息。未激活时为空。</p>
     */
    public $ChargeDetail;

    /**
     * @var string <p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。</p>
     */
    public $StopReason;

    /**
     * @var integer <p>推理服务的 rpm 限制，没设置就按模型维度 rpm 限制展示</p>
     */
    public $RPM;

    /**
     * @var integer <p>推理服务的tpm 限制，没设置就按模型维度 tpm 限制展示</p>
     */
    public $TPM;

    /**
     * @param string $EndpointId <p>推理服务 ID。网关默认创建的 id 与模型 id 相同；控制台自定义推理服务以 ep- 开头。</p>
     * @param string $EndpointName <p>推理服务名称。未激活时与 ModelId 相同。</p>
     * @param string $ModelId <p>模型 ID。</p>
     * @param string $ModelName <p>模型名称。</p>
     * @param string $Status <p>状态。取值：ACTIVE（运行中）、INACTIVE（已停止）。</p>
     * @param string $ServiceType <p>服务类型。固定为 TEXT_GENERATION（文本生成）。</p>
     * @param string $ChargeType <p>计费方式。取值：FREE（免费体验）、TOKEN（按 Token 计费）。未激活时为空。</p>
     * @param boolean $PaymentEnabled <p>是否已开启后付费。true 表示已开启，false 表示未开启。未激活时为 false。</p>
     * @param string $ChargeDetail <p>计费详情信息，JSON 格式字符串，包含免费额度用量等信息。未激活时为空。</p>
     * @param string $StopReason <p>停止原因。当状态为 INACTIVE 时返回。取值：FREE_QUOTA_EXHAUSTED（免费额度已用尽）、NO_FREE_PACKAGE（无可用免费包）、INSUFFICIENT_BALANCE（余额不足）、BILLING_ISOLATED（账户欠费隔离）、INTERNAL_ERROR（内部错误）。</p>
     * @param integer $RPM <p>推理服务的 rpm 限制，没设置就按模型维度 rpm 限制展示</p>
     * @param integer $TPM <p>推理服务的tpm 限制，没设置就按模型维度 tpm 限制展示</p>
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

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
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

        if (array_key_exists("RPM",$param) and $param["RPM"] !== null) {
            $this->RPM = $param["RPM"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }
    }
}
