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
 * 字幕压制模块配置
 *
 * @method string getFontType() 获取<p>字体类型，支持：</p><li>hei.ttf：黑体</li><li>song.ttf：宋体</li><li>kai.ttf（推荐）或 simkai.ttf：楷体</li><li>msyh.ttf：微软雅黑</li><li>msyhbd.ttf：微软雅黑加粗</li><li>hkjgt.ttf：华康金刚体</li><li>dhttx.ttf：典黑体特细</li><li>xqgdzt.ttf：喜鹊古字典体</li><li>qpcyt.ttf：巧拼超圆体</li><li>arial.ttf：仅支持英文</li><li>dinalternate.ttf：DIN Alternate Bold</li><li>helveticalt.ttf：Helvetica</li><li>helveticains.ttf：Helvetica Inserat</li><li>trajanpro.ttf：TrajanPro-Bold</li><li>korean.ttf：韩语</li><li>japanese.ttf：日语</li><li>thai.ttf：泰语</li><li>roboto.ttf：Roboto</li><li>notosans.ttf：NotoSans</li><li>notosansthai.ttf：泰语NotoSansThai</li><li>sarabun.ttf：泰语Sarabun</li><li>kanit.ttf：泰语Kanit</li><li>charmonman.ttf：泰语Charmonman</li><li>notonaskharabic.ttf：阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf：印度语NotoSansDevanagari</li><li>notosanstc.ttf：粤语思源黑体NotoSansTC</li><li>notosanskr.ttf：韩语NotoSansKR</li><li>gothica1.ttf：韩语GothicA1</li><li>nanummyeongjo.ttf：韩语NanumMyeongjo</li><li>notosansjp.ttf：日语NotoSansJP</li><li>notoserifjp.ttf：日语NotoSerifJP</li><li>shipporimincho.ttf：日语ShipporiMincho</li>默认：hei.ttf 黑体。<br>注意：<li>楷体推荐使用kai.ttf</li><li>填了FontPath时FontPath优先</li>
 * @method void setFontType(string $FontType) 设置<p>字体类型，支持：</p><li>hei.ttf：黑体</li><li>song.ttf：宋体</li><li>kai.ttf（推荐）或 simkai.ttf：楷体</li><li>msyh.ttf：微软雅黑</li><li>msyhbd.ttf：微软雅黑加粗</li><li>hkjgt.ttf：华康金刚体</li><li>dhttx.ttf：典黑体特细</li><li>xqgdzt.ttf：喜鹊古字典体</li><li>qpcyt.ttf：巧拼超圆体</li><li>arial.ttf：仅支持英文</li><li>dinalternate.ttf：DIN Alternate Bold</li><li>helveticalt.ttf：Helvetica</li><li>helveticains.ttf：Helvetica Inserat</li><li>trajanpro.ttf：TrajanPro-Bold</li><li>korean.ttf：韩语</li><li>japanese.ttf：日语</li><li>thai.ttf：泰语</li><li>roboto.ttf：Roboto</li><li>notosans.ttf：NotoSans</li><li>notosansthai.ttf：泰语NotoSansThai</li><li>sarabun.ttf：泰语Sarabun</li><li>kanit.ttf：泰语Kanit</li><li>charmonman.ttf：泰语Charmonman</li><li>notonaskharabic.ttf：阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf：印度语NotoSansDevanagari</li><li>notosanstc.ttf：粤语思源黑体NotoSansTC</li><li>notosanskr.ttf：韩语NotoSansKR</li><li>gothica1.ttf：韩语GothicA1</li><li>nanummyeongjo.ttf：韩语NanumMyeongjo</li><li>notosansjp.ttf：日语NotoSansJP</li><li>notoserifjp.ttf：日语NotoSerifJP</li><li>shipporimincho.ttf：日语ShipporiMincho</li>默认：hei.ttf 黑体。<br>注意：<li>楷体推荐使用kai.ttf</li><li>填了FontPath时FontPath优先</li>
 * @method string getFontPath() 获取<p>自定义字体文件url地址，和CosInputInfo二选一</p>
 * @method void setFontPath(string $FontPath) 设置<p>自定义字体文件url地址，和CosInputInfo二选一</p>
 * @method CosInputInfo getCosInputInfo() 获取<p>自定义字体文件cos地址</p>
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) 设置<p>自定义字体文件cos地址</p>
 * @method integer getFontSize() 获取<p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。</li></ul><p>不填且字幕文件无设置时，默认源视频高度的5%。</p>
 * @method void setFontSize(integer $FontSize) 设置<p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。</li></ul><p>不填且字幕文件无设置时，默认源视频高度的5%。</p>
 * @method integer getFontSizeUnit() 获取<p>FontSize单位, 0 像素，1百分比，默认为0，像素</p>
 * @method void setFontSizeUnit(integer $FontSizeUnit) 设置<p>FontSize单位, 0 像素，1百分比，默认为0，像素</p>
 * @method string getFontColor() 获取<p>字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。</p>
 * @method void setFontColor(string $FontColor) 设置<p>字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。</p>
 * @method float getFontAlpha() 获取<p>文字透明度，取值范围：(0, 1]</p><li>0：完全透明</li><li>1：完全不透明</li>默认值：1。
 * @method void setFontAlpha(float $FontAlpha) 设置<p>文字透明度，取值范围：(0, 1]</p><li>0：完全透明</li><li>1：完全不透明</li>默认值：1。
 * @method integer getPosX() 获取<p>字幕x轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[-4096,4096]。</li><li>百分百：N%，N范围：[-100,100]；例如10%表示字幕x坐标=10%*源视频宽度。</li></ul><p>默认值：0px。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setPosX(integer $PosX) 设置<p>字幕x轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[-4096,4096]。</li><li>百分百：N%，N范围：[-100,100]；例如10%表示字幕x坐标=10%*源视频宽度。</li></ul><p>默认值：0px。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getPosXUnit() 获取<p>PosX单位, 0 像素，1百分比，默认为0，像素</p>
 * @method void setPosXUnit(integer $PosXUnit) 设置<p>PosX单位, 0 像素，1百分比，默认为0，像素</p>
 * @method integer getPosY() 获取<p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。</li></ul><p>默认值：源视频高度*4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setPosY(integer $PosY) 设置<p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。</li></ul><p>默认值：源视频高度*4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getPosYUnit() 获取<p>PosY单位, 0 像素，1百分比，默认为0，像素</p>
 * @method void setPosYUnit(integer $PosYUnit) 设置<p>PosY单位, 0 像素，1百分比，默认为0，像素</p>
 * @method SubtitleBoardConfig getSubtitleBoardConfig() 获取<p>背景配置</p>
 * @method void setSubtitleBoardConfig(SubtitleBoardConfig $SubtitleBoardConfig) 设置<p>背景配置</p>
 * @method SubtitleLayoutConfig getSubtitleLayoutConfig() 获取<p>排列配置</p>
 * @method void setSubtitleLayoutConfig(SubtitleLayoutConfig $SubtitleLayoutConfig) 设置<p>排列配置</p>
 * @method SubtitleOutlineConfig getSubtitleOutlineConfig() 获取<p>文字描边配置</p>
 * @method void setSubtitleOutlineConfig(SubtitleOutlineConfig $SubtitleOutlineConfig) 设置<p>文字描边配置</p>
 * @method SubtitleShadowConfig getSubtitleShadowConfig() 获取<p>文字阴影配置</p>
 * @method void setSubtitleShadowConfig(SubtitleShadowConfig $SubtitleShadowConfig) 设置<p>文字阴影配置</p>
 * @method integer getSampleWidth() 获取<p>源视频尺寸的宽，单位像素值</p>
 * @method void setSampleWidth(integer $SampleWidth) 设置<p>源视频尺寸的宽，单位像素值</p>
 * @method integer getSampleHeight() 获取<p>源视频尺寸的高，单位像素值</p>
 * @method void setSampleHeight(integer $SampleHeight) 设置<p>源视频尺寸的高，单位像素值</p>
 */
