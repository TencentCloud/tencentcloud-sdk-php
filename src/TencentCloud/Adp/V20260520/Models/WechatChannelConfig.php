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
 * 微信公众号/小程序渠道配置
 *
 * @method string getQrcodeUrl() 获取<p>授权二维码URL（创建后回填）</p>
 * @method void setQrcodeUrl(string $QrcodeUrl) 设置<p>授权二维码URL（创建后回填）</p>
 * @method string getWechatAppId() 获取<p>公众号/小程序AppId（授权后回填）</p>
 * @method void setWechatAppId(string $WechatAppId) 设置<p>公众号/小程序AppId（授权后回填）</p>
 * @method string getWechatRefreshToken() 获取<p>公众号/小程序RefreshToken（授权后回填）</p>
 * @method void setWechatRefreshToken(string $WechatRefreshToken) 设置<p>公众号/小程序RefreshToken（授权后回填）</p>
 */
class WechatChannelConfig extends AbstractModel
{
    /**
     * @var string <p>授权二维码URL（创建后回填）</p>
     */
    public $QrcodeUrl;

    /**
     * @var string <p>公众号/小程序AppId（授权后回填）</p>
     */
    public $WechatAppId;

    /**
     * @var string <p>公众号/小程序RefreshToken（授权后回填）</p>
     */
    public $WechatRefreshToken;

    /**
     * @param string $QrcodeUrl <p>授权二维码URL（创建后回填）</p>
     * @param string $WechatAppId <p>公众号/小程序AppId（授权后回填）</p>
     * @param string $WechatRefreshToken <p>公众号/小程序RefreshToken（授权后回填）</p>
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
        if (array_key_exists("QrcodeUrl",$param) and $param["QrcodeUrl"] !== null) {
            $this->QrcodeUrl = $param["QrcodeUrl"];
        }

        if (array_key_exists("WechatAppId",$param) and $param["WechatAppId"] !== null) {
            $this->WechatAppId = $param["WechatAppId"];
        }

        if (array_key_exists("WechatRefreshToken",$param) and $param["WechatRefreshToken"] !== null) {
            $this->WechatRefreshToken = $param["WechatRefreshToken"];
        }
    }
}
