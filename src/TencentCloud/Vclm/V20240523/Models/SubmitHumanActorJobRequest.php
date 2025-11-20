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
 * SubmitHumanActorJob请求参数结构体
 *
 * @method string getPrompt() 获取文本提示词，不能超过5000字符。
提示词支持全局和局部控制：

- 全局控制：正常输入提示词即可
- 局部控制：可用双井号进行特定时间的提示词约束，例如： "画面中的人物正在对着镜头讲话，偶尔做些手势匹配说话的内容。镜头保持固定。#3#画面中的人物正在对着镜头讲话，同时做出单手做向左方引导的手势。镜头保持固定。"（意思是第三秒的时候让人物做出左方引导手势）
 -- 局部控制时间建议整数，最大可读小数点后两位。
 * @method void setPrompt(string $Prompt) 设置文本提示词，不能超过5000字符。
提示词支持全局和局部控制：

- 全局控制：正常输入提示词即可
- 局部控制：可用双井号进行特定时间的提示词约束，例如： "画面中的人物正在对着镜头讲话，偶尔做些手势匹配说话的内容。镜头保持固定。#3#画面中的人物正在对着镜头讲话，同时做出单手做向左方引导的手势。镜头保持固定。"（意思是第三秒的时候让人物做出左方引导手势）
 -- 局部控制时间建议整数，最大可读小数点后两位。
 * @method string getAudioUrl() 获取传入音频URL地址，音频要求：
- 音频时长：2秒 - 60秒
- 音频格式：mp3、wav
- 音频大小：10M以内
 * @method void setAudioUrl(string $AudioUrl) 设置传入音频URL地址，音频要求：
- 音频时长：2秒 - 60秒
- 音频格式：mp3、wav
- 音频大小：10M以内
 * @method string getImageUrl() 获取传入图片URL地址，图片要求：
- 图片格式：jpg、jpeg、png、bmp、webp
- 图片分辨率：192～4096
- 图片大小：不超过10M
- 图片宽高比：图片【宽：高】在1:4到4:1范围内
- 图片内容：避免上传无人脸、无宠物脸或脸部过小、不完整、不清晰、偏转角度过大、嘴部被遮挡的图片。
 * @method void setImageUrl(string $ImageUrl) 设置传入图片URL地址，图片要求：
- 图片格式：jpg、jpeg、png、bmp、webp
- 图片分辨率：192～4096
- 图片大小：不超过10M
- 图片宽高比：图片【宽：高】在1:4到4:1范围内
- 图片内容：避免上传无人脸、无宠物脸或脸部过小、不完整、不清晰、偏转角度过大、嘴部被遮挡的图片。
 * @method string getImageBase64() 获取传入图片Base64编码，编码后请求体大小不超过10M。
图片Base64编码与URL地址必传其一，如果都传以ImageUrl为准。
 * @method void setImageBase64(string $ImageBase64) 设置传入图片Base64编码，编码后请求体大小不超过10M。
图片Base64编码与URL地址必传其一，如果都传以ImageUrl为准。
 * @method string getResolution() 获取生成视频分辨率
枚举值：720p，1080p
默认1080p
 * @method void setResolution(string $Resolution) 设置生成视频分辨率
枚举值：720p，1080p
默认1080p
 * @method integer getFrameRate() 获取生成视频帧数，单位fps。
枚举值：25，50
默认50帧
 * @method void setFrameRate(integer $FrameRate) 设置生成视频帧数，单位fps。
枚举值：25，50
默认50帧
 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method LogoParam getLogoParam() 获取标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitHumanActorJobRequest extends AbstractModel
{
    /**
     * @var string 文本提示词，不能超过5000字符。
提示词支持全局和局部控制：

- 全局控制：正常输入提示词即可
- 局部控制：可用双井号进行特定时间的提示词约束，例如： "画面中的人物正在对着镜头讲话，偶尔做些手势匹配说话的内容。镜头保持固定。#3#画面中的人物正在对着镜头讲话，同时做出单手做向左方引导的手势。镜头保持固定。"（意思是第三秒的时候让人物做出左方引导手势）
 -- 局部控制时间建议整数，最大可读小数点后两位。
     */
    public $Prompt;

    /**
     * @var string 传入音频URL地址，音频要求：
- 音频时长：2秒 - 60秒
- 音频格式：mp3、wav
- 音频大小：10M以内
     */
    public $AudioUrl;

    /**
     * @var string 传入图片URL地址，图片要求：
- 图片格式：jpg、jpeg、png、bmp、webp
- 图片分辨率：192～4096
- 图片大小：不超过10M
- 图片宽高比：图片【宽：高】在1:4到4:1范围内
- 图片内容：避免上传无人脸、无宠物脸或脸部过小、不完整、不清晰、偏转角度过大、嘴部被遮挡的图片。
     */
    public $ImageUrl;

    /**
     * @var string 传入图片Base64编码，编码后请求体大小不超过10M。
图片Base64编码与URL地址必传其一，如果都传以ImageUrl为准。
     */
    public $ImageBase64;

    /**
     * @var string 生成视频分辨率
枚举值：720p，1080p
默认1080p
     */
    public $Resolution;

    /**
     * @var integer 生成视频帧数，单位fps。
枚举值：25，50
默认50帧
     */
    public $FrameRate;

    /**
     * @var integer 为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $Prompt 文本提示词，不能超过5000字符。
提示词支持全局和局部控制：

- 全局控制：正常输入提示词即可
- 局部控制：可用双井号进行特定时间的提示词约束，例如： "画面中的人物正在对着镜头讲话，偶尔做些手势匹配说话的内容。镜头保持固定。#3#画面中的人物正在对着镜头讲话，同时做出单手做向左方引导的手势。镜头保持固定。"（意思是第三秒的时候让人物做出左方引导手势）
 -- 局部控制时间建议整数，最大可读小数点后两位。
     * @param string $AudioUrl 传入音频URL地址，音频要求：
- 音频时长：2秒 - 60秒
- 音频格式：mp3、wav
- 音频大小：10M以内
     * @param string $ImageUrl 传入图片URL地址，图片要求：
- 图片格式：jpg、jpeg、png、bmp、webp
- 图片分辨率：192～4096
- 图片大小：不超过10M
- 图片宽高比：图片【宽：高】在1:4到4:1范围内
- 图片内容：避免上传无人脸、无宠物脸或脸部过小、不完整、不清晰、偏转角度过大、嘴部被遮挡的图片。
     * @param string $ImageBase64 传入图片Base64编码，编码后请求体大小不超过10M。
图片Base64编码与URL地址必传其一，如果都传以ImageUrl为准。
     * @param string $Resolution 生成视频分辨率
枚举值：720p，1080p
默认1080p
     * @param integer $FrameRate 生成视频帧数，单位fps。
枚举值：25，50
默认50帧
     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
     * @param LogoParam $LogoParam 标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
