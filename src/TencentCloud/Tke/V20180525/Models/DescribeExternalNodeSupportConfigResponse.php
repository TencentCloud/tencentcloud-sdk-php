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
 * DescribeExternalNodeSupportConfig返回参数结构体
 *
 * @method string getClusterCIDR() 获取用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突。且网段范围必须在内网网段内，例如:10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16。
 * @method void setClusterCIDR(string $ClusterCIDR) 设置用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突。且网段范围必须在内网网段内，例如:10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16。
 * @method string getNetworkType() 获取集群网络插件类型，支持：CiliumBGP、CiliumVXLan
 * @method void setNetworkType(string $NetworkType) 设置集群网络插件类型，支持：CiliumBGP、CiliumVXLan
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method boolean getEnabled() 获取是否开启第三方节点专线连接支持
 * @method void setEnabled(boolean $Enabled) 设置是否开启第三方节点专线连接支持
 * @method string getAS() 获取节点所属交换机的BGP AS 号
 * @method void setAS(string $AS) 设置节点所属交换机的BGP AS 号
 * @method string getSwitchIP() 获取节点所属交换机的交换机 IP
 * @method void setSwitchIP(string $SwitchIP) 设置节点所属交换机的交换机 IP
 * @method string getStatus() 获取开启第三方节点池状态
 * @method void setStatus(string $Status) 设置开启第三方节点池状态
 * @method string getFailedReason() 获取如果开启失败原因
 * @method void setFailedReason(string $FailedReason) 设置如果开启失败原因
 * @method string getMaster() 获取内网访问地址
 * @method void setMaster(string $Master) 设置内网访问地址
 * @method string getProxy() 获取镜像仓库代理地址
 * @method void setProxy(string $Proxy) 设置镜像仓库代理地址
 * @method array getProgress() 获取用于记录开启第三方节点的过程进行到哪一步了
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(array $Progress) 设置用于记录开启第三方节点的过程进行到哪一步了
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabledPublicConnect() 获取是否开启第三方节点公网连接支持
 * @method void setEnabledPublicConnect(boolean $EnabledPublicConnect) 设置是否开启第三方节点公网连接支持
 * @method string getPublicConnectUrl() 获取注册节点公网版公网连接地址
 * @method void setPublicConnectUrl(string $PublicConnectUrl) 设置注册节点公网版公网连接地址
 * @method string getPublicCustomDomain() 获取注册节点公网版自定义域名
 * @method void setPublicCustomDomain(string $PublicCustomDomain) 设置注册节点公网版自定义域名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExternalNodeSupportConfigResponse extends AbstractModel
{
    /**
     * @var string 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突。且网段范围必须在内网网段内，例如:10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16。
     */
    public $ClusterCIDR;

    /**
     * @var string 集群网络插件类型，支持：CiliumBGP、CiliumVXLan
     */
    public $NetworkType;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var boolean 是否开启第三方节点专线连接支持
     */
    public $Enabled;

    /**
     * @var string 节点所属交换机的BGP AS 号
     */
    public $AS;

    /**
     * @var string 节点所属交换机的交换机 IP
     */
    public $SwitchIP;

    /**
     * @var string 开启第三方节点池状态
     */
    public $Status;

    /**
     * @var string 如果开启失败原因
     */
    public $FailedReason;

    /**
     * @var string 内网访问地址
     */
    public $Master;

    /**
     * @var string 镜像仓库代理地址
     */
    public $Proxy;

    /**
     * @var array 用于记录开启第三方节点的过程进行到哪一步了
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var boolean 是否开启第三方节点公网连接支持
     */
    public $EnabledPublicConnect;

    /**
     * @var string 注册节点公网版公网连接地址
     */
    public $PublicConnectUrl;

    /**
     * @var string 注册节点公网版自定义域名
     */
    public $PublicCustomDomain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterCIDR 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突。且网段范围必须在内网网段内，例如:10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16。
     * @param string $NetworkType 集群网络插件类型，支持：CiliumBGP、CiliumVXLan
     * @param string $SubnetId 子网ID
     * @param boolean $Enabled 是否开启第三方节点专线连接支持
     * @param string $AS 节点所属交换机的BGP AS 号
     * @param string $SwitchIP 节点所属交换机的交换机 IP
     * @param string $Status 开启第三方节点池状态
     * @param string $FailedReason 如果开启失败原因
     * @param string $Master 内网访问地址
     * @param string $Proxy 镜像仓库代理地址
     * @param array $Progress 用于记录开启第三方节点的过程进行到哪一步了
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnabledPublicConnect 是否开启第三方节点公网连接支持
     * @param string $PublicConnectUrl 注册节点公网版公网连接地址
     * @param string $PublicCustomDomain 注册节点公网版自定义域名
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("AS",$param) and $param["AS"] !== null) {
            $this->AS = $param["AS"];
        }

        if (array_key_exists("SwitchIP",$param) and $param["SwitchIP"] !== null) {
            $this->SwitchIP = $param["SwitchIP"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Master",$param) and $param["Master"] !== null) {
            $this->Master = $param["Master"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = [];
            foreach ($param["Progress"] as $key => $value){
                $obj = new Step();
                $obj->deserialize($value);
                array_push($this->Progress, $obj);
            }
        }

        if (array_key_exists("EnabledPublicConnect",$param) and $param["EnabledPublicConnect"] !== null) {
            $this->EnabledPublicConnect = $param["EnabledPublicConnect"];
        }

        if (array_key_exists("PublicConnectUrl",$param) and $param["PublicConnectUrl"] !== null) {
            $this->PublicConnectUrl = $param["PublicConnectUrl"];
        }

        if (array_key_exists("PublicCustomDomain",$param) and $param["PublicCustomDomain"] !== null) {
            $this->PublicCustomDomain = $param["PublicCustomDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
