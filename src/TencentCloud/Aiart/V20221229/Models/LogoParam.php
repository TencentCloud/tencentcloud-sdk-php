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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * logo参数
 *
 * @method string getLogoUrl() 获取水印url
 * @method void setLogoUrl(string $LogoUrl) 设置水印url
 * @method string getLogoImage() 获取水印base64，url和base64二选一传入
 * @method void setLogoImage(string $LogoImage) 设置水印base64，url和base64二选一传入
 * @method LogoRect getLogoRect() 获取水印图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配
 * @method void setLogoRect(LogoRect $LogoRect) 设置水印图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配
 */
class LogoParam extends AbstractModel
{
    /**
     * @var string 水印url
     */
    public $LogoUrl;

    /**
     * @var string 水印base64，url和base64二选一传入
     */
    public $LogoImage;

    /**
     * @var LogoRect 水印图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配
     */
    public $LogoRect;

    /**
     * @param string $LogoUrl 水印url
     * @param string $LogoImage 水印base64，url和base64二选一传入
     * @param LogoRect $LogoRect 水印图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配
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
        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("LogoImage",$param) and $param["LogoImage"] !== null) {
            $this->LogoImage = $param["LogoImage"];
        }

        if (array_key_exists("LogoRect",$param) and $param["LogoRect"] !== null) {
            $this->LogoRect = new LogoRect();
            $this->LogoRect->deserialize($param["LogoRect"]);
        }
    }
}
