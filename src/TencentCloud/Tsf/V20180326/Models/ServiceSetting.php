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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器网络设置。
 *
 * @method integer getAccessType() 获取<p>0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问</p>
 * @method void setAccessType(integer $AccessType) 设置<p>0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问</p>
 * @method array getProtocolPorts() 获取<p>容器端口映射</p>
 * @method void setProtocolPorts(array $ProtocolPorts) 设置<p>容器端口映射</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method boolean getDisableService() 获取<p>是否创建 k8s service，默认为 false</p>
 * @method void setDisableService(boolean $DisableService) 设置<p>是否创建 k8s service，默认为 false</p>
 * @method boolean getHeadlessService() 获取<p>service 是否为 headless 类型</p>
 * @method void setHeadlessService(boolean $HeadlessService) 设置<p>service 是否为 headless 类型</p>
 * @method boolean getAllowDeleteService() 获取<p>当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用</p>
 * @method void setAllowDeleteService(boolean $AllowDeleteService) 设置<p>当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用</p>
 * @method boolean getOpenSessionAffinity() 获取<p>开启SessionAffinity，true为开启，false为不开启，默认为false</p>
 * @method void setOpenSessionAffinity(boolean $OpenSessionAffinity) 设置<p>开启SessionAffinity，true为开启，false为不开启，默认为false</p>
 * @method integer getSessionAffinityTimeoutSeconds() 获取<p>SessionAffinity会话时间，默认10800</p>
 * @method void setSessionAffinityTimeoutSeconds(integer $SessionAffinityTimeoutSeconds) 设置<p>SessionAffinity会话时间，默认10800</p>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getExternalTrafficStrategy() 获取<p>外部流量策略</p>
 * @method void setExternalTrafficStrategy(string $ExternalTrafficStrategy) 设置<p>外部流量策略</p>
 * @method string getExternalTrafficPolicy() 获取<p>外部流量策略</p>
 * @method void setExternalTrafficPolicy(string $ExternalTrafficPolicy) 设置<p>外部流量策略</p>
 * @method string getLoadBalancerProvisioner() 获取<p>负载均衡提供者</p>
 * @method void setLoadBalancerProvisioner(string $LoadBalancerProvisioner) 设置<p>负载均衡提供者</p>
 * @method string getLoadBalancingType() 获取<p>负载均衡类型，Intranet表示内网，Internet表示外网</p>
 * @method void setLoadBalancingType(string $LoadBalancingType) 设置<p>负载均衡类型，Intranet表示内网，Internet表示外网</p>
 * @method string getClusterIp() 获取<p>k8s负载均衡内网vip</p>
 * @method void setClusterIp(string $ClusterIp) 设置<p>k8s负载均衡内网vip</p>
 * @method integer getDisableServiceInt() 获取<p>禁用服务Int记录</p>
 * @method void setDisableServiceInt(integer $DisableServiceInt) 设置<p>禁用服务Int记录</p>
 * @method integer getOpenSessionAffinityInt() 获取<p>开启SessionAffinity Int记录</p>
 * @method void setOpenSessionAffinityInt(integer $OpenSessionAffinityInt) 设置<p>开启SessionAffinity Int记录</p>
 * @method integer getHeadlessServiceInt() 获取<p>开启HeadlessService int记录</p>
 * @method void setHeadlessServiceInt(integer $HeadlessServiceInt) 设置<p>开启HeadlessService int记录</p>
 * @method string getName() 获取<p>服务名称</p>
 * @method void setName(string $Name) 设置<p>服务名称</p>
 * @method string getVpcId() 获取<p>VPC网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID</p>
 * @method string getLoadBalancingIp() 获取<p>负载均衡VIP</p>
 * @method void setLoadBalancingIp(string $LoadBalancingIp) 设置<p>负载均衡VIP</p>
 * @method string getLoadBalancerId() 获取<p>负载均衡id</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡id</p>
 * @method string getExistingLoadBalancerId() 获取<p>已存在的负载均衡id</p>
 * @method void setExistingLoadBalancerId(string $ExistingLoadBalancerId) 设置<p>已存在的负载均衡id</p>
 * @method boolean getEnableGlobalService() 获取<p>是否为全局服务（仅TCS环境使用）</p>
 * @method void setEnableGlobalService(boolean $EnableGlobalService) 设置<p>是否为全局服务（仅TCS环境使用）</p>
 */
class ServiceSetting extends AbstractModel
{
    /**
     * @var integer <p>0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问</p>
     */
    public $AccessType;

