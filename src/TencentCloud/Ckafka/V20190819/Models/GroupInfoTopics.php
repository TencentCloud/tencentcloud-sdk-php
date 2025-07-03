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
 * GroupInfo内部topic对象
 *
 * @method string getTopic() 获取分配的 topic 名称
 * @method void setTopic(string $Topic) 设置分配的 topic 名称
 * @method array getPartitions() 获取分配的 partition 信息
 * @method void setPartitions(array $Partitions) 设置分配的 partition 信息
 */
class GroupInfoTopics extends AbstractModel
{
    /**
     * @var string 分配的 topic 名称
     */
    public $Topic;

    /**
     * @var array 分配的 partition 信息
     */
    public $Partitions;

    /**
     * @param string $Topic 分配的 topic 名称
     * @param array $Partitions 分配的 partition 信息
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
            $this->Partitions = $param["Partitions"];
        }
    }
}
