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
 * 伸缩组
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getAutoScalingGroupName() 获取伸缩组名称
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置伸缩组名称
 * @method string getAutoScalingGroupStatus() 获取伸缩组当前状态。取值范围：<br>
<li>NORMAL：正常<br>
<li>CVM_ABNORMAL：启动配置异常<br>
<li>LB_ABNORMAL：负载均衡器异常<br>
<li>LB_LISTENER_ABNORMAL：负载均衡器监听器异常<br>
<li>LB_LOCATION_ABNORMAL：负载均衡器监听器转发配置异常<br>
<li>VPC_ABNORMAL：VPC网络异常<br>
<li>SUBNET_ABNORMAL：VPC子网异常<br>
<li>INSUFFICIENT_BALANCE：余额不足<br>
<li>LB_BACKEND_REGION_NOT_MATCH：CLB实例后端地域与AS服务所在地域不匹配<br>
<li>LB_BACKEND_VPC_NOT_MATCH：CLB实例VPC与伸缩组VPC不匹配
 * @method void setAutoScalingGroupStatus(string $AutoScalingGroupStatus) 设置伸缩组当前状态。取值范围：<br>
<li>NORMAL：正常<br>
<li>CVM_ABNORMAL：启动配置异常<br>
<li>LB_ABNORMAL：负载均衡器异常<br>
<li>LB_LISTENER_ABNORMAL：负载均衡器监听器异常<br>
<li>LB_LOCATION_ABNORMAL：负载均衡器监听器转发配置异常<br>
<li>VPC_ABNORMAL：VPC网络异常<br>
<li>SUBNET_ABNORMAL：VPC子网异常<br>
<li>INSUFFICIENT_BALANCE：余额不足<br>
<li>LB_BACKEND_REGION_NOT_MATCH：CLB实例后端地域与AS服务所在地域不匹配<br>
<li>LB_BACKEND_VPC_NOT_MATCH：CLB实例VPC与伸缩组VPC不匹配
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
 * @method integer getMaxSize() 获取最大实例数
 * @method void setMaxSize(integer $MaxSize) 设置最大实例数
 * @method integer getMinSize() 获取最小实例数
 * @method void setMinSize(integer $MinSize) 设置最小实例数
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
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
 * @method string getInActivityStatus() 获取伸缩组是否处于伸缩活动中，`IN_ACTIVITY`表示处于伸缩活动中，`NOT_IN_ACTIVITY`表示不处于伸缩活动中。
 * @method void setInActivityStatus(string $InActivityStatus) 设置伸缩组是否处于伸缩活动中，`IN_ACTIVITY`表示处于伸缩活动中，`NOT_IN_ACTIVITY`表示不处于伸缩活动中。
 * @method array getTags() 获取伸缩组标签列表
 * @method void setTags(array $Tags) 设置伸缩组标签列表
 * @method ServiceSettings getServiceSettings() 获取服务设置
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) 设置服务设置
 * @method integer getIpv6AddressCount() 获取实例具有IPv6地址数量的配置
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置实例具有IPv6地址数量的配置
 * @method string getMultiZoneSubnetPolicy() 获取多可用区/子网策略。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) 设置多可用区/子网策略。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。
 * @method string getHealthCheckType() 获取伸缩组实例健康检查类型，取值如下：<br><li>CVM：根据实例网络状态判断实例是否处于不健康状态，不健康的网络状态即发生实例 PING 不可达事件，详细判断标准可参考[实例健康检查](https://cloud.tencent.com/document/product/377/8553)<br><li>CLB：根据 CLB 的健康检查状态判断实例是否处于不健康状态，CLB健康检查原理可参考[健康检查](https://cloud.tencent.com/document/product/214/6097)
 * @method void setHealthCheckType(string $HealthCheckType) 设置伸缩组实例健康检查类型，取值如下：<br><li>CVM：根据实例网络状态判断实例是否处于不健康状态，不健康的网络状态即发生实例 PING 不可达事件，详细判断标准可参考[实例健康检查](https://cloud.tencent.com/document/product/377/8553)<br><li>CLB：根据 CLB 的健康检查状态判断实例是否处于不健康状态，CLB健康检查原理可参考[健康检查](https://cloud.tencent.com/document/product/214/6097)
 * @method integer getLoadBalancerHealthCheckGracePeriod() 获取CLB健康检查宽限期
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) 设置CLB健康检查宽限期
 * @method string getInstanceAllocationPolicy() 获取实例分配策略，取值包括 LAUNCH_CONFIGURATION 和 SPOT_MIXED。
<br><li> LAUNCH_CONFIGURATION，代表传统的按照启动配置模式。
<br><li> SPOT_MIXED，代表竞价混合模式。目前仅支持启动配置为按量计费模式时使用混合模式，混合模式下，伸缩组将根据设定扩容按量或竞价机型。使用混合模式时，关联的启动配置的计费类型不可被修改。
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) 设置实例分配策略，取值包括 LAUNCH_CONFIGURATION 和 SPOT_MIXED。
<br><li> LAUNCH_CONFIGURATION，代表传统的按照启动配置模式。
<br><li> SPOT_MIXED，代表竞价混合模式。目前仅支持启动配置为按量计费模式时使用混合模式，混合模式下，伸缩组将根据设定扩容按量或竞价机型。使用混合模式时，关联的启动配置的计费类型不可被修改。
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() 获取竞价混合模式下，各计费类型实例的分配策略。
仅当 InstanceAllocationPolicy 取 SPOT_MIXED 时才会返回有效值。
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) 设置竞价混合模式下，各计费类型实例的分配策略。
仅当 InstanceAllocationPolicy 取 SPOT_MIXED 时才会返回有效值。
 * @method boolean getCapacityRebalance() 获取容量重平衡功能，仅对伸缩组内的竞价实例有效。取值范围：
