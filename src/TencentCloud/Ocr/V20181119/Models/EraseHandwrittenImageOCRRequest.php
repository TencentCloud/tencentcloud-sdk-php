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
 * EraseHandwrittenImageOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
 * @method integer getCrop() 获取0表示关闭切边，默认为0
1表示开启切边
 * @method void setCrop(integer $Crop) 设置0表示关闭切边，默认为0
1表示开启切边
 * @method integer getDeskew() 获取0表示关闭弯曲矫正，默认为0
1表示开启弯曲矫正
 * @method void setDeskew(integer $Deskew) 设置0表示关闭弯曲矫正，默认为0
1表示开启弯曲矫正
 * @method integer getSharpen() 获取0表示关闭增强锐化，默认为0
1表示开启增强锐化
 * @method void setSharpen(integer $Sharpen) 设置0表示关闭增强锐化，默认为0
1表示开启增强锐化
 * @method integer getGrayscale() 获取0表示返回黑白图像
1表示返回彩色图像，默认为1
 * @method void setGrayscale(integer $Grayscale) 设置0表示返回黑白图像
1表示返回彩色图像，默认为1
 */
class EraseHandwrittenImageOCRRequest extends AbstractModel
{
    /**
     * @var string 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @var integer 0表示关闭切边，默认为0
1表示开启切边
     */
    public $Crop;

    /**
     * @var integer 0表示关闭弯曲矫正，默认为0
1表示开启弯曲矫正
     */
    public $Deskew;

    /**
     * @var integer 0表示关闭增强锐化，默认为0
1表示开启增强锐化
     */
    public $Sharpen;

    /**
     * @var integer 0表示返回黑白图像
1表示返回彩色图像，默认为1
     */
    public $Grayscale;

    /**
     * @param string $ImageBase64 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
     * @param integer $Crop 0表示关闭切边，默认为0
1表示开启切边
     * @param integer $Deskew 0表示关闭弯曲矫正，默认为0
1表示开启弯曲矫正
     * @param integer $Sharpen 0表示关闭增强锐化，默认为0
1表示开启增强锐化
     * @param integer $Grayscale 0表示返回黑白图像
1表示返回彩色图像，默认为1
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("Crop",$param) and $param["Crop"] !== null) {
            $this->Crop = $param["Crop"];
        }

        if (array_key_exists("Deskew",$param) and $param["Deskew"] !== null) {
            $this->Deskew = $param["Deskew"];
        }

        if (array_key_exists("Sharpen",$param) and $param["Sharpen"] !== null) {
            $this->Sharpen = $param["Sharpen"];
        }

        if (array_key_exists("Grayscale",$param) and $param["Grayscale"] !== null) {
            $this->Grayscale = $param["Grayscale"];
        }
    }
}
