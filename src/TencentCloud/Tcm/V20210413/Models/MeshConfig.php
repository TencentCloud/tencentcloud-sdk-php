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
 * 网格配置项
 *
 * @method IstioConfig getIstio() 获取Istio配置
 * @method void setIstio(IstioConfig $Istio) 设置Istio配置
 * @method AccessLogConfig getAccessLog() 获取AccessLog配置
 * @method void setAccessLog(AccessLogConfig $AccessLog) 设置AccessLog配置
 * @method PrometheusConfig getPrometheus() 获取Prometheus配置
 * @method void setPrometheus(PrometheusConfig $Prometheus) 设置Prometheus配置
 * @method InjectConfig getInject() 获取自动注入配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInject(InjectConfig $Inject) 设置自动注入配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TracingConfig getTracing() 获取调用跟踪配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTracing(TracingConfig $Tracing) 设置调用跟踪配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceRequirements getSidecarResources() 获取Sidecar自定义资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSidecarResources(ResourceRequirements $SidecarResources) 设置Sidecar自定义资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class MeshConfig extends AbstractModel
{
    /**
     * @var IstioConfig Istio配置
     */
    public $Istio;

    /**
     * @var AccessLogConfig AccessLog配置
     */
    public $AccessLog;

    /**
     * @var PrometheusConfig Prometheus配置
     */
    public $Prometheus;

    /**
     * @var InjectConfig 自动注入配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Inject;

    /**
     * @var TracingConfig 调用跟踪配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tracing;

    /**
     * @var ResourceRequirements Sidecar自定义资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SidecarResources;

    /**
     * @param IstioConfig $Istio Istio配置
     * @param AccessLogConfig $AccessLog AccessLog配置
     * @param PrometheusConfig $Prometheus Prometheus配置
     * @param InjectConfig $Inject 自动注入配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TracingConfig $Tracing 调用跟踪配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceRequirements $SidecarResources Sidecar自定义资源
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
        if (array_key_exists("Istio",$param) and $param["Istio"] !== null) {
            $this->Istio = new IstioConfig();
            $this->Istio->deserialize($param["Istio"]);
        }

        if (array_key_exists("AccessLog",$param) and $param["AccessLog"] !== null) {
            $this->AccessLog = new AccessLogConfig();
            $this->AccessLog->deserialize($param["AccessLog"]);
        }

        if (array_key_exists("Prometheus",$param) and $param["Prometheus"] !== null) {
            $this->Prometheus = new PrometheusConfig();
            $this->Prometheus->deserialize($param["Prometheus"]);
        }

        if (array_key_exists("Inject",$param) and $param["Inject"] !== null) {
            $this->Inject = new InjectConfig();
            $this->Inject->deserialize($param["Inject"]);
        }

        if (array_key_exists("Tracing",$param) and $param["Tracing"] !== null) {
            $this->Tracing = new TracingConfig();
            $this->Tracing->deserialize($param["Tracing"]);
        }

        if (array_key_exists("SidecarResources",$param) and $param["SidecarResources"] !== null) {
            $this->SidecarResources = new ResourceRequirements();
            $this->SidecarResources->deserialize($param["SidecarResources"]);
        }
    }
}
