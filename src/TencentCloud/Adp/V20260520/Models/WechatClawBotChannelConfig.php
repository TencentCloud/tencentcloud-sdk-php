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
 * 微信ClawBot渠道配置
 *
 * @method string getBotId() 获取<p>ClawBot机器人ID（扫码后回填）</p>
 * @method void setBotId(string $BotId) 设置<p>ClawBot机器人ID（扫码后回填）</p>
 * @method string getBotToken() 获取<p>ClawBot机器人Token（扫码后回填）</p>
 * @method void setBotToken(string $BotToken) 设置<p>ClawBot机器人Token（扫码后回填）</p>
 * @method string getQrcodeStatus() 获取<p>二维码状态（wait/confirmed/expired）</p>
 * @method void setQrcodeStatus(string $QrcodeStatus) 设置<p>二维码状态（wait/confirmed/expired）</p>
 * @method string getQrcodeUrl() 获取<p>二维码URL（创建后回填）</p>
 * @method void setQrcodeUrl(string $QrcodeUrl) 设置<p>二维码URL（创建后回填）</p>
 * @method string getWechatUserId() 获取<p>微信用户ID（扫码后回填）</p>
 * @method void setWechatUserId(string $WechatUserId) 设置<p>微信用户ID（扫码后回填）</p>
 */
class WechatClawBotChannelConfig extends AbstractModel
{
    /**
     * @var string <p>ClawBot机器人ID（扫码后回填）</p>
     */
    public $BotId;

    /**
     * @var string <p>ClawBot机器人Token（扫码后回填）</p>
     */
    public $BotToken;

    /**
     * @var string <p>二维码状态（wait/confirmed/expired）</p>
     */
    public $QrcodeStatus;

    /**
     * @var string <p>二维码URL（创建后回填）</p>
     */
    public $QrcodeUrl;

    /**
     * @var string <p>微信用户ID（扫码后回填）</p>
     */
    public $WechatUserId;

    /**
     * @param string $BotId <p>ClawBot机器人ID（扫码后回填）</p>
     * @param string $BotToken <p>ClawBot机器人Token（扫码后回填）</p>
     * @param string $QrcodeStatus <p>二维码状态（wait/confirmed/expired）</p>
     * @param string $QrcodeUrl <p>二维码URL（创建后回填）</p>
     * @param string $WechatUserId <p>微信用户ID（扫码后回填）</p>
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
        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotToken",$param) and $param["BotToken"] !== null) {
            $this->BotToken = $param["BotToken"];
        }

        if (array_key_exists("QrcodeStatus",$param) and $param["QrcodeStatus"] !== null) {
            $this->QrcodeStatus = $param["QrcodeStatus"];
        }

        if (array_key_exists("QrcodeUrl",$param) and $param["QrcodeUrl"] !== null) {
            $this->QrcodeUrl = $param["QrcodeUrl"];
        }

        if (array_key_exists("WechatUserId",$param) and $param["WechatUserId"] !== null) {
            $this->WechatUserId = $param["WechatUserId"];
        }
    }
}
