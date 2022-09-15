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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Istio配置
 *
 * @method string getOutboundTrafficPolicy() 获取外部流量策略
 * @method void setOutboundTrafficPolicy(string $OutboundTrafficPolicy) 设置外部流量策略
 * @method TracingConfig getTracing() 获取调用链配置（Deprecated，请使用 MeshConfig.Tracing 进行配置）
 * @method void setTracing(TracingConfig $Tracing) 设置调用链配置（Deprecated，请使用 MeshConfig.Tracing 进行配置）
 * @method boolean getDisablePolicyChecks() 获取禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisablePolicyChecks(boolean $DisablePolicyChecks) 设置禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnablePilotHTTP() 获取支持HTTP1.0协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePilotHTTP(boolean $EnablePilotHTTP) 设置支持HTTP1.0协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisableHTTPRetry() 获取禁用HTTP重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableHTTPRetry(boolean $DisableHTTPRetry) 设置禁用HTTP重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartDNSConfig getSmartDNS() 获取SmartDNS策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartDNS(SmartDNSConfig $SmartDNS) 设置SmartDNS策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class IstioConfig extends AbstractModel
{
    /**
     * @var string 外部流量策略
     */
    public $OutboundTrafficPolicy;

    /**
     * @var TracingConfig 调用链配置（Deprecated，请使用 MeshConfig.Tracing 进行配置）
     */
    public $Tracing;

    /**
     * @var boolean 禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisablePolicyChecks;

    /**
     * @var boolean 支持HTTP1.0协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePilotHTTP;

    /**
     * @var boolean 禁用HTTP重试策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableHTTPRetry;

    /**
     * @var SmartDNSConfig SmartDNS策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartDNS;

    /**
     * @param string $OutboundTrafficPolicy 外部流量策略
     * @param TracingConfig $Tracing 调用链配置（Deprecated，请使用 MeshConfig.Tracing 进行配置）
     * @param boolean $DisablePolicyChecks 禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnablePilotHTTP 支持HTTP1.0协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DisableHTTPRetry 禁用HTTP重试策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartDNSConfig $SmartDNS SmartDNS策略
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OutboundTrafficPolicy",$param) and $param["OutboundTrafficPolicy"] !== null) {
            $this->OutboundTrafficPolicy = $param["OutboundTrafficPolicy"];
        }

        if (array_key_exists("Tracing",$param) and $param["Tracing"] !== null) {
            $this->Tracing = new TracingConfig();
            $this->Tracing->deserialize($param["Tracing"]);
        }

        if (array_key_exists("DisablePolicyChecks",$param) and $param["DisablePolicyChecks"] !== null) {
            $this->DisablePolicyChecks = $param["DisablePolicyChecks"];
        }

        if (array_key_exists("EnablePilotHTTP",$param) and $param["EnablePilotHTTP"] !== null) {
            $this->EnablePilotHTTP = $param["EnablePilotHTTP"];
        }

        if (array_key_exists("DisableHTTPRetry",$param) and $param["DisableHTTPRetry"] !== null) {
            $this->DisableHTTPRetry = $param["DisableHTTPRetry"];
        }

        if (array_key_exists("SmartDNS",$param) and $param["SmartDNS"] !== null) {
            $this->SmartDNS = new SmartDNSConfig();
            $this->SmartDNS->deserialize($param["SmartDNS"]);
        }
    }
}
