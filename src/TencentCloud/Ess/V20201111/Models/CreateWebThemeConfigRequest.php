<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWebThemeConfig请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getThemeType() 获取主题类型
<br/>EMBED_WEB_THEME：嵌入式主题
<br/>目前只支持EMBED_WEB_THEME，web页面嵌入的主题风格配置
 * @method void setThemeType(string $ThemeType) 设置主题类型
<br/>EMBED_WEB_THEME：嵌入式主题
<br/>目前只支持EMBED_WEB_THEME，web页面嵌入的主题风格配置
 * @method WebThemeConfig getWebThemeConfig() 获取主题配置
 * @method void setWebThemeConfig(WebThemeConfig $WebThemeConfig) 设置主题配置
 */
class CreateWebThemeConfigRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 主题类型
<br/>EMBED_WEB_THEME：嵌入式主题
<br/>目前只支持EMBED_WEB_THEME，web页面嵌入的主题风格配置
     */
    public $ThemeType;

    /**
     * @var WebThemeConfig 主题配置
     */
    public $WebThemeConfig;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param string $ThemeType 主题类型
<br/>EMBED_WEB_THEME：嵌入式主题
<br/>目前只支持EMBED_WEB_THEME，web页面嵌入的主题风格配置
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
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