<br><li> TRUE，开启该功能，当伸缩组内的竞价实例即将被竞价实例服务自动回收前，AS 主动发起竞价实例销毁流程，如果有配置过缩容 hook，则销毁前 hook 会生效。销毁流程启动后，AS 会异步开启一个扩容活动，用于补齐期望实例数。
<br><li> FALSE，不开启该功能，则 AS 等待竞价实例被销毁后才会去扩容补齐伸缩组期望实例数。
 * @method void setCapacityRebalance(boolean $CapacityRebalance) 设置容量重平衡功能，仅对伸缩组内的竞价实例有效。取值范围：
<br><li> TRUE，开启该功能，当伸缩组内的竞价实例即将被竞价实例服务自动回收前，AS 主动发起竞价实例销毁流程，如果有配置过缩容 hook，则销毁前 hook 会生效。销毁流程启动后，AS 会异步开启一个扩容活动，用于补齐期望实例数。
<br><li> FALSE，不开启该功能，则 AS 等待竞价实例被销毁后才会去扩容补齐伸缩组期望实例数。
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
     * @var string 伸缩组当前状态。取值范围：<br>
<li>NORMAL：正常<br>
<li>CVM_ABNORMAL：启动配置异常<br>
<li>LB_ABNORMAL：负载均衡器异常<br>
<li>LB_LISTENER_ABNORMAL：负载均衡器监听器异常<br>
<li>LB_LOCATION_ABNORMAL：负载均衡器监听器转发配置异常<br>
<li>VPC_ABNORMAL：VPC网络异常<br>
<li>SUBNET_ABNORMAL：VPC子网异常<br>
<li>INSUFFICIENT_BALANCE：余额不足<br>
<li>LB_BACKEND_REGION_NOT_MATCH：CLB实例后端地域与AS服务所在地域不匹配<br>
<li>LB_BACKEND_VPC_NOT_MATCH：CLB实例VPC与伸缩组VPC不匹配
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
     * @var integer 最大实例数
     */
    public $MaxSize;

    /**
     * @var integer 最小实例数
     */
    public $MinSize;

    /**
     * @var integer 项目ID
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
     * @var string 伸缩组是否处于伸缩活动中，`IN_ACTIVITY`表示处于伸缩活动中，`NOT_IN_ACTIVITY`表示不处于伸缩活动中。
     */
    public $InActivityStatus;

    /**
     * @var array 伸缩组标签列表
     */
    public $Tags;

    /**
     * @var ServiceSettings 服务设置
     */
    public $ServiceSettings;

    /**
     * @var integer 实例具有IPv6地址数量的配置
     */
    public $Ipv6AddressCount;

    /**
     * @var string 多可用区/子网策略。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string 伸缩组实例健康检查类型，取值如下：<br><li>CVM：根据实例网络状态判断实例是否处于不健康状态，不健康的网络状态即发生实例 PING 不可达事件，详细判断标准可参考[实例健康检查](https://cloud.tencent.com/document/product/377/8553)<br><li>CLB：根据 CLB 的健康检查状态判断实例是否处于不健康状态，CLB健康检查原理可参考[健康检查](https://cloud.tencent.com/document/product/214/6097)
     */
    public $HealthCheckType;

    /**
     * @var integer CLB健康检查宽限期
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string 实例分配策略，取值包括 LAUNCH_CONFIGURATION 和 SPOT_MIXED。
<br><li> LAUNCH_CONFIGURATION，代表传统的按照启动配置模式。
<br><li> SPOT_MIXED，代表竞价混合模式。目前仅支持启动配置为按量计费模式时使用混合模式，混合模式下，伸缩组将根据设定扩容按量或竞价机型。使用混合模式时，关联的启动配置的计费类型不可被修改。
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy 竞价混合模式下，各计费类型实例的分配策略。
仅当 InstanceAllocationPolicy 取 SPOT_MIXED 时才会返回有效值。
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean 容量重平衡功能，仅对伸缩组内的竞价实例有效。取值范围：
<br><li> TRUE，开启该功能，当伸缩组内的竞价实例即将被竞价实例服务自动回收前，AS 主动发起竞价实例销毁流程，如果有配置过缩容 hook，则销毁前 hook 会生效。销毁流程启动后，AS 会异步开启一个扩容活动，用于补齐期望实例数。
<br><li> FALSE，不开启该功能，则 AS 等待竞价实例被销毁后才会去扩容补齐伸缩组期望实例数。
     */
    public $CapacityRebalance;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $AutoScalingGroupName 伸缩组名称
     * @param string $AutoScalingGroupStatus 伸缩组当前状态。取值范围：<br>
