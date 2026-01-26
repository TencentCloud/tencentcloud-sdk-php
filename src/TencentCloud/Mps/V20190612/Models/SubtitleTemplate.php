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
 * 字幕流配置参数。
 *
 * @method string getPath() 获取要压制到视频中的字幕文件地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置要压制到视频中的字幕文件地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStreamIndex() 获取指定要压制到视频中的字幕轨道，Streamindex的取值从0开始，0表示使用源视频中的第一条字幕轨。如果指定了Path，则优先使用Path。Path 和 StreamIndex 至少指定一个。

- 注意：StreamIndex必须与源文件中的字幕轨索引一致。例如，源文件中的字幕轨为stream#0:3，则StreamIndex应为3，否则可能导致任务处理失败。


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamIndex(integer $StreamIndex) 设置指定要压制到视频中的字幕轨道，Streamindex的取值从0开始，0表示使用源视频中的第一条字幕轨。如果指定了Path，则优先使用Path。Path 和 StreamIndex 至少指定一个。

- 注意：StreamIndex必须与源文件中的字幕轨索引一致。例如，源文件中的字幕轨为stream#0:3，则StreamIndex应为3，否则可能导致任务处理失败。


注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInputInfo getSubtitleFileInput() 获取要压制到视频中的字幕文件的输入信息，目前仅支持存储在COS的字幕文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleFileInput(MediaInputInfo $SubtitleFileInput) 设置要压制到视频中的字幕文件的输入信息，目前仅支持存储在COS的字幕文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInputInfo getFontFileInput() 获取压制字幕字体文件的输入信息，目前仅支持url和cos。都填时url优先于cos。填了FontFileInput时FontFileInput优先于FontType

 * @method void setFontFileInput(MediaInputInfo $FontFileInput) 设置压制字幕字体文件的输入信息，目前仅支持url和cos。都填时url优先于cos。填了FontFileInput时FontFileInput优先于FontType

 * @method string getFontType() 获取字体类型，支持：
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>kai.ttf（推荐）或 simkai.ttf：楷体</li>
<li>msyh.ttf：微软雅黑</li>
<li>msyhbd.ttf：微软雅黑加粗</li>
<li>hkjgt.ttf：华康金刚体</li>
<li>dhttx.ttf：典黑体特细</li>
<li>xqgdzt.ttf：喜鹊古字典体</li>
<li>qpcyt.ttf：巧拼超圆体</li>
<li>arial.ttf：仅支持英文</li>
<li>dinalternate.ttf：DIN Alternate Bold</li>
<li>helveticalt.ttf：Helvetica</li>
<li>helveticains.ttf：Helvetica Inserat</li>
<li>trajanpro.ttf：TrajanPro-Bold</li>
<li>korean.ttf：韩语</li>
<li>japanese.ttf：日语</li>
<li>thai.ttf：泰语</li>
默认：hei.ttf 黑体。
<br>注意：
<li>楷体推荐使用kai.ttf</li>
<li>填了FontFileInput时FontFileInput优先</li>

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFontType(string $FontType) 设置字体类型，支持：
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>kai.ttf（推荐）或 simkai.ttf：楷体</li>
<li>msyh.ttf：微软雅黑</li>
<li>msyhbd.ttf：微软雅黑加粗</li>
<li>hkjgt.ttf：华康金刚体</li>
<li>dhttx.ttf：典黑体特细</li>
<li>xqgdzt.ttf：喜鹊古字典体</li>
<li>qpcyt.ttf：巧拼超圆体</li>
<li>arial.ttf：仅支持英文</li>
<li>dinalternate.ttf：DIN Alternate Bold</li>
<li>helveticalt.ttf：Helvetica</li>
<li>helveticains.ttf：Helvetica Inserat</li>
<li>trajanpro.ttf：TrajanPro-Bold</li>
<li>korean.ttf：韩语</li>
<li>japanese.ttf：日语</li>
<li>thai.ttf：泰语</li>
默认：hei.ttf 黑体。
<br>注意：
<li>楷体推荐使用kai.ttf</li>
<li>填了FontFileInput时FontFileInput优先</li>

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFontSize() 获取字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：

- 像素：Npx，N范围：(0,4096]。
- 百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。

不填且字幕文件无设置时，默认源视频高度的5%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFontSize(string $FontSize) 设置字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：

- 像素：Npx，N范围：(0,4096]。
- 百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。

不填且字幕文件无设置时，默认源视频高度的5%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFontColor() 获取字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFontColor(string $FontColor) 设置字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFontAlpha() 获取文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFontAlpha(float $FontAlpha) 设置文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYPos() 获取字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。

默认值：源视频高度*4%。
注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYPos(string $YPos) 设置字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。

