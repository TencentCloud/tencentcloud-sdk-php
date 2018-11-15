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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getAutoScalingGroupName() 获取伸缩组名称
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置伸缩组名称
 * @method string getAutoScalingGroupStatus() 获取伸缩组状态
 * @method void setAutoScalingGroupStatus(string $AutoScalingGroupStatus) 设置伸缩组状态
 * @method string getCreatedTime() 获取创建时间，采用UTC标准计时
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，采用UTC标准计时
 * @method integer getDefaultCooldown() 获取默认冷却时间，单位秒
 * @method void setDefaultCooldown(integer $DefaultCooldown) 设置默认冷却时间，单位秒
 * @method integer getDesiredCapacity() 获取期望实例数
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置期望实例数
 * @method string getEnabledStatus() 获取启用状态，取值包括`ENABLED`和`DISABLED`
 * @method void setEnabledStatus(string $EnabledStatus) 设置启用状态，取值包括`ENABLED`和`DISABLED`
 * @method array getForwardLoadBalancerSet() 获取应用型负载均衡器列表
 * @method void setForwardLoadBalancerSet(array $ForwardLoadBalancerSet) 设置应用型负载均衡器列表
 * @method integer getInstanceCount() 获取实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量
 * @method integer getInServiceInstanceCount() 获取状态为`IN_SERVICE`实例的数量
 * @method void setInServiceInstanceCount(integer $InServiceInstanceCount) 设置状态为`IN_SERVICE`实例的数量
 * @method string getLaunchConfigurationId() 获取启动配置ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID
 * @method string getLaunchConfigurationName() 获取启动配置名称
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置启动配置名称
 * @method array getLoadBalancerIdSet() 获取传统型负载均衡器ID列表
 * @method void setLoadBalancerIdSet(array $LoadBalancerIdSet) 设置传统型负载均衡器ID列表
 * @method array getMaxSize() 获取最大实例数
 * @method void setMaxSize(array $MaxSize) 设置最大实例数
 * @method array getMinSize() 获取最小实例数
 * @method void setMinSize(array $MinSize) 设置最小实例数
 * @method array getProjectId() 获取项目ID
 * @method void setProjectId(array $ProjectId) 设置项目ID
 * @method array getSubnetIdSet() 获取子网ID列表
 * @method void setSubnetIdSet(array $SubnetIdSet) 设置子网ID列表
 * @method array getTerminationPolicySet() 获取销毁策略
 * @method void setTerminationPolicySet(array $TerminationPolicySet) 设置销毁策略
 * @method string getVpcId() 获取VPC标识
 * @method void setVpcId(string $VpcId) 设置VPC标识
 * @method array getZoneSet() 获取可用区列表
 * @method void setZoneSet(array $ZoneSet) 设置可用区列表
 * @method string getRetryPolicy() 获取重试策略
 * @method void setRetryPolicy(string $RetryPolicy) 设置重试策略
 */

/**
 *伸缩组
 */
class AutoScalingGroup extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string 伸缩组名称
     */
    public $AutoScalingGroupName;

    /**
     * @var string 伸缩组状态
     */
    public $AutoScalingGroupStatus;

    /**
     * @var string 创建时间，采用UTC标准计时
     */
    public $CreatedTime;

    /**
     * @var integer 默认冷却时间，单位秒
     */
    public $DefaultCooldown;

    /**
     * @var integer 期望实例数
     */
    public $DesiredCapacity;

    /**
     * @var string 启用状态，取值包括`ENABLED`和`DISABLED`
     */
    public $EnabledStatus;

    /**
     * @var array 应用型负载均衡器列表
     */
    public $ForwardLoadBalancerSet;

    /**
     * @var integer 实例数量
     */
    public $InstanceCount;

    /**
     * @var integer 状态为`IN_SERVICE`实例的数量
     */
    public $InServiceInstanceCount;

    /**
     * @var string 启动配置ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string 启动配置名称
     */
    public $LaunchConfigurationName;

    /**
     * @var array 传统型负载均衡器ID列表
     */
    public $LoadBalancerIdSet;

    /**
     * @var array 最大实例数
     */
    public $MaxSize;

    /**
     * @var array 最小实例数
     */
    public $MinSize;

    /**
     * @var array 项目ID
     */
    public $ProjectId;

    /**
     * @var array 子网ID列表
     */
    public $SubnetIdSet;

    /**
     * @var array 销毁策略
     */
    public $TerminationPolicySet;

    /**
     * @var string VPC标识
     */
    public $VpcId;

    /**
     * @var array 可用区列表
     */
    public $ZoneSet;

    /**
     * @var string 重试策略
     */
    public $RetryPolicy;
    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $AutoScalingGroupName 伸缩组名称
     * @param string $AutoScalingGroupStatus 伸缩组状态
     * @param string $CreatedTime 创建时间，采用UTC标准计时
     * @param integer $DefaultCooldown 默认冷却时间，单位秒
     * @param integer $DesiredCapacity 期望实例数
     * @param string $EnabledStatus 启用状态，取值包括`ENABLED`和`DISABLED`
     * @param array $ForwardLoadBalancerSet 应用型负载均衡器列表
     * @param integer $InstanceCount 实例数量
     * @param integer $InServiceInstanceCount 状态为`IN_SERVICE`实例的数量
     * @param string $LaunchConfigurationId 启动配置ID
     * @param string $LaunchConfigurationName 启动配置名称
     * @param array $LoadBalancerIdSet 传统型负载均衡器ID列表
     * @param array $MaxSize 最大实例数
     * @param array $MinSize 最小实例数
     * @param array $ProjectId 项目ID
     * @param array $SubnetIdSet 子网ID列表
     * @param array $TerminationPolicySet 销毁策略
     * @param string $VpcId VPC标识
     * @param array $ZoneSet 可用区列表
     * @param string $RetryPolicy 重试策略
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("AutoScalingGroupStatus",$param) and $param["AutoScalingGroupStatus"] !== null) {
            $this->AutoScalingGroupStatus = $param["AutoScalingGroupStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DefaultCooldown",$param) and $param["DefaultCooldown"] !== null) {
            $this->DefaultCooldown = $param["DefaultCooldown"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("EnabledStatus",$param) and $param["EnabledStatus"] !== null) {
            $this->EnabledStatus = $param["EnabledStatus"];
        }

        if (array_key_exists("ForwardLoadBalancerSet",$param) and $param["ForwardLoadBalancerSet"] !== null) {
            $this->ForwardLoadBalancerSet = [];
            foreach ($param["ForwardLoadBalancerSet"] as $key => $value){
                $obj = new ForwardLoadBalancer();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InServiceInstanceCount",$param) and $param["InServiceInstanceCount"] !== null) {
            $this->InServiceInstanceCount = $param["InServiceInstanceCount"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("LoadBalancerIdSet",$param) and $param["LoadBalancerIdSet"] !== null) {
            $this->LoadBalancerIdSet = $param["LoadBalancerIdSet"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubnetIdSet",$param) and $param["SubnetIdSet"] !== null) {
            $this->SubnetIdSet = $param["SubnetIdSet"];
        }

        if (array_key_exists("TerminationPolicySet",$param) and $param["TerminationPolicySet"] !== null) {
            $this->TerminationPolicySet = $param["TerminationPolicySet"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = $param["ZoneSet"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = $param["RetryPolicy"];
        }
    }
}
