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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ的vhost详情
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getVirtualHost() 获取vhost名
 * @method void setVirtualHost(string $VirtualHost) 设置vhost名
 * @method string getDescription() 获取vhost描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置vhost描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取vhost标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置vhost标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method RabbitMQVirtualHostStatistics getVirtualHostStatistics() 获取vhost概览统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualHostStatistics(RabbitMQVirtualHostStatistics $VirtualHostStatistics) 设置vhost概览统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取vhost状态，与原生控制台对应，有running、partial、stopped、unknown
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置vhost状态，与原生控制台对应，有running、partial、stopped、unknown
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageHeapCount() 获取消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageHeapCount(integer $MessageHeapCount) 设置消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateIn() 获取输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateIn(float $MessageRateIn) 设置输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateOut() 获取输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateOut(float $MessageRateOut) 设置输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQVirtualHostInfo extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string vhost名
     */
    public $VirtualHost;

    /**
     * @var string vhost描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array vhost标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var RabbitMQVirtualHostStatistics vhost概览统计信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualHostStatistics;

    /**
     * @var string vhost状态，与原生控制台对应，有running、partial、stopped、unknown
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageHeapCount;

    /**
     * @var float 输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateIn;

    /**
     * @var float 输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateOut;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $VirtualHost vhost名
     * @param string $Description vhost描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags vhost标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param RabbitMQVirtualHostStatistics $VirtualHostStatistics vhost概览统计信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status vhost状态，与原生控制台对应，有running、partial、stopped、unknown
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageHeapCount 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateIn 输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateOut 输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("VirtualHostStatistics",$param) and $param["VirtualHostStatistics"] !== null) {
            $this->VirtualHostStatistics = new RabbitMQVirtualHostStatistics();
            $this->VirtualHostStatistics->deserialize($param["VirtualHostStatistics"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MessageHeapCount",$param) and $param["MessageHeapCount"] !== null) {
            $this->MessageHeapCount = $param["MessageHeapCount"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }
    }
}
