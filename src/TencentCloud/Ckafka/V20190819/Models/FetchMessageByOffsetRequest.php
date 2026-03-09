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
 * FetchMessageByOffset请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method string getTopic() 获取<p>主题名，可通过<a href="https://cloud.tencent.com/document/product/597/40847">DescribeTopic</a>接口获取</p>
 * @method void setTopic(string $Topic) 设置<p>主题名，可通过<a href="https://cloud.tencent.com/document/product/597/40847">DescribeTopic</a>接口获取</p>
 * @method integer getPartition() 获取<p>分区id</p>
 * @method void setPartition(integer $Partition) 设置<p>分区id</p>
 * @method integer getOffset() 获取<p>位点信息</p>
 * @method void setOffset(integer $Offset) 设置<p>位点信息</p>
 */
class FetchMessageByOffsetRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名，可通过<a href="https://cloud.tencent.com/document/product/597/40847">DescribeTopic</a>接口获取</p>
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
     * @param string $InstanceId <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param string $Topic <p>主题名，可通过<a href="https://cloud.tencent.com/document/product/597/40847">DescribeTopic</a>接口获取</p>
     * @param integer $Partition <p>分区id</p>
     * @param integer $Offset <p>位点信息</p>
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
    }
}
