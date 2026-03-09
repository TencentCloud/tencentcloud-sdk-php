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
 * BatchModifyGroupOffsets请求参数结构体
 *
 * @method string getGroupName() 获取<p>消费分组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>消费分组名称</p>
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method array getPartitions() 获取<p>partition信息</p>
 * @method void setPartitions(array $Partitions) 设置<p>partition信息</p>
 * @method array getTopicName() 获取<p>指定topic，默认所有topic</p>
 * @method void setTopicName(array $TopicName) 设置<p>指定topic，默认所有topic</p>
 */
class BatchModifyGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string <p>消费分组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var array <p>partition信息</p>
     */
    public $Partitions;

    /**
     * @var array <p>指定topic，默认所有topic</p>
     */
    public $TopicName;

    /**
     * @param string $GroupName <p>消费分组名称</p>
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param array $Partitions <p>partition信息</p>
     * @param array $TopicName <p>指定topic，默认所有topic</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new Partitions();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
