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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConversationMessageList请求参数结构体
 *
 * @method string getConversationId() 获取<p>会话 ID</p>
 * @method void setConversationId(string $ConversationId) 设置<p>会话 ID</p>
 * @method integer getType() 获取<p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
 * @method void setType(integer $Type) 设置<p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
 * @method string getAppKey() 获取<p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
 * @method void setAppKey(string $AppKey) 设置<p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
 * @method integer getLimit() 获取<p>返回记录总数量，默认 10，最大 50。向前或向后查询时，不包含record_id指定记录的消息，查询方向中心向前后查询时，包含record_id指定的记录消息，返回记录数量为前后各limit / 2条，向上取整</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录总数量，默认 10，最大 50。向前或向后查询时，不包含record_id指定记录的消息，查询方向中心向前后查询时，包含record_id指定的记录消息，返回记录数量为前后各limit / 2条，向上取整</p>
 * @method string getLoginSubAccountUin() 获取<p>子用户Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>子用户Uin</p>
 * @method string getLoginUin() 获取<p>主用户Uin</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>主用户Uin</p>
 * @method string getRecordId() 获取<p>查询锚点记录 ID</p>
 * @method void setRecordId(string $RecordId) 设置<p>查询锚点记录 ID</p>
 * @method integer getRecordQueryDirection() 获取<p>相对于 record_id 的查询方向 枚举值: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED(未指定，兼容旧逻辑，默认向前查询), 1-RECORD_QUERY_DIRECTION_BACKWARD(从 record_id 向前查询更早的消息), 2-RECORD_QUERY_DIRECTION_FORWARD(从 record_id 向后查询更新的消息), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL(以 record_id 为中心，同时向前后查询)</p>
 * @method void setRecordQueryDirection(integer $RecordQueryDirection) 设置<p>相对于 record_id 的查询方向 枚举值: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED(未指定，兼容旧逻辑，默认向前查询), 1-RECORD_QUERY_DIRECTION_BACKWARD(从 record_id 向前查询更早的消息), 2-RECORD_QUERY_DIRECTION_FORWARD(从 record_id 向后查询更新的消息), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL(以 record_id 为中心，同时向前后查询)</p>
 * @method string getShareCode() 获取<p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
 * @method void setShareCode(string $ShareCode) 设置<p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
 * @method string getUserId() 获取<p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
 * @method void setUserId(string $UserId) 设置<p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
 */
class DescribeConversationMessageListRequest extends AbstractModel
{
    /**
     * @var string <p>会话 ID</p>
     */
    public $ConversationId;

    /**
     * @var integer <p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
     */
    public $Type;

    /**
     * @var string <p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
     */
    public $AppKey;

    /**
     * @var integer <p>返回记录总数量，默认 10，最大 50。向前或向后查询时，不包含record_id指定记录的消息，查询方向中心向前后查询时，包含record_id指定的记录消息，返回记录数量为前后各limit / 2条，向上取整</p>
     */
    public $Limit;

    /**
     * @var string <p>子用户Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>主用户Uin</p>
     */
    public $LoginUin;

    /**
     * @var string <p>查询锚点记录 ID</p>
     */
    public $RecordId;

    /**
     * @var integer <p>相对于 record_id 的查询方向 枚举值: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED(未指定，兼容旧逻辑，默认向前查询), 1-RECORD_QUERY_DIRECTION_BACKWARD(从 record_id 向前查询更早的消息), 2-RECORD_QUERY_DIRECTION_FORWARD(从 record_id 向后查询更新的消息), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL(以 record_id 为中心，同时向前后查询)</p>
     */
    public $RecordQueryDirection;

    /**
     * @var string <p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
     */
    public $ShareCode;

    /**
     * @var string <p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
     */
    public $UserId;

    /**
     * @param string $ConversationId <p>会话 ID</p>
     * @param integer $Type <p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
     * @param string $AppKey <p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
     * @param integer $Limit <p>返回记录总数量，默认 10，最大 50。向前或向后查询时，不包含record_id指定记录的消息，查询方向中心向前后查询时，包含record_id指定的记录消息，返回记录数量为前后各limit / 2条，向上取整</p>
     * @param string $LoginSubAccountUin <p>子用户Uin</p>
     * @param string $LoginUin <p>主用户Uin</p>
     * @param string $RecordId <p>查询锚点记录 ID</p>
     * @param integer $RecordQueryDirection <p>相对于 record_id 的查询方向 枚举值: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED(未指定，兼容旧逻辑，默认向前查询), 1-RECORD_QUERY_DIRECTION_BACKWARD(从 record_id 向前查询更早的消息), 2-RECORD_QUERY_DIRECTION_FORWARD(从 record_id 向后查询更新的消息), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL(以 record_id 为中心，同时向前后查询)</p>
     * @param string $ShareCode <p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
     * @param string $UserId <p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordQueryDirection",$param) and $param["RecordQueryDirection"] !== null) {
            $this->RecordQueryDirection = $param["RecordQueryDirection"];
        }

        if (array_key_exists("ShareCode",$param) and $param["ShareCode"] !== null) {
            $this->ShareCode = $param["ShareCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