默认值：源视频高度*4%。
注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBoardY() 获取字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardY(string $BoardY) 设置字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBoardWidth() 获取底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardWidth(integer $BoardWidth) 设置底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBoardHeight() 获取底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardHeight(integer $BoardHeight) 设置底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBoardColor() 获取底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardColor(string $BoardColor) 设置底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBoardAlpha() 获取字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardAlpha(float $BoardAlpha) 设置字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOutlineWidth() 获取描边宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认源视频高度的0.3%。

 * @method void setOutlineWidth(float $OutlineWidth) 设置描边宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认源视频高度的0.3%。

 * @method string getOutlineColor() 获取描边颜色。6位16进制RGB。不填默认黑色。

 * @method void setOutlineColor(string $OutlineColor) 设置描边颜色。6位16进制RGB。不填默认黑色。

 * @method float getOutlineAlpha() 获取描边透明度。(0，1] 正浮点数。不填默认1，完全不透明

 * @method void setOutlineAlpha(float $OutlineAlpha) 设置描边透明度。(0，1] 正浮点数。不填默认1，完全不透明

 * @method float getShadowWidth() 获取阴影宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认无阴影。

 * @method void setShadowWidth(float $ShadowWidth) 设置阴影宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认无阴影。

 * @method string getShadowColor() 获取阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

 * @method void setShadowColor(string $ShadowColor) 设置阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

 * @method float getShadowAlpha() 获取阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

 * @method void setShadowAlpha(float $ShadowAlpha) 设置阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

 * @method integer getLineSpacing() 获取行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

 * @method void setLineSpacing(integer $LineSpacing) 设置行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

 * @method string getAlignment() 获取对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

 * @method void setAlignment(string $Alignment) 设置对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

 * @method integer getBoardWidthUnit() 获取默认0。为1时BoardWidth代表百分之几，以视频宽为基准

 * @method void setBoardWidthUnit(integer $BoardWidthUnit) 设置默认0。为1时BoardWidth代表百分之几，以视频宽为基准

 * @method integer getBoardHeightUnit() 获取默认0。为1时BoardHeight代表百分之几，以视频高为基准

 * @method void setBoardHeightUnit(integer $BoardHeightUnit) 设置默认0。为1时BoardHeight代表百分之几，以视频高为基准

 * @method integer getOutlineWidthUnit() 获取默认0。为1时OutlineWidth代表百分之几，以视频高为基准

 * @method void setOutlineWidthUnit(integer $OutlineWidthUnit) 设置默认0。为1时OutlineWidth代表百分之几，以视频高为基准

 * @method integer getShadowWidthUnit() 获取默认0。为1时ShadowWidth代表百分之几，以视频高为基准

 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) 设置默认0。为1时ShadowWidth代表百分之几，以视频高为基准

 * @method integer getLineSpacingUnit() 获取默认0。为1时LineSpacing代表百分之几，以视频高为基准

 * @method void setLineSpacingUnit(integer $LineSpacingUnit) 设置默认0。为1时LineSpacing代表百分之几，以视频高为基准
 */
class SubtitleTemplate extends AbstractModel
{
    /**
     * @var string 要压制到视频中的字幕文件地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer 指定要压制到视频中的字幕轨道，Streamindex的取值从0开始，0表示使用源视频中的第一条字幕轨。如果指定了Path，则优先使用Path。Path 和 StreamIndex 至少指定一个。

- 注意：StreamIndex必须与源文件中的字幕轨索引一致。例如，源文件中的字幕轨为stream#0:3，则StreamIndex应为3，否则可能导致任务处理失败。


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamIndex;

    /**
     * @var MediaInputInfo 要压制到视频中的字幕文件的输入信息，目前仅支持存储在COS的字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleFileInput;

    /**
     * @var MediaInputInfo 压制字幕字体文件的输入信息，目前仅支持url和cos。都填时url优先于cos。填了FontFileInput时FontFileInput优先于FontType

     */
    public $FontFileInput;