class SubtitleEmbedConfig extends AbstractModel
{
    /**
     * @var string <p>字体类型，支持：</p><li>hei.ttf：黑体</li><li>song.ttf：宋体</li><li>kai.ttf（推荐）或 simkai.ttf：楷体</li><li>msyh.ttf：微软雅黑</li><li>msyhbd.ttf：微软雅黑加粗</li><li>hkjgt.ttf：华康金刚体</li><li>dhttx.ttf：典黑体特细</li><li>xqgdzt.ttf：喜鹊古字典体</li><li>qpcyt.ttf：巧拼超圆体</li><li>arial.ttf：仅支持英文</li><li>dinalternate.ttf：DIN Alternate Bold</li><li>helveticalt.ttf：Helvetica</li><li>helveticains.ttf：Helvetica Inserat</li><li>trajanpro.ttf：TrajanPro-Bold</li><li>korean.ttf：韩语</li><li>japanese.ttf：日语</li><li>thai.ttf：泰语</li><li>roboto.ttf：Roboto</li><li>notosans.ttf：NotoSans</li><li>notosansthai.ttf：泰语NotoSansThai</li><li>sarabun.ttf：泰语Sarabun</li><li>kanit.ttf：泰语Kanit</li><li>charmonman.ttf：泰语Charmonman</li><li>notonaskharabic.ttf：阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf：印度语NotoSansDevanagari</li><li>notosanstc.ttf：粤语思源黑体NotoSansTC</li><li>notosanskr.ttf：韩语NotoSansKR</li><li>gothica1.ttf：韩语GothicA1</li><li>nanummyeongjo.ttf：韩语NanumMyeongjo</li><li>notosansjp.ttf：日语NotoSansJP</li><li>notoserifjp.ttf：日语NotoSerifJP</li><li>shipporimincho.ttf：日语ShipporiMincho</li>默认：hei.ttf 黑体。<br>注意：<li>楷体推荐使用kai.ttf</li><li>填了FontPath时FontPath优先</li>
     */
    public $FontType;

