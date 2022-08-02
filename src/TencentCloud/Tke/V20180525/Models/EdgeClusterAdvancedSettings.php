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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘容器集群高级配置
 *
 * @method EdgeClusterExtraArgs getExtraArgs() 获取集群自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraArgs(EdgeClusterExtraArgs $ExtraArgs) 设置集群自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntime() 获取运行时类型，支持"docker"和"containerd"，默认为docker
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntime(string $Runtime) 设置运行时类型，支持"docker"和"containerd"，默认为docker
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyMode() 获取集群kube-proxy转发模式，支持"iptables"和"ipvs"，默认为iptables
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyMode(string $ProxyMode) 设置集群kube-proxy转发模式，支持"iptables"和"ipvs"，默认为iptables
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var EdgeClusterExtraArgs 集群自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraArgs;

    /**
     * @var string 运行时类型，支持"docker"和"containerd"，默认为docker
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Runtime;

    /**
     * @var string 集群kube-proxy转发模式，支持"iptables"和"ipvs"，默认为iptables
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyMode;

    /**
     * @param EdgeClusterExtraArgs $ExtraArgs 集群自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Runtime 运行时类型，支持"docker"和"containerd"，默认为docker
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyMode 集群kube-proxy转发模式，支持"iptables"和"ipvs"，默认为iptables
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
        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new EdgeClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("ProxyMode",$param) and $param["ProxyMode"] !== null) {
            $this->ProxyMode = $param["ProxyMode"];
        }
    }
}
