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
 * CreatePartition请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method integer getPartitionNum() 获取主题分区个数
 * @method void setPartitionNum(integer $PartitionNum) 设置主题分区个数
 */
class CreatePartitionRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var integer 主题分区个数
     */
    public $PartitionNum;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $TopicName 主题名称
     * @param integer $PartitionNum 主题分区个数
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }
    }
}