    /**
     * @var string 字体类型，支持：
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>kai.ttf（推荐）或 simkai.ttf：楷体</li>
<li>msyh.ttf：微软雅黑</li>
<li>msyhbd.ttf：微软雅黑加粗</li>
<li>hkjgt.ttf：华康金刚体</li>
<li>dhttx.ttf：典黑体特细</li>
<li>xqgdzt.ttf：喜鹊古字典体</li>
<li>qpcyt.ttf：巧拼超圆体</li>
<li>arial.ttf：仅支持英文</li>
<li>dinalternate.ttf：DIN Alternate Bold</li>
<li>helveticalt.ttf：Helvetica</li>
<li>helveticains.ttf：Helvetica Inserat</li>
<li>trajanpro.ttf：TrajanPro-Bold</li>
<li>korean.ttf：韩语</li>
<li>japanese.ttf：日语</li>
<li>thai.ttf：泰语</li>
默认：hei.ttf 黑体。
<br>注意：
<li>楷体推荐使用kai.ttf</li>
<li>填了FontFileInput时FontFileInput优先</li>

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FontType;

    /**
     * @var string 字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：

- 像素：Npx，N范围：(0,4096]。
- 百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。

不填且字幕文件无设置时，默认源视频高度的5%。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FontSize;

    /**
     * @var string 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FontColor;

    /**
     * @var float 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FontAlpha;

    /**
     * @var string 字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。

默认值：源视频高度*4%。
注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YPos;

    /**
     * @var string 字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardY;

    /**
     * @var integer 底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardWidth;

    /**
     * @var integer 底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardHeight;

    /**
     * @var string 底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardColor;

    /**
     * @var float 字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardAlpha;

    /**
     * @var float 描边宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认源视频高度的0.3%。

     */
    public $OutlineWidth;

    /**
     * @var string 描边颜色。6位16进制RGB。不填默认黑色。

     */
    public $OutlineColor;

    /**
     * @var float 描边透明度。(0，1] 正浮点数。不填默认1，完全不透明

     */
    public $OutlineAlpha;

    /**
     * @var float 阴影宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认无阴影。

     */
    public $ShadowWidth;

    /**
     * @var string 阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

     */
    public $ShadowColor;

    /**
     * @var float 阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

     */
    public $ShadowAlpha;

    /**
     * @var integer 行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

     */
    public $LineSpacing;

    /**
     * @var string 对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

     */
    public $Alignment;

    /**
     * @var integer 默认0。为1时BoardWidth代表百分之几，以视频宽为基准

     */
    public $BoardWidthUnit;

    /**
     * @var integer 默认0。为1时BoardHeight代表百分之几，以视频高为基准

     */
    public $BoardHeightUnit;

    /**
     * @var integer 默认0。为1时OutlineWidth代表百分之几，以视频高为基准

     */
    public $OutlineWidthUnit;

    /**
     * @var integer 默认0。为1时ShadowWidth代表百分之几，以视频高为基准

     */
    public $ShadowWidthUnit;

    /**
     * @var integer 默认0。为1时LineSpacing代表百分之几，以视频高为基准

     */
    public $LineSpacingUnit;

