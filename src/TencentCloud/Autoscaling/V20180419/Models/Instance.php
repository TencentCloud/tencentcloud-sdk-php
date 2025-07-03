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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getLaunchConfigurationId() 获取启动配置ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID
 * @method string getLaunchConfigurationName() 获取启动配置名称
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置启动配置名称
 * @method string getLifeCycleState() 获取生命周期状态，取值如下：
<li>IN_SERVICE：运行中</li>
<li>CREATING：创建中</li>
<li>CREATION_FAILED：创建失败</li>
<li>TERMINATING：中止中</li>
<li>TERMINATION_FAILED：中止失败</li>
<li>ATTACHING：绑定中</li>
<li>ATTACH_FAILED：绑定失败</li>
<li>DETACHING：解绑中</li>
<li>DETACH_FAILED：解绑失败</li>
<li>ATTACHING_LB：绑定LB中</li>
<li>DETACHING_LB：解绑LB中</li>
<li>MODIFYING_LB：修改LB中</li>
<li>STARTING：开机中</li>
<li>START_FAILED：开机失败</li>
<li>STOPPING：关机中</li>
<li>STOP_FAILED：关机失败</li>
<li>STOPPED：已关机</li>
<li>IN_LAUNCHING_HOOK：扩容生命周期挂钩中</li>
<li>IN_TERMINATING_HOOK：缩容生命周期挂钩中</li>
 * @method void setLifeCycleState(string $LifeCycleState) 设置生命周期状态，取值如下：
<li>IN_SERVICE：运行中</li>
<li>CREATING：创建中</li>
<li>CREATION_FAILED：创建失败</li>
<li>TERMINATING：中止中</li>
<li>TERMINATION_FAILED：中止失败</li>
<li>ATTACHING：绑定中</li>
<li>ATTACH_FAILED：绑定失败</li>
<li>DETACHING：解绑中</li>
<li>DETACH_FAILED：解绑失败</li>
<li>ATTACHING_LB：绑定LB中</li>
<li>DETACHING_LB：解绑LB中</li>
<li>MODIFYING_LB：修改LB中</li>
<li>STARTING：开机中</li>
<li>START_FAILED：开机失败</li>
<li>STOPPING：关机中</li>
<li>STOP_FAILED：关机失败</li>
<li>STOPPED：已关机</li>
<li>IN_LAUNCHING_HOOK：扩容生命周期挂钩中</li>
<li>IN_TERMINATING_HOOK：缩容生命周期挂钩中</li>
 * @method string getHealthStatus() 获取健康状态，取值范围如下：
<li>HEALTHY：实例处于健康状态</li>
<li>UNHEALTHY：实例 ping 不可达</li>
<li>CLB_UNHEALTHY：CLB 监听的实例端口不健康</li>
 * @method void setHealthStatus(string $HealthStatus) 设置健康状态，取值范围如下：
<li>HEALTHY：实例处于健康状态</li>
<li>UNHEALTHY：实例 ping 不可达</li>
<li>CLB_UNHEALTHY：CLB 监听的实例端口不健康</li>
 * @method boolean getProtectedFromScaleIn() 获取是否加入缩容保护
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) 设置是否加入缩容保护
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getCreationType() 获取创建类型，取值包括AUTO_CREATION, MANUAL_ATTACHING。
 * @method void setCreationType(string $CreationType) 设置创建类型，取值包括AUTO_CREATION, MANUAL_ATTACHING。
 * @method string getAddTime() 获取实例加入时间，按照ISO8601标准表示，并且使用UTC时间。
 * @method void setAddTime(string $AddTime) 设置实例加入时间，按照ISO8601标准表示，并且使用UTC时间。
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method integer getVersionNumber() 获取版本号
 * @method void setVersionNumber(integer $VersionNumber) 设置版本号
 * @method string getAutoScalingGroupName() 获取伸缩组名称
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置伸缩组名称
 * @method string getWarmupStatus() 获取预热状态，取值如下：
<li>WAITING_ENTER_WARMUP：等待进入预热</li>
<li>NO_NEED_WARMUP：无需预热</li>
<li>IN_WARMUP：预热中</li>
<li>AFTER_WARMUP：完成预热</li>
 * @method void setWarmupStatus(string $WarmupStatus) 设置预热状态，取值如下：
