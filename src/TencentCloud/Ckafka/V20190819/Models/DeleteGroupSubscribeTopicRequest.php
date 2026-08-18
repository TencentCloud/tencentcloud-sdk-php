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
 * DeleteGroupSubscribeTopic请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p>
 * @method string getGroup() 获取<p>消费分组名称</p>
 * @method void setGroup(string $Group) 设置<p>消费分组名称</p>
 * @method string getTopic() 获取<p>主题名</p>
 * @method void setTopic(string $Topic) 设置<p>主题名</p>
 */
class DeleteGroupSubscribeTopicRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>消费分组名称</p>
     */
    public $Group;

    /**
     * @var string <p>主题名</p>
     */
    public $Topic;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p>
     * @param string $Group <p>消费分组名称</p>
     * @param string $Topic <p>主题名</p>
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
