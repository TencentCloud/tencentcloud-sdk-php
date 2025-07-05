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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateWebThemeConfig请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method string getThemeType() 获取主题类型<br/>EMBED_WEB_THEME：嵌入式主题
<ul>
<li>EMBED_WEB_THEME，web页面嵌入的主题风格配置</li>
<li>COMPANY_AUTHENTICATE，子客认证主题配置， 对当前第三方应用号生效，
目前支持的有，背景图替换，隐藏企业认证页面导航栏和隐藏企业认证顶部logo</li>
</ul>
 * @method void setThemeType(string $ThemeType) 设置主题类型<br/>EMBED_WEB_THEME：嵌入式主题
<ul>
<li>EMBED_WEB_THEME，web页面嵌入的主题风格配置</li>
<li>COMPANY_AUTHENTICATE，子客认证主题配置， 对当前第三方应用号生效，
目前支持的有，背景图替换，隐藏企业认证页面导航栏和隐藏企业认证顶部logo</li>
</ul>
 * @method WebThemeConfig getWebThemeConfig() 获取主题配置
 * @method void setWebThemeConfig(WebThemeConfig $WebThemeConfig) 设置主题配置
 */
class ChannelCreateWebThemeConfigRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var string 主题类型<br/>EMBED_WEB_THEME：嵌入式主题
<ul>
<li>EMBED_WEB_THEME，web页面嵌入的主题风格配置</li>
<li>COMPANY_AUTHENTICATE，子客认证主题配置， 对当前第三方应用号生效，
目前支持的有，背景图替换，隐藏企业认证页面导航栏和隐藏企业认证顶部logo</li>
</ul>
     */
    public $ThemeType;

    /**
     * @var WebThemeConfig 主题配置
     */
    public $WebThemeConfig;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param string $ThemeType 主题类型<br/>EMBED_WEB_THEME：嵌入式主题
<ul>
<li>EMBED_WEB_THEME，web页面嵌入的主题风格配置</li>
<li>COMPANY_AUTHENTICATE，子客认证主题配置， 对当前第三方应用号生效，
目前支持的有，背景图替换，隐藏企业认证页面导航栏和隐藏企业认证顶部logo</li>
</ul>
     * @param WebThemeConfig $WebThemeConfig 主题配置
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ThemeType",$param) and $param["ThemeType"] !== null) {
            $this->ThemeType = $param["ThemeType"];
        }

        if (array_key_exists("WebThemeConfig",$param) and $param["WebThemeConfig"] !== null) {
            $this->WebThemeConfig = new WebThemeConfig();
            $this->WebThemeConfig->deserialize($param["WebThemeConfig"]);
        }
    }
}
