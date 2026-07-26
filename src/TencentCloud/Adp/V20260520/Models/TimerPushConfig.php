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
 * TimerPushConfig
 *
 * @method integer getPushChannel() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 不推送 |
| 2 | 微信公众号 |
| 3 | 企业微信 AI 机器人 |
 * @method void setPushChannel(integer $PushChannel) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 不推送 |
| 2 | 微信公众号 |
| 3 | 企业微信 AI 机器人 |
 * @method string getPushTargetId() 获取推送会话ID
 * @method void setPushTargetId(string $PushTargetId) 设置推送会话ID
 * @method integer getPushTargetType() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 用户 (微信公众号 openid) |
| 2 | 群聊 (企微机器人 chat_id) |
 * @method void setPushTargetType(integer $PushTargetType) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 用户 (微信公众号 openid) |
| 2 | 群聊 (企微机器人 chat_id) |
 * @method string getPushWebhookUrl() 获取
 * @method void setPushWebhookUrl(string $PushWebhookUrl) 设置
 */
class TimerPushConfig extends AbstractModel
{
    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 不推送 |
| 2 | 微信公众号 |
| 3 | 企业微信 AI 机器人 |
     */
    public $PushChannel;

    /**
     * @var string 推送会话ID
     */
    public $PushTargetId;

    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 用户 (微信公众号 openid) |
| 2 | 群聊 (企微机器人 chat_id) |
     */
    public $PushTargetType;

    /**
     * @var string 
     */
    public $PushWebhookUrl;

    /**
     * @param integer $PushChannel 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 不推送 |
| 2 | 微信公众号 |
| 3 | 企业微信 AI 机器人 |
     * @param string $PushTargetId 推送会话ID
     * @param integer $PushTargetType 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 用户 (微信公众号 openid) |
| 2 | 群聊 (企微机器人 chat_id) |
     * @param string $PushWebhookUrl 
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
        if (array_key_exists("PushChannel",$param) and $param["PushChannel"] !== null) {
            $this->PushChannel = $param["PushChannel"];
        }

        if (array_key_exists("PushTargetId",$param) and $param["PushTargetId"] !== null) {
            $this->PushTargetId = $param["PushTargetId"];
        }

        if (array_key_exists("PushTargetType",$param) and $param["PushTargetType"] !== null) {
            $this->PushTargetType = $param["PushTargetType"];
        }

        if (array_key_exists("PushWebhookUrl",$param) and $param["PushWebhookUrl"] !== null) {
            $this->PushWebhookUrl = $param["PushWebhookUrl"];
        }
    }
}
