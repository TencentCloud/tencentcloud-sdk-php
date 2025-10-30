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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kafka消费者组详情
 *
 * @method string getAccount() 获取消费者组账号
 * @method void setAccount(string $Account) 设置消费者组账号
 * @method string getConsumerGroupName() 获取消费者组名称
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费者组名称
 * @method string getDescription() 获取消费者组备注
 * @method void setDescription(string $Description) 设置消费者组备注
 * @method integer getConsumerGroupOffset() 获取消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段
 * @method void setConsumerGroupOffset(integer $ConsumerGroupOffset) 设置消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段
 * @method integer getConsumerGroupLag() 获取消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段
 * @method void setConsumerGroupLag(integer $ConsumerGroupLag) 设置消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段
 * @method integer getLatency() 获取消费延迟(单位为秒)
 * @method void setLatency(integer $Latency) 设置消费延迟(单位为秒)
 * @method array getStateOfPartition() 获取各分区的消费状态
 * @method void setStateOfPartition(array $StateOfPartition) 设置各分区的消费状态
 * @method string getCreatedAt() 获取消费者组创建时间，格式为YYYY-MM-DD hh:mm:ss
 * @method void setCreatedAt(string $CreatedAt) 设置消费者组创建时间，格式为YYYY-MM-DD hh:mm:ss
 * @method string getUpdatedAt() 获取消费者组修改时间，格式为YYYY-MM-DD hh:mm:ss
 * @method void setUpdatedAt(string $UpdatedAt) 设置消费者组修改时间，格式为YYYY-MM-DD hh:mm:ss
 * @method string getConsumerGroupState() 获取消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作
 * @method void setConsumerGroupState(string $ConsumerGroupState) 设置消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作
 * @method array getPartitionAssignment() 获取每个消费者正在消费的分区
 * @method void setPartitionAssignment(array $PartitionAssignment) 设置每个消费者正在消费的分区
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 消费者组账号
     */
    public $Account;

    /**
     * @var string 消费者组名称
     */
    public $ConsumerGroupName;

    /**
     * @var string 消费者组备注
     */
    public $Description;

    /**
     * @var integer 消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段
     */
    public $ConsumerGroupOffset;

    /**
     * @var integer 消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段
     */
    public $ConsumerGroupLag;

    /**
     * @var integer 消费延迟(单位为秒)
     */
    public $Latency;

    /**
     * @var array 各分区的消费状态
     */
    public $StateOfPartition;

    /**
     * @var string 消费者组创建时间，格式为YYYY-MM-DD hh:mm:ss
     */
    public $CreatedAt;

    /**
     * @var string 消费者组修改时间，格式为YYYY-MM-DD hh:mm:ss
     */
    public $UpdatedAt;

    /**
     * @var string 消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作
     */
    public $ConsumerGroupState;

    /**
     * @var array 每个消费者正在消费的分区
     */
    public $PartitionAssignment;

    /**
     * @param string $Account 消费者组账号
     * @param string $ConsumerGroupName 消费者组名称
     * @param string $Description 消费者组备注
     * @param integer $ConsumerGroupOffset 消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段
     * @param integer $ConsumerGroupLag 消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段
     * @param integer $Latency 消费延迟(单位为秒)
     * @param array $StateOfPartition 各分区的消费状态
     * @param string $CreatedAt 消费者组创建时间，格式为YYYY-MM-DD hh:mm:ss
     * @param string $UpdatedAt 消费者组修改时间，格式为YYYY-MM-DD hh:mm:ss
     * @param string $ConsumerGroupState 消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作
     * @param array $PartitionAssignment 每个消费者正在消费的分区
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsumerGroupOffset",$param) and $param["ConsumerGroupOffset"] !== null) {
            $this->ConsumerGroupOffset = $param["ConsumerGroupOffset"];
        }

        if (array_key_exists("ConsumerGroupLag",$param) and $param["ConsumerGroupLag"] !== null) {
            $this->ConsumerGroupLag = $param["ConsumerGroupLag"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("StateOfPartition",$param) and $param["StateOfPartition"] !== null) {
            $this->StateOfPartition = [];
            foreach ($param["StateOfPartition"] as $key => $value){
                $obj = new MonitorInfo();
                $obj->deserialize($value);
                array_push($this->StateOfPartition, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ConsumerGroupState",$param) and $param["ConsumerGroupState"] !== null) {
            $this->ConsumerGroupState = $param["ConsumerGroupState"];
        }

        if (array_key_exists("PartitionAssignment",$param) and $param["PartitionAssignment"] !== null) {
            $this->PartitionAssignment = [];
            foreach ($param["PartitionAssignment"] as $key => $value){
                $obj = new PartitionAssignment();
                $obj->deserialize($value);
                array_push($this->PartitionAssignment, $obj);
            }
        }
    }
}
