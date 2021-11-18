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
 * @method TracingConfig getTracing() 获取调用链配置
 * @method void setTracing(TracingConfig $Tracing) 设置调用链配置
 * @method boolean getDisablePolicyChecks() 获取禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisablePolicyChecks(boolean $DisablePolicyChecks) 设置禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
 */
class IstioConfig extends AbstractModel
{
    /**
     * @var string 外部流量策略
     */
    public $OutboundTrafficPolicy;

    /**
     * @var TracingConfig 调用链配置
     */
    public $Tracing;

    /**
     * @var boolean 禁用策略检查功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisablePolicyChecks;

    /**
     * @param string $OutboundTrafficPolicy 外部流量策略
     * @param TracingConfig $Tracing 调用链配置
     * @param boolean $DisablePolicyChecks 禁用策略检查功能
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
    }
}
