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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI助手用户身份信息
 *
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getUin() 获取<p>账号Uin</p>
 * @method void setUin(string $Uin) 设置<p>账号Uin</p>
 * @method string getSubUin() 获取<p>子账号uin</p>
 * @method void setSubUin(string $SubUin) 设置<p>子账号uin</p>
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getBotId() 获取<p>机器人ID</p>
 * @method void setBotId(string $BotId) 设置<p>机器人ID</p>
 * @method string getChatId() 获取<p>聊天ID</p>
 * @method void setChatId(string $ChatId) 设置<p>聊天ID</p>
 * @method string getChannel() 获取<p>渠道标识，如 wecom / qq / wx / feishu / dingtalk / cloud</p>
 * @method void setChannel(string $Channel) 设置<p>渠道标识，如 wecom / qq / wx / feishu / dingtalk / cloud</p>
 */
class AIScheduleUserIdentity extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>账号Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号uin</p>
     */
    public $SubUin;

    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>机器人ID</p>
     */
    public $BotId;

    /**
     * @var string <p>聊天ID</p>
     */
    public $ChatId;

    /**
     * @var string <p>渠道标识，如 wecom / qq / wx / feishu / dingtalk / cloud</p>
     */
    public $Channel;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $Uin <p>账号Uin</p>
     * @param string $SubUin <p>子账号uin</p>
     * @param string $UserId <p>用户ID</p>
     * @param string $BotId <p>机器人ID</p>
     * @param string $ChatId <p>聊天ID</p>
     * @param string $Channel <p>渠道标识，如 wecom / qq / wx / feishu / dingtalk / cloud</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
