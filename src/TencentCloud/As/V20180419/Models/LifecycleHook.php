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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期挂钩
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩ID
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩ID
 * @method string getLifecycleHookName() 获取生命周期挂钩名称
 * @method void setLifecycleHookName(string $LifecycleHookName) 设置生命周期挂钩名称
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getDefaultResult() 获取定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
- CONTINUE: 默认值，表示继续执行扩缩容活动
- ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动
 * @method void setDefaultResult(string $DefaultResult) 设置定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
- CONTINUE: 默认值，表示继续执行扩缩容活动
- ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动
 * @method integer getHeartbeatTimeout() 获取生命周期挂钩超时等待时间（以秒为单位），范围从 30 到 7200 秒。
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置生命周期挂钩超时等待时间（以秒为单位），范围从 30 到 7200 秒。
 * @method string getLifecycleTransition() 获取生命周期挂钩场景，取值范围如下:
- INSTANCE_LAUNCHING: 扩容生命周期挂钩
- INSTANCE_TERMINATING: 缩容生命周期挂钩
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置生命周期挂钩场景，取值范围如下:
- INSTANCE_LAUNCHING: 扩容生命周期挂钩
- INSTANCE_TERMINATING: 缩容生命周期挂钩
 * @method string getNotificationMetadata() 获取通知目标的附加信息
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置通知目标的附加信息
 * @method string getCreatedTime() 获取创建时间，采用 UTC 标准计时
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，采用 UTC 标准计时
 * @method NotificationTarget getNotificationTarget() 获取通知目标
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置通知目标
 * @method string getLifecycleTransitionType() 获取进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) 设置进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
 * @method LifecycleCommand getLifecycleCommand() 获取远程命令执行对象
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) 设置远程命令执行对象
 */
class LifecycleHook extends AbstractModel
{
    /**
     * @var string 生命周期挂钩ID
     */
    public $LifecycleHookId;

    /**
     * @var string 生命周期挂钩名称
     */
    public $LifecycleHookName;

    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
- CONTINUE: 默认值，表示继续执行扩缩容活动
- ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动
     */
    public $DefaultResult;

    /**
     * @var integer 生命周期挂钩超时等待时间（以秒为单位），范围从 30 到 7200 秒。
     */
    public $HeartbeatTimeout;

    /**
     * @var string 生命周期挂钩场景，取值范围如下:
- INSTANCE_LAUNCHING: 扩容生命周期挂钩
- INSTANCE_TERMINATING: 缩容生命周期挂钩
     */
    public $LifecycleTransition;

    /**
     * @var string 通知目标的附加信息
     */
    public $NotificationMetadata;

    /**
     * @var string 创建时间，采用 UTC 标准计时
     */
    public $CreatedTime;

    /**
     * @var NotificationTarget 通知目标
     */
    public $NotificationTarget;

    /**
     * @var string 进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand 远程命令执行对象
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId 生命周期挂钩ID
     * @param string $LifecycleHookName 生命周期挂钩名称
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $DefaultResult 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
- CONTINUE: 默认值，表示继续执行扩缩容活动
- ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动
     * @param integer $HeartbeatTimeout 生命周期挂钩超时等待时间（以秒为单位），范围从 30 到 7200 秒。
     * @param string $LifecycleTransition 生命周期挂钩场景，取值范围如下:
- INSTANCE_LAUNCHING: 扩容生命周期挂钩
- INSTANCE_TERMINATING: 缩容生命周期挂钩
     * @param string $NotificationMetadata 通知目标的附加信息
     * @param string $CreatedTime 创建时间，采用 UTC 标准计时
     * @param NotificationTarget $NotificationTarget 通知目标
     * @param string $LifecycleTransitionType 进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
     * @param LifecycleCommand $LifecycleCommand 远程命令执行对象
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }

        if (array_key_exists("LifecycleHookName",$param) and $param["LifecycleHookName"] !== null) {
            $this->LifecycleHookName = $param["LifecycleHookName"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("DefaultResult",$param) and $param["DefaultResult"] !== null) {
            $this->DefaultResult = $param["DefaultResult"];
        }

        if (array_key_exists("HeartbeatTimeout",$param) and $param["HeartbeatTimeout"] !== null) {
            $this->HeartbeatTimeout = $param["HeartbeatTimeout"];
        }

        if (array_key_exists("LifecycleTransition",$param) and $param["LifecycleTransition"] !== null) {
            $this->LifecycleTransition = $param["LifecycleTransition"];
        }

        if (array_key_exists("NotificationMetadata",$param) and $param["NotificationMetadata"] !== null) {
            $this->NotificationMetadata = $param["NotificationMetadata"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = new NotificationTarget();
            $this->NotificationTarget->deserialize($param["NotificationTarget"]);
        }

        if (array_key_exists("LifecycleTransitionType",$param) and $param["LifecycleTransitionType"] !== null) {
            $this->LifecycleTransitionType = $param["LifecycleTransitionType"];
        }

        if (array_key_exists("LifecycleCommand",$param) and $param["LifecycleCommand"] !== null) {
            $this->LifecycleCommand = new LifecycleCommand();
            $this->LifecycleCommand->deserialize($param["LifecycleCommand"]);
        }
    }
}