<li>NORMAL：正常<br>
<li>CVM_ABNORMAL：启动配置异常<br>
<li>LB_ABNORMAL：负载均衡器异常<br>
<li>LB_LISTENER_ABNORMAL：负载均衡器监听器异常<br>
<li>LB_LOCATION_ABNORMAL：负载均衡器监听器转发配置异常<br>
<li>VPC_ABNORMAL：VPC网络异常<br>
<li>SUBNET_ABNORMAL：VPC子网异常<br>
<li>INSUFFICIENT_BALANCE：余额不足<br>
<li>LB_BACKEND_REGION_NOT_MATCH：CLB实例后端地域与AS服务所在地域不匹配<br>
<li>LB_BACKEND_VPC_NOT_MATCH：CLB实例VPC与伸缩组VPC不匹配
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
     * @param integer $MaxSize 最大实例数
     * @param integer $MinSize 最小实例数
     * @param integer $ProjectId 项目ID
     * @param array $SubnetIdSet 子网ID列表
     * @param array $TerminationPolicySet 销毁策略
     * @param string $VpcId VPC标识
     * @param array $ZoneSet 可用区列表
     * @param string $RetryPolicy 重试策略
     * @param string $InActivityStatus 伸缩组是否处于伸缩活动中，`IN_ACTIVITY`表示处于伸缩活动中，`NOT_IN_ACTIVITY`表示不处于伸缩活动中。
     * @param array $Tags 伸缩组标签列表
     * @param ServiceSettings $ServiceSettings 服务设置
     * @param integer $Ipv6AddressCount 实例具有IPv6地址数量的配置
     * @param string $MultiZoneSubnetPolicy 多可用区/子网策略。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。
     * @param string $HealthCheckType 伸缩组实例健康检查类型，取值如下：<br><li>CVM：根据实例网络状态判断实例是否处于不健康状态，不健康的网络状态即发生实例 PING 不可达事件，详细判断标准可参考[实例健康检查](https://cloud.tencent.com/document/product/377/8553)<br><li>CLB：根据 CLB 的健康检查状态判断实例是否处于不健康状态，CLB健康检查原理可参考[健康检查](https://cloud.tencent.com/document/product/214/6097)
     * @param integer $LoadBalancerHealthCheckGracePeriod CLB健康检查宽限期
     * @param string $InstanceAllocationPolicy 实例分配策略，取值包括 LAUNCH_CONFIGURATION 和 SPOT_MIXED。
<br><li> LAUNCH_CONFIGURATION，代表传统的按照启动配置模式。
<br><li> SPOT_MIXED，代表竞价混合模式。目前仅支持启动配置为按量计费模式时使用混合模式，混合模式下，伸缩组将根据设定扩容按量或竞价机型。使用混合模式时，关联的启动配置的计费类型不可被修改。
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy 竞价混合模式下，各计费类型实例的分配策略。
仅当 InstanceAllocationPolicy 取 SPOT_MIXED 时才会返回有效值。
     * @param boolean $CapacityRebalance 容量重平衡功能，仅对伸缩组内的竞价实例有效。取值范围：
<br><li> TRUE，开启该功能，当伸缩组内的竞价实例即将被竞价实例服务自动回收前，AS 主动发起竞价实例销毁流程，如果有配置过缩容 hook，则销毁前 hook 会生效。销毁流程启动后，AS 会异步开启一个扩容活动，用于补齐期望实例数。
<br><li> FALSE，不开启该功能，则 AS 等待竞价实例被销毁后才会去扩容补齐伸缩组期望实例数。
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

        if (array_key_exists("InActivityStatus",$param) and $param["InActivityStatus"] !== null) {
            $this->InActivityStatus = $param["InActivityStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ServiceSettings",$param) and $param["ServiceSettings"] !== null) {
            $this->ServiceSettings = new ServiceSettings();
            $this->ServiceSettings->deserialize($param["ServiceSettings"]);
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }

        if (array_key_exists("MultiZoneSubnetPolicy",$param) and $param["MultiZoneSubnetPolicy"] !== null) {
            $this->MultiZoneSubnetPolicy = $param["MultiZoneSubnetPolicy"];
        }

        if (array_key_exists("HealthCheckType",$param) and $param["HealthCheckType"] !== null) {
            $this->HealthCheckType = $param["HealthCheckType"];
        }

        if (array_key_exists("LoadBalancerHealthCheckGracePeriod",$param) and $param["LoadBalancerHealthCheckGracePeriod"] !== null) {
            $this->LoadBalancerHealthCheckGracePeriod = $param["LoadBalancerHealthCheckGracePeriod"];
        }

        if (array_key_exists("InstanceAllocationPolicy",$param) and $param["InstanceAllocationPolicy"] !== null) {
            $this->InstanceAllocationPolicy = $param["InstanceAllocationPolicy"];
        }

        if (array_key_exists("SpotMixedAllocationPolicy",$param) and $param["SpotMixedAllocationPolicy"] !== null) {
            $this->SpotMixedAllocationPolicy = new SpotMixedAllocationPolicy();
            $this->SpotMixedAllocationPolicy->deserialize($param["SpotMixedAllocationPolicy"]);
        }

        if (array_key_exists("CapacityRebalance",$param) and $param["CapacityRebalance"] !== null) {
            $this->CapacityRebalance = $param["CapacityRebalance"];
        }
    }
}
