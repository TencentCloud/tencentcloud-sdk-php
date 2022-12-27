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
 * RocketMQ消费组信息
 *
 * @method string getName() 获取消费组名称
 * @method void setName(string $Name) 设置消费组名称
 * @method integer getConsumerNum() 获取在线消费者数量
 * @method void setConsumerNum(integer $ConsumerNum) 设置在线消费者数量
 * @method integer getTPS() 获取消费TPS
 * @method void setTPS(integer $TPS) 设置消费TPS
 * @method integer getTotalAccumulative() 获取总堆积数量
 * @method void setTotalAccumulative(integer $TotalAccumulative) 设置总堆积数量
 * @method integer getConsumptionMode() 获取0表示集群消费模式，1表示广播消费模式，-1表示未知
 * @method void setConsumptionMode(integer $ConsumptionMode) 设置0表示集群消费模式，1表示广播消费模式，-1表示未知
 * @method boolean getReadEnabled() 获取是否允许消费
 * @method void setReadEnabled(boolean $ReadEnabled) 设置是否允许消费
 * @method integer getRetryPartitionNum() 获取重试队列分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryPartitionNum(integer $RetryPartitionNum) 设置重试队列分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
 * @method integer getUpdateTime() 获取修改时间，以毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间，以毫秒为单位
 * @method string getClientProtocol() 获取客户端协议
 * @method void setClientProtocol(string $ClientProtocol) 设置客户端协议
 * @method string getRemark() 获取说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerType() 获取消费者类型，枚举值ACTIVELY, PASSIVELY
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerType(string $ConsumerType) 设置消费者类型，枚举值ACTIVELY, PASSIVELY
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBroadcastEnabled() 获取是否开启广播消费
 * @method void setBroadcastEnabled(boolean $BroadcastEnabled) 设置是否开启广播消费
 * @method string getGroupType() 获取Group类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置Group类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryMaxTimes() 获取重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryMaxTimes(integer $RetryMaxTimes) 设置重试次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQGroup extends AbstractModel
{
    /**
     * @var string 消费组名称
     */
    public $Name;

    /**
     * @var integer 在线消费者数量
     */
    public $ConsumerNum;

    /**
     * @var integer 消费TPS
     */
    public $TPS;

    /**
     * @var integer 总堆积数量
     */
    public $TotalAccumulative;

    /**
     * @var integer 0表示集群消费模式，1表示广播消费模式，-1表示未知
     */
    public $ConsumptionMode;

    /**
     * @var boolean 是否允许消费
     */
    public $ReadEnabled;

    /**
     * @var integer 重试队列分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryPartitionNum;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 修改时间，以毫秒为单位
     */
    public $UpdateTime;

    /**
     * @var string 客户端协议
     */
    public $ClientProtocol;

    /**
     * @var string 说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 消费者类型，枚举值ACTIVELY, PASSIVELY
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerType;

    /**
     * @var boolean 是否开启广播消费
     */
    public $BroadcastEnabled;

    /**
     * @var string Group类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var integer 重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryMaxTimes;

    /**
     * @param string $Name 消费组名称
     * @param integer $ConsumerNum 在线消费者数量
     * @param integer $TPS 消费TPS
     * @param integer $TotalAccumulative 总堆积数量
     * @param integer $ConsumptionMode 0表示集群消费模式，1表示广播消费模式，-1表示未知
     * @param boolean $ReadEnabled 是否允许消费
     * @param integer $RetryPartitionNum 重试队列分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，以毫秒为单位
     * @param integer $UpdateTime 修改时间，以毫秒为单位
     * @param string $ClientProtocol 客户端协议
     * @param string $Remark 说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerType 消费者类型，枚举值ACTIVELY, PASSIVELY
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BroadcastEnabled 是否开启广播消费
     * @param string $GroupType Group类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryMaxTimes 重试次数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ConsumerNum",$param) and $param["ConsumerNum"] !== null) {
            $this->ConsumerNum = $param["ConsumerNum"];
        }

        if (array_key_exists("TPS",$param) and $param["TPS"] !== null) {
            $this->TPS = $param["TPS"];
        }

        if (array_key_exists("TotalAccumulative",$param) and $param["TotalAccumulative"] !== null) {
            $this->TotalAccumulative = $param["TotalAccumulative"];
        }

        if (array_key_exists("ConsumptionMode",$param) and $param["ConsumptionMode"] !== null) {
            $this->ConsumptionMode = $param["ConsumptionMode"];
        }

        if (array_key_exists("ReadEnabled",$param) and $param["ReadEnabled"] !== null) {
            $this->ReadEnabled = $param["ReadEnabled"];
        }

        if (array_key_exists("RetryPartitionNum",$param) and $param["RetryPartitionNum"] !== null) {
            $this->RetryPartitionNum = $param["RetryPartitionNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClientProtocol",$param) and $param["ClientProtocol"] !== null) {
            $this->ClientProtocol = $param["ClientProtocol"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerType",$param) and $param["ConsumerType"] !== null) {
            $this->ConsumerType = $param["ConsumerType"];
        }

        if (array_key_exists("BroadcastEnabled",$param) and $param["BroadcastEnabled"] !== null) {
            $this->BroadcastEnabled = $param["BroadcastEnabled"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("RetryMaxTimes",$param) and $param["RetryMaxTimes"] !== null) {
            $this->RetryMaxTimes = $param["RetryMaxTimes"];
        }
    }
}
