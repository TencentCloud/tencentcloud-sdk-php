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
 * RecognizeTableAccurateOCR请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF有效，默认值为1。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF有效，默认值为1。</p>
 * @method boolean getUseNewModel() 获取<p>是否使用新模型</p><p>枚举值：</p><ul><li>false： 使用当前默认模型，耗时短且支持坐标返回</li><li>true： 使用新模型，复杂表格识别效果更好，耗时稍长</li></ul><p>默认值：false</p>
 * @method void setUseNewModel(boolean $UseNewModel) 设置<p>是否使用新模型</p><p>枚举值：</p><ul><li>false： 使用当前默认模型，耗时短且支持坐标返回</li><li>true： 使用新模型，复杂表格识别效果更好，耗时稍长</li></ul><p>默认值：false</p>
 */
class RecognizeTableAccurateOCRRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Base64 值。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF有效，默认值为1。</p>
     */
    public $PdfPageNumber;

    /**
     * @var boolean <p>是否使用新模型</p><p>枚举值：</p><ul><li>false： 使用当前默认模型，耗时短且支持坐标返回</li><li>true： 使用新模型，复杂表格识别效果更好，耗时稍长</li></ul><p>默认值：false</p>
     */
    public $UseNewModel;

    /**
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，且长宽比小于3（短边分辨率大于600, 长边分辨率小于等于短边分辨率的三倍）。支持PNG、JPG、JPEG、BMP、PDF格式。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF有效，默认值为1。</p>
     * @param boolean $UseNewModel <p>是否使用新模型</p><p>枚举值：</p><ul><li>false： 使用当前默认模型，耗时短且支持坐标返回</li><li>true： 使用新模型，复杂表格识别效果更好，耗时稍长</li></ul><p>默认值：false</p>
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

        if (array_key_exists("UseNewModel",$param) and $param["UseNewModel"] !== null) {
            $this->UseNewModel = $param["UseNewModel"];
        }
    }
}
