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
 * 企微机器人WebSocket接入配置
 *
 * @method integer getBindType() 获取<p>绑定类型：1-扫码绑定，2-填写表单绑定</p>
 * @method void setBindType(integer $BindType) 设置<p>绑定类型：1-扫码绑定，2-填写表单绑定</p>
 * @method string getBotId() 获取<p>企微机器人BotId</p>
 * @method void setBotId(string $BotId) 设置<p>企微机器人BotId</p>
 * @method string getBotSecret() 获取<p>企微机器人BotSecret</p>
 * @method void setBotSecret(string $BotSecret) 设置<p>企微机器人BotSecret</p>
 */
class WecomRobotWebsocketAccess extends AbstractModel
{
    /**
     * @var integer <p>绑定类型：1-扫码绑定，2-填写表单绑定</p>
     */
    public $BindType;

    /**
     * @var string <p>企微机器人BotId</p>
     */
    public $BotId;

    /**
     * @var string <p>企微机器人BotSecret</p>
     */
    public $BotSecret;

    /**
     * @param integer $BindType <p>绑定类型：1-扫码绑定，2-填写表单绑定</p>
     * @param string $BotId <p>企微机器人BotId</p>
     * @param string $BotSecret <p>企微机器人BotSecret</p>
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
        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotSecret",$param) and $param["BotSecret"] !== null) {
            $this->BotSecret = $param["BotSecret"];
        }
    }
}
