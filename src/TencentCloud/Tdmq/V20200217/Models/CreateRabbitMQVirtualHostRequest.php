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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVirtualHost请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method string getVirtualHost() 获取<p>vhost名</p>
 * @method void setVirtualHost(string $VirtualHost) 设置<p>vhost名</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method boolean getTraceFlag() 获取<p>消息轨迹开关,true打开,false关闭,默认关闭</p>
 * @method void setTraceFlag(boolean $TraceFlag) 设置<p>消息轨迹开关,true打开,false关闭,默认关闭</p>
 * @method boolean getMirrorQueuePolicyFlag() 获取<p>是否创建镜像队列策略，默认值 true。该参数对4.x集群不生效。</p>
 * @method void setMirrorQueuePolicyFlag(boolean $MirrorQueuePolicyFlag) 设置<p>是否创建镜像队列策略，默认值 true。该参数对4.x集群不生效。</p>
 */
class CreateRabbitMQVirtualHostRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>vhost名</p>
     */
    public $VirtualHost;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>消息轨迹开关,true打开,false关闭,默认关闭</p>
     */
    public $TraceFlag;

    /**
     * @var boolean <p>是否创建镜像队列策略，默认值 true。该参数对4.x集群不生效。</p>
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @param string $InstanceId <p>实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
     * @param string $VirtualHost <p>vhost名</p>
     * @param string $Description <p>描述</p>
     * @param boolean $TraceFlag <p>消息轨迹开关,true打开,false关闭,默认关闭</p>
     * @param boolean $MirrorQueuePolicyFlag <p>是否创建镜像队列策略，默认值 true。该参数对4.x集群不生效。</p>
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }

        if (array_key_exists("MirrorQueuePolicyFlag",$param) and $param["MirrorQueuePolicyFlag"] !== null) {
            $this->MirrorQueuePolicyFlag = $param["MirrorQueuePolicyFlag"];
        }
    }
}
