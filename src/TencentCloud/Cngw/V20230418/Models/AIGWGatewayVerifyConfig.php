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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关 MCP Server 网关验签配置
 *
 * @method boolean getEnable() 获取<p>是否开启网关验签</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启网关验签</p>
 * @method string getVerifyType() 获取<p>网关验签类型</p><p>枚举值：</p><ul><li>OAuth： OAuth2</li></ul>
 * @method void setVerifyType(string $VerifyType) 设置<p>网关验签类型</p><p>枚举值：</p><ul><li>OAuth： OAuth2</li></ul>
 * @method AIGWGatewayVerifyOAuthConfig getOAuthConfig() 获取<p>OAuth2验签配置</p>
 * @method void setOAuthConfig(AIGWGatewayVerifyOAuthConfig $OAuthConfig) 设置<p>OAuth2验签配置</p>
 */
class AIGWGatewayVerifyConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启网关验签</p>
     */
    public $Enable;

    /**
     * @var string <p>网关验签类型</p><p>枚举值：</p><ul><li>OAuth： OAuth2</li></ul>
     */
    public $VerifyType;

    /**
     * @var AIGWGatewayVerifyOAuthConfig <p>OAuth2验签配置</p>
     */
    public $OAuthConfig;

    /**
     * @param boolean $Enable <p>是否开启网关验签</p>
     * @param string $VerifyType <p>网关验签类型</p><p>枚举值：</p><ul><li>OAuth： OAuth2</li></ul>
     * @param AIGWGatewayVerifyOAuthConfig $OAuthConfig <p>OAuth2验签配置</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("OAuthConfig",$param) and $param["OAuthConfig"] !== null) {
            $this->OAuthConfig = new AIGWGatewayVerifyOAuthConfig();
            $this->OAuthConfig->deserialize($param["OAuthConfig"]);
        }
    }
}
