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
 * 钉钉机器人渠道配置
 *
 * @method string getAppKey() 获取<p>钉钉机器人ClientId（AppKey）</p>
 * @method void setAppKey(string $AppKey) 设置<p>钉钉机器人ClientId（AppKey）</p>
 * @method string getAppSecret() 获取<p>钉钉机器人ClientSecret（AppSecret）</p>
 * @method void setAppSecret(string $AppSecret) 设置<p>钉钉机器人ClientSecret（AppSecret）</p>
 */
class DingTalkChannelConfig extends AbstractModel
{
    /**
     * @var string <p>钉钉机器人ClientId（AppKey）</p>
     */
    public $AppKey;

    /**
     * @var string <p>钉钉机器人ClientSecret（AppSecret）</p>
     */
    public $AppSecret;

    /**
     * @param string $AppKey <p>钉钉机器人ClientId（AppKey）</p>
     * @param string $AppSecret <p>钉钉机器人ClientSecret（AppSecret）</p>
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
        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppSecret",$param) and $param["AppSecret"] !== null) {
            $this->AppSecret = $param["AppSecret"];
        }
    }
}
