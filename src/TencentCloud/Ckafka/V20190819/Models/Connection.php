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
 * Connection信息
 *
 * @method string getTopicName() 获取Topic名称
 * @method void setTopicName(string $TopicName) 设置Topic名称
 * @method string getGroupId() 获取消费组ID
 * @method void setGroupId(string $GroupId) 设置消费组ID
 * @method string getTopicId() 获取Topic的Id
 * @method void setTopicId(string $TopicId) 设置Topic的Id
 */
class Connection extends AbstractModel
{
    /**
     * @var string Topic名称
     */
    public $TopicName;

    /**
     * @var string 消费组ID
     */
    public $GroupId;

    /**
     * @var string Topic的Id
     */
    public $TopicId;

    /**
     * @param string $TopicName Topic名称
     * @param string $GroupId 消费组ID
     * @param string $TopicId Topic的Id
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
