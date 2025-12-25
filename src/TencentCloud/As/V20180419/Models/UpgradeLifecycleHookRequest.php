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
 * UpgradeLifecycleHook请求参数结构体
 *
 * @method string getLifecycleHookId() 获取<p>生命周期挂钩ID。可以通过调用接口 <a href="https://cloud.tencent.com/document/api/377/34452">DescribeLifecycleHooks</a> ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。</p>
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置<p>生命周期挂钩ID。可以通过调用接口 <a href="https://cloud.tencent.com/document/api/377/34452">DescribeLifecycleHooks</a> ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。</p>
 * @method string getLifecycleHookName() 获取<p>生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字符。</p>
 * @method void setLifecycleHookName(string $LifecycleHookName) 设置<p>生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字符。</p>
 * @method string getLifecycleTransition() 获取<p>进行生命周期挂钩的场景，取值范围如下:<em> INSTANCE_LAUNCHING: 扩容生命周期挂钩</em> INSTANCE_TERMINATING: 缩容生命周期挂钩</p>
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置<p>进行生命周期挂钩的场景，取值范围如下:<em> INSTANCE_LAUNCHING: 扩容生命周期挂钩</em> INSTANCE_TERMINATING: 缩容生命周期挂钩</p>
 * @method string getDefaultResult() 获取<p>定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围是如下：<em> CONTINUE: 默认值，表示继续执行扩缩容活动</em> ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</p>
 * @method void setDefaultResult(string $DefaultResult) 设置<p>定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围是如下：<em> CONTINUE: 默认值，表示继续执行扩缩容活动</em> ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</p>
 * @method integer getHeartbeatTimeout() 获取<p>生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒</p>
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置<p>生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒</p>
 * @method string getNotificationMetadata() 获取<p>弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。</p>
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置<p>弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。</p>
 * @method NotificationTarget getNotificationTarget() 获取<p>通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。</p>
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置<p>通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。</p>
 * @method string getLifecycleTransitionType() 获取<p>进行生命周期挂钩的场景类型，取值范围包括NORMAL 和 EXTENSION。说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstaces接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。</p>
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) 设置<p>进行生命周期挂钩的场景类型，取值范围包括NORMAL 和 EXTENSION。说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstaces接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。</p>
 * @method LifecycleCommand getLifecycleCommand() 获取<p>远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand 互斥，不可同时指定。</p>
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) 设置<p>远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand 互斥，不可同时指定。</p>
 */
class UpgradeLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string <p>生命周期挂钩ID。可以通过调用接口 <a href="https://cloud.tencent.com/document/api/377/34452">DescribeLifecycleHooks</a> ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。</p>
     */
    public $LifecycleHookId;

    /**
     * @var string <p>生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字符。</p>
     */
    public $LifecycleHookName;

    /**
     * @var string <p>进行生命周期挂钩的场景，取值范围如下:<em> INSTANCE_LAUNCHING: 扩容生命周期挂钩</em> INSTANCE_TERMINATING: 缩容生命周期挂钩</p>
     */
    public $LifecycleTransition;

    /**
     * @var string <p>定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围是如下：<em> CONTINUE: 默认值，表示继续执行扩缩容活动</em> ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</p>
     */
    public $DefaultResult;

    /**
     * @var integer <p>生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒</p>
     */
    public $HeartbeatTimeout;

    /**
     * @var string <p>弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。</p>
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget <p>通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。</p>
     */
    public $NotificationTarget;

    /**
     * @var string <p>进行生命周期挂钩的场景类型，取值范围包括NORMAL 和 EXTENSION。说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstaces接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。</p>
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand <p>远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand 互斥，不可同时指定。</p>
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId <p>生命周期挂钩ID。可以通过调用接口 <a href="https://cloud.tencent.com/document/api/377/34452">DescribeLifecycleHooks</a> ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。</p>
     * @param string $LifecycleHookName <p>生命周期挂钩名称。名称仅支持中文、英文、数字、下划线（_）、短横线（-）、小数点（.），最大长度不能超128个字符。</p>
     * @param string $LifecycleTransition <p>进行生命周期挂钩的场景，取值范围如下:<em> INSTANCE_LAUNCHING: 扩容生命周期挂钩</em> INSTANCE_TERMINATING: 缩容生命周期挂钩</p>
     * @param string $DefaultResult <p>定义伸缩组在生命周期挂钩超时或 LifecycleCommand 执行失败时应采取的操作，取值范围是如下：<em> CONTINUE: 默认值，表示继续执行扩缩容活动</em> ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</p>
     * @param integer $HeartbeatTimeout <p>生命周期挂钩超时之前可以经过的最长时间（以秒为单位），范围从30到7200秒，默认值为300秒</p>
     * @param string $NotificationMetadata <p>弹性伸缩向通知目标发送的附加信息，配置通知时使用，默认值为空字符串。NotificationMetadata 和 LifecycleCommand参数互斥，二者不可同时指定。</p>
     * @param NotificationTarget $NotificationTarget <p>通知目标。NotificationTarget和LifecycleCommand参数互斥，二者不可同时指定。</p>
     * @param string $LifecycleTransitionType <p>进行生命周期挂钩的场景类型，取值范围包括NORMAL 和 EXTENSION。说明：设置为EXTENSION值，在AttachInstances、DetachInstances、RemoveInstaces接口时会触发生命周期挂钩操作，值为NORMAL则不会在这些接口中触发生命周期挂钩。</p>
     * @param LifecycleCommand $LifecycleCommand <p>远程命令执行对象。通知参数 NotificationMetadata、NotificationTarget 与 LifecycleCommand 互斥，不可同时指定。</p>
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
