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
 * VerifyGeneralCardWarn请求参数结构体
 *
 * @method string getCardType() 获取<p>卡证类型参数，仅支持传入下列指定值，请按实际情况选择对应卡证类型，目前支持以下类型：<br><strong>身份证件</strong><br>0101 身份证<br>0102 护照<br><strong>经营证照</strong><br>0201 营业执照<br><strong>权属登记</strong><br>0301 行驶证<br><strong>资格许可</strong><br>0401 驾驶证</p>
 * @method void setCardType(string $CardType) 设置<p>卡证类型参数，仅支持传入下列指定值，请按实际情况选择对应卡证类型，目前支持以下类型：<br><strong>身份证件</strong><br>0101 身份证<br>0102 护照<br><strong>经营证照</strong><br>0201 营业执照<br><strong>权属登记</strong><br>0301 行驶证<br><strong>资格许可</strong><br>0401 驾驶证</p>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method string getImageBase64() 获取<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method string getReasoningPrompt() 获取<p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–3000 字符</p>
 * @method void setReasoningPrompt(string $ReasoningPrompt) 设置<p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–3000 字符</p>
 * @method ReasoningConfig getReasoningConfig() 获取<p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
 * @method void setReasoningConfig(ReasoningConfig $ReasoningConfig) 设置<p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
 * @method array getIgnoreWatermarkCategories() 获取<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。 PhoneCam：手机相机水印  WatermarkCam：水印相机水印</p>
 * @method void setIgnoreWatermarkCategories(array $IgnoreWatermarkCategories) 设置<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。 PhoneCam：手机相机水印  WatermarkCam：水印相机水印</p>
 */
class VerifyGeneralCardWarnRequest extends AbstractModel
{
    /**
     * @var string <p>卡证类型参数，仅支持传入下列指定值，请按实际情况选择对应卡证类型，目前支持以下类型：<br><strong>身份证件</strong><br>0101 身份证<br>0102 护照<br><strong>经营证照</strong><br>0201 营业执照<br><strong>权属登记</strong><br>0301 行驶证<br><strong>资格许可</strong><br>0401 驾驶证</p>
     */
    public $CardType;

    /**
     * @var string <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–3000 字符</p>
     */
    public $ReasoningPrompt;

    /**
     * @var ReasoningConfig <p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
     */
    public $ReasoningConfig;

    /**
     * @var array <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。 PhoneCam：手机相机水印  WatermarkCam：水印相机水印</p>
     */
    public $IgnoreWatermarkCategories;

    /**
     * @param string $CardType <p>卡证类型参数，仅支持传入下列指定值，请按实际情况选择对应卡证类型，目前支持以下类型：<br><strong>身份证件</strong><br>0101 身份证<br>0102 护照<br><strong>经营证照</strong><br>0201 营业执照<br><strong>权属登记</strong><br>0301 行驶证<br><strong>资格许可</strong><br>0401 驾驶证</p>
     * @param string $ImageUrl <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ImageBase64 <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ReasoningPrompt <p>推理 Prompt 模板，默认使用 VLM 对图片进行理解推理，同时支持使用 ${变量名} 进行推理。传入该参数即开启推理流程。</p><p>入参限制：长度限制：1–3000 字符</p>
     * @param ReasoningConfig $ReasoningConfig <p>推理输出配置。当 ReasoningPrompt 传入时建议同步传入，未传入时使用默认配置（OutputMode=enum, EnumValues=[&quot;true&quot;,&quot;false&quot;], EnableImageInput=true）。</p>
     * @param array $IgnoreWatermarkCategories <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。 PhoneCam：手机相机水印  WatermarkCam：水印相机水印</p>
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
        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
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
