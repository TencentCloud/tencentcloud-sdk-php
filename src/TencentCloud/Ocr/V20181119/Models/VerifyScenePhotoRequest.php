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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyScenePhoto请求参数结构体
 *
 * @method string getScene() 获取<p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照    </p><p><strong>车牌业务照</strong><br>0201 车牌</p>
 * @method void setScene(string $Scene) 设置<p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照    </p><p><strong>车牌业务照</strong><br>0201 车牌</p>
 * @method string getMode() 获取<p>鉴伪模式，目前支持以下模式，对应支持不同的入参、出参。<br>Image：图像鉴伪模式，根据图像分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按1次调用计费。<br>Video：视频鉴伪模式，根据视频分析输出告警提示，不支持推理，支持屏幕翻拍提示。每次调用按1次调用计费。<br>Hybrid：混合鉴伪模式，综合图像、视频分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按2次调用计费。</p>
 * @method void setMode(string $Mode) 设置<p>鉴伪模式，目前支持以下模式，对应支持不同的入参、出参。<br>Image：图像鉴伪模式，根据图像分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按1次调用计费。<br>Video：视频鉴伪模式，根据视频分析输出告警提示，不支持推理，支持屏幕翻拍提示。每次调用按1次调用计费。<br>Hybrid：混合鉴伪模式，综合图像、视频分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按2次调用计费。</p>
 * @method string getVideoUrl() 获取<p>视频的 Url 地址。格式支持：xxxxxx。要求视频不超过 100M。建议视频时长不小于1s。</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>视频的 Url 地址。格式支持：xxxxxx。要求视频不超过 100M。建议视频时长不小于1s。</p>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method string getImageBase64() 获取<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method string getReasoningPrompt() 获取<p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–2000 字符</p>
 * @method void setReasoningPrompt(string $ReasoningPrompt) 设置<p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–2000 字符</p>
 * @method ReasoningConfig getReasoningConfig() 获取<p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
 * @method void setReasoningConfig(ReasoningConfig $ReasoningConfig) 设置<p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
 * @method array getIgnoreWatermarkCategories() 获取<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
 * @method void setIgnoreWatermarkCategories(array $IgnoreWatermarkCategories) 设置<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
 */
class VerifyScenePhotoRequest extends AbstractModel
{
    /**
     * @var string <p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照    </p><p><strong>车牌业务照</strong><br>0201 车牌</p>
     */
    public $Scene;

    /**
     * @var string <p>鉴伪模式，目前支持以下模式，对应支持不同的入参、出参。<br>Image：图像鉴伪模式，根据图像分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按1次调用计费。<br>Video：视频鉴伪模式，根据视频分析输出告警提示，不支持推理，支持屏幕翻拍提示。每次调用按1次调用计费。<br>Hybrid：混合鉴伪模式，综合图像、视频分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按2次调用计费。</p>
     */
    public $Mode;

    /**
     * @var string <p>视频的 Url 地址。格式支持：xxxxxx。要求视频不超过 100M。建议视频时长不小于1s。</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–2000 字符</p>
     */
    public $ReasoningPrompt;

    /**
     * @var ReasoningConfig <p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
     */
    public $ReasoningConfig;

    /**
     * @var array <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
     */
    public $IgnoreWatermarkCategories;

    /**
     * @param string $Scene <p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照    </p><p><strong>车牌业务照</strong><br>0201 车牌</p>
     * @param string $Mode <p>鉴伪模式，目前支持以下模式，对应支持不同的入参、出参。<br>Image：图像鉴伪模式，根据图像分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按1次调用计费。<br>Video：视频鉴伪模式，根据视频分析输出告警提示，不支持推理，支持屏幕翻拍提示。每次调用按1次调用计费。<br>Hybrid：混合鉴伪模式，综合图像、视频分析输出告警提示，支持推理，支持区域篡改提示、AIGC合成提示、屏幕翻拍提示、截图提示、文字水印提示、水印内容、模板图片提示、VLM 推理结果。每次调用按2次调用计费。</p>
     * @param string $VideoUrl <p>视频的 Url 地址。格式支持：xxxxxx。要求视频不超过 100M。建议视频时长不小于1s。</p>
     * @param string $ImageUrl <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ImageBase64 <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ReasoningPrompt <p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–2000 字符</p>
     * @param ReasoningConfig $ReasoningConfig <p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
     * @param array $IgnoreWatermarkCategories <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ReasoningPrompt",$param) and $param["ReasoningPrompt"] !== null) {
            $this->ReasoningPrompt = $param["ReasoningPrompt"];
        }

        if (array_key_exists("ReasoningConfig",$param) and $param["ReasoningConfig"] !== null) {
            $this->ReasoningConfig = new ReasoningConfig();
            $this->ReasoningConfig->deserialize($param["ReasoningConfig"]);
        }

        if (array_key_exists("IgnoreWatermarkCategories",$param) and $param["IgnoreWatermarkCategories"] !== null) {
            $this->IgnoreWatermarkCategories = $param["IgnoreWatermarkCategories"];
        }
    }
}
