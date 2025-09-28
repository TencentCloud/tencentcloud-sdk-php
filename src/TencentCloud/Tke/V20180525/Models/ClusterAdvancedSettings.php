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
 * 集群高级配置
 *
 * @method boolean getAsEnabled() 获取是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
 * @method void setAsEnabled(boolean $AsEnabled) 设置是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
 * @method boolean getAuditEnabled() 获取是否开启审计开关
 * @method void setAuditEnabled(boolean $AuditEnabled) 设置是否开启审计开关
 * @method string getAuditLogTopicId() 获取审计日志上传到的topic
 * @method void setAuditLogTopicId(string $AuditLogTopicId) 设置审计日志上传到的topic
 * @method string getAuditLogsetId() 获取审计日志上传到的logset日志集
 * @method void setAuditLogsetId(string $AuditLogsetId) 设置审计日志上传到的logset日志集
 * @method integer getBasePodNumber() 获取自定义模式下的基础pod数量
 * @method void setBasePodNumber(integer $BasePodNumber) 设置自定义模式下的基础pod数量
 * @method string getCiliumMode() 获取启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP
 * @method void setCiliumMode(string $CiliumMode) 设置启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP
 * @method string getContainerRuntime() 获取集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
 * @method void setContainerRuntime(string $ContainerRuntime) 设置集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
 * @method boolean getDataPlaneV2() 获取是否启用 DataPlaneV2（cilium替代kube-proxy） 
 * @method void setDataPlaneV2(boolean $DataPlaneV2) 设置是否启用 DataPlaneV2（cilium替代kube-proxy） 
 * @method boolean getDeletionProtection() 获取是否启用集群删除保护
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置是否启用集群删除保护
 * @method boolean getEnableCustomizedPodCIDR() 获取是否开节点podCIDR大小的自定义模式
 * @method void setEnableCustomizedPodCIDR(boolean $EnableCustomizedPodCIDR) 设置是否开节点podCIDR大小的自定义模式
 * @method array getEtcdOverrideConfigs() 获取元数据拆分存储Etcd配置
 * @method void setEtcdOverrideConfigs(array $EtcdOverrideConfigs) 设置元数据拆分存储Etcd配置
 * @method ClusterExtraArgs getExtraArgs() 获取集群自定义参数
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) 设置集群自定义参数
 * @method boolean getIPVS() 获取是否启用IPVS
 * @method void setIPVS(boolean $IPVS) 设置是否启用IPVS
 * @method boolean getIsDualStack() 获取集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。
 * @method void setIsDualStack(boolean $IsDualStack) 设置集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。
 * @method boolean getIsNonStaticIpMode() 获取集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。
 * @method void setIsNonStaticIpMode(boolean $IsNonStaticIpMode) 设置集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。
 * @method string getKubeProxyMode() 获取集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：
iptables模式：IPVS和KubeProxyMode都不设置
ipvs模式: 设置IPVS为true, KubeProxyMode不设置
ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf
使用ipvs-bpf的网络模式需要满足以下条件：
1. 集群版本必须为1.14及以上；
2. 系统镜像必须是: Tencent Linux 2.4；
 * @method void setKubeProxyMode(string $KubeProxyMode) 设置集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：
iptables模式：IPVS和KubeProxyMode都不设置
ipvs模式: 设置IPVS为true, KubeProxyMode不设置
ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf
使用ipvs-bpf的网络模式需要满足以下条件：
1. 集群版本必须为1.14及以上；
2. 系统镜像必须是: Tencent Linux 2.4；
 * @method string getNetworkType() 获取集群网络类型，默认为GR。
- GR: 全局路由
- VPC-CNI: VPC-CNI模式
- CiliumOverlay: CiliumOverlay模式
 * @method void setNetworkType(string $NetworkType) 设置集群网络类型，默认为GR。
