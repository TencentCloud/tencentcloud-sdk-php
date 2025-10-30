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
 * RocketMQ主题配置信息
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method string getType() 获取主题类型：
Normal，普通
PartitionedOrder, 分区顺序
Transaction，事务消息
DelayScheduled，延迟/定时消息
 * @method void setType(string $Type) 设置主题类型：
Normal，普通
PartitionedOrder, 分区顺序
Transaction，事务消息
DelayScheduled，延迟/定时消息
 * @method integer getPartitions() 获取分区个数
 * @method void setPartitions(integer $Partitions) 设置分区个数
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class RocketMQTopicConfig extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var string 主题类型：
Normal，普通
PartitionedOrder, 分区顺序
Transaction，事务消息
DelayScheduled，延迟/定时消息
     */
    public $Type;

    /**
     * @var integer 分区个数
     */
    public $Partitions;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param string $Namespace 命名空间
     * @param string $TopicName 主题名称
     * @param string $Type 主题类型：
Normal，普通
PartitionedOrder, 分区顺序
Transaction，事务消息
DelayScheduled，延迟/定时消息
     * @param integer $Partitions 分区个数
     * @param string $Remark 备注信息
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
