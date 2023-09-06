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
 * DescribeRocketMQMsgTrace请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getEnvironmentId() 获取命名空间
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间
 * @method string getTopicName() 获取主题，rocketmq查询死信时值为groupId
 * @method void setTopicName(string $TopicName) 设置主题，rocketmq查询死信时值为groupId
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method string getGroupName() 获取消费组、订阅
 * @method void setGroupName(string $GroupName) 设置消费组、订阅
 * @method boolean getQueryDLQMsg() 获取查询死信时该值为true
 * @method void setQueryDLQMsg(boolean $QueryDLQMsg) 设置查询死信时该值为true
 */
class DescribeRocketMQMsgTraceRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $EnvironmentId;

    /**
     * @var string 主题，rocketmq查询死信时值为groupId
     */
    public $TopicName;

    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var string 消费组、订阅
     */
    public $GroupName;

    /**
     * @var boolean 查询死信时该值为true
     */
    public $QueryDLQMsg;

    /**
     * @param string $ClusterId 集群id
     * @param string $EnvironmentId 命名空间
     * @param string $TopicName 主题，rocketmq查询死信时值为groupId
     * @param string $MsgId 消息id
     * @param string $GroupName 消费组、订阅
     * @param boolean $QueryDLQMsg 查询死信时该值为true
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("QueryDLQMsg",$param) and $param["QueryDLQMsg"] !== null) {
            $this->QueryDLQMsg = $param["QueryDLQMsg"];
        }
    }
}
