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
 * 座席登录的终端信息
 *
 * @method string getClientType() 获取登录的端类型，"Web"表示web工作台，"WeChatMiniProgram"表示微信小程序
 * @method void setClientType(string $ClientType) 设置登录的端类型，"Web"表示web工作台，"WeChatMiniProgram"表示微信小程序
 * @method boolean getIsConnected() 获取当前登录的端是否在前台。若登录的端是Web，则该值为true；若登录的端是WeChatMiniProgram，true表示打开着微信小程序，false表示微信小程序退到后台
 * @method void setIsConnected(boolean $IsConnected) 设置当前登录的端是否在前台。若登录的端是Web，则该值为true；若登录的端是WeChatMiniProgram，true表示打开着微信小程序，false表示微信小程序退到后台
 */
class ClientInfo extends AbstractModel
{
    /**
     * @var string 登录的端类型，"Web"表示web工作台，"WeChatMiniProgram"表示微信小程序
     */
    public $ClientType;

    /**
     * @var boolean 当前登录的端是否在前台。若登录的端是Web，则该值为true；若登录的端是WeChatMiniProgram，true表示打开着微信小程序，false表示微信小程序退到后台
     */
    public $IsConnected;

    /**
     * @param string $ClientType 登录的端类型，"Web"表示web工作台，"WeChatMiniProgram"表示微信小程序
     * @param boolean $IsConnected 当前登录的端是否在前台。若登录的端是Web，则该值为true；若登录的端是WeChatMiniProgram，true表示打开着微信小程序，false表示微信小程序退到后台
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
        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("IsConnected",$param) and $param["IsConnected"] !== null) {
            $this->IsConnected = $param["IsConnected"];
        }
    }
}
