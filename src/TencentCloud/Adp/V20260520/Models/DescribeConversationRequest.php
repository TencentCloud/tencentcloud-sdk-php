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
 * DescribeConversation请求参数结构体
 *
 * @method string getConversationId() 获取<p>会话 ID</p>
 * @method void setConversationId(string $ConversationId) 设置<p>会话 ID</p>
 * @method integer getType() 获取<p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
 * @method void setType(integer $Type) 设置<p>会话类型 枚举值: 0-CONVERSATION_TYPE_UNSPECIFIED(未指定；列表查询时表示全部), 1-CONVERSATION_TYPE_VISITOR(访客端体验), 2-CONVERSATION_TYPE_EVALUATION(评测), 5-CONVERSATION_TYPE_API(API 接入), 10-CONVERSATION_TYPE_WORKFLOW(工作流调试), 20-CONVERSATION_TYPE_SHARE(分享链接)</p>
 * @method string getAppKey() 获取<p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
 * @method void setAppKey(string $AppKey) 设置<p>Type=CONVERSATION_TYPE_API 时必填，应用密钥</p>
 * @method string getLoginSubAccountUin() 获取<p>主用户Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>主用户Uin</p>
 * @method string getLoginUin() 获取<p>子用户Uin</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>子用户Uin</p>
 * @method string getShareCode() 获取<p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
 * @method void setShareCode(string $ShareCode) 设置<p>Type=CONVERSATION_TYPE_SHARE 时必填，分享码</p>
 * @method string getUserId() 获取<p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
 * @method void setUserId(string $UserId) 设置<p>Type=CONVERSATION_TYPE_API 时必填，访客ID</p>
 */
class DescribeConversationRequest extends AbstractModel
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
     * @var string <p>主用户Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>子用户Uin</p>
     */
    public $LoginUin;

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
     * @param string $LoginSubAccountUin <p>主用户Uin</p>
     * @param string $LoginUin <p>子用户Uin</p>
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

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("ShareCode",$param) and $param["ShareCode"] !== null) {
            $this->ShareCode = $param["ShareCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
