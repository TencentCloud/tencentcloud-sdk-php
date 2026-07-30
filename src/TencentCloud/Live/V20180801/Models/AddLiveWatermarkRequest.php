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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLiveWatermark请求参数结构体
 *
 * @method string getPictureUrl() 获取<p>水印图片 URL。<br>URL中禁止包含的字符：<br> ;(){}$&gt;`#&quot;'|</p>
 * @method void setPictureUrl(string $PictureUrl) 设置<p>水印图片 URL。<br>URL中禁止包含的字符：<br> ;(){}$&gt;`#&quot;'|</p>
 * @method string getWatermarkName() 获取<p>水印名称。<br>最长30字节。</p>
 * @method void setWatermarkName(string $WatermarkName) 设置<p>水印名称。<br>最长30字节。</p>
 * @method integer getXPosition() 获取<p>显示位置，X轴偏移，单位是百分比，默认 0。</p>
 * @method void setXPosition(integer $XPosition) 设置<p>显示位置，X轴偏移，单位是百分比，默认 0。</p>
 * @method integer getYPosition() 获取<p>显示位置，Y轴偏移，单位是百分比，默认 0。</p>
 * @method void setYPosition(integer $YPosition) 设置<p>显示位置，Y轴偏移，单位是百分比，默认 0。</p>
 * @method integer getWidth() 获取<p>水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。</p>
 * @method void setWidth(integer $Width) 设置<p>水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。</p>
 * @method integer getHeight() 获取<p>水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。</p>
 * @method void setHeight(integer $Height) 设置<p>水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。</p>
 * @method integer getBackgroundWidth() 获取<p>背景水印宽度。默认宽度1920。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
 * @method void setBackgroundWidth(integer $BackgroundWidth) 设置<p>背景水印宽度。默认宽度1920。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
 * @method integer getBackgroundHeight() 获取<p>背景水印高度。默认高度1080。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
 * @method void setBackgroundHeight(integer $BackgroundHeight) 设置<p>背景水印高度。默认高度1080。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
 */
class AddLiveWatermarkRequest extends AbstractModel
{
    /**
     * @var string <p>水印图片 URL。<br>URL中禁止包含的字符：<br> ;(){}$&gt;`#&quot;'|</p>
     */
    public $PictureUrl;

    /**
     * @var string <p>水印名称。<br>最长30字节。</p>
     */
    public $WatermarkName;

    /**
     * @var integer <p>显示位置，X轴偏移，单位是百分比，默认 0。</p>
     */
    public $XPosition;

    /**
     * @var integer <p>显示位置，Y轴偏移，单位是百分比，默认 0。</p>
     */
    public $YPosition;

    /**
     * @var integer <p>水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。</p>
     */
    public $Width;

    /**
     * @var integer <p>水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。</p>
     */
    public $Height;

    /**
     * @var integer <p>背景水印宽度。默认宽度1920。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
     */
    public $BackgroundWidth;

    /**
     * @var integer <p>背景水印高度。默认高度1080。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
     */
    public $BackgroundHeight;

    /**
     * @param string $PictureUrl <p>水印图片 URL。<br>URL中禁止包含的字符：<br> ;(){}$&gt;`#&quot;'|</p>
     * @param string $WatermarkName <p>水印名称。<br>最长30字节。</p>
     * @param integer $XPosition <p>显示位置，X轴偏移，单位是百分比，默认 0。</p>
     * @param integer $YPosition <p>显示位置，Y轴偏移，单位是百分比，默认 0。</p>
     * @param integer $Width <p>水印宽度，占直播原始画面宽度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始宽度。</p>
     * @param integer $Height <p>水印高度，占直播原始画面高度百分比，建议高宽只设置一项，另外一项会自适应缩放，避免变形。默认原始高度。</p>
     * @param integer $BackgroundWidth <p>背景水印宽度。默认宽度1920。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
     * @param integer $BackgroundHeight <p>背景水印高度。默认高度1080。</p><p>取值范围：[360, 4096]</p><p>单位：px</p>
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

        if (array_key_exists("WatermarkName",$param) and $param["WatermarkName"] !== null) {
            $this->WatermarkName = $param["WatermarkName"];
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

        if (array_key_exists("BackgroundWidth",$param) and $param["BackgroundWidth"] !== null) {
            $this->BackgroundWidth = $param["BackgroundWidth"];
        }

        if (array_key_exists("BackgroundHeight",$param) and $param["BackgroundHeight"] !== null) {
            $this->BackgroundHeight = $param["BackgroundHeight"];
        }
    }
}
