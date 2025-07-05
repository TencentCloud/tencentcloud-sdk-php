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
 * 消费分组主题对象
 *
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method array getPartitions() 获取该主题分区数组，其中每个元素为一个 json object
 * @method void setPartitions(array $Partitions) 设置该主题分区数组，其中每个元素为一个 json object
 */
class GroupOffsetTopic extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var array 该主题分区数组，其中每个元素为一个 json object
     */
    public $Partitions;

    /**
     * @param string $Topic 主题名称
     * @param array $Partitions 该主题分区数组，其中每个元素为一个 json object
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new GroupOffsetPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }
    }
}