- GR: 全局路由
- VPC-CNI: VPC-CNI模式
- CiliumOverlay: CiliumOverlay模式
 * @method string getNodeNameType() 获取集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）
 * @method void setNodeNameType(string $NodeNameType) 设置集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）
 * @method boolean getQGPUShareEnable() 获取是否开启QGPU共享
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置是否开启QGPU共享
 * @method string getRuntimeVersion() 获取运行时版本
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本
 * @method string getVpcCniType() 获取区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写"tke-route-eni"，独立网卡模式填写"tke-direct-eni"，默认为共享网卡模式
 * @method void setVpcCniType(string $VpcCniType) 设置区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写"tke-route-eni"，独立网卡模式填写"tke-direct-eni"，默认为共享网卡模式
 */
class ClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var boolean 是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
     */
    public $AsEnabled;

    /**
     * @var boolean 是否开启审计开关
     */
    public $AuditEnabled;

    /**
     * @var string 审计日志上传到的topic
     */
    public $AuditLogTopicId;

    /**
     * @var string 审计日志上传到的logset日志集
     */
    public $AuditLogsetId;

    /**
     * @var integer 自定义模式下的基础pod数量
     */
    public $BasePodNumber;

    /**
     * @var string 启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP
     */
    public $CiliumMode;

    /**
     * @var string 集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
     */
    public $ContainerRuntime;

    /**
     * @var boolean 是否启用 DataPlaneV2（cilium替代kube-proxy） 
     */
    public $DataPlaneV2;

    /**
     * @var boolean 是否启用集群删除保护
     */
    public $DeletionProtection;

    /**
     * @var boolean 是否开节点podCIDR大小的自定义模式
     */
    public $EnableCustomizedPodCIDR;

    /**
     * @var array 元数据拆分存储Etcd配置
     */
    public $EtcdOverrideConfigs;

    /**
     * @var ClusterExtraArgs 集群自定义参数
     */
    public $ExtraArgs;

    /**
     * @var boolean 是否启用IPVS
     */
    public $IPVS;

    /**
     * @var boolean 集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。
     */
    public $IsDualStack;

    /**
     * @var boolean 集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。
     */
    public $IsNonStaticIpMode;

    /**
     * @var string 集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：
iptables模式：IPVS和KubeProxyMode都不设置
ipvs模式: 设置IPVS为true, KubeProxyMode不设置
ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf
使用ipvs-bpf的网络模式需要满足以下条件：
1. 集群版本必须为1.14及以上；
2. 系统镜像必须是: Tencent Linux 2.4；
     */
    public $KubeProxyMode;

    /**
     * @var string 集群网络类型，默认为GR。
- GR: 全局路由
- VPC-CNI: VPC-CNI模式
- CiliumOverlay: CiliumOverlay模式
     */
    public $NetworkType;

    /**
     * @var string 集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）
     */
    public $NodeNameType;

    /**
     * @var boolean 是否开启QGPU共享
     */
    public $QGPUShareEnable;

    /**
     * @var string 运行时版本
     */
    public $RuntimeVersion;

    /**
     * @var string 区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写"tke-route-eni"，独立网卡模式填写"tke-direct-eni"，默认为共享网卡模式
     */
    public $VpcCniType;

    /**
     * @param boolean $AsEnabled 是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
     * @param boolean $AuditEnabled 是否开启审计开关
     * @param string $AuditLogTopicId 审计日志上传到的topic
     * @param string $AuditLogsetId 审计日志上传到的logset日志集
     * @param integer $BasePodNumber 自定义模式下的基础pod数量
     * @param string $CiliumMode 启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP
     * @param string $ContainerRuntime 集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
     * @param boolean $DataPlaneV2 是否启用 DataPlaneV2（cilium替代kube-proxy） 
     * @param boolean $DeletionProtection 是否启用集群删除保护
     * @param boolean $EnableCustomizedPodCIDR 是否开节点podCIDR大小的自定义模式
     * @param array $EtcdOverrideConfigs 元数据拆分存储Etcd配置
     * @param ClusterExtraArgs $ExtraArgs 集群自定义参数
     * @param boolean $IPVS 是否启用IPVS
     * @param boolean $IsDualStack 集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。
     * @param boolean $IsNonStaticIpMode 集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。
     * @param string $KubeProxyMode 集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：
iptables模式：IPVS和KubeProxyMode都不设置
ipvs模式: 设置IPVS为true, KubeProxyMode不设置
ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf
使用ipvs-bpf的网络模式需要满足以下条件：
1. 集群版本必须为1.14及以上；
2. 系统镜像必须是: Tencent Linux 2.4；
     * @param string $NetworkType 集群网络类型，默认为GR。
- GR: 全局路由
- VPC-CNI: VPC-CNI模式
- CiliumOverlay: CiliumOverlay模式
     * @param string $NodeNameType 集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）
     * @param boolean $QGPUShareEnable 是否开启QGPU共享
     * @param string $RuntimeVersion 运行时版本
     * @param string $VpcCniType 区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写"tke-route-eni"，独立网卡模式填写"tke-direct-eni"，默认为共享网卡模式
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
        if (array_key_exists("AsEnabled",$param) and $param["AsEnabled"] !== null) {
            $this->AsEnabled = $param["AsEnabled"];
        }

        if (array_key_exists("AuditEnabled",$param) and $param["AuditEnabled"] !== null) {
            $this->AuditEnabled = $param["AuditEnabled"];
        }

        if (array_key_exists("AuditLogTopicId",$param) and $param["AuditLogTopicId"] !== null) {
            $this->AuditLogTopicId = $param["AuditLogTopicId"];
        }

        if (array_key_exists("AuditLogsetId",$param) and $param["AuditLogsetId"] !== null) {
            $this->AuditLogsetId = $param["AuditLogsetId"];
        }

        if (array_key_exists("BasePodNumber",$param) and $param["BasePodNumber"] !== null) {
            $this->BasePodNumber = $param["BasePodNumber"];
        }

        if (array_key_exists("CiliumMode",$param) and $param["CiliumMode"] !== null) {
            $this->CiliumMode = $param["CiliumMode"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("DataPlaneV2",$param) and $param["DataPlaneV2"] !== null) {
            $this->DataPlaneV2 = $param["DataPlaneV2"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("EnableCustomizedPodCIDR",$param) and $param["EnableCustomizedPodCIDR"] !== null) {
            $this->EnableCustomizedPodCIDR = $param["EnableCustomizedPodCIDR"];
        }

        if (array_key_exists("EtcdOverrideConfigs",$param) and $param["EtcdOverrideConfigs"] !== null) {
            $this->EtcdOverrideConfigs = [];
            foreach ($param["EtcdOverrideConfigs"] as $key => $value){
                $obj = new EtcdOverrideConfig();
                $obj->deserialize($value);
                array_push($this->EtcdOverrideConfigs, $obj);
            }
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new ClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("IPVS",$param) and $param["IPVS"] !== null) {
            $this->IPVS = $param["IPVS"];
        }

        if (array_key_exists("IsDualStack",$param) and $param["IsDualStack"] !== null) {
            $this->IsDualStack = $param["IsDualStack"];
        }

        if (array_key_exists("IsNonStaticIpMode",$param) and $param["IsNonStaticIpMode"] !== null) {
            $this->IsNonStaticIpMode = $param["IsNonStaticIpMode"];
        }

        if (array_key_exists("KubeProxyMode",$param) and $param["KubeProxyMode"] !== null) {
            $this->KubeProxyMode = $param["KubeProxyMode"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NodeNameType",$param) and $param["NodeNameType"] !== null) {
            $this->NodeNameType = $param["NodeNameType"];
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("VpcCniType",$param) and $param["VpcCniType"] !== null) {
            $this->VpcCniType = $param["VpcCniType"];
        }
    }
}
