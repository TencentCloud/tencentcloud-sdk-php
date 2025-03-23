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
 * 生产者信息
 *
 * @method integer getProducerId() 获取生产者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerId(integer $ProducerId) 设置生产者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerName() 获取生产者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerName(string $ProducerName) 设置生产者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取生产者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置生产者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientVersion() 获取客户端版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientVersion(string $ClientVersion) 设置客户端版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMsgRateIn() 获取消息生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateIn(float $MsgRateIn) 设置消息生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMsgThroughputIn() 获取消息生产吞吐速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputIn(float $MsgThroughputIn) 设置消息生产吞吐速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAverageMsgSize() 获取平均消息大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageMsgSize(float $AverageMsgSize) 设置平均消息大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectedSince() 获取连接时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectedSince(string $ConnectedSince) 设置连接时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartition() 获取生产者连接的主题分区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartition(integer $Partition) 设置生产者连接的主题分区号
注意：此字段可能返回 null，表示取不到有效值。
 */
class Publisher extends AbstractModel
{
    /**
     * @var integer 生产者id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerId;

    /**
     * @var string 生产者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerName;

    /**
     * @var string 生产者地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 客户端版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientVersion;

    /**
     * @var float 消息生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateIn;

    /**
     * @var float 消息生产吞吐速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputIn;

    /**
     * @var float 平均消息大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageMsgSize;

    /**
     * @var string 连接时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectedSince;

    /**
     * @var integer 生产者连接的主题分区号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partition;

    /**
     * @param integer $ProducerId 生产者id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerName 生产者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 生产者地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientVersion 客户端版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MsgRateIn 消息生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MsgThroughputIn 消息生产吞吐速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AverageMsgSize 平均消息大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectedSince 连接时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Partition 生产者连接的主题分区号
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
        if (array_key_exists("ProducerId",$param) and $param["ProducerId"] !== null) {
            $this->ProducerId = $param["ProducerId"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
