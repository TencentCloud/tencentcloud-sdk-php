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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕压制模块背景配置
 *
 * @method integer getSubtitleBoardConfigSwitch() 获取字幕压制模块背景配置开关，0关闭，1开启，默认0
 * @method void setSubtitleBoardConfigSwitch(integer $SubtitleBoardConfigSwitch) 设置字幕压制模块背景配置开关，0关闭，1开启，默认0
 * @method integer getBoardX() 获取字幕背景底板的x轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[-4096,4096]。
- 百分百：N%，N范围：[-100,100]；例如10%表示字幕背景底板x坐标=10%*源视频宽度。

默认值：0px。
注意：坐标轴原点位于源视频的中轴线底部，字幕底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method void setBoardX(integer $BoardX) 设置字幕背景底板的x轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[-4096,4096]。
- 百分百：N%，N范围：[-100,100]；例如10%表示字幕背景底板x坐标=10%*源视频宽度。

默认值：0px。
注意：坐标轴原点位于源视频的中轴线底部，字幕底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method integer getBoardXUnit() 获取BoardX单位, 0 像素，1百分比，默认为0，像素
 * @method void setBoardXUnit(integer $BoardXUnit) 设置BoardX单位, 0 像素，1百分比，默认为0，像素
 * @method integer getBoardY() 获取字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method void setBoardY(integer $BoardY) 设置字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method integer getBoardYUnit() 获取BoardY单位, 0 像素，1百分比，默认为0，像素
 * @method void setBoardYUnit(integer $BoardYUnit) 设置BoardY单位, 0 像素，1百分比，默认为0，像素
 * @method integer getBoardWidth() 获取底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

 * @method void setBoardWidth(integer $BoardWidth) 设置底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

 * @method integer getBoardWidthUnit() 获取底板的宽度单位，0 像素，1百分比，默认为0，像素

 * @method void setBoardWidthUnit(integer $BoardWidthUnit) 设置底板的宽度单位，0 像素，1百分比，默认为0，像素

 * @method integer getBoardHeight() 获取底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

 * @method void setBoardHeight(integer $BoardHeight) 设置底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

 * @method integer getBoardHeightUnit() 获取底板的高度单位，0 像素，1百分比，默认为0，像素

 * @method void setBoardHeightUnit(integer $BoardHeightUnit) 设置底板的高度单位，0 像素，1百分比，默认为0，像素

 * @method string getBoardColor() 获取底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
 * @method void setBoardColor(string $BoardColor) 设置底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
 * @method float getBoardAlpha() 获取字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
 * @method void setBoardAlpha(float $BoardAlpha) 设置字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
 */
class SubtitleBoardConfig extends AbstractModel
{
    /**
     * @var integer 字幕压制模块背景配置开关，0关闭，1开启，默认0
     */
    public $SubtitleBoardConfigSwitch;

    /**
     * @var integer 字幕背景底板的x轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[-4096,4096]。
- 百分百：N%，N范围：[-100,100]；例如10%表示字幕背景底板x坐标=10%*源视频宽度。

默认值：0px。
注意：坐标轴原点位于源视频的中轴线底部，字幕底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     */
    public $BoardX;

    /**
     * @var integer BoardX单位, 0 像素，1百分比，默认为0，像素
     */
    public $BoardXUnit;

    /**
     * @var integer 字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     */
    public $BoardY;

    /**
     * @var integer BoardY单位, 0 像素，1百分比，默认为0，像素
     */
    public $BoardYUnit;

    /**
     * @var integer 底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

     */
    public $BoardWidth;

    /**
     * @var integer 底板的宽度单位，0 像素，1百分比，默认为0，像素

     */
    public $BoardWidthUnit;

    /**
     * @var integer 底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

     */
    public $BoardHeight;

    /**
     * @var integer 底板的高度单位，0 像素，1百分比，默认为0，像素

     */
    public $BoardHeightUnit;

    /**
     * @var string 底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
     */
    public $BoardColor;

    /**
     * @var float 字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
     */
    public $BoardAlpha;

    /**
     * @param integer $SubtitleBoardConfigSwitch 字幕压制模块背景配置开关，0关闭，1开启，默认0
     * @param integer $BoardX 字幕背景底板的x轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[-4096,4096]。
- 百分百：N%，N范围：[-100,100]；例如10%表示字幕背景底板x坐标=10%*源视频宽度。

默认值：0px。
注意：坐标轴原点位于源视频的中轴线底部，字幕底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     * @param integer $BoardXUnit BoardX单位, 0 像素，1百分比，默认为0，像素
     * @param integer $BoardY 字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     * @param integer $BoardYUnit BoardY单位, 0 像素，1百分比，默认为0，像素
     * @param integer $BoardWidth 底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

     * @param integer $BoardWidthUnit 底板的宽度单位，0 像素，1百分比，默认为0，像素

     * @param integer $BoardHeight 底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

     * @param integer $BoardHeightUnit 底板的高度单位，0 像素，1百分比，默认为0，像素

     * @param string $BoardColor 底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
     * @param float $BoardAlpha 字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
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
        if (array_key_exists("SubtitleBoardConfigSwitch",$param) and $param["SubtitleBoardConfigSwitch"] !== null) {
            $this->SubtitleBoardConfigSwitch = $param["SubtitleBoardConfigSwitch"];
        }

        if (array_key_exists("BoardX",$param) and $param["BoardX"] !== null) {
            $this->BoardX = $param["BoardX"];
        }

        if (array_key_exists("BoardXUnit",$param) and $param["BoardXUnit"] !== null) {
            $this->BoardXUnit = $param["BoardXUnit"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("BoardYUnit",$param) and $param["BoardYUnit"] !== null) {
            $this->BoardYUnit = $param["BoardYUnit"];
        }

        if (array_key_exists("BoardWidth",$param) and $param["BoardWidth"] !== null) {
            $this->BoardWidth = $param["BoardWidth"];
        }

        if (array_key_exists("BoardWidthUnit",$param) and $param["BoardWidthUnit"] !== null) {
            $this->BoardWidthUnit = $param["BoardWidthUnit"];
        }

        if (array_key_exists("BoardHeight",$param) and $param["BoardHeight"] !== null) {
            $this->BoardHeight = $param["BoardHeight"];
        }

        if (array_key_exists("BoardHeightUnit",$param) and $param["BoardHeightUnit"] !== null) {
            $this->BoardHeightUnit = $param["BoardHeightUnit"];
        }

        if (array_key_exists("BoardColor",$param) and $param["BoardColor"] !== null) {
            $this->BoardColor = $param["BoardColor"];
        }

        if (array_key_exists("BoardAlpha",$param) and $param["BoardAlpha"] !== null) {
            $this->BoardAlpha = $param["BoardAlpha"];
        }
    }
}
