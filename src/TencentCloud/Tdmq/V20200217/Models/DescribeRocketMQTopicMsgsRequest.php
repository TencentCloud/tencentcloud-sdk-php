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
 * DescribeRocketMQTopicMsgs请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getEnvironmentId() 获取命名空间
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间
 * @method string getTopicName() 获取主题名称，查询死信时为groupId
 * @method void setTopicName(string $TopicName) 设置主题名称，查询死信时为groupId
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getMsgId() 获取消息 ID
 * @method void setMsgId(string $MsgId) 设置消息 ID
 * @method string getMsgKey() 获取消息 key
 * @method void setMsgKey(string $MsgKey) 设置消息 key
 * @method integer getOffset() 获取查询偏移
 * @method void setOffset(integer $Offset) 设置查询偏移
 * @method integer getLimit() 获取查询限额
 * @method void setLimit(integer $Limit) 设置查询限额
 * @method string getTaskRequestId() 获取标志一次分页事务
 * @method void setTaskRequestId(string $TaskRequestId) 设置标志一次分页事务
 * @method boolean getQueryDlqMsg() 获取死信查询时该值为true，只对Rocketmq有效
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) 设置死信查询时该值为true，只对Rocketmq有效
 * @method integer getNumOfLatestMsg() 获取查询最近N条消息 最大不超过1024，默认-1为其他查询条件
 * @method void setNumOfLatestMsg(integer $NumOfLatestMsg) 设置查询最近N条消息 最大不超过1024，默认-1为其他查询条件
 * @method string getTag() 获取TAG表达式
 * @method void setTag(string $Tag) 设置TAG表达式
 * @method boolean getQueryDeadLetterMessage() 获取死信查询时该值为true，只对Rocketmq有效
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置死信查询时该值为true，只对Rocketmq有效
 */
class DescribeRocketMQTopicMsgsRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称，查询死信时为groupId
     */
    public $TopicName;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 消息 ID
     */
    public $MsgId;

    /**
     * @var string 消息 key
     */
    public $MsgKey;

    /**
     * @var integer 查询偏移
     */
    public $Offset;

    /**
     * @var integer 查询限额
     */
    public $Limit;

    /**
     * @var string 标志一次分页事务
     */
    public $TaskRequestId;

    /**
     * @var boolean 死信查询时该值为true，只对Rocketmq有效
     * @deprecated
     */
    public $QueryDlqMsg;

    /**
     * @var integer 查询最近N条消息 最大不超过1024，默认-1为其他查询条件
     */
    public $NumOfLatestMsg;

    /**
     * @var string TAG表达式
     */
    public $Tag;

    /**
     * @var boolean 死信查询时该值为true，只对Rocketmq有效
     */
    public $QueryDeadLetterMessage;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $EnvironmentId 命名空间
     * @param string $TopicName 主题名称，查询死信时为groupId
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $MsgId 消息 ID
     * @param string $MsgKey 消息 key
     * @param integer $Offset 查询偏移
     * @param integer $Limit 查询限额
     * @param string $TaskRequestId 标志一次分页事务
     * @param boolean $QueryDlqMsg 死信查询时该值为true，只对Rocketmq有效
     * @param integer $NumOfLatestMsg 查询最近N条消息 最大不超过1024，默认-1为其他查询条件
     * @param string $Tag TAG表达式
     * @param boolean $QueryDeadLetterMessage 死信查询时该值为true，只对Rocketmq有效
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }

        if (array_key_exists("NumOfLatestMsg",$param) and $param["NumOfLatestMsg"] !== null) {
            $this->NumOfLatestMsg = $param["NumOfLatestMsg"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }
    }
}
