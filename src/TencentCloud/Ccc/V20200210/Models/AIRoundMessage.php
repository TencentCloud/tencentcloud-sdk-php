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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一轮对话中的用户和 AI 消息
 *
 * @method integer getTimestamp() 获取<p>消息的毫秒级时间戳</p><p>单位：ms</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>消息的毫秒级时间戳</p><p>单位：ms</p>
 * @method UserReplyEvent getUserReply() 获取<p>用户消息</p>
 * @method void setUserReply(UserReplyEvent $UserReply) 设置<p>用户消息</p>
 * @method AISpeakEvent getAISpeak() 获取<p>智能体响应消息</p>
 * @method void setAISpeak(AISpeakEvent $AISpeak) 设置<p>智能体响应消息</p>
 */
class AIRoundMessage extends AbstractModel
{
    /**
     * @var integer <p>消息的毫秒级时间戳</p><p>单位：ms</p>
     */
    public $Timestamp;

    /**
     * @var UserReplyEvent <p>用户消息</p>
     */
    public $UserReply;

    /**
     * @var AISpeakEvent <p>智能体响应消息</p>
     */
    public $AISpeak;

    /**
     * @param integer $Timestamp <p>消息的毫秒级时间戳</p><p>单位：ms</p>
     * @param UserReplyEvent $UserReply <p>用户消息</p>
     * @param AISpeakEvent $AISpeak <p>智能体响应消息</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("UserReply",$param) and $param["UserReply"] !== null) {
            $this->UserReply = new UserReplyEvent();
            $this->UserReply->deserialize($param["UserReply"]);
        }

        if (array_key_exists("AISpeak",$param) and $param["AISpeak"] !== null) {
            $this->AISpeak = new AISpeakEvent();
            $this->AISpeak->deserialize($param["AISpeak"]);
        }
    }
}
