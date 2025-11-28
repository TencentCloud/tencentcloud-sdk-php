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
 * DescribeRocketMQTopic请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 * @method integer getOffset() 获取订阅列表分页参数Offset
 * @method void setOffset(integer $Offset) 设置订阅列表分页参数Offset
 * @method integer getLimit() 获取订阅列表分页参数Limit
 * @method void setLimit(integer $Limit) 设置订阅列表分页参数Limit
 */
class DescribeRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $NamespaceId;

    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @var integer 订阅列表分页参数Offset
     */
    public $Offset;

    /**
     * @var integer 订阅列表分页参数Limit
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间
     * @param string $TopicName 主题名称
     * @param string $ConsumerGroup 消费组名称
     * @param integer $Offset 订阅列表分页参数Offset
     * @param integer $Limit 订阅列表分页参数Limit
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
