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
 * QuestionSplitOCR请求参数结构体
 *
 * @method string getImageUrl() 获取图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method string getImageBase64() 获取图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method boolean getIsPdf() 获取是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method void setIsPdf(boolean $IsPdf) 设置是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 * @method boolean getEnableImageCrop() 获取是否开启切边增强和弯曲矫正,默认为false不开启
 * @method void setEnableImageCrop(boolean $EnableImageCrop) 设置是否开启切边增强和弯曲矫正,默认为false不开启
 * @method boolean getEnableOnlyDetectBorder() 获取是否只返回检测框，默认false
 * @method void setEnableOnlyDetectBorder(boolean $EnableOnlyDetectBorder) 设置是否只返回检测框，默认false
 * @method boolean getUseNewModel() 获取false: 使用当前默认模型(结构化信息更全面，但手写答案坐标精度一般)  
true:  使用多模态推理模型，推理效果更强（题目框选、手写答案坐标定位能力更优，但不返回题目选项和题目类型信息）

API默认false, demo默认使用的是true
 * @method void setUseNewModel(boolean $UseNewModel) 设置false: 使用当前默认模型(结构化信息更全面，但手写答案坐标精度一般)  
true:  使用多模态推理模型，推理效果更强（题目框选、手写答案坐标定位能力更优，但不返回题目选项和题目类型信息）

API默认false, demo默认使用的是true
 */
class QuestionSplitOCRRequest extends AbstractModel
{
    /**
     * @var string 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var boolean 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     */
    public $IsPdf;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @var boolean 是否开启切边增强和弯曲矫正,默认为false不开启
     */
    public $EnableImageCrop;

    /**
     * @var boolean 是否只返回检测框，默认false
     */
    public $EnableOnlyDetectBorder;

    /**
     * @var boolean false: 使用当前默认模型(结构化信息更全面，但手写答案坐标精度一般)  
true:  使用多模态推理模型，推理效果更强（题目框选、手写答案坐标定位能力更优，但不返回题目选项和题目类型信息）

API默认false, demo默认使用的是true
     */
    public $UseNewModel;

    /**
     * @param string $ImageUrl 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param string $ImageBase64 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param boolean $IsPdf 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
     * @param boolean $EnableImageCrop 是否开启切边增强和弯曲矫正,默认为false不开启
     * @param boolean $EnableOnlyDetectBorder 是否只返回检测框，默认false
     * @param boolean $UseNewModel false: 使用当前默认模型(结构化信息更全面，但手写答案坐标精度一般)  
true:  使用多模态推理模型，推理效果更强（题目框选、手写答案坐标定位能力更优，但不返回题目选项和题目类型信息）

API默认false, demo默认使用的是true
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("EnableImageCrop",$param) and $param["EnableImageCrop"] !== null) {
            $this->EnableImageCrop = $param["EnableImageCrop"];
        }

        if (array_key_exists("EnableOnlyDetectBorder",$param) and $param["EnableOnlyDetectBorder"] !== null) {
            $this->EnableOnlyDetectBorder = $param["EnableOnlyDetectBorder"];
        }

        if (array_key_exists("UseNewModel",$param) and $param["UseNewModel"] !== null) {
            $this->UseNewModel = $param["UseNewModel"];
        }
    }
}
