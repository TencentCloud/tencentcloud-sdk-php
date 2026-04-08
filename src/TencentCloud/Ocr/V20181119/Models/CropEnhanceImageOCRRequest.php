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
 * CropEnhanceImageOCR请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
 * @method integer getCrop() 获取<p>0表示关闭切边<br>1表示开启切边，默认为1</p>
 * @method void setCrop(integer $Crop) 设置<p>0表示关闭切边<br>1表示开启切边，默认为1</p>
 * @method integer getDeskew() 获取<p>0表示关闭弯曲矫正<br>1表示开启弯曲矫正，默认为1</p>
 * @method void setDeskew(integer $Deskew) 设置<p>0表示关闭弯曲矫正<br>1表示开启弯曲矫正，默认为1</p>
 * @method integer getOnlyPosition() 获取<p>0表示返回处理后的图和坐标，默认为0<br>1表示只返回坐标，不返回图片</p>
 * @method void setOnlyPosition(integer $OnlyPosition) 设置<p>0表示返回处理后的图和坐标，默认为0<br>1表示只返回坐标，不返回图片</p>
 * @method integer getEnhanceType() 获取<p>默认-1</p><ul><li>-1 不处理增强</li><li>1 增亮</li><li>2 增强并锐化</li><li>3 黑白</li><li>4 灰度</li><li>5 去阴影增强</li><li>6 点阵图</li></ul>
 * @method void setEnhanceType(integer $EnhanceType) 设置<p>默认-1</p><ul><li>-1 不处理增强</li><li>1 增亮</li><li>2 增强并锐化</li><li>3 黑白</li><li>4 灰度</li><li>5 去阴影增强</li><li>6 点阵图</li></ul>
 * @method integer getAdjustOrientation() 获取<p>0表示不矫正图像方向，默认为0  1表示矫正图像方向</p>
 * @method void setAdjustOrientation(integer $AdjustOrientation) 设置<p>0表示不矫正图像方向，默认为0  1表示矫正图像方向</p>
 */
class CropEnhanceImageOCRRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
     */
    public $PdfPageNumber;

    /**
     * @var integer <p>0表示关闭切边<br>1表示开启切边，默认为1</p>
     */
    public $Crop;

    /**
     * @var integer <p>0表示关闭弯曲矫正<br>1表示开启弯曲矫正，默认为1</p>
     */
    public $Deskew;

    /**
     * @var integer <p>0表示返回处理后的图和坐标，默认为0<br>1表示只返回坐标，不返回图片</p>
     */
    public $OnlyPosition;

    /**
     * @var integer <p>默认-1</p><ul><li>-1 不处理增强</li><li>1 增亮</li><li>2 增强并锐化</li><li>3 黑白</li><li>4 灰度</li><li>5 去阴影增强</li><li>6 点阵图</li></ul>
     */
    public $EnhanceType;

    /**
     * @var integer <p>0表示不矫正图像方向，默认为0  1表示矫正图像方向</p>
     */
    public $AdjustOrientation;

    /**
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
     * @param integer $Crop <p>0表示关闭切边<br>1表示开启切边，默认为1</p>
     * @param integer $Deskew <p>0表示关闭弯曲矫正<br>1表示开启弯曲矫正，默认为1</p>
     * @param integer $OnlyPosition <p>0表示返回处理后的图和坐标，默认为0<br>1表示只返回坐标，不返回图片</p>
     * @param integer $EnhanceType <p>默认-1</p><ul><li>-1 不处理增强</li><li>1 增亮</li><li>2 增强并锐化</li><li>3 黑白</li><li>4 灰度</li><li>5 去阴影增强</li><li>6 点阵图</li></ul>
     * @param integer $AdjustOrientation <p>0表示不矫正图像方向，默认为0  1表示矫正图像方向</p>
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

        if (array_key_exists("OnlyPosition",$param) and $param["OnlyPosition"] !== null) {
            $this->OnlyPosition = $param["OnlyPosition"];
        }

        if (array_key_exists("EnhanceType",$param) and $param["EnhanceType"] !== null) {
            $this->EnhanceType = $param["EnhanceType"];
        }

        if (array_key_exists("AdjustOrientation",$param) and $param["AdjustOrientation"] !== null) {
            $this->AdjustOrientation = $param["AdjustOrientation"];
        }
    }
}
