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
 * kafka协议消费组区分信息
 *
 * @method integer getPartitionId() 获取分区id
 * @method void setPartitionId(integer $PartitionId) 设置分区id
 * @method integer getCommitTimestamp() 获取分区最新数据时间戳，单位：s
 * @method void setCommitTimestamp(integer $CommitTimestamp) 设置分区最新数据时间戳，单位：s
 * @method string getConsumer() 获取消费者
 * @method void setConsumer(string $Consumer) 设置消费者
 */
class GroupPartitionInfo extends AbstractModel
{
    /**
     * @var integer 分区id
     */
    public $PartitionId;

    /**
     * @var integer 分区最新数据时间戳，单位：s
     */
    public $CommitTimestamp;

    /**
     * @var string 消费者
     */
    public $Consumer;

    /**
     * @param integer $PartitionId 分区id
     * @param integer $CommitTimestamp 分区最新数据时间戳，单位：s
     * @param string $Consumer 消费者
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
        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("CommitTimestamp",$param) and $param["CommitTimestamp"] !== null) {
            $this->CommitTimestamp = $param["CommitTimestamp"];
        }

        if (array_key_exists("Consumer",$param) and $param["Consumer"] !== null) {
            $this->Consumer = $param["Consumer"];
        }
    }
}
