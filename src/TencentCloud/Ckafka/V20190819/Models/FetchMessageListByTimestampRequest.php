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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchMessageListByTimestamp请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getTopic() 获取主题名
 * @method void setTopic(string $Topic) 设置主题名
 * @method integer getPartition() 获取分区id
 * @method void setPartition(integer $Partition) 设置分区id
 * @method integer getStartTime() 获取查询开始时间，13位时间戳
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，13位时间戳
 * @method integer getSinglePartitionRecordNumber() 获取最大查询条数，默认20
 * @method void setSinglePartitionRecordNumber(integer $SinglePartitionRecordNumber) 设置最大查询条数，默认20
 */
class FetchMessageListByTimestampRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 主题名
     */
    public $Topic;

    /**
     * @var integer 分区id
     */
    public $Partition;

    /**
     * @var integer 查询开始时间，13位时间戳
     */
    public $StartTime;

    /**
     * @var integer 最大查询条数，默认20
     */
    public $SinglePartitionRecordNumber;

    /**
     * @param string $InstanceId 实例Id
     * @param string $Topic 主题名
     * @param integer $Partition 分区id
     * @param integer $StartTime 查询开始时间，13位时间戳
     * @param integer $SinglePartitionRecordNumber 最大查询条数，默认20
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SinglePartitionRecordNumber",$param) and $param["SinglePartitionRecordNumber"] !== null) {
            $this->SinglePartitionRecordNumber = $param["SinglePartitionRecordNumber"];
        }
    }
}
