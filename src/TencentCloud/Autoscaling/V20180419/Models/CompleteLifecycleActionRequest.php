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
 * CompleteLifecycleAction请求参数结构体
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
 * @method string getLifecycleActionResult() 获取生命周期动作的结果，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
 * @method void setLifecycleActionResult(string $LifecycleActionResult) 设置生命周期动作的结果，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
 * @method string getInstanceId() 获取实例ID，`InstanceId` 和 `LifecycleActionToken` 参数必须填写其中一个。可通过登录 [控制台](https://console.cloud.tencent.com/cvm/index) 或调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，`InstanceId` 和 `LifecycleActionToken` 参数必须填写其中一个。可通过登录 [控制台](https://console.cloud.tencent.com/cvm/index) 或调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。
 * @method string getLifecycleActionToken() 获取生命周期动作令牌，`InstanceId` 和 `LifecycleActionToken` 必须填充其中一个。
该参数获取方式如下：配置 `NotificationTarget ` 参数的挂钩被触发时，向  `NotificationTarget `  参数中指定的消息队列投递包含令牌的消息，消息队列的消费者可从消息中获取令牌。
 * @method void setLifecycleActionToken(string $LifecycleActionToken) 设置生命周期动作令牌，`InstanceId` 和 `LifecycleActionToken` 必须填充其中一个。
该参数获取方式如下：配置 `NotificationTarget ` 参数的挂钩被触发时，向  `NotificationTarget `  参数中指定的消息队列投递包含令牌的消息，消息队列的消费者可从消息中获取令牌。
 */
class CompleteLifecycleActionRequest extends AbstractModel
{
    /**
     * @var string 生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
     */
    public $LifecycleHookId;

    /**
     * @var string 生命周期动作的结果，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
     */
    public $LifecycleActionResult;

    /**
     * @var string 实例ID，`InstanceId` 和 `LifecycleActionToken` 参数必须填写其中一个。可通过登录 [控制台](https://console.cloud.tencent.com/cvm/index) 或调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。
     */
    public $InstanceId;

    /**
     * @var string 生命周期动作令牌，`InstanceId` 和 `LifecycleActionToken` 必须填充其中一个。
该参数获取方式如下：配置 `NotificationTarget ` 参数的挂钩被触发时，向  `NotificationTarget `  参数中指定的消息队列投递包含令牌的消息，消息队列的消费者可从消息中获取令牌。
     */
    public $LifecycleActionToken;

    /**
     * @param string $LifecycleHookId 生命周期挂钩ID。可以通过调用接口 [DescribeLifecycleHooks](https://cloud.tencent.com/document/api/377/34452) ，取返回信息中的 LifecycleHookId 获取生命周期挂钩ID。
     * @param string $LifecycleActionResult 生命周期动作的结果，取值范围如下：
<li>CONTINUE: 默认值，表示继续执行扩缩容活动</li>
<li>ABANDON: 针对扩容挂钩，挂钩超时或 LifecycleCommand 执行失败的 CVM 实例会直接释放或移出；而针对缩容挂钩，会继续执行缩容活动。</li>
     * @param string $InstanceId 实例ID，`InstanceId` 和 `LifecycleActionToken` 参数必须填写其中一个。可通过登录 [控制台](https://console.cloud.tencent.com/cvm/index) 或调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。
     * @param string $LifecycleActionToken 生命周期动作令牌，`InstanceId` 和 `LifecycleActionToken` 必须填充其中一个。
该参数获取方式如下：配置 `NotificationTarget ` 参数的挂钩被触发时，向  `NotificationTarget `  参数中指定的消息队列投递包含令牌的消息，消息队列的消费者可从消息中获取令牌。
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

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LifecycleActionToken",$param) and $param["LifecycleActionToken"] !== null) {
            $this->LifecycleActionToken = $param["LifecycleActionToken"];
        }
    }
}
