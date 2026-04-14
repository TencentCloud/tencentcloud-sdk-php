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
 * @method boolean getAsEnabled() 获取<p>是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)</p>
 * @method void setAsEnabled(boolean $AsEnabled) 设置<p>是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)</p>
 * @method boolean getAuditEnabled() 获取<p>是否开启审计开关</p>
 * @method void setAuditEnabled(boolean $AuditEnabled) 设置<p>是否开启审计开关</p>
 * @method string getAuditLogTopicId() 获取<p>审计日志上传到的topic</p>
 * @method void setAuditLogTopicId(string $AuditLogTopicId) 设置<p>审计日志上传到的topic</p>
 * @method string getAuditLogsetId() 获取<p>审计日志上传到的logset日志集</p>
 * @method void setAuditLogsetId(string $AuditLogsetId) 设置<p>审计日志上传到的logset日志集</p>
 * @method integer getBasePodNumber() 获取<p>自定义模式下的基础pod数量</p>
 * @method void setBasePodNumber(integer $BasePodNumber) 设置<p>自定义模式下的基础pod数量</p>
 * @method string getCiliumMode() 获取<p>启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP</p>
 * @method void setCiliumMode(string $CiliumMode) 设置<p>启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP</p>
 * @method string getContainerRuntime() 获取<p>集群使用的runtime类型，包括&quot;docker&quot;和&quot;containerd&quot;两种类型，默认为&quot;docker&quot;</p>
 * @method void setContainerRuntime(string $ContainerRuntime) 设置<p>集群使用的runtime类型，包括&quot;docker&quot;和&quot;containerd&quot;两种类型，默认为&quot;docker&quot;</p>
 * @method boolean getDataPlaneV2() 获取<p>是否启用 DataPlaneV2（cilium替代kube-proxy）</p>
 * @method void setDataPlaneV2(boolean $DataPlaneV2) 设置<p>是否启用 DataPlaneV2（cilium替代kube-proxy）</p>
 * @method boolean getDeletionProtection() 获取<p>是否启用集群删除保护</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否启用集群删除保护</p>
 * @method boolean getEnableCustomizedPodCIDR() 获取<p>是否开节点podCIDR大小的自定义模式</p>
 * @method void setEnableCustomizedPodCIDR(boolean $EnableCustomizedPodCIDR) 设置<p>是否开节点podCIDR大小的自定义模式</p>
 * @method array getEtcdOverrideConfigs() 获取<p>元数据拆分存储Etcd配置</p>
 * @method void setEtcdOverrideConfigs(array $EtcdOverrideConfigs) 设置<p>元数据拆分存储Etcd配置</p>
 * @method ClusterExtraArgs getExtraArgs() 获取<p>集群自定义参数</p>
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) 设置<p>集群自定义参数</p>
 * @method boolean getIPVS() 获取<p>是否启用IPVS</p>
 * @method void setIPVS(boolean $IPVS) 设置<p>是否启用IPVS</p>
 * @method boolean getIsDualStack() 获取<p>集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。</p>
 * @method void setIsDualStack(boolean $IsDualStack) 设置<p>集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。</p>
 * @method boolean getIsNonStaticIpMode() 获取<p>集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。</p>
 * @method void setIsNonStaticIpMode(boolean $IsNonStaticIpMode) 设置<p>集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。</p>
 * @method string getKubeProxyMode() 获取<p>集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：<br>iptables模式：IPVS和KubeProxyMode都不设置<br>ipvs模式: 设置IPVS为true, KubeProxyMode不设置<br>ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf<br>使用ipvs-bpf的网络模式需要满足以下条件：</p><ol><li>集群版本必须为1.14及以上；</li><li>系统镜像必须是: Tencent Linux 2.4；</li></ol>
 * @method void setKubeProxyMode(string $KubeProxyMode) 设置<p>集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：<br>iptables模式：IPVS和KubeProxyMode都不设置<br>ipvs模式: 设置IPVS为true, KubeProxyMode不设置<br>ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf<br>使用ipvs-bpf的网络模式需要满足以下条件：</p><ol><li>集群版本必须为1.14及以上；</li><li>系统镜像必须是: Tencent Linux 2.4；</li></ol>
 * @method string getNetworkType() 获取<p>集群网络类型，默认为GR。</p><ul><li>GR: 全局路由</li><li>VPC-CNI: VPC-CNI模式</li><li>CiliumOverlay: CiliumOverlay模式</li></ul>
 * @method void setNetworkType(string $NetworkType) 设置<p>集群网络类型，默认为GR。</p><ul><li>GR: 全局路由</li><li>VPC-CNI: VPC-CNI模式</li><li>CiliumOverlay: CiliumOverlay模式</li></ul>
 * @method string getNodeNameType() 获取<p>集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）</p>
 * @method void setNodeNameType(string $NodeNameType) 设置<p>集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）</p>
 * @method boolean getQGPUShareEnable() 获取<p>是否开启QGPU共享</p>
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置<p>是否开启QGPU共享</p>
 * @method string getRuntimeVersion() 获取<p>运行时版本</p>
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置<p>运行时版本</p>
 * @method string getVpcCniType() 获取<p>区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写&quot;tke-route-eni&quot;，独立网卡模式填写&quot;tke-direct-eni&quot;，默认为共享网卡模式</p>
 * @method void setVpcCniType(string $VpcCniType) 设置<p>区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写&quot;tke-route-eni&quot;，独立网卡模式填写&quot;tke-direct-eni&quot;，默认为共享网卡模式</p>
 * @method boolean getIsHighAvailability() 获取<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行，默认为true</p>
 * @method void setIsHighAvailability(boolean $IsHighAvailability) 设置<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行，默认为true</p>
 * @method SecurityModeConfig getSecurityModeConfig() 获取<p>集群安全模式配置</p>
 * @method void setSecurityModeConfig(SecurityModeConfig $SecurityModeConfig) 设置<p>集群安全模式配置</p>
 */
class ClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var boolean <p>是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)</p>
     */
    public $AsEnabled;

    /**
     * @var boolean <p>是否开启审计开关</p>
     */
    public $AuditEnabled;

    /**
     * @var string <p>审计日志上传到的topic</p>
     */
    public $AuditLogTopicId;

    /**
     * @var string <p>审计日志上传到的logset日志集</p>
     */
    public $AuditLogsetId;

    /**
     * @var integer <p>自定义模式下的基础pod数量</p>
     */
    public $BasePodNumber;

    /**
     * @var string <p>启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP</p>
     */
    public $CiliumMode;

    /**
     * @var string <p>集群使用的runtime类型，包括&quot;docker&quot;和&quot;containerd&quot;两种类型，默认为&quot;docker&quot;</p>
     */
    public $ContainerRuntime;

    /**
     * @var boolean <p>是否启用 DataPlaneV2（cilium替代kube-proxy）</p>
     */
    public $DataPlaneV2;

    /**
     * @var boolean <p>是否启用集群删除保护</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>是否开节点podCIDR大小的自定义模式</p>
     */
    public $EnableCustomizedPodCIDR;

    /**
     * @var array <p>元数据拆分存储Etcd配置</p>
     */
    public $EtcdOverrideConfigs;

    /**
     * @var ClusterExtraArgs <p>集群自定义参数</p>
     */
    public $ExtraArgs;

    /**
     * @var boolean <p>是否启用IPVS</p>
     */
    public $IPVS;

    /**
     * @var boolean <p>集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。</p>
     */
    public $IsDualStack;

    /**
     * @var boolean <p>集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。</p>
     */
    public $IsNonStaticIpMode;

    /**
     * @var string <p>集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：<br>iptables模式：IPVS和KubeProxyMode都不设置<br>ipvs模式: 设置IPVS为true, KubeProxyMode不设置<br>ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf<br>使用ipvs-bpf的网络模式需要满足以下条件：</p><ol><li>集群版本必须为1.14及以上；</li><li>系统镜像必须是: Tencent Linux 2.4；</li></ol>
     */
    public $KubeProxyMode;

    /**
     * @var string <p>集群网络类型，默认为GR。</p><ul><li>GR: 全局路由</li><li>VPC-CNI: VPC-CNI模式</li><li>CiliumOverlay: CiliumOverlay模式</li></ul>
     */
    public $NetworkType;

    /**
     * @var string <p>集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）</p>
     */
    public $NodeNameType;

    /**
     * @var boolean <p>是否开启QGPU共享</p>
     */
    public $QGPUShareEnable;

    /**
     * @var string <p>运行时版本</p>
     */
    public $RuntimeVersion;

    /**
     * @var string <p>区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写&quot;tke-route-eni&quot;，独立网卡模式填写&quot;tke-direct-eni&quot;，默认为共享网卡模式</p>
     */
    public $VpcCniType;

    /**
     * @var boolean <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行，默认为true</p>
     */
    public $IsHighAvailability;

    /**
     * @var SecurityModeConfig <p>集群安全模式配置</p>
     */
    public $SecurityModeConfig;

    /**
     * @param boolean $AsEnabled <p>是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)</p>
     * @param boolean $AuditEnabled <p>是否开启审计开关</p>
     * @param string $AuditLogTopicId <p>审计日志上传到的topic</p>
     * @param string $AuditLogsetId <p>审计日志上传到的logset日志集</p>
     * @param integer $BasePodNumber <p>自定义模式下的基础pod数量</p>
     * @param string $CiliumMode <p>启用 CiliumMode 的模式，空值表示不启用，“clusterIP” 表示启用 Cilium 支持 ClusterIP</p>
     * @param string $ContainerRuntime <p>集群使用的runtime类型，包括&quot;docker&quot;和&quot;containerd&quot;两种类型，默认为&quot;docker&quot;</p>
     * @param boolean $DataPlaneV2 <p>是否启用 DataPlaneV2（cilium替代kube-proxy）</p>
     * @param boolean $DeletionProtection <p>是否启用集群删除保护</p>
     * @param boolean $EnableCustomizedPodCIDR <p>是否开节点podCIDR大小的自定义模式</p>
     * @param array $EtcdOverrideConfigs <p>元数据拆分存储Etcd配置</p>
     * @param ClusterExtraArgs $ExtraArgs <p>集群自定义参数</p>
     * @param boolean $IPVS <p>是否启用IPVS</p>
     * @param boolean $IsDualStack <p>集群VPC-CNI模式下是否是双栈集群，默认false，表明非双栈集群。</p>
     * @param boolean $IsNonStaticIpMode <p>集群VPC-CNI模式是否为非固定IP，默认: FALSE 固定IP。</p>
     * @param string $KubeProxyMode <p>集群的网络代理模型，目前tke集群支持的网络代理模式有三种：iptables,ipvs,ipvs-bpf，此参数仅在使用ipvs-bpf模式时使用，三种网络模式的参数设置关系如下：<br>iptables模式：IPVS和KubeProxyMode都不设置<br>ipvs模式: 设置IPVS为true, KubeProxyMode不设置<br>ipvs-bpf模式: 设置KubeProxyMode为kube-proxy-bpf<br>使用ipvs-bpf的网络模式需要满足以下条件：</p><ol><li>集群版本必须为1.14及以上；</li><li>系统镜像必须是: Tencent Linux 2.4；</li></ol>
     * @param string $NetworkType <p>集群网络类型，默认为GR。</p><ul><li>GR: 全局路由</li><li>VPC-CNI: VPC-CNI模式</li><li>CiliumOverlay: CiliumOverlay模式</li></ul>
     * @param string $NodeNameType <p>集群中节点NodeName类型（包括 hostname,lan-ip两种形式，默认为lan-ip。如果开启了hostname模式，创建节点时需要设置HostName参数，并且InstanceName需要和HostName一致）</p>
     * @param boolean $QGPUShareEnable <p>是否开启QGPU共享</p>
     * @param string $RuntimeVersion <p>运行时版本</p>
     * @param string $VpcCniType <p>区分共享网卡多IP模式和独立网卡模式，共享网卡多 IP 模式填写&quot;tke-route-eni&quot;，独立网卡模式填写&quot;tke-direct-eni&quot;，默认为共享网卡模式</p>
     * @param boolean $IsHighAvailability <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行，默认为true</p>
     * @param SecurityModeConfig $SecurityModeConfig <p>集群安全模式配置</p>
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

        if (array_key_exists("IsHighAvailability",$param) and $param["IsHighAvailability"] !== null) {
            $this->IsHighAvailability = $param["IsHighAvailability"];
        }

        if (array_key_exists("SecurityModeConfig",$param) and $param["SecurityModeConfig"] !== null) {
            $this->SecurityModeConfig = new SecurityModeConfig();
            $this->SecurityModeConfig->deserialize($param["SecurityModeConfig"]);
        }
    }
}
