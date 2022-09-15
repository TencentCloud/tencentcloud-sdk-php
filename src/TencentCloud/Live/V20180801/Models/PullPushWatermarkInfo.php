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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云转推水印信息。
 *
 * @method string getPictureUrl() 获取水印图片 URL。
URL中禁止包含的字符：
;(){}$>`#"'|
 * @method void setPictureUrl(string $PictureUrl) 设置水印图片 URL。
URL中禁止包含的字符：
;(){}$>`#"'|
 * @method integer getXPosition() 获取显示位置，X轴偏移，单位是百分比，默认 0。
 * @method void setXPosition(integer $XPosition) 设置显示位置，X轴偏移，单位是百分比，默认 0。
 * @method integer getYPosition() 获取显示位置，Y轴偏移，单位是百分比，默认 0。
 * @method void setYPosition(integer $YPosition) 设置显示位置，Y轴偏移，单位是百分比，默认 0。
 * @method integer getWidth() 获取水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。
 * @method void setWidth(integer $Width) 设置水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。
 * @method integer getHeight() 获取水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。
 * @method void setHeight(integer $Height) 设置水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。
 * @method integer getLocation() 获取水印位置，默认 0。
0：左上角。
1：右上角。
2：右下角。
3：左下角。
 * @method void setLocation(integer $Location) 设置水印位置，默认 0。
0：左上角。
1：右上角。
2：右下角。
3：左下角。
 */
class PullPushWatermarkInfo extends AbstractModel
{
    /**
     * @var string 水印图片 URL。
URL中禁止包含的字符：
;(){}$>`#"'|
     */
    public $PictureUrl;

    /**
     * @var integer 显示位置，X轴偏移，单位是百分比，默认 0。
     */
    public $XPosition;

    /**
     * @var integer 显示位置，Y轴偏移，单位是百分比，默认 0。
     */
    public $YPosition;

    /**
     * @var integer 水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。
     */
    public $Width;

    /**
     * @var integer 水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。
     */
    public $Height;

    /**
     * @var integer 水印位置，默认 0。
0：左上角。
1：右上角。
2：右下角。
3：左下角。
     */
    public $Location;

    /**
     * @param string $PictureUrl 水印图片 URL。
URL中禁止包含的字符：
;(){}$>`#"'|
     * @param integer $XPosition 显示位置，X轴偏移，单位是百分比，默认 0。
     * @param integer $YPosition 显示位置，Y轴偏移，单位是百分比，默认 0。
     * @param integer $Width 水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。
     * @param integer $Height 水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。
     * @param integer $Location 水印位置，默认 0。
0：左上角。
1：右上角。
2：右下角。
3：左下角。
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
        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