<li>WAITING_ENTER_WARMUP：等待进入预热</li>
<li>NO_NEED_WARMUP：无需预热</li>
<li>IN_WARMUP：预热中</li>
<li>AFTER_WARMUP：完成预热</li>
 * @method array getDisasterRecoverGroupIds() 获取置放群组id，仅支持指定一个。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置置放群组id，仅支持指定一个。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string 启动配置ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string 启动配置名称
     */
    public $LaunchConfigurationName;

    /**
     * @var string 生命周期状态，取值如下：
<li>IN_SERVICE：运行中</li>
<li>CREATING：创建中</li>
<li>CREATION_FAILED：创建失败</li>
<li>TERMINATING：中止中</li>
<li>TERMINATION_FAILED：中止失败</li>
<li>ATTACHING：绑定中</li>
<li>ATTACH_FAILED：绑定失败</li>
<li>DETACHING：解绑中</li>
<li>DETACH_FAILED：解绑失败</li>
<li>ATTACHING_LB：绑定LB中</li>
<li>DETACHING_LB：解绑LB中</li>
<li>MODIFYING_LB：修改LB中</li>
<li>STARTING：开机中</li>
<li>START_FAILED：开机失败</li>
<li>STOPPING：关机中</li>
<li>STOP_FAILED：关机失败</li>
<li>STOPPED：已关机</li>
<li>IN_LAUNCHING_HOOK：扩容生命周期挂钩中</li>
<li>IN_TERMINATING_HOOK：缩容生命周期挂钩中</li>
     */
    public $LifeCycleState;

    /**
     * @var string 健康状态，取值范围如下：
<li>HEALTHY：实例处于健康状态</li>
<li>UNHEALTHY：实例 ping 不可达</li>
<li>CLB_UNHEALTHY：CLB 监听的实例端口不健康</li>
     */
    public $HealthStatus;

    /**
     * @var boolean 是否加入缩容保护
     */
    public $ProtectedFromScaleIn;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 创建类型，取值包括AUTO_CREATION, MANUAL_ATTACHING。
     */
    public $CreationType;

    /**
     * @var string 实例加入时间，按照ISO8601标准表示，并且使用UTC时间。
     */
    public $AddTime;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 版本号
     */
    public $VersionNumber;

    /**
     * @var string 伸缩组名称
     */
    public $AutoScalingGroupName;

    /**
     * @var string 预热状态，取值如下：
<li>WAITING_ENTER_WARMUP：等待进入预热</li>
<li>NO_NEED_WARMUP：无需预热</li>
<li>IN_WARMUP：预热中</li>
<li>AFTER_WARMUP：完成预热</li>
     */
    public $WarmupStatus;

    /**
     * @var array 置放群组id，仅支持指定一个。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $LaunchConfigurationId 启动配置ID
     * @param string $LaunchConfigurationName 启动配置名称
     * @param string $LifeCycleState 生命周期状态，取值如下：
<li>IN_SERVICE：运行中</li>
<li>CREATING：创建中</li>
<li>CREATION_FAILED：创建失败</li>
<li>TERMINATING：中止中</li>
<li>TERMINATION_FAILED：中止失败</li>
<li>ATTACHING：绑定中</li>
<li>ATTACH_FAILED：绑定失败</li>
<li>DETACHING：解绑中</li>
<li>DETACH_FAILED：解绑失败</li>
<li>ATTACHING_LB：绑定LB中</li>
<li>DETACHING_LB：解绑LB中</li>
<li>MODIFYING_LB：修改LB中</li>
<li>STARTING：开机中</li>
<li>START_FAILED：开机失败</li>
<li>STOPPING：关机中</li>
<li>STOP_FAILED：关机失败</li>
<li>STOPPED：已关机</li>
<li>IN_LAUNCHING_HOOK：扩容生命周期挂钩中</li>
<li>IN_TERMINATING_HOOK：缩容生命周期挂钩中</li>
     * @param string $HealthStatus 健康状态，取值范围如下：
<li>HEALTHY：实例处于健康状态</li>
<li>UNHEALTHY：实例 ping 不可达</li>
<li>CLB_UNHEALTHY：CLB 监听的实例端口不健康</li>
     * @param boolean $ProtectedFromScaleIn 是否加入缩容保护
     * @param string $Zone 可用区
     * @param string $CreationType 创建类型，取值包括AUTO_CREATION, MANUAL_ATTACHING。
     * @param string $AddTime 实例加入时间，按照ISO8601标准表示，并且使用UTC时间。
     * @param string $InstanceType 实例类型
     * @param integer $VersionNumber 版本号
     * @param string $AutoScalingGroupName 伸缩组名称
     * @param string $WarmupStatus 预热状态，取值如下：
<li>WAITING_ENTER_WARMUP：等待进入预热</li>
<li>NO_NEED_WARMUP：无需预热</li>
<li>IN_WARMUP：预热中</li>
<li>AFTER_WARMUP：完成预热</li>
     * @param array $DisasterRecoverGroupIds 置放群组id，仅支持指定一个。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ProtectedFromScaleIn",$param) and $param["ProtectedFromScaleIn"] !== null) {
            $this->ProtectedFromScaleIn = $param["ProtectedFromScaleIn"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreationType",$param) and $param["CreationType"] !== null) {
            $this->CreationType = $param["CreationType"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("WarmupStatus",$param) and $param["WarmupStatus"] !== null) {
            $this->WarmupStatus = $param["WarmupStatus"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }
    }
}
