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
 * @method string getAccount() 获取<p>消费者组账号</p>
 * @method void setAccount(string $Account) 设置<p>消费者组账号</p>
 * @method string getConsumerGroupName() 获取<p>消费者组名称</p>
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置<p>消费者组名称</p>
 * @method string getDescription() 获取<p>消费者组备注</p>
 * @method void setDescription(string $Description) 设置<p>消费者组备注</p>
 * @method integer getConsumerGroupOffset() 获取<p>消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段</p>
 * @method void setConsumerGroupOffset(integer $ConsumerGroupOffset) 设置<p>消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段</p>
 * @method integer getConsumerGroupLag() 获取<p>消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段</p>
 * @method void setConsumerGroupLag(integer $ConsumerGroupLag) 设置<p>消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段</p>
 * @method integer getLatency() 获取<p>消费延迟(单位为秒)</p>
 * @method void setLatency(integer $Latency) 设置<p>消费延迟(单位为秒)</p>
 * @method array getStateOfPartition() 获取<p>各分区的消费状态</p>
 * @method void setStateOfPartition(array $StateOfPartition) 设置<p>各分区的消费状态</p>
 * @method string getCreatedAt() 获取<p>消费者组创建时间。</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>消费者组创建时间。</p>
 * @method string getUpdatedAt() 获取<p>消费者组修改时间。</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>消费者组修改时间。</p>
 * @method string getConsumerGroupState() 获取<p>消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作</p>
 * @method void setConsumerGroupState(string $ConsumerGroupState) 设置<p>消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作</p>
 * @method array getPartitionAssignment() 获取<p>每个消费者正在消费的分区</p>
 * @method void setPartitionAssignment(array $PartitionAssignment) 设置<p>每个消费者正在消费的分区</p>
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string <p>消费者组账号</p>
     */
    public $Account;

    /**
     * @var string <p>消费者组名称</p>
     */
    public $ConsumerGroupName;

    /**
     * @var string <p>消费者组备注</p>
     */
    public $Description;

    /**
     * @var integer <p>消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段</p>
     */
    public $ConsumerGroupOffset;

    /**
     * @var integer <p>消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段</p>
     */
    public $ConsumerGroupLag;

    /**
     * @var integer <p>消费延迟(单位为秒)</p>
     */
    public $Latency;

    /**
     * @var array <p>各分区的消费状态</p>
     */
    public $StateOfPartition;

    /**
     * @var string <p>消费者组创建时间。</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>消费者组修改时间。</p>
     */
    public $UpdatedAt;

    /**
     * @var string <p>消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作</p>
     */
    public $ConsumerGroupState;

    /**
     * @var array <p>每个消费者正在消费的分区</p>
     */
    public $PartitionAssignment;

    /**
     * @param string $Account <p>消费者组账号</p>
     * @param string $ConsumerGroupName <p>消费者组名称</p>
     * @param string $Description <p>消费者组备注</p>
     * @param integer $ConsumerGroupOffset <p>消费组偏移量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区的偏移量。各分区的偏移量详见StateOfPartition字段</p>
     * @param integer $ConsumerGroupLag <p>消费组未消费的数据量。该字段是为了兼容以前单Partition的情况，取值为最后一个分区未消费的数据量。各分区未消费数据量详见StateOfPartition字段</p>
     * @param integer $Latency <p>消费延迟(单位为秒)</p>
     * @param array $StateOfPartition <p>各分区的消费状态</p>
     * @param string $CreatedAt <p>消费者组创建时间。</p>
     * @param string $UpdatedAt <p>消费者组修改时间。</p>
     * @param string $ConsumerGroupState <p>消费者组状态，包括Dead、Empty、Stable等，只有Dead和Empty两种状态可以执行reset操作</p>
     * @param array $PartitionAssignment <p>每个消费者正在消费的分区</p>
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