    /**
     * @var string <p>自定义字体文件url地址，和CosInputInfo二选一</p>
     */
    public $FontPath;

    /**
     * @var CosInputInfo <p>自定义字体文件cos地址</p>
     */
    public $CosInputInfo;

    /**
     * @var integer <p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。</li></ul><p>不填且字幕文件无设置时，默认源视频高度的5%。</p>
     */
    public $FontSize;

    /**
     * @var integer <p>FontSize单位, 0 像素，1百分比，默认为0，像素</p>
     */
    public $FontSizeUnit;

    /**
     * @var string <p>字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。</p>
     */
    public $FontColor;

    /**
     * @var float <p>文字透明度，取值范围：(0, 1]</p><li>0：完全透明</li><li>1：完全不透明</li>默认值：1。
     */
    public $FontAlpha;

    /**
     * @var integer <p>字幕x轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[-4096,4096]。</li><li>百分百：N%，N范围：[-100,100]；例如10%表示字幕x坐标=10%*源视频宽度。</li></ul><p>默认值：0px。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $PosX;

    /**
     * @var integer <p>PosX单位, 0 像素，1百分比，默认为0，像素</p>
     */
    public $PosXUnit;

    /**
     * @var integer <p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。</li></ul><p>默认值：源视频高度*4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $PosY;

    /**
     * @var integer <p>PosY单位, 0 像素，1百分比，默认为0，像素</p>
     */
    public $PosYUnit;

    /**
     * @var SubtitleBoardConfig <p>背景配置</p>
     */
    public $SubtitleBoardConfig;

    /**
     * @var SubtitleLayoutConfig <p>排列配置</p>
     */
    public $SubtitleLayoutConfig;

    /**
     * @var SubtitleOutlineConfig <p>文字描边配置</p>
     */
    public $SubtitleOutlineConfig;

    /**
     * @var SubtitleShadowConfig <p>文字阴影配置</p>
     */
    public $SubtitleShadowConfig;

    /**
     * @var integer <p>源视频尺寸的宽，单位像素值</p>
     */
    public $SampleWidth;

    /**
     * @var integer <p>源视频尺寸的高，单位像素值</p>
     */
    public $SampleHeight;

