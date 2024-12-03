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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器网络设置。
 *
 * @method integer getAccessType() 获取0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocolPorts() 获取容器端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolPorts(array $ProtocolPorts) 设置容器端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisableService() 获取是否创建 k8s service，默认为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableService(boolean $DisableService) 设置是否创建 k8s service，默认为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHeadlessService() 获取service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadlessService(boolean $HeadlessService) 设置service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowDeleteService() 获取当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowDeleteService(boolean $AllowDeleteService) 设置当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpenSessionAffinity() 获取开启SessionAffinity，true为开启，false为不开启，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenSessionAffinity(boolean $OpenSessionAffinity) 设置开启SessionAffinity，true为开启，false为不开启，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionAffinityTimeoutSeconds() 获取SessionAffinity会话时间，默认10800
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionAffinityTimeoutSeconds(integer $SessionAffinityTimeoutSeconds) 设置SessionAffinity会话时间，默认10800
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalTrafficStrategy() 获取外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalTrafficStrategy(string $ExternalTrafficStrategy) 设置外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalTrafficPolicy() 获取外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalTrafficPolicy(string $ExternalTrafficPolicy) 设置外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerProvisioner() 获取负载均衡提供者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerProvisioner(string $LoadBalancerProvisioner) 设置负载均衡提供者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancingType() 获取负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancingType(string $LoadBalancingType) 设置负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterIp() 获取k8s负载均衡内网vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIp(string $ClusterIp) 设置k8s负载均衡内网vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisableServiceInt() 获取禁用服务Int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableServiceInt(integer $DisableServiceInt) 设置禁用服务Int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOpenSessionAffinityInt() 获取开启SessionAffinity Int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenSessionAffinityInt(integer $OpenSessionAffinityInt) 设置开启SessionAffinity Int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeadlessServiceInt() 获取开启HeadlessService int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadlessServiceInt(integer $HeadlessServiceInt) 设置开启HeadlessService int记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancingIp() 获取负载均衡VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancingIp(string $LoadBalancingIp) 设置负载均衡VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerId() 获取负载均衡id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceSetting extends AbstractModel
{
    /**
     * @var integer 0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var array 容器端口映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolPorts;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var boolean 是否创建 k8s service，默认为 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableService;

    /**
     * @var boolean service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadlessService;

    /**
     * @var boolean 当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowDeleteService;

    /**
     * @var boolean 开启SessionAffinity，true为开启，false为不开启，默认为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenSessionAffinity;

    /**
     * @var integer SessionAffinity会话时间，默认10800
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionAffinityTimeoutSeconds;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalTrafficStrategy;

    /**
     * @var string 外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalTrafficPolicy;

    /**
     * @var string 负载均衡提供者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerProvisioner;

    /**
     * @var string 负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancingType;

    /**
     * @var string k8s负载均衡内网vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIp;

    /**
     * @var integer 禁用服务Int记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableServiceInt;

    /**
     * @var integer 开启SessionAffinity Int记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenSessionAffinityInt;

    /**
     * @var integer 开启HeadlessService int记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadlessServiceInt;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string VPC网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 负载均衡VIP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancingIp;

    /**
     * @var string 负载均衡id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerId;

    /**
     * @param integer $AccessType 0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtocolPorts 容器端口映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DisableService 是否创建 k8s service，默认为 false
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HeadlessService service 是否为 headless 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowDeleteService 当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpenSessionAffinity 开启SessionAffinity，true为开启，false为不开启，默认为false
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionAffinityTimeoutSeconds SessionAffinity会话时间，默认10800
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalTrafficStrategy 外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalTrafficPolicy 外部流量策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerProvisioner 负载均衡提供者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancingType 负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterIp k8s负载均衡内网vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisableServiceInt 禁用服务Int记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OpenSessionAffinityInt 开启SessionAffinity Int记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HeadlessServiceInt 开启HeadlessService int记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancingIp 负载均衡VIP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerId 负载均衡id
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ProtocolPorts",$param) and $param["ProtocolPorts"] !== null) {
            $this->ProtocolPorts = [];
            foreach ($param["ProtocolPorts"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPorts, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DisableService",$param) and $param["DisableService"] !== null) {
            $this->DisableService = $param["DisableService"];
        }

        if (array_key_exists("HeadlessService",$param) and $param["HeadlessService"] !== null) {
            $this->HeadlessService = $param["HeadlessService"];
        }

        if (array_key_exists("AllowDeleteService",$param) and $param["AllowDeleteService"] !== null) {
            $this->AllowDeleteService = $param["AllowDeleteService"];
        }

        if (array_key_exists("OpenSessionAffinity",$param) and $param["OpenSessionAffinity"] !== null) {
            $this->OpenSessionAffinity = $param["OpenSessionAffinity"];
        }

        if (array_key_exists("SessionAffinityTimeoutSeconds",$param) and $param["SessionAffinityTimeoutSeconds"] !== null) {
            $this->SessionAffinityTimeoutSeconds = $param["SessionAffinityTimeoutSeconds"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ExternalTrafficStrategy",$param) and $param["ExternalTrafficStrategy"] !== null) {
            $this->ExternalTrafficStrategy = $param["ExternalTrafficStrategy"];
        }

        if (array_key_exists("ExternalTrafficPolicy",$param) and $param["ExternalTrafficPolicy"] !== null) {
            $this->ExternalTrafficPolicy = $param["ExternalTrafficPolicy"];
        }

        if (array_key_exists("LoadBalancerProvisioner",$param) and $param["LoadBalancerProvisioner"] !== null) {
            $this->LoadBalancerProvisioner = $param["LoadBalancerProvisioner"];
        }

        if (array_key_exists("LoadBalancingType",$param) and $param["LoadBalancingType"] !== null) {
            $this->LoadBalancingType = $param["LoadBalancingType"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("DisableServiceInt",$param) and $param["DisableServiceInt"] !== null) {
            $this->DisableServiceInt = $param["DisableServiceInt"];
        }

        if (array_key_exists("OpenSessionAffinityInt",$param) and $param["OpenSessionAffinityInt"] !== null) {
            $this->OpenSessionAffinityInt = $param["OpenSessionAffinityInt"];
        }

        if (array_key_exists("HeadlessServiceInt",$param) and $param["HeadlessServiceInt"] !== null) {
            $this->HeadlessServiceInt = $param["HeadlessServiceInt"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LoadBalancingIp",$param) and $param["LoadBalancingIp"] !== null) {
            $this->LoadBalancingIp = $param["LoadBalancingIp"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }
    }
}
