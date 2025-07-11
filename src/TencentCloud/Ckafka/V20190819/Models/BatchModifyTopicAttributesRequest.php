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
 * BatchModifyTopicAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method array getTopic() 获取主题属性列表 (同一个批次最多支持10个)
 * @method void setTopic(array $Topic) 设置主题属性列表 (同一个批次最多支持10个)
 */
class BatchModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var array 主题属性列表 (同一个批次最多支持10个)
     */
    public $Topic;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param array $Topic 主题属性列表 (同一个批次最多支持10个)
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
            $this->Topic = [];
            foreach ($param["Topic"] as $key => $value){
                $obj = new BatchModifyTopicInfo();
                $obj->deserialize($value);
                array_push($this->Topic, $obj);
            }
        }
    }
}
