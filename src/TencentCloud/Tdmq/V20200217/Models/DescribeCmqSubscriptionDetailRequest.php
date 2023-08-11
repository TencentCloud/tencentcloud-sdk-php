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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCmqSubscriptionDetail请求参数结构体
 *
 * @method string getTopicName() 获取主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method void setTopicName(string $TopicName) 设置主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method integer getOffset() 获取分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method void setOffset(integer $Offset) 设置分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method integer getLimit() 获取分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method string getSubscriptionName() 获取根据SubscriptionName进行模糊搜索
 * @method void setSubscriptionName(string $SubscriptionName) 设置根据SubscriptionName进行模糊搜索
 * @method string getQueueName() 获取队列名称，订阅绑定的endpoint
 * @method void setQueueName(string $QueueName) 设置队列名称，订阅绑定的endpoint
 * @method string getQueryType() 获取查询类型。取值：（1）topic；（2）queue。
默认值是topic。如果 queryType 是 topic，则查询主题下的订阅列表；如果 queryType 是 queue，则查询队列绑定的订阅列表。
 * @method void setQueryType(string $QueryType) 设置查询类型。取值：（1）topic；（2）queue。
默认值是topic。如果 queryType 是 topic，则查询主题下的订阅列表；如果 queryType 是 queue，则查询队列绑定的订阅列表。
 */
class DescribeCmqSubscriptionDetailRequest extends AbstractModel
{
    /**
     * @var string 主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     */
    public $TopicName;

    /**
     * @var integer 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     */
    public $Offset;

    /**
     * @var integer 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var string 根据SubscriptionName进行模糊搜索
     */
    public $SubscriptionName;

    /**
     * @var string 队列名称，订阅绑定的endpoint
     */
    public $QueueName;

    /**
     * @var string 查询类型。取值：（1）topic；（2）queue。
默认值是topic。如果 queryType 是 topic，则查询主题下的订阅列表；如果 queryType 是 queue，则查询队列绑定的订阅列表。
     */
    public $QueryType;

    /**
     * @param string $TopicName 主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     * @param integer $Offset 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     * @param integer $Limit 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     * @param string $SubscriptionName 根据SubscriptionName进行模糊搜索
     * @param string $QueueName 队列名称，订阅绑定的endpoint
     * @param string $QueryType 查询类型。取值：（1）topic；（2）queue。
默认值是topic。如果 queryType 是 topic，则查询主题下的订阅列表；如果 queryType 是 queue，则查询队列绑定的订阅列表。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }
    }
}
