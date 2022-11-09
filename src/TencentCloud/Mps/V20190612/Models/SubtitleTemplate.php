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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕流配置参数。
 *
 * @method string getPath() 获取要压制到视频中的字幕文件地址。
 * @method void setPath(string $Path) 设置要压制到视频中的字幕文件地址。
 * @method integer getStreamIndex() 获取指定要压制到视频中的字幕轨道，如果有指定Path，则Path 优先级更高。Path 和 StreamIndex 至少指定一个。
 * @method void setStreamIndex(integer $StreamIndex) 设置指定要压制到视频中的字幕轨道，如果有指定Path，则Path 优先级更高。Path 和 StreamIndex 至少指定一个。
 * @method string getFontType() 获取字体类型，
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>simkai.ttf：楷体</li>
<li>arial.ttf：仅支持英文</li>
默认hei.ttf
 * @method void setFontType(string $FontType) 设置字体类型，
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>simkai.ttf：楷体</li>
<li>arial.ttf：仅支持英文</li>
默认hei.ttf
 * @method string getFontSize() 获取字体大小，格式：Npx，N 为数值，不指定则以字幕文件中为准。
 * @method void setFontSize(string $FontSize) 设置字体大小，格式：Npx，N 为数值，不指定则以字幕文件中为准。
 * @method string getFontColor() 获取字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）
 * @method void setFontColor(string $FontColor) 设置字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）
 * @method float getFontAlpha() 获取文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
 * @method void setFontAlpha(float $FontAlpha) 设置文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
 */
class SubtitleTemplate extends AbstractModel
{
    /**
     * @var string 要压制到视频中的字幕文件地址。
     */
    public $Path;

    /**
     * @var integer 指定要压制到视频中的字幕轨道，如果有指定Path，则Path 优先级更高。Path 和 StreamIndex 至少指定一个。
     */
    public $StreamIndex;

    /**
     * @var string 字体类型，
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>simkai.ttf：楷体</li>
<li>arial.ttf：仅支持英文</li>
默认hei.ttf
     */
    public $FontType;

    /**
     * @var string 字体大小，格式：Npx，N 为数值，不指定则以字幕文件中为准。
     */
    public $FontSize;

    /**
     * @var string 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）
     */
    public $FontColor;

    /**
     * @var float 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
     */
    public $FontAlpha;

    /**
     * @param string $Path 要压制到视频中的字幕文件地址。
     * @param integer $StreamIndex 指定要压制到视频中的字幕轨道，如果有指定Path，则Path 优先级更高。Path 和 StreamIndex 至少指定一个。
     * @param string $FontType 字体类型，
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>simkai.ttf：楷体</li>
<li>arial.ttf：仅支持英文</li>
默认hei.ttf
     * @param string $FontSize 字体大小，格式：Npx，N 为数值，不指定则以字幕文件中为准。
     * @param string $FontColor 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）
     * @param float $FontAlpha 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StreamIndex",$param) and $param["StreamIndex"] !== null) {
            $this->StreamIndex = $param["StreamIndex"];
        }

        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }
    }
}
