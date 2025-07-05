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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLifecycleHook请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method string getLifecycleHookName() 获取生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字节。
 * @method void setLifecycleHookName(string $LifecycleHookName) 设置生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字节。
 * @method string getLifecycleTransition() 获取进行生命周期挂钩的场景，取值范围如下:
<li> INSTANCE_LAUNCHING: 扩容生命周期挂钩</li>
<li>INSTANCE_TERMINATING: 缩容生命周期挂钩</li>
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置进行生命周期挂钩的场景，取值范围如下:
<li> INSTANCE_LAUNCHING: 扩容生命周期挂钩</li>
<li>INSTANCE_TERMINATING: 缩容生命周期挂钩</li>
 * @method string getDefaultResult() 获取定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
 * @method void setDefaultResult(string $DefaultResult) 设置定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
 * @method integer getHeartbeatTimeout() 获取生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒
 * @method string getNotificationMetadata() 获取弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串，最长不超过 1024 字符。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串，最长不超过 1024 字符。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。
 * @method NotificationTarget getNotificationTarget() 获取通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。
 * @method string getLifecycleTransitionType() 获取进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在 [AttachInstances](https://cloud.tencent.com/document/api/377/20441)、[DetachInstances](https://cloud.tencent.com/document/api/377/20436)、[RemoveInstaces](https://cloud.tencent.com/document/api/377/20431)、[StopAutoScalingInstances](https://cloud.tencent.com/document/api/377/40286)、[StartAutoScalingInstances](https://cloud.tencent.com/document/api/377/40287)、[StartInstanceRefresh](https://cloud.tencent.com/document/api/377/99172) 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) 设置进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在 [AttachInstances](https://cloud.tencent.com/document/api/377/20441)、[DetachInstances](https://cloud.tencent.com/document/api/377/20436)、[RemoveInstaces](https://cloud.tencent.com/document/api/377/20431)、[StopAutoScalingInstances](https://cloud.tencent.com/document/api/377/40286)、[StartAutoScalingInstances](https://cloud.tencent.com/document/api/377/40287)、[StartInstanceRefresh](https://cloud.tencent.com/document/api/377/99172) 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
 * @method LifecycleCommand getLifecycleCommand() 获取远程命令执行对象。通知相关参数（NotificationTarget、NotificationMetadata）与该参数互斥，二者不可同时指定。
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) 设置远程命令执行对象。通知相关参数（NotificationTarget、NotificationMetadata）与该参数互斥，二者不可同时指定。
 */
class CreateLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     */
    public $AutoScalingGroupId;

    /**
     * @var string 生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字节。
     */
    public $LifecycleHookName;

    /**
     * @var string 进行生命周期挂钩的场景，取值范围如下:
<li> INSTANCE_LAUNCHING: 扩容生命周期挂钩</li>
<li>INSTANCE_TERMINATING: 缩容生命周期挂钩</li>
     */
    public $LifecycleTransition;

    /**
     * @var string 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
     */
    public $DefaultResult;

    /**
     * @var integer 生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒
     */
    public $HeartbeatTimeout;

    /**
     * @var string 弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串，最长不超过 1024 字符。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget 通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。
     */
    public $NotificationTarget;

    /**
     * @var string 进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在 [AttachInstances](https://cloud.tencent.com/document/api/377/20441)、[DetachInstances](https://cloud.tencent.com/document/api/377/20436)、[RemoveInstaces](https://cloud.tencent.com/document/api/377/20431)、[StopAutoScalingInstances](https://cloud.tencent.com/document/api/377/40286)、[StartAutoScalingInstances](https://cloud.tencent.com/document/api/377/40287)、[StartInstanceRefresh](https://cloud.tencent.com/document/api/377/99172) 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand 远程命令执行对象。通知相关参数（NotificationTarget、NotificationMetadata）与该参数互斥，二者不可同时指定。
     */
    public $LifecycleCommand;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     * @param string $LifecycleHookName 生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字节。
     * @param string $LifecycleTransition 进行生命周期挂钩的场景，取值范围如下:
<li> INSTANCE_LAUNCHING: 扩容生命周期挂钩</li>
<li>INSTANCE_TERMINATING: 缩容生命周期挂钩</li>
     * @param string $DefaultResult 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
     * @param integer $HeartbeatTimeout 生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒
     * @param string $NotificationMetadata 弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串，最长不超过 1024 字符。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。
     * @param NotificationTarget $NotificationTarget 通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。
     * @param string $LifecycleTransitionType 进行生命周期挂钩的场景类型，取值范围包括 NORMAL 和 EXTENSION，默认值为 NORMAL。
说明：设置为EXTENSION值，在 [AttachInstances](https://cloud.tencent.com/document/api/377/20441)、[DetachInstances](https://cloud.tencent.com/document/api/377/20436)、[RemoveInstaces](https://cloud.tencent.com/document/api/377/20431)、[StopAutoScalingInstances](https://cloud.tencent.com/document/api/377/40286)、[StartAutoScalingInstances](https://cloud.tencent.com/document/api/377/40287)、[StartInstanceRefresh](https://cloud.tencent.com/document/api/377/99172) 接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。
     * @param LifecycleCommand $LifecycleCommand 远程命令执行对象。通知相关参数（NotificationTarget、NotificationMetadata）与该参数互斥，二者不可同时指定。
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

        if (array_key_exists("LifecycleHookName",$param) and $param["LifecycleHookName"] !== null) {
            $this->LifecycleHookName = $param["LifecycleHookName"];
        }

        if (array_key_exists("LifecycleTransition",$param) and $param["LifecycleTransition"] !== null) {
            $this->LifecycleTransition = $param["LifecycleTransition"];
        }

        if (array_key_exists("DefaultResult",$param) and $param["DefaultResult"] !== null) {
            $this->DefaultResult = $param["DefaultResult"];
        }

        if (array_key_exists("HeartbeatTimeout",$param) and $param["HeartbeatTimeout"] !== null) {
            $this->HeartbeatTimeout = $param["HeartbeatTimeout"];
        }

        if (array_key_exists("NotificationMetadata",$param) and $param["NotificationMetadata"] !== null) {
            $this->NotificationMetadata = $param["NotificationMetadata"];
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
