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
 * FetchMessageListByOffset请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getTopic() 获取<p>主题名</p>
 * @method void setTopic(string $Topic) 设置<p>主题名</p>
 * @method integer getPartition() 获取<p>分区id</p>
 * @method void setPartition(integer $Partition) 设置<p>分区id</p>
 * @method integer getOffset() 获取<p>位点信息</p>
 * @method void setOffset(integer $Offset) 设置<p>位点信息</p>
 * @method integer getSinglePartitionRecordNumber() 获取<p>最大查询条数，默认20，最大20</p>
 * @method void setSinglePartitionRecordNumber(integer $SinglePartitionRecordNumber) 设置<p>最大查询条数，默认20，最大20</p>
 */
class FetchMessageListByOffsetRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名</p>
     */
    public $Topic;

    /**
     * @var integer <p>分区id</p>
     */
    public $Partition;

    /**
     * @var integer <p>位点信息</p>
     */
    public $Offset;

    /**
     * @var integer <p>最大查询条数，默认20，最大20</p>
     */
    public $SinglePartitionRecordNumber;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $Topic <p>主题名</p>
     * @param integer $Partition <p>分区id</p>
     * @param integer $Offset <p>位点信息</p>
     * @param integer $SinglePartitionRecordNumber <p>最大查询条数，默认20，最大20</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SinglePartitionRecordNumber",$param) and $param["SinglePartitionRecordNumber"] !== null) {
            $this->SinglePartitionRecordNumber = $param["SinglePartitionRecordNumber"];
        }
    }
}