    /**
     * @var array <p>容器端口映射</p>
     */
    public $ProtocolPorts;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var boolean <p>是否创建 k8s service，默认为 false</p>
     */
    public $DisableService;

    /**
     * @var boolean <p>service 是否为 headless 类型</p>
     */
    public $HeadlessService;

    /**
     * @var boolean <p>当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用</p>
     */
    public $AllowDeleteService;

    /**
     * @var boolean <p>开启SessionAffinity，true为开启，false为不开启，默认为false</p>
     */
    public $OpenSessionAffinity;

    /**
     * @var integer <p>SessionAffinity会话时间，默认10800</p>
     */
    public $SessionAffinityTimeoutSeconds;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>外部流量策略</p>
     */
    public $ExternalTrafficStrategy;

    /**
     * @var string <p>外部流量策略</p>
     */
    public $ExternalTrafficPolicy;

    /**
     * @var string <p>负载均衡提供者</p>
     */
    public $LoadBalancerProvisioner;

    /**
     * @var string <p>负载均衡类型，Intranet表示内网，Internet表示外网</p>
     */
    public $LoadBalancingType;

    /**
     * @var string <p>k8s负载均衡内网vip</p>
     */
    public $ClusterIp;

    /**
     * @var integer <p>禁用服务Int记录</p>
     */
    public $DisableServiceInt;

    /**
     * @var integer <p>开启SessionAffinity Int记录</p>
     */
    public $OpenSessionAffinityInt;

    /**
     * @var integer <p>开启HeadlessService int记录</p>
     */
    public $HeadlessServiceInt;

    /**
     * @var string <p>服务名称</p>
     */
    public $Name;

    /**
     * @var string <p>VPC网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>负载均衡VIP</p>
     */
    public $LoadBalancingIp;

    /**
     * @var string <p>负载均衡id</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>已存在的负载均衡id</p>
     */
    public $ExistingLoadBalancerId;

    /**
     * @var boolean <p>是否为全局服务（仅TCS环境使用）</p>
     */
    public $EnableGlobalService;

    /**
     * @param integer $AccessType <p>0:公网, 1:集群内访问, 2：NodePort, 3: VPC 内网访问</p>
     * @param array $ProtocolPorts <p>容器端口映射</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param boolean $DisableService <p>是否创建 k8s service，默认为 false</p>
     * @param boolean $HeadlessService <p>service 是否为 headless 类型</p>
     * @param boolean $AllowDeleteService <p>当为 true 且 DisableService 也为 true 时，会删除之前创建的 service，请小心使用</p>
     * @param boolean $OpenSessionAffinity <p>开启SessionAffinity，true为开启，false为不开启，默认为false</p>
     * @param integer $SessionAffinityTimeoutSeconds <p>SessionAffinity会话时间，默认10800</p>
     * @param string $ServiceName <p>服务名称</p>
     * @param string $ExternalTrafficStrategy <p>外部流量策略</p>
     * @param string $ExternalTrafficPolicy <p>外部流量策略</p>
     * @param string $LoadBalancerProvisioner <p>负载均衡提供者</p>
     * @param string $LoadBalancingType <p>负载均衡类型，Intranet表示内网，Internet表示外网</p>
     * @param string $ClusterIp <p>k8s负载均衡内网vip</p>
     * @param integer $DisableServiceInt <p>禁用服务Int记录</p>
     * @param integer $OpenSessionAffinityInt <p>开启SessionAffinity Int记录</p>
     * @param integer $HeadlessServiceInt <p>开启HeadlessService int记录</p>
     * @param string $Name <p>服务名称</p>
     * @param string $VpcId <p>VPC网络ID</p>
     * @param string $LoadBalancingIp <p>负载均衡VIP</p>
     * @param string $LoadBalancerId <p>负载均衡id</p>
     * @param string $ExistingLoadBalancerId <p>已存在的负载均衡id</p>
     * @param boolean $EnableGlobalService <p>是否为全局服务（仅TCS环境使用）</p>
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

        if (array_key_exists("ExistingLoadBalancerId",$param) and $param["ExistingLoadBalancerId"] !== null) {
            $this->ExistingLoadBalancerId = $param["ExistingLoadBalancerId"];
        }

        if (array_key_exists("EnableGlobalService",$param) and $param["EnableGlobalService"] !== null) {
            $this->EnableGlobalService = $param["EnableGlobalService"];
        }
    }
}
