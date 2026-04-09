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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕压制输入信息
 *
 * @method string getId() 获取<p>字幕 ID。</p>
 * @method void setId(string $Id) 设置<p>字幕 ID。</p>
 * @method string getFontType() 获取<p>字体类型。</p><p>枚举值：</p><ul><li>hei.ttf： 黑体</li><li>song.ttf： 宋体</li><li>kai.ttf（推荐）或 simkai.ttf： 楷体</li><li>msyh.ttf： 微软雅黑</li><li>msyhbd.ttf： 微软雅黑加粗</li><li>hkjgt.ttf： 华康金刚体</li><li>dhttx.ttf： 典黑体特细</li><li>xqgdzt.ttf： 喜鹊古字典体</li><li>qpcyt.ttf： 巧拼超圆体</li><li>arial.ttf： 仅支持英文</li><li>dinalternate.ttf： DIN Alternate Bold</li><li>helveticalt.ttf： Helvetica</li><li>helveticains.ttf： Helvetica Inserat</li><li>trajanpro.ttf： TrajanPro-Bold</li><li>korean.ttf： 韩语</li><li>japanese.ttf： 日语</li><li>thai.ttf： 泰语</li><li>roboto.ttf： Roboto</li><li>notosans.ttf： NotoSans</li><li>notosansthai.ttf： 泰语NotoSansThai</li><li>sarabun.ttf： 泰语Sarabun</li><li>kanit.ttf： 泰语Kanit</li><li>charmonman.ttf： 泰语Charmonman</li><li>notonaskharabic.ttf： 阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf： 印度语NotoSansDevanagari</li><li>notosanstc.ttf： 粤语思源黑体NotoSansTC</li><li>notosanskr.ttf： 韩语NotoSansKR</li><li>gothica1.ttf： 韩语GothicA1</li><li>nanummyeongjo.ttf： 韩语NanumMyeongjo</li><li>notosansjp.ttf： 日语NotoSansJP</li><li>notoserifjp.ttf： 日语NotoSerifJP</li><li>shipporimincho.ttf： 日语ShipporiMincho</li></ul><p>默认值：hei.ttf 黑体</p>
 * @method void setFontType(string $FontType) 设置<p>字体类型。</p><p>枚举值：</p><ul><li>hei.ttf： 黑体</li><li>song.ttf： 宋体</li><li>kai.ttf（推荐）或 simkai.ttf： 楷体</li><li>msyh.ttf： 微软雅黑</li><li>msyhbd.ttf： 微软雅黑加粗</li><li>hkjgt.ttf： 华康金刚体</li><li>dhttx.ttf： 典黑体特细</li><li>xqgdzt.ttf： 喜鹊古字典体</li><li>qpcyt.ttf： 巧拼超圆体</li><li>arial.ttf： 仅支持英文</li><li>dinalternate.ttf： DIN Alternate Bold</li><li>helveticalt.ttf： Helvetica</li><li>helveticains.ttf： Helvetica Inserat</li><li>trajanpro.ttf： TrajanPro-Bold</li><li>korean.ttf： 韩语</li><li>japanese.ttf： 日语</li><li>thai.ttf： 泰语</li><li>roboto.ttf： Roboto</li><li>notosans.ttf： NotoSans</li><li>notosansthai.ttf： 泰语NotoSansThai</li><li>sarabun.ttf： 泰语Sarabun</li><li>kanit.ttf： 泰语Kanit</li><li>charmonman.ttf： 泰语Charmonman</li><li>notonaskharabic.ttf： 阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf： 印度语NotoSansDevanagari</li><li>notosanstc.ttf： 粤语思源黑体NotoSansTC</li><li>notosanskr.ttf： 韩语NotoSansKR</li><li>gothica1.ttf： 韩语GothicA1</li><li>nanummyeongjo.ttf： 韩语NanumMyeongjo</li><li>notosansjp.ttf： 日语NotoSansJP</li><li>notoserifjp.ttf： 日语NotoSerifJP</li><li>shipporimincho.ttf： 日语ShipporiMincho</li></ul><p>默认值：hei.ttf 黑体</p>
 * @method string getFontSize() 获取<p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分比：N%，N范围：(0,100]；例如，10%表示字幕字体大小=10%*源视频高度。不填且字幕文件中无设置时，默认源视频高度的5%。</li></ul>
 * @method void setFontSize(string $FontSize) 设置<p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分比：N%，N范围：(0,100]；例如，10%表示字幕字体大小=10%*源视频高度。不填且字幕文件中无设置时，默认源视频高度的5%。</li></ul>
 * @method string getFontColor() 获取<p>字体颜色，格式：0xRRGGBB。</p><p>默认值：0xFFFFFF（白色）。</p>
 * @method void setFontColor(string $FontColor) 设置<p>字体颜色，格式：0xRRGGBB。</p><p>默认值：0xFFFFFF（白色）。</p>
 * @method float getFontAlpha() 获取<p>文字透明度。取值范围：(0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明</li></ul><p>默认值：1</p>
 * @method void setFontAlpha(float $FontAlpha) 设置<p>文字透明度。取值范围：(0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明</li></ul><p>默认值：1</p>
 * @method string getYPos() 获取<p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%<em>源视频高度。默认值：源视频高度</em>4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method void setYPos(string $YPos) 设置<p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%<em>源视频高度。默认值：源视频高度</em>4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method string getBoardY() 获取<p>字幕背景底板的y轴坐标位置；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。不传表示不开启字幕背景底板。<br>注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method void setBoardY(string $BoardY) 设置<p>字幕背景底板的y轴坐标位置；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。不传表示不开启字幕背景底板。<br>注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method string getBoardWidth() 获取<p>底板的宽度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认源视频宽像素的90%。</li></ul>
 * @method void setBoardWidth(string $BoardWidth) 设置<p>底板的宽度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认源视频宽像素的90%。</li></ul>
 * @method string getBoardHeight() 获取<p>底板的高度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认为源视频高像素的15%。</li></ul>
 * @method void setBoardHeight(string $BoardHeight) 设置<p>底板的高度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认为源视频高像素的15%。</li></ul>
 * @method string getBoardColor() 获取<p>底板颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
 * @method void setBoardColor(string $BoardColor) 设置<p>底板颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
 * @method float getBoardAlpha() 获取<p>字幕背景板透明度，取值范围：[0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：0.8。</p>
 * @method void setBoardAlpha(float $BoardAlpha) 设置<p>字幕背景板透明度，取值范围：[0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：0.8。</p>
 * @method string getAlignment() 获取<p>对齐方式。</p><p>枚举值：</p><ul><li>top： 顶部对齐，字幕顶部按位置固定，底部随行数变化。 </li><li>bottom： 底部对齐，字幕底部按位置固定，顶部随行数变化。 </li></ul><p>默认值：bottom</p>
 * @method void setAlignment(string $Alignment) 设置<p>对齐方式。</p><p>枚举值：</p><ul><li>top： 顶部对齐，字幕顶部按位置固定，底部随行数变化。 </li><li>bottom： 底部对齐，字幕底部按位置固定，顶部随行数变化。 </li></ul><p>默认值：bottom</p>
 * @method string getOutlineWidth() 获取<p>描边宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>不填默认源视频高度的0.3%。</p>
 * @method void setOutlineWidth(string $OutlineWidth) 设置<p>描边宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>不填默认源视频高度的0.3%。</p>
 * @method string getOutlineColor() 获取<p>描边颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
 * @method void setOutlineColor(string $OutlineColor) 设置<p>描边颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
 * @method float getOutlineAlpha() 获取<p>描边透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1</p>
 * @method void setOutlineAlpha(float $OutlineAlpha) 设置<p>描边透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1</p>
 * @method string getShadowWidth() 获取<p>阴影宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。不填默认无阴影。</li></ul>
 * @method void setShadowWidth(string $ShadowWidth) 设置<p>阴影宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。不填默认无阴影。</li></ul>
 * @method string getShadowColor() 获取<p>阴影颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色），有设置阴影的情况下。</p>
 * @method void setShadowColor(string $ShadowColor) 设置<p>阴影颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色），有设置阴影的情况下。</p>
 * @method float getShadowAlpha() 获取<p>阴影透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1，完全不透明，有设置阴影的情况下。</p>
 * @method void setShadowAlpha(float $ShadowAlpha) 设置<p>阴影透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1，完全不透明，有设置阴影的情况下。</p>
 * @method string getLineSpacing() 获取<p>行间距。正整数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>默认值：0</p>
 * @method void setLineSpacing(string $LineSpacing) 设置<p>行间距。正整数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>默认值：0</p>
 */
class SubtitleInfoInput extends AbstractModel
{
    /**
     * @var string <p>字幕 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>字体类型。</p><p>枚举值：</p><ul><li>hei.ttf： 黑体</li><li>song.ttf： 宋体</li><li>kai.ttf（推荐）或 simkai.ttf： 楷体</li><li>msyh.ttf： 微软雅黑</li><li>msyhbd.ttf： 微软雅黑加粗</li><li>hkjgt.ttf： 华康金刚体</li><li>dhttx.ttf： 典黑体特细</li><li>xqgdzt.ttf： 喜鹊古字典体</li><li>qpcyt.ttf： 巧拼超圆体</li><li>arial.ttf： 仅支持英文</li><li>dinalternate.ttf： DIN Alternate Bold</li><li>helveticalt.ttf： Helvetica</li><li>helveticains.ttf： Helvetica Inserat</li><li>trajanpro.ttf： TrajanPro-Bold</li><li>korean.ttf： 韩语</li><li>japanese.ttf： 日语</li><li>thai.ttf： 泰语</li><li>roboto.ttf： Roboto</li><li>notosans.ttf： NotoSans</li><li>notosansthai.ttf： 泰语NotoSansThai</li><li>sarabun.ttf： 泰语Sarabun</li><li>kanit.ttf： 泰语Kanit</li><li>charmonman.ttf： 泰语Charmonman</li><li>notonaskharabic.ttf： 阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf： 印度语NotoSansDevanagari</li><li>notosanstc.ttf： 粤语思源黑体NotoSansTC</li><li>notosanskr.ttf： 韩语NotoSansKR</li><li>gothica1.ttf： 韩语GothicA1</li><li>nanummyeongjo.ttf： 韩语NanumMyeongjo</li><li>notosansjp.ttf： 日语NotoSansJP</li><li>notoserifjp.ttf： 日语NotoSerifJP</li><li>shipporimincho.ttf： 日语ShipporiMincho</li></ul><p>默认值：hei.ttf 黑体</p>
     */
    public $FontType;

    /**
     * @var string <p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分比：N%，N范围：(0,100]；例如，10%表示字幕字体大小=10%*源视频高度。不填且字幕文件中无设置时，默认源视频高度的5%。</li></ul>
     */
    public $FontSize;

    /**
     * @var string <p>字体颜色，格式：0xRRGGBB。</p><p>默认值：0xFFFFFF（白色）。</p>
     */
    public $FontColor;

    /**
     * @var float <p>文字透明度。取值范围：(0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明</li></ul><p>默认值：1</p>
     */
    public $FontAlpha;

    /**
     * @var string <p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%<em>源视频高度。默认值：源视频高度</em>4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     */
    public $YPos;

    /**
     * @var string <p>字幕背景底板的y轴坐标位置；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。不传表示不开启字幕背景底板。<br>注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     */
    public $BoardY;

    /**
     * @var string <p>底板的宽度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认源视频宽像素的90%。</li></ul>
     */
    public $BoardWidth;

    /**
     * @var string <p>底板的高度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认为源视频高像素的15%。</li></ul>
     */
    public $BoardHeight;

    /**
     * @var string <p>底板颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
     */
    public $BoardColor;

    /**
     * @var float <p>字幕背景板透明度，取值范围：[0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：0.8。</p>
     */
    public $BoardAlpha;

    /**
     * @var string <p>对齐方式。</p><p>枚举值：</p><ul><li>top： 顶部对齐，字幕顶部按位置固定，底部随行数变化。 </li><li>bottom： 底部对齐，字幕底部按位置固定，顶部随行数变化。 </li></ul><p>默认值：bottom</p>
     */
    public $Alignment;

    /**
     * @var string <p>描边宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>不填默认源视频高度的0.3%。</p>
     */
    public $OutlineWidth;

    /**
     * @var string <p>描边颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
     */
    public $OutlineColor;

    /**
     * @var float <p>描边透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1</p>
     */
    public $OutlineAlpha;

    /**
     * @var string <p>阴影宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。不填默认无阴影。</li></ul>
     */
    public $ShadowWidth;

    /**
     * @var string <p>阴影颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色），有设置阴影的情况下。</p>
     */
    public $ShadowColor;

    /**
     * @var float <p>阴影透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1，完全不透明，有设置阴影的情况下。</p>
     */
    public $ShadowAlpha;

    /**
     * @var string <p>行间距。正整数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>默认值：0</p>
     */
    public $LineSpacing;

    /**
     * @param string $Id <p>字幕 ID。</p>
     * @param string $FontType <p>字体类型。</p><p>枚举值：</p><ul><li>hei.ttf： 黑体</li><li>song.ttf： 宋体</li><li>kai.ttf（推荐）或 simkai.ttf： 楷体</li><li>msyh.ttf： 微软雅黑</li><li>msyhbd.ttf： 微软雅黑加粗</li><li>hkjgt.ttf： 华康金刚体</li><li>dhttx.ttf： 典黑体特细</li><li>xqgdzt.ttf： 喜鹊古字典体</li><li>qpcyt.ttf： 巧拼超圆体</li><li>arial.ttf： 仅支持英文</li><li>dinalternate.ttf： DIN Alternate Bold</li><li>helveticalt.ttf： Helvetica</li><li>helveticains.ttf： Helvetica Inserat</li><li>trajanpro.ttf： TrajanPro-Bold</li><li>korean.ttf： 韩语</li><li>japanese.ttf： 日语</li><li>thai.ttf： 泰语</li><li>roboto.ttf： Roboto</li><li>notosans.ttf： NotoSans</li><li>notosansthai.ttf： 泰语NotoSansThai</li><li>sarabun.ttf： 泰语Sarabun</li><li>kanit.ttf： 泰语Kanit</li><li>charmonman.ttf： 泰语Charmonman</li><li>notonaskharabic.ttf： 阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf： 印度语NotoSansDevanagari</li><li>notosanstc.ttf： 粤语思源黑体NotoSansTC</li><li>notosanskr.ttf： 韩语NotoSansKR</li><li>gothica1.ttf： 韩语GothicA1</li><li>nanummyeongjo.ttf： 韩语NanumMyeongjo</li><li>notosansjp.ttf： 日语NotoSansJP</li><li>notoserifjp.ttf： 日语NotoSerifJP</li><li>shipporimincho.ttf： 日语ShipporiMincho</li></ul><p>默认值：hei.ttf 黑体</p>
     * @param string $FontSize <p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分比：N%，N范围：(0,100]；例如，10%表示字幕字体大小=10%*源视频高度。不填且字幕文件中无设置时，默认源视频高度的5%。</li></ul>
     * @param string $FontColor <p>字体颜色，格式：0xRRGGBB。</p><p>默认值：0xFFFFFF（白色）。</p>
     * @param float $FontAlpha <p>文字透明度。取值范围：(0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明</li></ul><p>默认值：1</p>
     * @param string $YPos <p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%<em>源视频高度。默认值：源视频高度</em>4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     * @param string $BoardY <p>字幕背景底板的y轴坐标位置；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分比：N%，N范围：[0,100]；例如10%表示字幕背景底板y坐标=10%*源视频高度。不传表示不开启字幕背景底板。<br>注意：坐标轴原点位于源视频的中轴线底部，字幕背景底板的基准点在其中轴线底部，参考下图：<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     * @param string $BoardWidth <p>底板的宽度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认源视频宽像素的90%。</li></ul>
     * @param string $BoardHeight <p>底板的高度，正整数。</p><ul><li>像素：Npx，N 取值范围：[0,4096]。</li><li>百分比：N%，N 取值范围：[0, 100]。开启底板且不填此值时，默认为源视频高像素的15%。</li></ul>
     * @param string $BoardColor <p>底板颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
     * @param float $BoardAlpha <p>字幕背景板透明度，取值范围：[0, 1]。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：0.8。</p>
     * @param string $Alignment <p>对齐方式。</p><p>枚举值：</p><ul><li>top： 顶部对齐，字幕顶部按位置固定，底部随行数变化。 </li><li>bottom： 底部对齐，字幕底部按位置固定，顶部随行数变化。 </li></ul><p>默认值：bottom</p>
     * @param string $OutlineWidth <p>描边宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>不填默认源视频高度的0.3%。</p>
     * @param string $OutlineColor <p>描边颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色）。</p>
     * @param float $OutlineAlpha <p>描边透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1</p>
     * @param string $ShadowWidth <p>阴影宽度。浮点数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。不填默认无阴影。</li></ul>
     * @param string $ShadowColor <p>阴影颜色。格式：0xRRGGBB。</p><p>默认值：0x000000（黑色），有设置阴影的情况下。</p>
     * @param float $ShadowAlpha <p>阴影透明度。(0，1] 正浮点数。</p><ul><li>0：完全透明；</li><li>1：完全不透明。</li></ul><p>默认值：1，完全不透明，有设置阴影的情况下。</p>
     * @param string $LineSpacing <p>行间距。正整数。</p><ul><li>像素：Npx，N 取值范围： [0, 1000]。</li><li>百分比：N%，N 取值范围：[0, 100]。</li></ul><p>默认值：0</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
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
    }
}
