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
 * @method integer getPushChannel() 获取<p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 不推送 |<br>| 2 | 微信公众号 |<br>| 3 | 企业微信 AI 机器人 |</p>
 * @method void setPushChannel(integer $PushChannel) 设置<p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 不推送 |<br>| 2 | 微信公众号 |<br>| 3 | 企业微信 AI 机器人 |</p>
 * @method string getPushTargetId() 获取<p>推送会话ID</p>
 * @method void setPushTargetId(string $PushTargetId) 设置<p>推送会话ID</p>
 * @method integer getPushTargetType() 获取<p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 用户 (微信公众号 openid) |<br>| 2 | 群聊 (企微机器人 chat_id) |</p>
 * @method void setPushTargetType(integer $PushTargetType) 设置<p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 用户 (微信公众号 openid) |<br>| 2 | 群聊 (企微机器人 chat_id) |</p>
 * @method string getPushWebhookUrl() 获取<p>推送webhook的url</p>
 * @method void setPushWebhookUrl(string $PushWebhookUrl) 设置<p>推送webhook的url</p>
 */
class TimerPushConfig extends AbstractModel
{
    /**
     * @var integer <p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 不推送 |<br>| 2 | 微信公众号 |<br>| 3 | 企业微信 AI 机器人 |</p>
     */
    public $PushChannel;

    /**
     * @var string <p>推送会话ID</p>
     */
    public $PushTargetId;

    /**
     * @var integer <p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 用户 (微信公众号 openid) |<br>| 2 | 群聊 (企微机器人 chat_id) |</p>
     */
    public $PushTargetType;

    /**
     * @var string <p>推送webhook的url</p>
     */
    public $PushWebhookUrl;

    /**
     * @param integer $PushChannel <p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 不推送 |<br>| 2 | 微信公众号 |<br>| 3 | 企业微信 AI 机器人 |</p>
     * @param string $PushTargetId <p>推送会话ID</p>
     * @param integer $PushTargetType <p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 |  |<br>| 1 | 用户 (微信公众号 openid) |<br>| 2 | 群聊 (企微机器人 chat_id) |</p>
     * @param string $PushWebhookUrl <p>推送webhook的url</p>
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
