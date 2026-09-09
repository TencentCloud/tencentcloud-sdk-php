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
 * LINE渠道配置
 *
 * @method string getAccessToken() 获取<p>LINE Channel Access Token</p>
 * @method void setAccessToken(string $AccessToken) 设置<p>LINE Channel Access Token</p>
 * @method string getCallbackUrl() 获取<p>LINE回调地址</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>LINE回调地址</p>
 * @method string getChannelSecret() 获取<p>LINE Channel Secret</p>
 * @method void setChannelSecret(string $ChannelSecret) 设置<p>LINE Channel Secret</p>
 */
class LineChannelConfig extends AbstractModel
{
    /**
     * @var string <p>LINE Channel Access Token</p>
     */
    public $AccessToken;

    /**
     * @var string <p>LINE回调地址</p>
     */
    public $CallbackUrl;

    /**
     * @var string <p>LINE Channel Secret</p>
     */
    public $ChannelSecret;

    /**
     * @param string $AccessToken <p>LINE Channel Access Token</p>
     * @param string $CallbackUrl <p>LINE回调地址</p>
     * @param string $ChannelSecret <p>LINE Channel Secret</p>
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
        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ChannelSecret",$param) and $param["ChannelSecret"] !== null) {
            $this->ChannelSecret = $param["ChannelSecret"];
        }
    }
}
