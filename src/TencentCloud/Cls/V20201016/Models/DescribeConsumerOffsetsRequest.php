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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerOffsets请求参数结构体
 *
 * @method string getConsumerGroup() 获取日志主题对应的消费组标识
 * @method void setConsumerGroup(string $ConsumerGroup) 设置日志主题对应的消费组标识
 * @method string getFrom() 获取时间戳(秒级时间戳)
 * @method void setFrom(string $From) 设置时间戳(秒级时间戳)
 * @method string getLogsetId() 获取日志集id(日志主题对应的id)
 * @method void setLogsetId(string $LogsetId) 设置日志集id(日志主题对应的id)
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method string getPartitionId() 获取分区id
 * @method void setPartitionId(string $PartitionId) 设置分区id
 */
class DescribeConsumerOffsetsRequest extends AbstractModel
{
    /**
     * @var string 日志主题对应的消费组标识
     */
    public $ConsumerGroup;

    /**
     * @var string 时间戳(秒级时间戳)
     */
    public $From;

    /**
     * @var string 日志集id(日志主题对应的id)
     */
    public $LogsetId;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var string 分区id
     */
    public $PartitionId;

    /**
     * @param string $ConsumerGroup 日志主题对应的消费组标识
     * @param string $From 时间戳(秒级时间戳)
     * @param string $LogsetId 日志集id(日志主题对应的id)
     * @param string $TopicId 日志主题id
     * @param string $PartitionId 分区id
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }
    }
}
