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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 背景图相关配置
 *
 * @method string getLandscapeImageUrl() 获取横图(pc)
 * @method void setLandscapeImageUrl(string $LandscapeImageUrl) 设置横图(pc)
 * @method string getOriginalImageUrl() 获取原始图
 * @method void setOriginalImageUrl(string $OriginalImageUrl) 设置原始图
 * @method string getPortraitImageUrl() 获取长图(手机)
 * @method void setPortraitImageUrl(string $PortraitImageUrl) 设置长图(手机)
 * @method string getThemeColor() 获取主题色
 * @method void setThemeColor(string $ThemeColor) 设置主题色
 * @method integer getBrightness() 获取亮度值
 * @method void setBrightness(integer $Brightness) 设置亮度值
 */
class BackgroundImageConfig extends AbstractModel
{
    /**
     * @var string 横图(pc)
     */
    public $LandscapeImageUrl;

    /**
     * @var string 原始图
     */
    public $OriginalImageUrl;

    /**
     * @var string 长图(手机)
     */
    public $PortraitImageUrl;

    /**
     * @var string 主题色
     */
    public $ThemeColor;

    /**
     * @var integer 亮度值
     */
    public $Brightness;

    /**
     * @param string $LandscapeImageUrl 横图(pc)
     * @param string $OriginalImageUrl 原始图
     * @param string $PortraitImageUrl 长图(手机)
     * @param string $ThemeColor 主题色
     * @param integer $Brightness 亮度值
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
        if (array_key_exists("LandscapeImageUrl",$param) and $param["LandscapeImageUrl"] !== null) {
            $this->LandscapeImageUrl = $param["LandscapeImageUrl"];
        }

        if (array_key_exists("OriginalImageUrl",$param) and $param["OriginalImageUrl"] !== null) {
            $this->OriginalImageUrl = $param["OriginalImageUrl"];
        }

        if (array_key_exists("PortraitImageUrl",$param) and $param["PortraitImageUrl"] !== null) {
            $this->PortraitImageUrl = $param["PortraitImageUrl"];
        }

        if (array_key_exists("ThemeColor",$param) and $param["ThemeColor"] !== null) {
            $this->ThemeColor = $param["ThemeColor"];
        }

        if (array_key_exists("Brightness",$param) and $param["Brightness"] !== null) {
            $this->Brightness = $param["Brightness"];
        }
    }
}
