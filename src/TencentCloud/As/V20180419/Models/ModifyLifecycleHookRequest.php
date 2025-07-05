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
 * ModifyLifecycleHook请求参数结构体
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
 * @method string getLifecycleHookName() 获取生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128。
 * @method void setLifecycleHookName(string $LifecycleHookName) 设置生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128。
 * @method string getLifecycleTransition() 获取进入生命周期挂钩场景，取值范围如下:
* INSTANCE_LAUNCHING: 扩容生命周期挂钩
* INSTANCE_TERMINATING: 缩容生命周期挂钩
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置进入生命周期挂钩场景，取值范围如下:
* INSTANCE_LAUNCHING: 扩容生命周期挂钩
* INSTANCE_TERMINATING: 缩容生命周期挂钩
 * @method string getDefaultResult() 获取定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
* CONTINUE: 默认值，表示继续执行扩缩容活动
* ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。
 * @method void setDefaultResult(string $DefaultResult) 设置定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
* CONTINUE: 默认值，表示继续执行扩缩容活动
* ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。
 * @method integer getHeartbeatTimeout() 获取生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从 30 到 7200 秒。
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从 30 到 7200 秒。
 * @method string getNotificationMetadata() 获取弹性伸缩向通知目标发送的附加信息。NotificationMetadata 与 LifecycleCommand互斥，二者不可同时指定。
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置弹性伸缩向通知目标发送的附加信息。NotificationMetadata 与 LifecycleCommand互斥，二者不可同时指定。
 * @method string getLifecycleTransitionType() 获取进行生命周期挂钩的场景类型，取值范围包括`NORMAL`和 `EXTENSION`。说明：设置为`EXTENSION`值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为`NORMAL`则不会在这些接口中触发生命周期挂钩。
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) 设置进行生命周期挂钩的场景类型，取值范围包括`NORMAL`和 `EXTENSION`。说明：设置为`EXTENSION`值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为`NORMAL`则不会在这些接口中触发生命周期挂钩。
 * @method NotificationTarget getNotificationTarget() 获取通知目标信息。NotificationTarget 与 LifecycleCommand互斥，二者不可同时指定。
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置通知目标信息。NotificationTarget 与 LifecycleCommand互斥，二者不可同时指定。
 * @method LifecycleCommand getLifecycleCommand() 获取远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand互斥，不可同时指定。
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) 设置远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand互斥，不可同时指定。
 */
class ModifyLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string 生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
     */
    public $LifecycleHookId;

    /**
     * @var string 生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128。
     */
    public $LifecycleHookName;

    /**
     * @var string 进入生命周期挂钩场景，取值范围如下:
* INSTANCE_LAUNCHING: 扩容生命周期挂钩
* INSTANCE_TERMINATING: 缩容生命周期挂钩
     */
    public $LifecycleTransition;

    /**
     * @var string 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
* CONTINUE: 默认值，表示继续执行扩缩容活动
* ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。
     */
    public $DefaultResult;

    /**
     * @var integer 生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从 30 到 7200 秒。
     */
    public $HeartbeatTimeout;

    /**
     * @var string 弹性伸缩向通知目标发送的附加信息。NotificationMetadata 与 LifecycleCommand互斥，二者不可同时指定。
     */
    public $NotificationMetadata;

    /**
     * @var string 进行生命周期挂钩的场景类型，取值范围包括`NORMAL`和 `EXTENSION`。说明：设置为`EXTENSION`值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为`NORMAL`则不会在这些接口中触发生命周期挂钩。
     */
    public $LifecycleTransitionType;

    /**
     * @var NotificationTarget 通知目标信息。NotificationTarget 与 LifecycleCommand互斥，二者不可同时指定。
     */
    public $NotificationTarget;

    /**
     * @var LifecycleCommand 远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand互斥，不可同时指定。
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId 生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
     * @param string $LifecycleHookName 生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128。
     * @param string $LifecycleTransition 进入生命周期挂钩场景，取值范围如下:
* INSTANCE_LAUNCHING: 扩容生命周期挂钩
* INSTANCE_TERMINATING: 缩容生命周期挂钩
     * @param string $DefaultResult 定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围如下：
* CONTINUE: 默认值，表示继续执行扩缩容活动
* ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。
     * @param integer $HeartbeatTimeout 生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从 30 到 7200 秒。
     * @param string $NotificationMetadata 弹性伸缩向通知目标发送的附加信息。NotificationMetadata 与 LifecycleCommand互斥，二者不可同时指定。
     * @param string $LifecycleTransitionType 进行生命周期挂钩的场景类型，取值范围包括`NORMAL`和 `EXTENSION`。说明：设置为`EXTENSION`值，在AttachInstances、DetachInstances、RemoveInstances 接口时会触发生命周期挂钩操作，值为`NORMAL`则不会在这些接口中触发生命周期挂钩。
     * @param NotificationTarget $NotificationTarget 通知目标信息。NotificationTarget 与 LifecycleCommand互斥，二者不可同时指定。
     * @param LifecycleCommand $LifecycleCommand 远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand互斥，不可同时指定。
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

        if (array_key_exists("LifecycleTransitionType",$param) and $param["LifecycleTransitionType"] !== null) {
            $this->LifecycleTransitionType = $param["LifecycleTransitionType"];
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = new NotificationTarget();
            $this->NotificationTarget->deserialize($param["NotificationTarget"]);
        }

        if (array_key_exists("LifecycleCommand",$param) and $param["LifecycleCommand"] !== null) {
            $this->LifecycleCommand = new LifecycleCommand();
            $this->LifecycleCommand->deserialize($param["LifecycleCommand"]);
        }
    }
}
