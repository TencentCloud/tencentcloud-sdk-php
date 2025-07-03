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
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getGroupName() 获取消费分组名称
 * @method void setGroupName(string $GroupName) 设置消费分组名称
 * @method string getTopicName() 获取主题名，TopicName、TopicNameList 需要显示指定一个存在的主题名
 * @method void setTopicName(string $TopicName) 设置主题名，TopicName、TopicNameList 需要显示指定一个存在的主题名
 * @method array getTopicNameList() 获取主题名列表
 * @method void setTopicNameList(array $TopicNameList) 设置主题名列表
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 消费分组名称
     */
    public $GroupName;

    /**
     * @var string 主题名，TopicName、TopicNameList 需要显示指定一个存在的主题名
     */
    public $TopicName;

    /**
     * @var array 主题名列表
     */
    public $TopicNameList;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $GroupName 消费分组名称
     * @param string $TopicName 主题名，TopicName、TopicNameList 需要显示指定一个存在的主题名
     * @param array $TopicNameList 主题名列表
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
