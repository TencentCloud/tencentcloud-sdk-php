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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开启注册节点池支持配置信息
 *
 * @method string getNetworkType() 获取容器网络类型，支持：HostNetwork、CiliumBGP
 * @method void setNetworkType(string $NetworkType) 设置容器网络类型，支持：HostNetwork、CiliumBGP
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getClusterCIDR() 获取集群CIDR，网络模式HostNetwork 时无需填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterCIDR(string $ClusterCIDR) 设置集群CIDR，网络模式HostNetwork 时无需填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取【已废弃】是否开启专线连接能力
 * @method void setEnabled(boolean $Enabled) 设置【已废弃】是否开启专线连接能力
 */
class ClusterExternalConfig extends AbstractModel
{
    /**
     * @var string 容器网络类型，支持：HostNetwork、CiliumBGP
     */
    public $NetworkType;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 集群CIDR，网络模式HostNetwork 时无需填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterCIDR;

    /**
     * @var boolean 【已废弃】是否开启专线连接能力
     */
    public $Enabled;

    /**
     * @param string $NetworkType 容器网络类型，支持：HostNetwork、CiliumBGP
     * @param string $SubnetId 子网ID
     * @param string $ClusterCIDR 集群CIDR，网络模式HostNetwork 时无需填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 【已废弃】是否开启专线连接能力
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
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
