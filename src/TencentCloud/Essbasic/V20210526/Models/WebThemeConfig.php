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
 * 主题配置
 *
 * @method boolean getDisplaySignBrandLogo() 获取是否显示页面底部电子签logo，取值如下：
<ul><li> **true**：页面底部显示电子签logo</li>
<li> **false**：页面底部不显示电子签logo（默认）</li></ul>
 * @method void setDisplaySignBrandLogo(boolean $DisplaySignBrandLogo) 设置是否显示页面底部电子签logo，取值如下：
<ul><li> **true**：页面底部显示电子签logo</li>
<li> **false**：页面底部不显示电子签logo（默认）</li></ul>
 * @method string getWebEmbedThemeColor() 获取主题颜色：
支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
<br/>
 * @method void setWebEmbedThemeColor(string $WebEmbedThemeColor) 设置主题颜色：
支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
<br/>
 * @method string getAuthenticateBackground() 获取企业认证页背景图（base64图片）

 * @method void setAuthenticateBackground(string $AuthenticateBackground) 设置企业认证页背景图（base64图片）

 * @method boolean getHideAuthenticateNavigationBar() 获取隐藏企业认证页面导航栏，取值如下：
<ul><li> **true**：隐藏企业认证页面导航栏</li>
<li> **false**：显示企业认证页面导航栏（默认）</li></ul>
 * @method void setHideAuthenticateNavigationBar(boolean $HideAuthenticateNavigationBar) 设置隐藏企业认证页面导航栏，取值如下：
<ul><li> **true**：隐藏企业认证页面导航栏</li>
<li> **false**：显示企业认证页面导航栏（默认）</li></ul>
 * @method boolean getHideAuthenticateTopLogo() 获取隐藏企业认证顶部logo，取值如下：
<ul><li> **true**：隐藏企业认证顶部logo</li>
<li> **false**：显示企业认证顶部logo（默认）</li></ul>
 * @method void setHideAuthenticateTopLogo(boolean $HideAuthenticateTopLogo) 设置隐藏企业认证顶部logo，取值如下：
<ul><li> **true**：隐藏企业认证顶部logo</li>
<li> **false**：显示企业认证顶部logo（默认）</li></ul>
 */
class WebThemeConfig extends AbstractModel
{
    /**
     * @var boolean 是否显示页面底部电子签logo，取值如下：
<ul><li> **true**：页面底部显示电子签logo</li>
<li> **false**：页面底部不显示电子签logo（默认）</li></ul>
     */
    public $DisplaySignBrandLogo;

    /**
     * @var string 主题颜色：
支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
<br/>
     */
    public $WebEmbedThemeColor;

    /**
     * @var string 企业认证页背景图（base64图片）

     */
    public $AuthenticateBackground;

    /**
     * @var boolean 隐藏企业认证页面导航栏，取值如下：
<ul><li> **true**：隐藏企业认证页面导航栏</li>
<li> **false**：显示企业认证页面导航栏（默认）</li></ul>
     */
    public $HideAuthenticateNavigationBar;

    /**
     * @var boolean 隐藏企业认证顶部logo，取值如下：
<ul><li> **true**：隐藏企业认证顶部logo</li>
<li> **false**：显示企业认证顶部logo（默认）</li></ul>
     */
    public $HideAuthenticateTopLogo;

    /**
     * @param boolean $DisplaySignBrandLogo 是否显示页面底部电子签logo，取值如下：
<ul><li> **true**：页面底部显示电子签logo</li>
<li> **false**：页面底部不显示电子签logo（默认）</li></ul>
     * @param string $WebEmbedThemeColor 主题颜色：
支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
<br/>
     * @param string $AuthenticateBackground 企业认证页背景图（base64图片）

     * @param boolean $HideAuthenticateNavigationBar 隐藏企业认证页面导航栏，取值如下：
<ul><li> **true**：隐藏企业认证页面导航栏</li>
<li> **false**：显示企业认证页面导航栏（默认）</li></ul>
     * @param boolean $HideAuthenticateTopLogo 隐藏企业认证顶部logo，取值如下：
<ul><li> **true**：隐藏企业认证顶部logo</li>
<li> **false**：显示企业认证顶部logo（默认）</li></ul>
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
        if (array_key_exists("DisplaySignBrandLogo",$param) and $param["DisplaySignBrandLogo"] !== null) {
            $this->DisplaySignBrandLogo = $param["DisplaySignBrandLogo"];
        }

        if (array_key_exists("WebEmbedThemeColor",$param) and $param["WebEmbedThemeColor"] !== null) {
            $this->WebEmbedThemeColor = $param["WebEmbedThemeColor"];
        }

        if (array_key_exists("AuthenticateBackground",$param) and $param["AuthenticateBackground"] !== null) {
            $this->AuthenticateBackground = $param["AuthenticateBackground"];
        }

        if (array_key_exists("HideAuthenticateNavigationBar",$param) and $param["HideAuthenticateNavigationBar"] !== null) {
            $this->HideAuthenticateNavigationBar = $param["HideAuthenticateNavigationBar"];
        }

        if (array_key_exists("HideAuthenticateTopLogo",$param) and $param["HideAuthenticateTopLogo"] !== null) {
            $this->HideAuthenticateTopLogo = $param["HideAuthenticateTopLogo"];
        }
    }
}
