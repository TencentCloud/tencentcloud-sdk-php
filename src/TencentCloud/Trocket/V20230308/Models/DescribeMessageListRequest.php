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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageList请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getTaskRequestId() 获取一次查询标识
 * @method void setTaskRequestId(string $TaskRequestId) 设置一次查询标识
 * @method integer getOffset() 获取查询起始位置
 * @method void setOffset(integer $Offset) 设置查询起始位置
 * @method integer getLimit() 获取查询结果限制数量
 * @method void setLimit(integer $Limit) 设置查询结果限制数量
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 * @method string getMsgId() 获取消息 ID
 * @method void setMsgId(string $MsgId) 设置消息 ID
 * @method string getMsgKey() 获取消息 Key
 * @method void setMsgKey(string $MsgKey) 设置消息 Key
 * @method integer getRecentMessageNum() 获取查询最近N条消息 最大不超过1024，默认-1为其他查询条件
 * @method void setRecentMessageNum(integer $RecentMessageNum) 设置查询最近N条消息 最大不超过1024，默认-1为其他查询条件
 * @method boolean getQueryDeadLetterMessage() 获取是否查询死信消息
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置是否查询死信消息
 * @method string getTag() 获取消息 Tag
 * @method void setTag(string $Tag) 设置消息 Tag
 */
class DescribeMessageListRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 一次查询标识
     */
    public $TaskRequestId;

    /**
     * @var integer 查询起始位置
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量
     */
    public $Limit;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @var string 消息 ID
     */
    public $MsgId;

    /**
     * @var string 消息 Key
     */
    public $MsgKey;

    /**
     * @var integer 查询最近N条消息 最大不超过1024，默认-1为其他查询条件
     */
    public $RecentMessageNum;

    /**
     * @var boolean 是否查询死信消息
     */
    public $QueryDeadLetterMessage;

    /**
     * @var string 消息 Tag
     */
    public $Tag;

    /**
     * @param string $InstanceId 集群ID
     * @param string $Topic 主题名称
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param string $TaskRequestId 一次查询标识
     * @param integer $Offset 查询起始位置
     * @param integer $Limit 查询结果限制数量
     * @param string $ConsumerGroup 消费组名称
     * @param string $MsgId 消息 ID
     * @param string $MsgKey 消息 Key
     * @param integer $RecentMessageNum 查询最近N条消息 最大不超过1024，默认-1为其他查询条件
     * @param boolean $QueryDeadLetterMessage 是否查询死信消息
     * @param string $Tag 消息 Tag
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
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("RecentMessageNum",$param) and $param["RecentMessageNum"] !== null) {
            $this->RecentMessageNum = $param["RecentMessageNum"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
