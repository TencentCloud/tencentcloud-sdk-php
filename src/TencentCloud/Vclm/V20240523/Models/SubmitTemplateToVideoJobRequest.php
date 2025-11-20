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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTemplateToVideoJob请求参数结构体
 *
 * @method string getTemplate() 获取特效模板名称。请在 [视频特效模板列表](https://cloud.tencent.com/document/product/1616/119194)  中选择想要生成的特效对应的 template 名称。
 * @method void setTemplate(string $Template) 设置特效模板名称。请在 [视频特效模板列表](https://cloud.tencent.com/document/product/1616/119194)  中选择想要生成的特效对应的 template 名称。
 * @method array getImages() 获取参考图像，不同特效输入图片的数量详见： [视频特效模板-图片要求说明](https://cloud.tencent.com/document/product/1616/119194)
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300*300px，不大于4096*4096，图片宽高比应在1:4 ~ 4:1之间
 * @method void setImages(array $Images) 设置参考图像，不同特效输入图片的数量详见： [视频特效模板-图片要求说明](https://cloud.tencent.com/document/product/1616/119194)
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300*300px，不大于4096*4096，图片宽高比应在1:4 ~ 4:1之间
 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为1。传0 需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成后方可生效。
1：添加标识；
0：不添加标识；
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为1。传0 需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成后方可生效。
1：添加标识；
0：不添加标识；
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成。

 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成。

 * @method string getResolution() 获取视频输出分辨率，默认值：360p 。不同特效支持的清晰度及消耗积分数详见：[视频特效模板-单次调用消耗积分数列](https://cloud.tencent.com/document/product/1616/119194 )
 * @method void setResolution(string $Resolution) 设置视频输出分辨率，默认值：360p 。不同特效支持的清晰度及消耗积分数详见：[视频特效模板-单次调用消耗积分数列](https://cloud.tencent.com/document/product/1616/119194 )
 * @method boolean getBGM() 获取是否为生成的视频添加背景音乐。默认：false，  传 true 时系统将从预设 BGM 库中自动挑选合适的音乐并添加；不传或为 false 则不添加 BGM。
 * @method void setBGM(boolean $BGM) 设置是否为生成的视频添加背景音乐。默认：false，  传 true 时系统将从预设 BGM 库中自动挑选合适的音乐并添加；不传或为 false 则不添加 BGM。
 * @method ExtraParam getExtraParam() 获取扩展字段。
 * @method void setExtraParam(ExtraParam $ExtraParam) 设置扩展字段。
 */
class SubmitTemplateToVideoJobRequest extends AbstractModel
{
    /**
     * @var string 特效模板名称。请在 [视频特效模板列表](https://cloud.tencent.com/document/product/1616/119194)  中选择想要生成的特效对应的 template 名称。
     */
    public $Template;

    /**
     * @var array 参考图像，不同特效输入图片的数量详见： [视频特效模板-图片要求说明](https://cloud.tencent.com/document/product/1616/119194)
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300*300px，不大于4096*4096，图片宽高比应在1:4 ~ 4:1之间
     */
    public $Images;

    /**
     * @var integer 为生成视频添加标识的开关，默认为1。传0 需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成后方可生效。
1：添加标识；
0：不添加标识；
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成。

     */
    public $LogoParam;

    /**
     * @var string 视频输出分辨率，默认值：360p 。不同特效支持的清晰度及消耗积分数详见：[视频特效模板-单次调用消耗积分数列](https://cloud.tencent.com/document/product/1616/119194 )
     */
    public $Resolution;

    /**
     * @var boolean 是否为生成的视频添加背景音乐。默认：false，  传 true 时系统将从预设 BGM 库中自动挑选合适的音乐并添加；不传或为 false 则不添加 BGM。
     */
    public $BGM;

    /**
     * @var ExtraParam 扩展字段。
     */
    public $ExtraParam;

    /**
     * @param string $Template 特效模板名称。请在 [视频特效模板列表](https://cloud.tencent.com/document/product/1616/119194)  中选择想要生成的特效对应的 template 名称。
     * @param array $Images 参考图像，不同特效输入图片的数量详见： [视频特效模板-图片要求说明](https://cloud.tencent.com/document/product/1616/119194)
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300*300px，不大于4096*4096，图片宽高比应在1:4 ~ 4:1之间
     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为1。传0 需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成后方可生效。
1：添加标识；
0：不添加标识；
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往  [控制台](https://console.cloud.tencent.com/vtc/setting) 申请开启显式标识自主完成。

     * @param string $Resolution 视频输出分辨率，默认值：360p 。不同特效支持的清晰度及消耗积分数详见：[视频特效模板-单次调用消耗积分数列](https://cloud.tencent.com/document/product/1616/119194 )
     * @param boolean $BGM 是否为生成的视频添加背景音乐。默认：false，  传 true 时系统将从预设 BGM 库中自动挑选合适的音乐并添加；不传或为 false 则不添加 BGM。
     * @param ExtraParam $ExtraParam 扩展字段。
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("BGM",$param) and $param["BGM"] !== null) {
            $this->BGM = $param["BGM"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = new ExtraParam();
            $this->ExtraParam->deserialize($param["ExtraParam"]);
        }
    }
}
