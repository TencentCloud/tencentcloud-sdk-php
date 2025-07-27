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
 * RecognizeTableMultiOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。 
 * @method void setImageBase64(string $ImageBase64) 设置图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。 
 * @method string getImageUrl() 获取图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。 
 * @method void setImageUrl(string $ImageUrl) 设置图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。 
 * @method integer getPdfStartPageNumber() 获取文档的起始页码。  当传入文件是PDF型时，用来指定识别的起始页码，识别的页码包含当前值。
 * @method void setPdfStartPageNumber(integer $PdfStartPageNumber) 设置文档的起始页码。  当传入文件是PDF型时，用来指定识别的起始页码，识别的页码包含当前值。
 * @method integer getPdfEndPageNumber() 获取文档的结束页码。 当传入文件是PDF类型时，用来指定识别的结束页码，识别的页码包含当前值。单次调用最多支持识别3页内容，即PdfEndPageNumber-PdfStartPageNumber需要不大于3。
 * @method void setPdfEndPageNumber(integer $PdfEndPageNumber) 设置文档的结束页码。 当传入文件是PDF类型时，用来指定识别的结束页码，识别的页码包含当前值。单次调用最多支持识别3页内容，即PdfEndPageNumber-PdfStartPageNumber需要不大于3。
 * @method string getDataFormat() 获取配置选项，支持配置输出数据格式。

* **Mdbase64** 返回 base64 编码的 markdown 格式文本。
* **Excelbase64** 返回 base64 编码的 excel 文件。
 * @method void setDataFormat(string $DataFormat) 设置配置选项，支持配置输出数据格式。

* **Mdbase64** 返回 base64 编码的 markdown 格式文本。
* **Excelbase64** 返回 base64 编码的 excel 文件。
 */
class RecognizeTableMultiOCRRequest extends AbstractModel
{
    /**
     * @var string 图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。 
     */
    public $ImageBase64;

    /**
     * @var string 图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。 
     */
    public $ImageUrl;

    /**
     * @var integer 文档的起始页码。  当传入文件是PDF型时，用来指定识别的起始页码，识别的页码包含当前值。
     */
    public $PdfStartPageNumber;

    /**
     * @var integer 文档的结束页码。 当传入文件是PDF类型时，用来指定识别的结束页码，识别的页码包含当前值。单次调用最多支持识别3页内容，即PdfEndPageNumber-PdfStartPageNumber需要不大于3。
     */
    public $PdfEndPageNumber;

    /**
     * @var string 配置选项，支持配置输出数据格式。

* **Mdbase64** 返回 base64 编码的 markdown 格式文本。
* **Excelbase64** 返回 base64 编码的 excel 文件。
     */
    public $DataFormat;

    /**
     * @param string $ImageBase64 图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。 
     * @param string $ImageUrl 图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。 
     * @param integer $PdfStartPageNumber 文档的起始页码。  当传入文件是PDF型时，用来指定识别的起始页码，识别的页码包含当前值。
     * @param integer $PdfEndPageNumber 文档的结束页码。 当传入文件是PDF类型时，用来指定识别的结束页码，识别的页码包含当前值。单次调用最多支持识别3页内容，即PdfEndPageNumber-PdfStartPageNumber需要不大于3。
     * @param string $DataFormat 配置选项，支持配置输出数据格式。

* **Mdbase64** 返回 base64 编码的 markdown 格式文本。
* **Excelbase64** 返回 base64 编码的 excel 文件。
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

        if (array_key_exists("PdfStartPageNumber",$param) and $param["PdfStartPageNumber"] !== null) {
            $this->PdfStartPageNumber = $param["PdfStartPageNumber"];
        }

        if (array_key_exists("PdfEndPageNumber",$param) and $param["PdfEndPageNumber"] !== null) {
            $this->PdfEndPageNumber = $param["PdfEndPageNumber"];
        }

        if (array_key_exists("DataFormat",$param) and $param["DataFormat"] !== null) {
            $this->DataFormat = $param["DataFormat"];
        }
    }
}
