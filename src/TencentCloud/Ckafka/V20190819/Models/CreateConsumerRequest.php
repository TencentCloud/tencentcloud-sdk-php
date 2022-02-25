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
 * CreateConsumer请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getGroupName() 获取group名称
 * @method void setGroupName(string $GroupName) 设置group名称
 * @method string getTopicName() 获取topic名称，TopicName、TopicNameList 需要显示指定一个存在的topic名称
 * @method void setTopicName(string $TopicName) 设置topic名称，TopicName、TopicNameList 需要显示指定一个存在的topic名称
 * @method array getTopicNameList() 获取topic名称数组
 * @method void setTopicNameList(array $TopicNameList) 设置topic名称数组
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string group名称
     */
    public $GroupName;

    /**
     * @var string topic名称，TopicName、TopicNameList 需要显示指定一个存在的topic名称
     */
    public $TopicName;

    /**
     * @var array topic名称数组
     */
    public $TopicNameList;

    /**
     * @param string $InstanceId 实例id
     * @param string $GroupName group名称
     * @param string $TopicName topic名称，TopicName、TopicNameList 需要显示指定一个存在的topic名称
     * @param array $TopicNameList topic名称数组
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicNameList",$param) and $param["TopicNameList"] !== null) {
            $this->TopicNameList = $param["TopicNameList"];
        }
    }
}