    /**
     * @param string $Path 要压制到视频中的字幕文件地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StreamIndex 指定要压制到视频中的字幕轨道，Streamindex的取值从0开始，0表示使用源视频中的第一条字幕轨。如果指定了Path，则优先使用Path。Path 和 StreamIndex 至少指定一个。

- 注意：StreamIndex必须与源文件中的字幕轨索引一致。例如，源文件中的字幕轨为stream#0:3，则StreamIndex应为3，否则可能导致任务处理失败。


注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInputInfo $SubtitleFileInput 要压制到视频中的字幕文件的输入信息，目前仅支持存储在COS的字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInputInfo $FontFileInput 压制字幕字体文件的输入信息，目前仅支持url和cos。都填时url优先于cos。填了FontFileInput时FontFileInput优先于FontType

     * @param string $FontType 字体类型，支持：
<li>hei.ttf：黑体</li>
<li>song.ttf：宋体</li>
<li>kai.ttf（推荐）或 simkai.ttf：楷体</li>
<li>msyh.ttf：微软雅黑</li>
<li>msyhbd.ttf：微软雅黑加粗</li>
<li>hkjgt.ttf：华康金刚体</li>
<li>dhttx.ttf：典黑体特细</li>
<li>xqgdzt.ttf：喜鹊古字典体</li>
<li>qpcyt.ttf：巧拼超圆体</li>
<li>arial.ttf：仅支持英文</li>
<li>dinalternate.ttf：DIN Alternate Bold</li>
<li>helveticalt.ttf：Helvetica</li>
<li>helveticains.ttf：Helvetica Inserat</li>
<li>trajanpro.ttf：TrajanPro-Bold</li>
<li>korean.ttf：韩语</li>
<li>japanese.ttf：日语</li>
<li>thai.ttf：泰语</li>
默认：hei.ttf 黑体。
<br>注意：
<li>楷体推荐使用kai.ttf</li>
<li>填了FontFileInput时FontFileInput优先</li>

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FontSize 字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：

- 像素：Npx，N范围：(0,4096]。
- 百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。

不填且字幕文件无设置时，默认源视频高度的5%。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FontColor 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FontAlpha 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：1。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YPos 字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。

默认值：源视频高度*4%。
注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BoardY 字幕背景底板的y轴坐标位置；支持像素和百分比格式：

- 像素：Npx，N范围：[0,4096]。
- 百分百：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。

不传表示不开启字幕背景底板。
注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BoardWidth 底板的宽度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认源视频宽像素的90%。

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BoardHeight 底板的高度，正整数。
- 代表像素时，取值范围：[0,4096]。
- 代表百分数时，[0, 100]。
开启底板且不填此值时，默认为源视频高像素的15%。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BoardColor 底板颜色。格式：0xRRGGBB，
默认值：0x000000（黑色）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $BoardAlpha 字幕背景板透明度，取值范围：[0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
默认值：0.8。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OutlineWidth 描边宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认源视频高度的0.3%。

     * @param string $OutlineColor 描边颜色。6位16进制RGB。不填默认黑色。

     * @param float $OutlineAlpha 描边透明度。(0，1] 正浮点数。不填默认1，完全不透明

     * @param float $ShadowWidth 阴影宽度。浮点数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。
不填默认无阴影。

     * @param string $ShadowColor 阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

     * @param float $ShadowAlpha 阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

     * @param integer $LineSpacing 行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

     * @param string $Alignment 对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

     * @param integer $BoardWidthUnit 默认0。为1时BoardWidth代表百分之几，以视频宽为基准

     * @param integer $BoardHeightUnit 默认0。为1时BoardHeight代表百分之几，以视频高为基准

     * @param integer $OutlineWidthUnit 默认0。为1时OutlineWidth代表百分之几，以视频高为基准

     * @param integer $ShadowWidthUnit 默认0。为1时ShadowWidth代表百分之几，以视频高为基准

     * @param integer $LineSpacingUnit 默认0。为1时LineSpacing代表百分之几，以视频高为基准
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

        if (array_key_exists("SubtitleFileInput",$param) and $param["SubtitleFileInput"] !== null) {
            $this->SubtitleFileInput = new MediaInputInfo();
            $this->SubtitleFileInput->deserialize($param["SubtitleFileInput"]);
        }

        if (array_key_exists("FontFileInput",$param) and $param["FontFileInput"] !== null) {
            $this->FontFileInput = new MediaInputInfo();
            $this->FontFileInput->deserialize($param["FontFileInput"]);
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

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("BoardWidth",$param) and $param["BoardWidth"] !== null) {
            $this->BoardWidth = $param["BoardWidth"];
        }

        if (array_key_exists("BoardHeight",$param) and $param["BoardHeight"] !== null) {
            $this->BoardHeight = $param["BoardHeight"];
        }

        if (array_key_exists("BoardColor",$param) and $param["BoardColor"] !== null) {
            $this->BoardColor = $param["BoardColor"];
        }

        if (array_key_exists("BoardAlpha",$param) and $param["BoardAlpha"] !== null) {
            $this->BoardAlpha = $param["BoardAlpha"];
        }

        if (array_key_exists("OutlineWidth",$param) and $param["OutlineWidth"] !== null) {
            $this->OutlineWidth = $param["OutlineWidth"];
        }

        if (array_key_exists("OutlineColor",$param) and $param["OutlineColor"] !== null) {
            $this->OutlineColor = $param["OutlineColor"];
        }

        if (array_key_exists("OutlineAlpha",$param) and $param["OutlineAlpha"] !== null) {
            $this->OutlineAlpha = $param["OutlineAlpha"];
        }

        if (array_key_exists("ShadowWidth",$param) and $param["ShadowWidth"] !== null) {
            $this->ShadowWidth = $param["ShadowWidth"];
        }

        if (array_key_exists("ShadowColor",$param) and $param["ShadowColor"] !== null) {
            $this->ShadowColor = $param["ShadowColor"];
        }

        if (array_key_exists("ShadowAlpha",$param) and $param["ShadowAlpha"] !== null) {
            $this->ShadowAlpha = $param["ShadowAlpha"];
        }

        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }

        if (array_key_exists("BoardWidthUnit",$param) and $param["BoardWidthUnit"] !== null) {
            $this->BoardWidthUnit = $param["BoardWidthUnit"];
        }

        if (array_key_exists("BoardHeightUnit",$param) and $param["BoardHeightUnit"] !== null) {
            $this->BoardHeightUnit = $param["BoardHeightUnit"];
        }

        if (array_key_exists("OutlineWidthUnit",$param) and $param["OutlineWidthUnit"] !== null) {
            $this->OutlineWidthUnit = $param["OutlineWidthUnit"];
        }

        if (array_key_exists("ShadowWidthUnit",$param) and $param["ShadowWidthUnit"] !== null) {
            $this->ShadowWidthUnit = $param["ShadowWidthUnit"];
        }

        if (array_key_exists("LineSpacingUnit",$param) and $param["LineSpacingUnit"] !== null) {
            $this->LineSpacingUnit = $param["LineSpacingUnit"];
        }
    }
}