    /**
     * @param string $FontType <p>字体类型，支持：</p><li>hei.ttf：黑体</li><li>song.ttf：宋体</li><li>kai.ttf（推荐）或 simkai.ttf：楷体</li><li>msyh.ttf：微软雅黑</li><li>msyhbd.ttf：微软雅黑加粗</li><li>hkjgt.ttf：华康金刚体</li><li>dhttx.ttf：典黑体特细</li><li>xqgdzt.ttf：喜鹊古字典体</li><li>qpcyt.ttf：巧拼超圆体</li><li>arial.ttf：仅支持英文</li><li>dinalternate.ttf：DIN Alternate Bold</li><li>helveticalt.ttf：Helvetica</li><li>helveticains.ttf：Helvetica Inserat</li><li>trajanpro.ttf：TrajanPro-Bold</li><li>korean.ttf：韩语</li><li>japanese.ttf：日语</li><li>thai.ttf：泰语</li><li>roboto.ttf：Roboto</li><li>notosans.ttf：NotoSans</li><li>notosansthai.ttf：泰语NotoSansThai</li><li>sarabun.ttf：泰语Sarabun</li><li>kanit.ttf：泰语Kanit</li><li>charmonman.ttf：泰语Charmonman</li><li>notonaskharabic.ttf：阿拉伯语NotoNaskhArabic</li><li>notosansdevanagari.ttf：印度语NotoSansDevanagari</li><li>notosanstc.ttf：粤语思源黑体NotoSansTC</li><li>notosanskr.ttf：韩语NotoSansKR</li><li>gothica1.ttf：韩语GothicA1</li><li>nanummyeongjo.ttf：韩语NanumMyeongjo</li><li>notosansjp.ttf：日语NotoSansJP</li><li>notoserifjp.ttf：日语NotoSerifJP</li><li>shipporimincho.ttf：日语ShipporiMincho</li>默认：hei.ttf 黑体。<br>注意：<li>楷体推荐使用kai.ttf</li><li>填了FontPath时FontPath优先</li>
     * @param string $FontPath <p>自定义字体文件url地址，和CosInputInfo二选一</p>
     * @param CosInputInfo $CosInputInfo <p>自定义字体文件cos地址</p>
     * @param integer $FontSize <p>字体大小，不指定则以字幕文件中为准。支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：(0,4096]。</li><li>百分百：N%，N范围：(0,100]；例如10%表示字幕字体大小=10%*源视频高度。</li></ul><p>不填且字幕文件无设置时，默认源视频高度的5%。</p>
     * @param integer $FontSizeUnit <p>FontSize单位, 0 像素，1百分比，默认为0，像素</p>
     * @param string $FontColor <p>字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。</p>
     * @param float $FontAlpha <p>文字透明度，取值范围：(0, 1]</p><li>0：完全透明</li><li>1：完全不透明</li>默认值：1。
     * @param integer $PosX <p>字幕x轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[-4096,4096]。</li><li>百分百：N%，N范围：[-100,100]；例如10%表示字幕x坐标=10%*源视频宽度。</li></ul><p>默认值：0px。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $PosXUnit <p>PosX单位, 0 像素，1百分比，默认为0，像素</p>
     * @param integer $PosY <p>字幕y轴坐标位置，指定此参数会忽略字幕文件自带坐标；支持像素和百分比格式：</p><ul><li>像素：Npx，N范围：[0,4096]。</li><li>百分百：N%，N范围：[0,100]；例如10%表示字幕y坐标=10%*源视频高度。</li></ul><p>默认值：源视频高度*4%。<br>注意：坐标轴原点在源视频中轴线底部，字幕基准点在字幕中轴线底部，参考下图：<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $PosYUnit <p>PosY单位, 0 像素，1百分比，默认为0，像素</p>
     * @param SubtitleBoardConfig $SubtitleBoardConfig <p>背景配置</p>
     * @param SubtitleLayoutConfig $SubtitleLayoutConfig <p>排列配置</p>
     * @param SubtitleOutlineConfig $SubtitleOutlineConfig <p>文字描边配置</p>
     * @param SubtitleShadowConfig $SubtitleShadowConfig <p>文字阴影配置</p>
     * @param integer $SampleWidth <p>源视频尺寸的宽，单位像素值</p>
     * @param integer $SampleHeight <p>源视频尺寸的高，单位像素值</p>
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
        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontPath",$param) and $param["FontPath"] !== null) {
            $this->FontPath = $param["FontPath"];
        }

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontSizeUnit",$param) and $param["FontSizeUnit"] !== null) {
            $this->FontSizeUnit = $param["FontSizeUnit"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }

        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosXUnit",$param) and $param["PosXUnit"] !== null) {
            $this->PosXUnit = $param["PosXUnit"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("PosYUnit",$param) and $param["PosYUnit"] !== null) {
            $this->PosYUnit = $param["PosYUnit"];
        }

        if (array_key_exists("SubtitleBoardConfig",$param) and $param["SubtitleBoardConfig"] !== null) {
            $this->SubtitleBoardConfig = new SubtitleBoardConfig();
            $this->SubtitleBoardConfig->deserialize($param["SubtitleBoardConfig"]);
        }

        if (array_key_exists("SubtitleLayoutConfig",$param) and $param["SubtitleLayoutConfig"] !== null) {
            $this->SubtitleLayoutConfig = new SubtitleLayoutConfig();
            $this->SubtitleLayoutConfig->deserialize($param["SubtitleLayoutConfig"]);
        }

        if (array_key_exists("SubtitleOutlineConfig",$param) and $param["SubtitleOutlineConfig"] !== null) {
            $this->SubtitleOutlineConfig = new SubtitleOutlineConfig();
            $this->SubtitleOutlineConfig->deserialize($param["SubtitleOutlineConfig"]);
        }

        if (array_key_exists("SubtitleShadowConfig",$param) and $param["SubtitleShadowConfig"] !== null) {
            $this->SubtitleShadowConfig = new SubtitleShadowConfig();
            $this->SubtitleShadowConfig->deserialize($param["SubtitleShadowConfig"]);
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
