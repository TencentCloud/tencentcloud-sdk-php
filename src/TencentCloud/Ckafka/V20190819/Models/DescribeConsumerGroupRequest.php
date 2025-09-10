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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerGroup请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method string getGroupName() 获取用户需要查询的group名称。
 * @method void setGroupName(string $GroupName) 设置用户需要查询的group名称。
 * @method string getTopicName() 获取用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
 * @method void setTopicName(string $TopicName) 设置用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
 * @method integer getLimit() 获取返回消费组的限制数量，最大支持50
 * @method void setLimit(integer $Limit) 设置返回消费组的限制数量，最大支持50
 * @method integer getOffset() 获取消费组列表的起始偏移量
 * @method void setOffset(integer $Offset) 设置消费组列表的起始偏移量
 */
class DescribeConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     */
    public $InstanceId;

    /**
     * @var string 用户需要查询的group名称。
     */
    public $GroupName;

    /**
     * @var string 用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
     */
    public $TopicName;

    /**
     * @var integer 返回消费组的限制数量，最大支持50
     */
    public $Limit;

    /**
     * @var integer 消费组列表的起始偏移量
     */
    public $Offset;

    /**
     * @param string $InstanceId ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     * @param string $GroupName 用户需要查询的group名称。
     * @param string $TopicName 用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
     * @param integer $Limit 返回消费组的限制数量，最大支持50
     * @param integer $Offset 消费组列表的起始偏移量
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
