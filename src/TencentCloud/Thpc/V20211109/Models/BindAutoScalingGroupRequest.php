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
namespace TencentCloud\Thpc\V20211109\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindAutoScalingGroup请求参数结构体
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method string getLaunchConfigurationId() 获取弹性伸缩启动配置ID。
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置弹性伸缩启动配置ID。
 * @method string getAutoScalingGroupId() 获取弹性伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置弹性伸缩组ID。
 * @method string getQueueName() 获取队列名称。
 * @method void setQueueName(string $QueueName) 设置队列名称。
 * @method integer getExpansionBusyTime() 获取任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
 * @method void setExpansionBusyTime(integer $ExpansionBusyTime) 设置任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
 * @method integer getShrinkIdleTime() 获取节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
 * @method void setShrinkIdleTime(integer $ShrinkIdleTime) 设置节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
 * @method boolean getEnableAutoExpansion() 获取是否开启自动扩容，默认值true。
 * @method void setEnableAutoExpansion(boolean $EnableAutoExpansion) 设置是否开启自动扩容，默认值true。
 * @method boolean getEnableAutoShrink() 获取是否开启自动缩容，默认值true。
 * @method void setEnableAutoShrink(boolean $EnableAutoShrink) 设置是否开启自动缩容，默认值true。
 * @method boolean getDryRun() 获取是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
 */
class BindAutoScalingGroupRequest extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var string 弹性伸缩启动配置ID。
     */
    public $LaunchConfigurationId;

    /**
     * @var string 弹性伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 队列名称。
     */
    public $QueueName;

    /**
     * @var integer 任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
     */
    public $ExpansionBusyTime;

    /**
     * @var integer 节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
     */
    public $ShrinkIdleTime;

    /**
     * @var boolean 是否开启自动扩容，默认值true。
     */
    public $EnableAutoExpansion;

    /**
     * @var boolean 是否开启自动缩容，默认值true。
     */
    public $EnableAutoShrink;

    /**
     * @var boolean 是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
     */
    public $DryRun;

    /**
     * @param string $ClusterId 集群ID。
     * @param string $LaunchConfigurationId 弹性伸缩启动配置ID。
     * @param string $AutoScalingGroupId 弹性伸缩组ID。
     * @param string $QueueName 队列名称。
     * @param integer $ExpansionBusyTime 任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
     * @param integer $ShrinkIdleTime 节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
     * @param boolean $EnableAutoExpansion 是否开启自动扩容，默认值true。
     * @param boolean $EnableAutoShrink 是否开启自动缩容，默认值true。
     * @param boolean $DryRun 是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ExpansionBusyTime",$param) and $param["ExpansionBusyTime"] !== null) {
            $this->ExpansionBusyTime = $param["ExpansionBusyTime"];
        }

        if (array_key_exists("ShrinkIdleTime",$param) and $param["ShrinkIdleTime"] !== null) {
            $this->ShrinkIdleTime = $param["ShrinkIdleTime"];
        }

        if (array_key_exists("EnableAutoExpansion",$param) and $param["EnableAutoExpansion"] !== null) {
            $this->EnableAutoExpansion = $param["EnableAutoExpansion"];
        }

        if (array_key_exists("EnableAutoShrink",$param) and $param["EnableAutoShrink"] !== null) {
            $this->EnableAutoShrink = $param["EnableAutoShrink"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
