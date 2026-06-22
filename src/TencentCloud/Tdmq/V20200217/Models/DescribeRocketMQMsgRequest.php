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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQMsg请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getEnvironmentId() 获取<p>命名空间，4.x 通用集群命名空间固定为: tdmq_default</p>
 * @method void setEnvironmentId(string $EnvironmentId) 设置<p>命名空间，4.x 通用集群命名空间固定为: tdmq_default</p>
 * @method string getTopicName() 获取<p>主题，查询死信时传groupId</p>
 * @method void setTopicName(string $TopicName) 设置<p>主题，查询死信时传groupId</p>
 * @method string getMsgId() 获取<p>消息id</p>
 * @method void setMsgId(string $MsgId) 设置<p>消息id</p>
 * @method string getPulsarMsgId() 获取<p>pulsar消息id</p>
 * @method void setPulsarMsgId(string $PulsarMsgId) 设置<p>pulsar消息id</p>
 * @method boolean getQueryDlqMsg() 获取<p>查询死信时该值为true，只对Rocketmq有效</p>
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) 设置<p>查询死信时该值为true，只对Rocketmq有效</p>
 * @method boolean getQueryDeadLetterMessage() 获取<p>查询死信时该值为true，只对Rocketmq有效</p>
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置<p>查询死信时该值为true，只对Rocketmq有效</p>
 * @method integer getOffset() 获取<p>分页Offset</p>
 * @method void setOffset(integer $Offset) 设置<p>分页Offset</p>
 * @method integer getLimit() 获取<p>分页Limit</p>
 * @method void setLimit(integer $Limit) 设置<p>分页Limit</p>
 * @method string getFilterTrackGroup() 获取<p>根据消费组名称过滤消费详情</p>
 * @method void setFilterTrackGroup(string $FilterTrackGroup) 设置<p>根据消费组名称过滤消费详情</p>
 * @method boolean getQueryDelayMessage() 获取<p>查询延迟消息或定时消息时，该值为true</p>
 * @method void setQueryDelayMessage(boolean $QueryDelayMessage) 设置<p>查询延迟消息或定时消息时，该值为true</p>
 */
class DescribeRocketMQMsgRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>命名空间，4.x 通用集群命名空间固定为: tdmq_default</p>
     */
    public $EnvironmentId;

    /**
     * @var string <p>主题，查询死信时传groupId</p>
     */
    public $TopicName;

    /**
     * @var string <p>消息id</p>
     */
    public $MsgId;

    /**
     * @var string <p>pulsar消息id</p>
     */
    public $PulsarMsgId;

    /**
     * @var boolean <p>查询死信时该值为true，只对Rocketmq有效</p>
     * @deprecated
     */
    public $QueryDlqMsg;

    /**
     * @var boolean <p>查询死信时该值为true，只对Rocketmq有效</p>
     */
    public $QueryDeadLetterMessage;

    /**
     * @var integer <p>分页Offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页Limit</p>
     */
    public $Limit;

    /**
     * @var string <p>根据消费组名称过滤消费详情</p>
     */
    public $FilterTrackGroup;

    /**
     * @var boolean <p>查询延迟消息或定时消息时，该值为true</p>
     */
    public $QueryDelayMessage;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param string $EnvironmentId <p>命名空间，4.x 通用集群命名空间固定为: tdmq_default</p>
     * @param string $TopicName <p>主题，查询死信时传groupId</p>
     * @param string $MsgId <p>消息id</p>
     * @param string $PulsarMsgId <p>pulsar消息id</p>
     * @param boolean $QueryDlqMsg <p>查询死信时该值为true，只对Rocketmq有效</p>
     * @param boolean $QueryDeadLetterMessage <p>查询死信时该值为true，只对Rocketmq有效</p>
     * @param integer $Offset <p>分页Offset</p>
     * @param integer $Limit <p>分页Limit</p>
     * @param string $FilterTrackGroup <p>根据消费组名称过滤消费详情</p>
     * @param boolean $QueryDelayMessage <p>查询延迟消息或定时消息时，该值为true</p>
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

        if (array_key_exists("PulsarMsgId",$param) and $param["PulsarMsgId"] !== null) {
            $this->PulsarMsgId = $param["PulsarMsgId"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterTrackGroup",$param) and $param["FilterTrackGroup"] !== null) {
            $this->FilterTrackGroup = $param["FilterTrackGroup"];
        }

        if (array_key_exists("QueryDelayMessage",$param) and $param["QueryDelayMessage"] !== null) {
            $this->QueryDelayMessage = $param["QueryDelayMessage"];
        }
    }
}
