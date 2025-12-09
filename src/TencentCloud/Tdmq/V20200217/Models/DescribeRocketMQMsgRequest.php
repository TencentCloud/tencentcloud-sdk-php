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
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getEnvironmentId() 获取命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getTopicName() 获取主题，查询死信时传groupId
 * @method void setTopicName(string $TopicName) 设置主题，查询死信时传groupId
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method string getPulsarMsgId() 获取pulsar消息id
 * @method void setPulsarMsgId(string $PulsarMsgId) 设置pulsar消息id
 * @method boolean getQueryDlqMsg() 获取查询死信时该值为true，只对Rocketmq有效
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) 设置查询死信时该值为true，只对Rocketmq有效
 * @method boolean getQueryDeadLetterMessage() 获取查询死信时该值为true，只对Rocketmq有效
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置查询死信时该值为true，只对Rocketmq有效
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method string getFilterTrackGroup() 获取根据消费组名称过滤消费详情
 * @method void setFilterTrackGroup(string $FilterTrackGroup) 设置根据消费组名称过滤消费详情
 */
class DescribeRocketMQMsgRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $EnvironmentId;

    /**
     * @var string 主题，查询死信时传groupId
     */
    public $TopicName;

    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var string pulsar消息id
     */
    public $PulsarMsgId;

    /**
     * @var boolean 查询死信时该值为true，只对Rocketmq有效
     * @deprecated
     */
    public $QueryDlqMsg;

    /**
     * @var boolean 查询死信时该值为true，只对Rocketmq有效
     */
    public $QueryDeadLetterMessage;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var string 根据消费组名称过滤消费详情
     */
    public $FilterTrackGroup;

    /**
     * @param string $ClusterId 集群id
     * @param string $EnvironmentId 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $TopicName 主题，查询死信时传groupId
     * @param string $MsgId 消息id
     * @param string $PulsarMsgId pulsar消息id
     * @param boolean $QueryDlqMsg 查询死信时该值为true，只对Rocketmq有效
     * @param boolean $QueryDeadLetterMessage 查询死信时该值为true，只对Rocketmq有效
     * @param integer $Offset 分页Offset
     * @param integer $Limit 分页Limit
     * @param string $FilterTrackGroup 根据消费组名称过滤消费详情
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
    }
}
