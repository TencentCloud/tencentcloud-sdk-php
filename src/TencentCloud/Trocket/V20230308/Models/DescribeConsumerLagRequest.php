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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerLag请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028) 接口或控制台获得。
 * @method string getConsumerGroup() 获取消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口或控制台获得。
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口或控制台获得。
 * @method string getNamespace() 获取命名空间，4.x集群必填，从 [DescribeRocketMQNamespaces](https://cloud.tencent.com/document/api/1179/63419) 接口或控制台获得。
 * @method void setNamespace(string $Namespace) 设置命名空间，4.x集群必填，从 [DescribeRocketMQNamespaces](https://cloud.tencent.com/document/api/1179/63419) 接口或控制台获得。
 * @method string getSubscribeTopic() 获取订阅主题，不为空则查询订阅了该主题的消费组的堆积，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口或控制台获得。
 * @method void setSubscribeTopic(string $SubscribeTopic) 设置订阅主题，不为空则查询订阅了该主题的消费组的堆积，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口或控制台获得。
 */
class DescribeConsumerLagRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口或控制台获得。
     */
    public $ConsumerGroup;

    /**
     * @var string 命名空间，4.x集群必填，从 [DescribeRocketMQNamespaces](https://cloud.tencent.com/document/api/1179/63419) 接口或控制台获得。
     */
    public $Namespace;

    /**
     * @var string 订阅主题，不为空则查询订阅了该主题的消费组的堆积，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口或控制台获得。
     */
    public $SubscribeTopic;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028) 接口或控制台获得。
     * @param string $ConsumerGroup 消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口或控制台获得。
     * @param string $Namespace 命名空间，4.x集群必填，从 [DescribeRocketMQNamespaces](https://cloud.tencent.com/document/api/1179/63419) 接口或控制台获得。
     * @param string $SubscribeTopic 订阅主题，不为空则查询订阅了该主题的消费组的堆积，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口或控制台获得。
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SubscribeTopic",$param) and $param["SubscribeTopic"] !== null) {
            $this->SubscribeTopic = $param["SubscribeTopic"];
        }
    }
}
