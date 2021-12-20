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
 * BatchModifyGroupOffsets请求参数结构体
 *
 * @method string getGroupName() 获取消费分组名称
 * @method void setGroupName(string $GroupName) 设置消费分组名称
 * @method string getInstanceId() 获取实例名称
 * @method void setInstanceId(string $InstanceId) 设置实例名称
 * @method array getPartitions() 获取partition信息
 * @method void setPartitions(array $Partitions) 设置partition信息
 * @method array getTopicName() 获取指定topic，默认所有topic
 * @method void setTopicName(array $TopicName) 设置指定topic，默认所有topic
 */
class BatchModifyGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string 消费分组名称
     */
    public $GroupName;

    /**
     * @var string 实例名称
     */
    public $InstanceId;

    /**
     * @var array partition信息
     */
    public $Partitions;

    /**
     * @var array 指定topic，默认所有topic
     */
    public $TopicName;

    /**
     * @param string $GroupName 消费分组名称
     * @param string $InstanceId 实例名称
     * @param array $Partitions partition信息
     * @param array $TopicName 指定topic，默认所有topic
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
